'use strict';
window.addEventListener( 'load', function () {

    var cube = new AnimatedShape( 'env', 'icosahedron', 3000 );
    cube.init();

    cube.lightController();

}, false );

// window.addEventListener( 'load', init, false );

// function init() {

//     createScene();

//     createLight();

//     createHelp();

//     createObject();

//     createFloor();

//     loop();

//     update( 0, totalGameTIme );

// }

// var scene, camera,
//     fieldofView, aspectRatio, nearPlane, farPlane,
//     HEIGHT, WIDTH,
//     renderer,
//     container,
//     clock, delta, time,
//     controls,
//     guiControls, datGUI,
//     stats;

// function createScene() {

//     container = document.getElementById( 'env' );

//     HEIGHT = container.clientHeight;
//     WIDTH = container.clientWidth;

//     scene = new THREE.Scene();

//     aspectRatio = WIDTH / HEIGHT;
//     fieldofView = 75;
//     nearPlane = 0.1;
//     farPlane = 1000;
//     camera = new THREE.PerspectiveCamera(
//         fieldofView,
//         aspectRatio,
//         nearPlane,
//         farPlane
//     );

//     camera.position.x = 0;
//     camera.position.y = 20;
//     camera.position.z = -100;
//     camera.lookAt( new THREE.Vector3( 0, 1, 0 ) );

//     renderer = new THREE.WebGLRenderer( {
//         alpha: true,
//         antialias: true
//     } );

//     renderer.setSize( WIDTH, HEIGHT );

//     renderer.shadowMap.enabled = true;

//     container.appendChild( renderer.domElement );

//     controls = new THREE.OrbitControls( camera, renderer.domElement );
//     controls.enableZoom = false;

//     //Stats div
//     stats = new Stats();
//     stats.showPanel( 0 );
//     document.body.appendChild( stats.dom );

//     window.addEventListener( 'resize', handleWindowResize, false );

// }

// function handleWindowResize() {
//     HEIGHT = window.innerHeight;
//     WIDTH = window.innerWidth;
//     renderer.setSize( WIDTH, HEIGHT );
//     camera.aspect = WIDTH / HEIGHT;
//     camera.updateProjectionMatrix();
// }

// var textLight;

// function createLight() {

//     var pointLight2 = new THREE.PointLight( 0xFFFFFF );
//     pointLight2.position.x = -75;
//     pointLight2.position.y = 25;
//     pointLight2.position.z = 50;
//     pointLight2.lookAt( scene );

//     scene.add( pointLight2 );

//     textLight = new THREE.DirectionalLight( 0x123456, 1 );
//     textLight.position.set( 15, 25, 15 );
//     // scene.add( textLight );
// }

// // var cube;
// var Thing = function ( timeSpan ) {
//     this.geoCube = new THREE.BoxGeometry( 15, 15, 15 );
//     this.geoMaterial = new THREE.MeshLambertMaterial( {
//         color: 0xFFFFFF
//     } );
//     this.mesh = new THREE.Mesh( this.geoCube, this.geoMaterial );

//     this.timeSpan = this.time = timeSpan;

//     this.startVelocity = 0.01;
//     this.velocity = this.startVelocity;

//     this.speedUp = Math.abs( this.startVelocity / this.timeSpan );
//     this.fullRotation = 2 * Math.PI;

//     // // Arbitrary rotation
//     // this.mesh.rotation.x = Math.PI / 4;
//     // this.mesh.rotation.y = Math.PI / 4;

//     scene.add( this.mesh );
// };

// Thing.prototype.amountAway = function () {

//     return this.fullRotation - this.mesh.rotation.x;

// }

// Thing.prototype.amountPossible = function () {

//     return this.time * this.velocity;
// }

// /**
//  *
//  * Rotates the cube
//  */

// Thing.prototype.move = function ( delta ) {

//     if ( this.velocity < 0 && this.mesh.rotation.x == 0 ) {
//         return false;
//     }

//     // Update the roation, modulo 360 degress (2Pi)
//     this.mesh.rotation.x = ( this.mesh.rotation.x + delta * this.velocity ) % this.fullRotation;
//     this.time -= delta;

//     // If we are in the end phase of the animation
//     if ( this.endVelocity ) {
//         this.velocity = this.endVelocity * ( this.amountAway() / this.endRotation );
//     }

//     // If our current velocity will barely get us to our starting position in time
//     else if ( this.amountAway() >= this.amountPossible() ) {
//         this.mendVelocity = this.velocity;
//         this.endRotation = this.amountAway();
//     } else {
//         // Just scale velocity with the time that is left
//         this.velocity = this.speedUp * this.time;
//     }
// }

// Thing.prototype.dragging = function () {

//     $( renderer.domElement ).on( 'mousedown', function ( e ) {

