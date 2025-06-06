import laravel from "laravel-vite-plugin";
import { defineConfig } from "vite";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/frontend.css",
                "resources/js/frontend.js",
                "resources/css/backend.css",
                "resources/js/backend.js",
            ],
            refresh: true,
        }),
    ],
});
