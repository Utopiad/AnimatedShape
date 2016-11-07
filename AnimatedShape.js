'use strict';

var AnimatedShape = function ( container, shape, timeSpan ) {

    container = typeof container == 'string' ? document.getElementById( container ) : console.info( 'An ID container is here required' );

    timeSpan = time = parseFloat( timeSpan );

    var startVelocity = 0.01;
    var velocity = startVelocity;
    var endVelocity, endRotation;

    // console.log( velocity );

    var speedUp = Math.abs( startVelocity / timeSpan );
    var fullRotation = 2 * Math.PI;

    var scene,
        camera,
        renderer,
        stats,
        mesh,
        delta,
        controls,
        directionalLightHelper,
        centralLightHelper,
        leftLightHelper,
        rightLightHelper,
        topRLightHelp,
        topLLightHelp,
        Light,
        Material,
        AmbienceLights,
        lightGroup,
        previousMousePosition,
        time,
        amountAway,
        amountPossible;

    //Handles drag interaction with object
    var isDragging = false;
    var previousMousePosition = {
        x: 0,
        y: 0
    };

    function createScene() {
        scene = new THREE.Scene();

        var HEIGHT = container.clientHeight;
        var WIDTH = container.clientWidth;

        camera = new THREE.PerspectiveCamera( 75, WIDTH / HEIGHT, 0.1, 1000 );
        camera.position.z = 50;
        camera.position.y = 10;

        renderer = new THREE.WebGLRenderer( {
            alpha: true,
            antialias: true
        } );

        // controls = new THREE.OrbitControls( camera, renderer.domElement );

        renderer.setSize( WIDTH, HEIGHT );
        renderer.shadowMap.enabled = true;

        //Stats div
        stats = new Stats();
        stats.showPanel( 0 );
        document.body.appendChild( stats.dom );

        container.appendChild( renderer.domElement );
    }

    function createHelpers() {

        var axis = new THREE.AxisHelper( 50 );
        var grid = new THREE.GridHelper( 100, 10, 'rgb( 0, 0, 255 )', 0xFFFFFF );

        centralLightHelper = new THREE.SpotLightHelper( lightGroup[ 0 ], 5 );
        leftLightHelper = new THREE.PointLightHelper( lightGroup[ 1 ], 5 );
        rightLightHelper = new THREE.PointLightHelper( lightGroup[ 2 ], 5 );
        topRLightHelp = new THREE.PointLightHelper( lightGroup[ 3 ], 5 );
        topLLightHelp = new THREE.PointLightHelper( lightGroup[ 4 ], 5 );

        scene.add( axis );
        scene.add( grid );

        scene.add( centralLightHelper );
        scene.add( leftLightHelper );
        scene.add( rightLightHelper );
        scene.add( topRLightHelp );
        scene.add( topLLightHelp );
    }

    function createLight() {
        lightGroup = [];

        lightGroup[ 0 ] = new THREE.SpotLight( 0xFFFFFF );
        lightGroup[ 0 ].position.set( 0, 25, 69 );
        lightGroup[ 0 ].castShadow = true;
        lightGroup[ 0 ].angle = .2;
        lightGroup[ 0 ].intensity = 0.58;
        lightGroup[ 0 ].lookAt( scene );

        scene.add( lightGroup[ 0 ] );

        lightGroup[ 1 ] = new THREE.AmbientLight( 0xFFFFFF, .19 );
        lightGroup[ 1 ].position.set( -20, 0, 20 );

        lightGroup[ 2 ] = lightGroup[ 1 ].clone();
        lightGroup[ 2 ].position.set( 20, 0, 20 );

        lightGroup[ 3 ] = new THREE.AmbientLight( 0xFFFFFF, .03 );
        lightGroup[ 3 ].position.set( 10, 20, 10 );

        lightGroup[ 4 ] = lightGroup[ 3 ].clone();
        lightGroup[ 4 ].position.set( -10, 20, 10 );

        scene.add( lightGroup[ 1 ] );
        scene.add( lightGroup[ 2 ] );
        scene.add( lightGroup[ 3 ] );
        scene.add( lightGroup[ 4 ] );

        Light = function () {
            this.color = lightGroup[ 0 ].color;
            this.positionX = lightGroup[ 0 ].position.x;
            this.positionY = lightGroup[ 0 ].position.y;
            this.positionZ = lightGroup[ 0 ].position.z;
            this.castShadow = lightGroup[ 0 ].castShadow;
            this.intensity = lightGroup[ 0 ].intensity;
            this.distance = lightGroup[ 0 ].distance;
            this.angle = lightGroup[ 0 ].angle;
            this.penumbra = lightGroup[ 0 ].penumbra || 0;
            this.decay = lightGroup[ 0 ].decay || 0;
        }

        AmbienceLights = function () {
            this.positionXLeft = lightGroup[ 4 ].position.x;
            this.positionYLeft = lightGroup[ 4 ].position.y;
            this.positionZLeft = lightGroup[ 4 ].position.z;

            this.positionXRight = lightGroup[ 3 ].position.x
            this.positionYRight = lightGroup[ 3 ].position.y;
            this.positionZRight = lightGroup[ 3 ].position.z;
            // this.intensityRight = lightGroup[3].intensity;

            this.TopLeft = lightGroup[ 4 ].intensity;
            this.TopRight = lightGroup[ 3 ].intensity;
            this.BottomLeft = lightGroup[ 1 ].intensity;
            this.BottomRight = lightGroup[ 2 ].intensity;
        }

        return {
            Light,
            AmbienceLights
        };
    }

    function createShape() {

        var material = new THREE.MeshLambertMaterial( {
            color: 0xF8F8F8,
        } );

        switch ( shape ) {
        case 'cube':
            var geometry = getCube();
            break;
        case 'pyramid':
            var geometry = getPyramid();
            break;
        case 'dodecahedron':
            var geometry = getDodecahedron();
            break;
        case 'icosahedron':
            var geometry = getIcosahedron();
        }

        mesh = new THREE.Mesh( geometry, material );

        mesh.position.y = 0;
        mesh.castShadow = false;

        scene.add( mesh );

        console.log( mesh );

        Material = function () {
            this.color = mesh.material.color;
            this.emissive = mesh.material.emissive;
            this.roughness = mesh.material.roughness;
            this.metalness = mesh.material.metalness;
        };
    }

    function getCube() {
        return new THREE.BoxGeometry( 15, 15, 15 );
    }

    function getPyramid() {
        return new THREE.ConeGeometry( 15, 17, 4 );
    }

    function getDodecahedron() {
        return new THREE.DodecahedronGeometry( 15 );
    }

    function getIcosahedron() {
        return new THREE.IcosahedronGeometry( 15 );
    }

    function getAmountAway() {
        return fullRotation - mesh.rotation.y;
    }

    function getAmountPossible() {
        return time * velocity;
    }

    function toRadians( angle ) {
        return angle * ( Math.PI / 180 );
    }

    function toDegrees( angle ) {
        return angle * ( 180 / Math.PI );
    }

    function move( delta ) {

        if ( typeof delta === 'boolean' ) {
            return velocity;
        } else {

            if ( velocity < 0 && mesh.rotation.y == 0 ) {
                return false;
            }

            // Update the roation, modulo 360 degress (2Pi)
            mesh.rotation.y = ( mesh.rotation.y + delta * velocity ) % fullRotation;
            time -= delta;

            // If we are in the end phase of the animation
            if ( endVelocity ) {
                velocity = endVelocity * ( getAmountAway() / endRotation );
            }
            // If our current velocity will barely get us to our starting position in time
            else if ( getAmountAway() >= getAmountPossible() ) {
                endVelocity = velocity;
                endRotation = getAmountAway();
            } else {
                // Just scale velocity with the time that is left
                velocity = parseFloat( speedUp * time );
            }
        }
    }

    var realVelocity;
    var wait = 0;

    function dragging( velocity, delta ) {
        if ( typeof realVelocity == 'number' ) {

            if ( wait >= delta * 2 ) {
                mesh.rotation.x = ( mesh.rotation.x + delta * velocity / 4 ) % fullRotation;
            } else {
                wait += delta;
            }

        }

        mesh.rotation.y = ( mesh.rotation.y + delta * velocity / 2 ) % fullRotation;
        realVelocity = velocity / 2;

        $( renderer.domElement ).on( 'mousedown', function ( e ) {

            isDragging = true;
            mesh.rotation.y += 0;
            mesh.rotation.z += 0;

        } ).on( 'mousemove', function ( e ) {

            var deltaMove = {
                x: e.offsetX - previousMousePosition.x,
                y: e.offsetY - previousMousePosition.y
            };

            if ( isDragging ) {

                var deltaRotationQuaternion = new THREE.Quaternion()
                    .setFromEuler( new THREE.Euler(
                        toRadians( deltaMove.y * 1 ),
                        toRadians( deltaMove.x * 1 ),
                        0,
                        'XYZ'
                    ) );

                mesh.quaternion.multiplyQuaternions( deltaRotationQuaternion, mesh.quaternion );
            }

            previousMousePosition = {
                x: e.offsetX,
                y: e.offsetY
            };

        } );

        $( document ).on( 'mouseup', function ( e ) {
            isDragging = false;

            //TODO Handle here the rotation after the mesh was dragged
            // use previousMousePosition and deltaMove to detect directions

        } );
    }

    function loop( time ) {

        if ( !loop.lastTime ) {
            loop.lastTime = time;
        }

        var delta = time - loop.lastTime;
        loop.lastTime = time;
        // console.log( {
        //     'time:': time,
        //     'loop.lasTime': loop.lasTime,
        //     'delta': delta,
        //     'timeSpan': timeSpan
        // } );
        if ( delta > 0 ) {

            if ( time >= timeSpan + delta * 2 ) {
                dragging( move( false ), delta );

            } else {
                move( delta );

            }
        }

        requestAnimationFrame( loop );

        // controls.update();

        stats.begin();
        stats.end();

        renderer.render( scene, camera );
    }

    function onWindowResize() {
        var WIDTH = container.clientWidth;
        var HEIGHT = container.clientHeight;

        renderer.setSize( WIDTH, HEIGHT );
        camera.aspect = WIDTH / HEIGHT;

        camera.updateProjectionMatrix();
    }

    return {
        init: function () {

            createScene();
            createLight();
            createHelpers();
            createShape();
            loop();

            window.addEventListener( 'resize', onWindowResize(), false );
        },

        lightController: function () {
            var light = new Light();

            var gui = new dat.GUI();

            var MainLight = gui.addFolder( 'SpotLight' );

            MainLight.add( light, 'positionX', -100, 100 ).step( 1 ).onChange( function ( val ) {
                lightGroup[ 0 ].position.x = val;
            } );
            MainLight.add( light, 'positionY', -100, 100 ).step( 1 ).onChange( function ( val ) {
                lightGroup[ 0 ].position.y = val;
            } );
            MainLight.add( light, 'positionZ', -100, 100 ).step( 1 ).onChange( function ( val ) {
                lightGroup[ 0 ].position.z = val;
            } );

            MainLight.add( light, 'castShadow' ).onChange( function ( val ) {
                lightGroup[ 0 ].castShadow = val;
            } );

            MainLight.add( light, 'intensity', 0, 2 ).step( 0.01 ).onChange( function ( val ) {
                lightGroup[ 0 ].intensity = val;
            } );

            MainLight.add( light, 'distance', 0, 200 ).step( 1 ).onChange( function ( val ) {
                lightGroup[ 0 ].distance = val;
            } );

            MainLight.add( light, 'angle', 0, Math.PI / 2 ).step( 0.01 ).onChange( function ( val ) {
                lightGroup[ 0 ].angle = val;
            } );

            MainLight.add( light, 'penumbra', 0, 1 ).step( 0.01 ).onChange( function ( val ) {
                lightGroup[ 0 ].penumbra = val;
            } );

            MainLight.add( light, 'decay', 0, 1 ).step( 0.1 ).onChange( function ( val ) {
                lightGroup[ 0 ].decay = val;
            } );

            var others = new AmbienceLights();
            var OtherLights = gui.addFolder( 'Other Lights' );

            // OtherLights.add( others, 'positionXLeft', -100, 100 ).step( 1 ).onChange( function ( val ) {
            //     lightGroup[4].position.x = val;
            // } );
            // OtherLights.add( others, 'positionYLeft', -100, 100 ).step( 1 ).onChange( function ( val ) {
            //     lightGroup[4].position.y = val;
            // } );
            // OtherLights.add( others, 'positionZLeft', -100, 100 ).step( 1 ).onChange( function ( val ) {
            //     lightGroup[4].position.z = val;
            // } );

            // OtherLights.add( others, 'positionXRight', -100, 100 ).step( 1 ).onChange( function ( val ) {
            //     lightGroup[3].position.x = val;
            // } );
            // OtherLights.add( others, 'positionYRight', -100, 100 ).step( 1 ).onChange( function ( val ) {
            //     lightGroup[3].position.y = val;
            // } );
            // OtherLights.add( others, 'positionZRight', -100, 100 ).step( 1 ).onChange( function ( val ) {
            //     lightGroup[3].position.z = val;
            // } );

            OtherLights.add( others, 'TopLeft', 0, 2 ).step( 0.01 ).onChange( function ( val ) {
                lightGroup[ 4 ].intensity = val;
            } );

            OtherLights.add( others, 'TopRight', 0, 2 ).step( 0.01 ).onChange( function ( val ) {
                lightGroup[ 3 ].intensity = val;
            } );

            OtherLights.add( others, 'BottomLeft', 0, 2 ).step( 0.01 ).onChange( function ( val ) {
                leftLight.intensity = val;
            } );

            OtherLights.add( others, 'BottomRight', 0, 2 ).step( 0.01 ).onChange( function ( val ) {
                lightGroup[ 2 ].intensity = val;
            } )

            OtherLights.open();

            var geometry = new Material();

            var material = gui.addFolder( 'Material' );

            material.addColor( geometry, 'color' ).onChange( function ( colorValue ) {
                mesh.material.color.set( colorValue );
            } );

            // material.addColor( geometry, 'emissive' ).onChange( function ( colorValue ) {
            //     mesh.material.emissive.set( colorValue );
            // } );

            // material.add( geometry, 'roughness', 0, 1.5 ).step( 0.01 ).onChange( function ( val ) {
            //     mesh.material.roughness = val;
            // } );

            // material.add( geometry, 'metalness', 0, 1.5 ).step( 0.01 ).onChange( function ( val ) {
            //     mesh.material.metalness = val;
            // } );

            material.open();
        }
    };
};
