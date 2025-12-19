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
    outDir: 'public/build',   // Vue build output goes inside Laravel public/build
    assetsDir: 'assets',      // JS/CSS/images go inside public/build/assets
  },
  base: '/build/',            // ensures index.html references JS/CSS correctly
  server: {
    host: 'localhost',
    port: 5173,
    strictPort: true,
  },
});
