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
        directionalLight,
        directionalLightHelper,
        centralLight,
        centralLightHelper,
        leftLight,
        leftLightHelper,
        rightLight,
        rightLightHelper,
        topRLight,
        topRLightHelp,
        topLLight,
        topLLightHelp,
        Light,
        topL,
        Material,
        AmbienceLights,
        time,
        amountAway,
        amountPossible;

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

        controls = new THREE.OrbitControls( camera, renderer.domElement );

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

        centralLightHelper = new THREE.SpotLightHelper( centralLight, 5 );
        leftLightHelper = new THREE.PointLightHelper( leftLight, 5 );
        rightLightHelper = new THREE.PointLightHelper( rightLight, 5 );
        topRLightHelp = new THREE.PointLightHelper( topRLight, 5 );
        topLLightHelp = new THREE.PointLightHelper( topLLight, 5 );

        scene.add( axis );
        scene.add( grid );

        scene.add( centralLightHelper );
        scene.add( leftLightHelper );
        scene.add( rightLightHelper );
        scene.add( topRLightHelp );
        scene.add( topLLightHelp );
    }

    function createLight() {

        centralLight = new THREE.SpotLight( 0xFFFFFF );
        centralLight.position.set( 0, 25, 69 );
        centralLight.castShadow = true;
        centralLight.angle = .2;
        centralLight.intensity = 0.58;
        centralLight.lookAt( scene );

        scene.add( centralLight );

        leftLight = new THREE.AmbientLight( 0xFFFFFF, .19 );
        leftLight.position.set( -20, 0, 20 );

        rightLight = leftLight.clone();
        rightLight.position.set( 20, 0, 20 );

        topRLight = new THREE.AmbientLight( 0xFFFFFF, .03 );
        topRLight.position.set( 10, 20, 10 );

        topLLight = topRLight.clone();
        topLLight.position.set( -10, 20, 10 );

        scene.add( leftLight );
        scene.add( rightLight );
        scene.add( topRLight );
        scene.add( topLLight );

        Light = function () {
            this.color = centralLight.color;
            this.positionX = centralLight.position.x;
            this.positionY = centralLight.position.y;
            this.positionZ = centralLight.position.z;
            this.castShadow = centralLight.castShadow;
            this.intensity = centralLight.intensity;
            this.distance = centralLight.distance;
            this.angle = centralLight.angle;
            this.penumbra = centralLight.penumbra || 0;
            this.decay = centralLight.decay || 0;
        }

        AmbienceLights = function () {
            this.positionXLeft = topLLight.position.x;
            this.positionYLeft = topLLight.position.y;
            this.positionZLeft = topLLight.position.z;

            this.positionXRight = topRLight.position.x
            this.positionYRight = topRLight.position.y;
            this.positionZRight = topRLight.position.z;
            // this.intensityRight = topRLight.intensity;

            this.TopLeft = topLLight.intensity;
            this.TopRight = topRLight.intensity;
            this.BottomLeft = leftLight.intensity;
            this.BottomRight = rightLight.intensity;
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

    function move( delta ) {

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

    function loop( time ) {

        if ( !loop.lastTime ) {
            loop.lastTime = time;
        }

        var delta = time - loop.lastTime;
        loop.lastTime = time;

        if ( delta > 0 ) {
            move( delta );
        }

        requestAnimationFrame( loop );

        // mesh.rotation.x += 0.02;
        // mesh.rotation.y += 0.01 / 2;

        controls.update();

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
                centralLight.position.x = val;
            } );
            MainLight.add( light, 'positionY', -100, 100 ).step( 1 ).onChange( function ( val ) {
                centralLight.position.y = val;
            } );
            MainLight.add( light, 'positionZ', -100, 100 ).step( 1 ).onChange( function ( val ) {
                centralLight.position.z = val;
            } );

            MainLight.add( light, 'castShadow' ).onChange( function ( val ) {
                centralLight.castShadow = val;
            } );

            MainLight.add( light, 'intensity', 0, 2 ).step( 0.01 ).onChange( function ( val ) {
                centralLight.intensity = val;
            } );

            MainLight.add( light, 'distance', 0, 200 ).step( 1 ).onChange( function ( val ) {
                centralLight.distance = val;
            } );

            MainLight.add( light, 'angle', 0, Math.PI / 2 ).step( 0.01 ).onChange( function ( val ) {
                centralLight.angle = val;
            } );

            MainLight.add( light, 'penumbra', 0, 1 ).step( 0.01 ).onChange( function ( val ) {
                centralLight.penumbra = val;
            } );

            MainLight.add( light, 'decay', 0, 1 ).step( 0.1 ).onChange( function ( val ) {
                centralLight.decay = val;
            } );

            var others = new AmbienceLights();
            var OtherLights = gui.addFolder( 'Other Lights' );

            // OtherLights.add( others, 'positionXLeft', -100, 100 ).step( 1 ).onChange( function ( val ) {
            //     topLLight.position.x = val;
            // } );
            // OtherLights.add( others, 'positionYLeft', -100, 100 ).step( 1 ).onChange( function ( val ) {
            //     topLLight.position.y = val;
            // } );
            // OtherLights.add( others, 'positionZLeft', -100, 100 ).step( 1 ).onChange( function ( val ) {
            //     topLLight.position.z = val;
            // } );

            // OtherLights.add( others, 'positionXRight', -100, 100 ).step( 1 ).onChange( function ( val ) {
            //     topRLight.position.x = val;
            // } );
            // OtherLights.add( others, 'positionYRight', -100, 100 ).step( 1 ).onChange( function ( val ) {
            //     topRLight.position.y = val;
            // } );
            // OtherLights.add( others, 'positionZRight', -100, 100 ).step( 1 ).onChange( function ( val ) {
            //     topRLight.position.z = val;
            // } );

            OtherLights.add( others, 'TopLeft', 0, 2 ).step( 0.01 ).onChange( function ( val ) {
                topLLight.intensity = val;
            } );

            OtherLights.add( others, 'TopRight', 0, 2 ).step( 0.01 ).onChange( function ( val ) {
                topRLight.intensity = val;
            } );

            OtherLights.add( others, 'BottomLeft', 0, 2 ).step( 0.01 ).onChange( function ( val ) {
                leftLight.intensity = val;
            } );

            OtherLights.add( others, 'BottomRight', 0, 2 ).step( 0.01 ).onChange( function ( val ) {
                rightLight.intensity = val;
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
