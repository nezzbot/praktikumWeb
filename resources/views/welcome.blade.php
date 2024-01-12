<!DOCTYPE html>
<html>
<head>
    <title>Simple 3D Scene</title>
    <script src="https://threejs.org/build/three.min.js"></script>
</head>
<body>
    <script>
        const scene = new THREE.Scene(); // Create a scene
        const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000); // Create a camera
        const renderer = new THREE.WebGLRenderer(); // Create a renderer
        renderer.setSize(window.innerWidth, window.innerHeight); // Set renderer size to match viewport
        document.body.appendChild(renderer.domElement); // Add renderer to HTML

        // Create a cube geometry and material
        const geometry = new THREE.BoxGeometry();
        const material = new THREE.MeshBasicMaterial({ color: 0x00ff00 }); // Green cube

        // Create a mesh (object) from geometry and material
        const cube = new THREE.Mesh(geometry, material);
        scene.add(cube); // Add cube to the scene

        camera.position.z = 5; // Position the camera slightly back

        function animate() {
            requestAnimationFrame(animate);
            cube.rotation.x += 0.01; // Rotate the cube on the x-axis
            cube.rotation.y += 0.01; // Rotate the cube on the y-axis
            renderer.render(scene, camera); // Render the scene
        }

        animate();

    </script>
</body>
</html>
