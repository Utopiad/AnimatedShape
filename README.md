# AnimatedShape
---------------

This library was designed to enable developers to launch a Three.js scene very easily, linking them to a div's id with pre-composed forms and lightings.

###Here is an example:
----------------------
```javascript
	window.addEventListener( 'load', function () {

	    var cube = new AnimatedShape( 'env', 'icosahedron', 3000, './trace.jpg' );
	    cube.init();

	    // cube.lightController();

	}, false );
```

###Other forms available:
-------------------------
’cube’, ’dodecahedron’, ’icosahedron’, ’pyramid’
