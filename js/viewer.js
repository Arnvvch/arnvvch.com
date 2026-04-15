import * as THREE from 'three';
import { GLTFLoader } from 'three/addons/loaders/GLTFLoader.js';
import { OrbitControls } from 'three/addons/controls/OrbitControls.js';

let scene, camera, renderer, model, mixer;
const clock = new THREE.Clock();

function init() {
    scene = new THREE.Scene();

    const container = document.getElementById('three-container');

    // Field of view, Aspect ratio, Near, Far
    camera = new THREE.PerspectiveCamera(45, container.clientWidth / container.clientHeight, 0.1, 1000);
    // Position camera to look at the model centered in the model-area div
    camera.position.set(0, 1.2, 5.5); 
    camera.lookAt(0, 1.2, 0);

    renderer = new THREE.WebGLRenderer({ antialias: true, alpha: true });
    renderer.setSize(container.clientWidth, container.clientHeight);
    renderer.setPixelRatio(window.devicePixelRatio);
    renderer.shadowMap.enabled = true;
    container.appendChild(renderer.domElement);

    // Lights
    const ambientLight = new THREE.AmbientLight(0xffffff, 0.6);
    scene.add(ambientLight);

    const dirLight = new THREE.DirectionalLight(0xffffff, 1.2);
    dirLight.position.set(5, 10, 5);
    dirLight.castShadow = true;
    scene.add(dirLight);

    // Glowing Rim Light - Updated to purple to match theme
    const rimLight = new THREE.SpotLight(0x9d70ff, 10, 20, Math.PI / 4, 1, 1);
    rimLight.position.set(-5, -1, -3);
    scene.add(rimLight);

    // Load Model
    const loader = new GLTFLoader();
    loader.load('models/me.glb', (gltf) => {
        model = gltf.scene;

        // Auto-scale and center the model
        const box = new THREE.Box3().setFromObject(model);
        const center = box.getCenter(new THREE.Vector3());
        const size = box.getSize(new THREE.Vector3());

        const maxDim = Math.max(size.x, size.y, size.z);
        const desiredSize = 4.5;
        const scale = desiredSize / maxDim;

        model.scale.set(scale, scale, scale);

        // Position the model at the center
        model.position.x = 0 - (center.x * scale);
        model.position.y = 1.1 - (center.y * scale);
        model.position.z = 0 - (center.z * scale);

        rimLight.target = model;
        // Rotated 180 degrees (was Math.PI - 0.2)
        model.rotation.y = 0; 

        scene.add(model);

        if (gltf.animations.length > 0) {
            mixer = new THREE.AnimationMixer(model);
            mixer.clipAction(gltf.animations[0]).play();
        }
    }, undefined, (error) => {
        console.warn('Character model error:', error);
    });

    window.addEventListener('resize', onWindowResize, false);
    animate();
}

function onWindowResize() {
    const container = document.getElementById('three-container');
    if (!container) return;
    
    camera.aspect = container.clientWidth / container.clientHeight;
    camera.updateProjectionMatrix();
    renderer.setSize(container.clientWidth, container.clientHeight);
}

function animate() {
    requestAnimationFrame(animate);
    const delta = clock.getDelta();
    if (mixer) mixer.update(delta);

    if (model) {
        // Swing from -20 deg (-0.349 rad) to +30 deg (+0.523 rad)
        // Midpoint: (-0.349 + 0.523) / 2 = 0.087 rad (5 deg)
        // Amplitude: (0.523 - (-0.349)) / 2 = 0.436 rad (25 deg)
        const time = Date.now() * 0.001;
        model.rotation.y = 0.087 + Math.sin(time) * 0.436;
    }

    renderer.render(scene, camera);
}

init();
