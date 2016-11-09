'use strict';

var AnimatedShape = function ( container, shape, timeSpan ) {

    container = typeof container == 'string' ? document.getElementById( container ) : console.info( 'An ID container is here required' );

    timeSpan = time = parseFloat( timeSpan );
    background = background;

    var startVelocity = 0.01;
    var velocity = startVelocity;
    var endVelocity, endRotation;

    var speedUp = Math.abs( startVelocity / timeSpan );
    var fullRotation = 2 * Math.PI;

    var scene,
        camera,
        renderer,
        stats,
        mesh,
        delta,
        controls,
        centralLightHelper,
        leftLightHelper,
        Light,
        Material,
        DirectLight,
        lightGroup,
        previousMousePosition,
        time,
        background,
        backgroundGeom,
        backgroundMat,
        backgroundMesh,
        mouseX,
        mouseY,
        renderHalfX,
        renderHalfY;

    var targetRotationX = 0;
    var targetRotationY = 0;
    var targetRotationOnMouseDownX = 0;
    var targetRotationOnMouseDownY = 0;
    var mouseXOnMouseDown = 0;
    var mouseYOnMouseDown = 0;
    var dragConst = 0.15;

    //Handles drag interaction with object
    var isDragging = false;
    var previousMousePosition = {
        x: 0,
        y: 0
    };

    var targets;
    var tween = new TWEEN.Tween( targets );

    function createScene() {
        scene = new THREE.Scene();

        var HEIGHT = container.clientHeight;
        var WIDTH = container.clientWidth;

        camera = new THREE.PerspectiveCamera( 75, WIDTH / HEIGHT, 1, 1000 );
        camera.position.z = 50;
        camera.position.y = 0;

        renderer = new THREE.WebGLRenderer( {
            alpha: true,
            antialias: true
        } );

        renderHalfX = container.clientWidth / 2;
        renderHalfY = container.clientHeight / 2;

        renderer.setPixelRatio( window.devicePixelRatio );
        renderer.setSize( WIDTH, HEIGHT );
        renderer.shadowMap.enabled = true;
        renderer.shadowMapSoft = true;

        renderer.shadowCameraNear = 3;
        renderer.shadowCameraFar = camera.far;
        renderer.shadowCameraFov = 75;

        renderer.shadowMapBias = 0.0039;
        renderer.shadowMapDarkness = 0.5;
        renderer.shadowMapWidth = 1024;
        renderer.shadowMapHeight = 1024;

        controls = new THREE.OrbitControls( camera, renderer.domElement );
        controls.enableDamping = true;
        controls.dampingFactor = .1;
        controls.enableZoom = false;
        controls.rotateSpeed = 0.4;
        controls.autoRotate = true;
        controls.autoRotateSpeed = 0.5;

        container.appendChild( renderer.domElement );

        scene.add( camera );
    }

    function createHelpers() {

        var axis = new THREE.AxisHelper( 50 );
        var grid = new THREE.GridHelper( 100, 10, 'rgb( 0, 0, 255 )', 0xFFFFFF );

        centralLightHelper = new THREE.SpotLightHelper( lightGroup[ 0 ], 5 );
        leftLightHelper = new THREE.PointLightHelper( lightGroup[ 1 ], 5 );

        scene.add( axis );
        scene.add( grid );

        // scene.add( centralLightHelper );
        // scene.add( leftLightHelper );
    }

    function createLight() {
        lightGroup = [];

        lightGroup[ 0 ] = new THREE.SpotLight( 0xFFFFFF );
        lightGroup[ 0 ].position.set( 0, 25, 69 );
        lightGroup[ 0 ].castShadow = true;
        lightGroup[ 0 ].angle = .2;
        lightGroup[ 0 ].intensity = 0.25;
        lightGroup[ 0 ].lookAt( scene );

        camera.add( lightGroup[ 0 ] );

        lightGroup[ 1 ] = new THREE.DirectionalLight( 0xFFFFFF, 0.5 );
        lightGroup[ 1 ].position.set( camera.position.x, camera.position.y, camera.position.z );
        lightGroup[ 1 ].castShadow = true;

        camera.add( lightGroup[ 1 ] );

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

        DirectLight = function () {
            this.positionX = lightGroup[ 1 ].position.x;
            this.positionY = lightGroup[ 1 ].position.y;
            this.positionZ = lightGroup[ 1 ].position.z;
            this.intensity = lightGroup[ 1 ].intensity;
        }

        return {
            Light,
            DirectLight
        };
    }

    function createShape() {

        backgroundMat = new THREE.MeshLambertMaterial( {
            color: 0xFFFFFF,
            transparent: true,
            opacity: 0.05
        } );
        backgroundGeom = new THREE.PlaneGeometry( container.clientWidth / 4, container.clientHeight / 4 );

        backgroundMesh = new THREE.Mesh( backgroundGeom, backgroundMat );
        var vec = new THREE.Vector3( 0, 0, -79 );
        vec.applyQuaternion( camera.quaternion );

        backgroundMesh.position.copy( vec );
        // backgroundMesh.position.set( 0, 0, -19 );
        backgroundMesh.rotation.x = -0.15;
        backgroundMesh.receiveShadow = true;

        camera.add( backgroundMesh );

        var material = new THREE.MeshPhongMaterial( {
            color: 0xF8F8F8,
            emissive: 0x525252,
            shading: THREE.FlatShading,
            shininess: 75
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
        mesh.castShadow = true;

        scene.add( mesh );

        Material = function () {
            this.color = mesh.material.color;
            this.emissive = mesh.material.emissive;
            this.shininess = mesh.material.shininess;
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

    function spinning( velocity, delta ) {

        if ( !isDragging ) {

            mesh.rotation.y = ( mesh.rotation.y + delta * velocity / 2 ) % fullRotation;

            if ( wait >= delta * 2 ) {
                if ( targetRotationX !== 0 ) {
                    // mesh.rotation.x = ( mesh.rotation.x + delta * targetRotationX / 3 ) * 0.05;
                } else {
                    mesh.rotation.x = ( mesh.rotation.x + delta * velocity / 4 ) % fullRotation;
                }

            } else {
                wait += delta;
            }
        }

    }

    function onMouseDown( event ) {
        event.preventDefault();

        document.addEventListener( 'mousemove', onMouseMove, false );
        document.addEventListener( 'mouseup', onMouseUp, false );
        document.addEventListener( 'mouseout', onMouseOut, false );

        // mouseXOnMouseDown = event.clientX - renderHalfX;
        // targetRotationOnMouseDownX = targetRotationX;

        // mouseYOnMouseDown = event.clientY - renderHalfY;
        // targetRotationOnMouseDownY = targetRotationY;

        isDragging = true;
    }

    function onMouseMove( event ) {
        // mouseX = event.clientX - renderHalfX;
        // mouseY = event.clientY - renderHalfY;
        // targetRotationX = targetRotationOnMouseDownX + ( mouseX - mouseXOnMouseDown ) * 0.02;
        // targetRotationY = targetRotationOnMouseDownY + ( mouseY - mouseYOnMouseDown ) * 0.02;

        // var deltaMove = {
        //     x: ( event.offsetX - previousMousePosition.x ),
        //     y: ( event.offsetY - previousMousePosition.y )
        // };

        // if ( isDragging ) {
        //     var deltaRotationQuaternion = new THREE.Quaternion()
        //         .setFromEuler( new THREE.Euler(
        //             toRadians( deltaMove.y * 1 ),
        //             toRadians( deltaMove.x * 1 ),
        //             0,
        //             'XYZ'
        //         ) );

        //     mesh.quaternion.multiplyQuaternions( deltaRotationQuaternion, mesh.quaternion );
        // }

        previousMousePosition = {
            x: event.offsetX,
            y: event.offsetY
        };

        return targets = {
            targetRotationX,
            targetRotationY
        };
    }

    function onTouchStart( event ) {
        if ( event.touches.length == 1 ) {
            event.preventDefault();

            mouseXOnMouseDown = event.touches[ 0 ].pageX - renderHalfX;
            targetRotationOnMouseDownX = targetRotationX;

            mouseYOnMouseDown = event.touches[ 0 ].pageY - renderHalfY;
            targetRotationOnMouseDownY = targetRotationY;
        }
    }

    function onTouchMove( event ) {
        if ( event.touches.length == 1 ) {
            event.preventDefault();

            mouseX = event.touches[ 0 ].pageX - renderHalfX;
            targetRotationX = targetRotationOnMouseDownX + ( mouseX - mouseXOnMouseDown ) * 0.05;

            mouseY = event.touches[ 0 ].pageY - renderHalfY;
            targetRotationY = targetRotationOnMouseDownY + ( mouseY - mouseYOnMouseDown ) * 0.05;
        }
    }

    function onMouseUp( event ) {

        // targets = {
        //     targetRotationX,
        //     targetRotationY
        // };

        // tween = new TWEEN.Tween( targets );
        // tween.to( {
        //     targetRotationX: 0.02,
        //     targetRotationY: 0.02
        // }, 2000 );

        // tween.start();

        isDragging = false;

        document.removeEventListener( 'mousemove', onMouseMove, false );
        document.removeEventListener( 'mouseup', onMouseUp, false );
        document.removeEventListener( 'mouseout', onMouseOut, false );
    }


    function onMouseOut( event ) {

        isDragging = false;
        document.removeEventListener( 'mousemove', onMouseMove, false );
        document.removeEventListener( 'mouseup', onMouseUp, false );
        document.removeEventListener( 'mouseout', onMouseOut, false );
    }

    function loop( time ) {

        if ( !loop.lastTime ) {
            loop.lastTime = time;
        }

        var delta = time - loop.lastTime;
        loop.lastTime = time;

        if ( delta > 0 ) {

            if ( time >= timeSpan + delta * 2 ) {
                var _velocity = isDragging ? 0 : move( false );


                // if ( !isDragging ) {

                //     TWEEN.update();
                //     tween.onUpdate( function () {
                //         mesh.rotation.y += ( targets.targetRotationX - mesh.rotation.y ) * 0.05;
                //     } );
                // }

            } else {
                // move( delta );
            }
        }

        requestAnimationFrame( loop );

        controls.update();

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
            createShape();
            loop();

            document.addEventListener( 'resize', onWindowResize, false );

            // Event listeners
            container.addEventListener( 'mousedown', onMouseDown, false );
            container.addEventListener( 'touchstart', onTouchStart, false );
            container.addEventListener( 'touchmove', onTouchMove, false );
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

            var others = new DirectLight();
            var OtherLights = gui.addFolder( 'Other Lights' );

            OtherLights.add( others, 'positionX', -100, 100 ).step( 1 ).onChange( function ( val ) {
                lightGroup[ 1 ].position.x = val;
            } );
            OtherLights.add( others, 'positionY', -100, 100 ).step( 1 ).onChange( function ( val ) {
                lightGroup[ 1 ].position.y = val;
            } );
            OtherLights.add( others, 'positionZ', -100, 100 ).step( 1 ).onChange( function ( val ) {
                lightGroup[ 1 ].position.z = val;
            } );

            OtherLights.add( others, 'intensity', 0, 1 ).step( .01 ).onChange( function ( val ) {
                lightGroup[ 1 ].intensity = val;
            } );

            // OtherLights.add( others, 'positionXRight', -100, 100 ).step( 1 ).onChange( function ( val ) {
            //     lightGroup[3].position.x = val;
            // } );
            // OtherLights.add( others, 'positionYRight', -100, 100 ).step( 1 ).onChange( function ( val ) {
            //     lightGroup[3].position.y = val;
            // } );
            // OtherLights.add( others, 'positionZRight', -100, 100 ).step( 1 ).onChange( function ( val ) {
            //     lightGroup[3].position.z = val;
            // } );

            // OtherLights.add( others, 'TopLeft', 0, 2 ).step( 0.01 ).onChange( function ( val ) {
            //     lightGroup[ 4 ].intensity = val;
            // } );

            // OtherLights.add( others, 'TopRight', 0, 2 ).step( 0.01 ).onChange( function ( val ) {
            //     lightGroup[ 3 ].intensity = val;
            // } );

            // OtherLights.add( others, 'BottomLeft', 0, 2 ).step( 0.01 ).onChange( function ( val ) {
            //     leftLight.intensity = val;
            // } );

            // OtherLights.add( others, 'BottomRight', 0, 2 ).step( 0.01 ).onChange( function ( val ) {
            //     lightGroup[ 2 ].intensity = val;
            // } );

            OtherLights.open();

            var geometry = new Material();

            var material = gui.addFolder( 'Material' );

            material.addColor( geometry, 'color' ).onChange( function ( colorValue ) {
                mesh.material.color.set( colorValue );
            } );

            material.addColor( geometry, 'emissive' ).onChange( function ( colorValue ) {
                mesh.material.emissive.set( colorValue );
            } );

            material.add( geometry, 'shininess', 0, 100 ).step( 1 ).onChange( function ( val ) {
                mesh.material.shininess = val;
            } );

            // material.add( geometry, 'metalness', 0, 1.5 ).step( 0.01 ).onChange( function ( val ) {
            //     mesh.material.metalness = val;
            // } );

            // material.open();
        }
    };
};
