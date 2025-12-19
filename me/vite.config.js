import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
  plugins: [
    laravel({
      input: ['resources/css/app.css', 'resources/js/app.js'],
      refresh: true,
    }),
    vue(),
  ],
  build: {
    outDir: 'public/build',   // IMPORTANT: output goes into Laravel public folder
    assetsDir: 'assets',      // JS/CSS/images inside public/build/assets
  },
  base: '/',            // ensures correct <script>/<link> URLs
});
