//Import the THREE.js library
import * as THREE from "https://cdn.skypack.dev/three@0.129.0/build/three.module.js";
// To allow for the camera to move around the scene
import { OrbitControls } from "https://cdn.skypack.dev/three@0.129.0/examples/jsm/controls/OrbitControls.js";
// To allow for importing the .gltf file
import { GLTFLoader } from "https://cdn.skypack.dev/three@0.129.0/examples/jsm/loaders/GLTFLoader.js";

//Set which object to render
let objToRender = "scleractinina_coral_indet";

// 1. AMBIL ELEMEN WADAH DAN DIMENSINYA
const container = document.getElementById(objToRender);
const containerWidth = container.clientWidth;
const containerHeight = container.clientHeight;

//Create a Three.JS Scene
const scene = new THREE.Scene();

//create a new camera with positions and angles
const camera = new THREE.PerspectiveCamera(
    75,
    containerWidth / containerHeight, // Gunakan dimensi kontainer
    0.1,
    1000
);

//Keep track of the mouse position
let mouseX = containerWidth / 2;
let mouseY = containerHeight / 2;

//Keep the 3D object on a global variable
let object;

//OrbitControls allow the camera to move around the scene
let controls;

//Instantiate a loader for the .gltf file
const loader = new GLTFLoader();

//Load the file
loader.load(
    `/models/${objToRender}/scene.gltf`,
    function (gltf) {
        object = gltf.scene;
        scene.add(object);
    },
    function (xhr) {
        console.log((xhr.loaded / xhr.total) * 100 + "% loaded");
    },
    function (error) {
        console.error(error);
    }
);

//Instantiate a new renderer and set its size
const renderer = new THREE.WebGLRenderer({ alpha: true });
renderer.setSize(containerWidth, containerHeight); // Gunakan dimensi kontainer

//Add the renderer to the DOM
container.appendChild(renderer.domElement);

//Set how far the camera will be from the 3D model
camera.position.z = objToRender === "scleractinina_coral_indet" ? 2 : 500;

//Add lights to the scene
const topLight = new THREE.DirectionalLight(0xffffff, 1);
topLight.position.set(500, 500, 500);
topLight.castShadow = true;
scene.add(topLight);

const ambientLight = new THREE.AmbientLight(
    0x333333,
    objToRender === "scleractinina_coral_indet" ? 8 : 1
);
scene.add(ambientLight);

//This adds controls to the camera
if (objToRender === "scleractinina_coral_indet") {
    controls = new OrbitControls(camera, renderer.domElement);
}

//Render the scene
function animate() {
    requestAnimationFrame(animate);

    // Animasi rotasi berdasarkan pergerakan mouse di dalam kontainer
    if (object && objToRender === "scleractinina_coral_indet") {
        object.rotation.y = -3 + (mouseX / containerWidth) * 3;
        object.rotation.x = -1.2 + (mouseY * 2.5) / containerHeight;
    }
    renderer.render(scene, camera);
}

//Add a listener to resize the canvas correctly within its container
window.addEventListener("resize", function () {
    const newWidth = container.clientWidth;
    const newHeight = container.clientHeight;

    camera.aspect = newWidth / newHeight;
    camera.updateProjectionMatrix();
    renderer.setSize(newWidth, newHeight);
});

// Jalankan rendering
animate();