//         isDragging = true;
//         thing.mesh.rotation.y += 0;
//         thing.mesh.rotation.z += 0;

//     } ).on( 'mousemove', function ( e ) {

//         var deltaMove = {
//             x: e.offsetX - previousMousePosition.x,
//             y: e.offsetY - previousMousePosition.y
//         };

//         if ( isDragging ) {

//             var deltaRotationQuaternion = new THREE.Quaternion()
//                 .setFromEuler( new THREE.Euler(
//                     toRadians( deltaMove.y * 1 ),
//                     toRadians( deltaMove.x * 1 ),
//                     0,
//                     'XYZ'
//                 ) );

//             thing.mesh.quaternion.multiplyQuaternions( deltaRotationQuaternion, thing.mesh.quaternion );
//         }

//         previousMousePosition = {
//             x: e.offsetX,
//             y: e.offsetY
//         };

//     } );

//     $( document ).on( 'mouseup', function ( e ) {
//         isDragging = false;
//     } );
// }

// var thing;

// function createObject() {
//     thing = new Thing( 3000 );
//     thing.mesh.position.z = 5;
//     thing.mesh.position.y = 15;

//     console.log( thing );
// }

// //Handles drag interaction with object
// var isDragging = false;
// var previousMousePosition = {
//     x: 0,
//     y: 0
// }

// var Cube = function () {
//     this.color = "#FFFFFF";
//     this.emissive = "#000000";
//     this.specular = "#000000";
// };

// window.onload = function () {
//     var color = new Cube();

//     var gui = new dat.GUI();
//     gui.addColor( color, "color" ).onChange( function ( colorValue ) {
//         colorValue = colorValue.toUpperCase();
//         thing.mesh.material.color.setStyle( colorValue );
//     } );
//     gui.addColor( color, "emissive" ).onChange( function ( colorValue ) {
//         colorValue = colorValue.toUpperCase();
//         thing.mesh.material.emissive.setStyle( colorValue );
//     } );
//     gui.addColor( color, "specular" ).onChange( function ( colorValue ) {
//         colorValue = colorValue.toUpperCase();
//         thing.mesh.material.specular.setStyle( colorValue );
//     } );

//     gui.remember( color );
// }

// var floor, floorMat, ground;
// var Floor = function ( width, height ) {
//     this.mesh = new THREE.Object3D();
//     this.mesh.name = "Floor";
//     this.width = width;
//     this.height = height;
//     floor = new THREE.PlaneGeometry( width, height, 16, 16 );
//     floorMat = new THREE.MeshPhongMaterial( {
//         color: 0xB2C4D8
//     } );

//     ground = new THREE.Mesh( floor, floorMat );
//     ground.rotation.x = -Math.PI / 2;
//     this.mesh.add( ground );
// };

// var sol;

// function createFloor() {
//     sol = new Floor( 50, 50 );
//     sol.mesh.castShadow = true;
//     sol.mesh.receiveShadow = true;

//     scene.add( sol.mesh );
// }

// function createHelp() {

//     var axis = new THREE.AxisHelper( 50 );
//     var grid = new THREE.GridHelper( 100, 10, 'rgb( 0, 0, 255 )', 0xffffff );
//     var cameraHelper = new THREE.CameraHelper( camera );

//     scene.add( axis );
//     scene.add( grid );
//     scene.add( cameraHelper );
// }

// var lastFrameTime = new Date().getTime() / 1000;
// var totalGameTIme = 0;

// function loop( time ) {

//     if ( !loop.lastTime ) {
//         loop.lastTime = time;
//     }

//     var delta = time - loop.lastTime;
//     loop.lastTime = time;

//     // console.log( delta );
//     thing.move( delta );

//     stats.begin();
//     stats.end();
//     controls.update();
//     requestAnimationFrame( loop );

//     // thing.dragging();
//     // thing.mesh.rotation.y += 0.01;
//     // thing.mesh.rotation.z += 0.01;
//     // delta = clock.getDelta();
//     // time = clock.getElapsedTime();

//     renderer.render( scene, camera );
// }

// function update( dt, t ) {
//     setTimeout( function () {
//         var currTime = new Date().getTime() / 1000;
//         var dt = currTime - ( lastFrameTime || currTime );
//         totalGameTIme += dt;

//         update( dt, totalGameTIme );
//         lastFrameTime = currTime;
//     } );
// }

// function toRadians( angle ) {
//     return angle * ( Math.PI / 180 );
// }

// function toDegrees( angle ) {
//     return angle * ( 180 / Math.PI );
// }

// // TO DO
// //Look at DATGUI, Tween 
// // Tween -> learn how to handle animations quickly
// // Lights -> handle animations with lights and use them with datgui 
// // Snippets -> create snipet for js-documentation 

// //INFO
// // What is texture.anisotropy = renderer.getMaxAnisotropy() ?
