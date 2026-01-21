//Import the THREE.js library
import * as THREE from "//cdn.skypack.dev/three@0.129.0";
// To allow for the camera to move around the scene
import { OrbitControls } from "https://cdn.skypack.dev/three@0.129.0/examples/jsm/controls/OrbitControls.js";
// To allow for importing the .gltf file
import { GLTFLoader } from "https://cdn.skypack.dev/three@0.129.0/examples/jsm/loaders/GLTFLoader.js";
// === FIX: Import CSS2D ===
import {
    CSS2DRenderer,
    CSS2DObject,
} from "https://cdn.skypack.dev/three@0.129.0/examples/jsm/renderers/CSS2DRenderer.js";

// ================= SET OBJEK =================
let objToRender = "coral_pseudodiploria_strigosa_pri_76868";

// ================= AMBIL WADAH =================
const container = document.getElementById(objToRender);
const containerWidth = container.clientWidth;
const containerHeight = container.clientHeight;

// ================= SCENE & CAMERA =================
const scene = new THREE.Scene();

const camera = new THREE.PerspectiveCamera(
    75,
    containerWidth / containerHeight,
    0.1,
    1000
);

// ================= MOUSE & IDLE =================
let mouseX = containerWidth / 2;
let mouseY = containerHeight / 2;

let lastMouseMoveTime = Date.now();
const idleDelay = 1000;
const autoRotateSpeed = 0.005;

// ================= GLOBAL =================
let object;
let controls;

// ================= GLTF LOADER =================
const loader = new GLTFLoader();
loader.load(`/models/${objToRender}/scene.gltf`, (gltf) => {
    object = gltf.scene;
    scene.add(object);

    // ===== POPUP INFO 3D =====
    const labelDiv = document.createElement("div");
    labelDiv.className = "label3d";
    labelDiv.innerHTML = `
        <strong>Pseudodiploria strigosa</strong><br/>
Karang otak simetris membentuk lempengan datar halus atau kubah setengah bola masif hingga berdiameter 1,8 meter (5 kaki 11 inci). Permukaannya ditutupi oleh lembah-lembah berbelit-belit yang saling berhubungan di mana polip berada di dalam cekungan berbentuk cangkir yang dikenal sebagai koralit . Masing-masing koralit memiliki sejumlah punggungan yang tersusun secara radial yang dikenal sebagai septa yang berlanjut di luar koralit sebagai kosta dan terhubung dengan koralit tetangga.
    `;

    const label = new CSS2DObject(labelDiv);
    label.position.set(0, -0.08, 0); // posisi popup di atas objek
    object.add(label);
});

// ================= RENDERER =================
const renderer = new THREE.WebGLRenderer({ alpha: true, antialias: true });
renderer.setSize(containerWidth, containerHeight);
container.appendChild(renderer.domElement);

// ================= LABEL RENDERER =================
const labelRenderer = new CSS2DRenderer();
labelRenderer.setSize(containerWidth, containerHeight);
labelRenderer.domElement.style.position = "absolute";
labelRenderer.domElement.style.top = "0";
labelRenderer.domElement.style.pointerEvents = "none";
container.appendChild(labelRenderer.domElement);

// ================= CAMERA =================
camera.position.z = 0.3;

// ================= LIGHTING =================
scene.add(new THREE.DirectionalLight(0xffffff, 1).position.set(5, 5, 5));
scene.add(new THREE.AmbientLight(0x333333, 8));

// ================= ORBIT =================
controls = new OrbitControls(camera, renderer.domElement);
controls.enableDamping = true;

// ================= MOUSE =================
container.addEventListener("mousemove", (e) => {
    const rect = container.getBoundingClientRect();
    mouseX = e.clientX - rect.left;
    mouseY = e.clientY - rect.top;
    lastMouseMoveTime = Date.now();
});

// ================= ANIMATE =================
function animate() {
    requestAnimationFrame(animate);

    if (object) {
        const idle = Date.now() - lastMouseMoveTime > idleDelay;

        if (idle) {
            object.rotation.y += autoRotateSpeed;
        } else {
            object.rotation.y = -3 + (mouseX / containerWidth) * 3;
            object.rotation.x = -1.2 + (mouseY * 2.5) / containerHeight;
        }
    }

    controls.update();
    renderer.render(scene, camera);
    labelRenderer.render(scene, camera);
}

// ================= RESIZE =================
window.addEventListener("resize", () => {
    const w = container.clientWidth;
    const h = container.clientHeight;

    camera.aspect = w / h;
    camera.updateProjectionMatrix();
    renderer.setSize(w, h);
    labelRenderer.setSize(w, h);
});

// ================= START =================
animate();
