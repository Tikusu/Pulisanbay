/**
 * build.mjs — Asset Build Script
 * 
 * Uses esbuild to bundle and minify CSS and JS assets
 * into the assets/dist/ directory for production use.
 * 
 * Usage:
 *   node build.mjs          (production — minified)
 *   node build.mjs --dev    (development — no minification)
 */

import * as esbuild from 'esbuild';

const isDev = process.argv.includes('--dev');

// --- CSS: Bundle all global modules into one file ---
await esbuild.build({
  entryPoints: [
    'assets/css/index.css',
    // Page-specific CSS files
    'assets/css/activities-enhanced.css',
    'assets/css/conservation-enhanced.css',
    'assets/css/culture-enhanced.css',
    'assets/css/gastronomy-enhanced.css',
  ],
  bundle: true,
  minify: !isDev,
  outdir: 'assets/dist/css',
  // Rename bundled output to .min.css
  entryNames: '[name].min',
  logLevel: 'info',
});

// --- JS: Minify each JS file individually ---
await esbuild.build({
  entryPoints: [
    'assets/js/main.js',
    'assets/js/carousel.js',
    'assets/js/form.js',
  ],
  bundle: false,
  minify: !isDev,
  outdir: 'assets/dist/js',
  entryNames: '[name].min',
  logLevel: 'info',
});

console.log(`✅ Build complete (${isDev ? 'development' : 'production'})`);
