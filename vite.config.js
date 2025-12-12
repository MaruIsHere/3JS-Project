import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/js/app.js",
                // "resources/js/acropora_cervicornis.js",
                // "resources/js/acropora_palmata.js",
                // "resources/js/acropora_palmata_specimen.js",
                // "resources/js/acropora_prolifera.js",
                // "resources/js/acropora_secale.js",
                // "resource/js/acropora_valencinnesi.js",
                // "resources/js/agaricia_speciosa.js",
                // "resource/js/astraea_fissicella_favistrella.js",
            ],
            refresh: true,
        }),
    ],
});
