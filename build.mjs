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

import * as esbuild from "esbuild";

const isDev = process.argv.includes("--dev");

// --- CSS: Bundle all global modules into one file ---
await esbuild.build({
  entryPoints: [
    "public/assets/css/index.css",
    // Page-specific CSS files
    "public/assets/css/activities-enhanced.css",
    "public/assets/css/conservation-enhanced.css",
    "public/assets/css/culture-enhanced.css",
    "public/assets/css/gastronomy-enhanced.css",
    "public/assets/css/careers.css",
  ],
  bundle: true,
  minify: !isDev,
  outdir: "public/assets/dist/css",
  // Rename bundled output to .min.css
  entryNames: "[name].min",
  logLevel: "info",
});

// --- JS: Minify each JS file individually ---
await esbuild.build({
  entryPoints: [
    "public/assets/js/main.js",
    "public/assets/js/carousel.js",
    "public/assets/js/form.js",
    "public/assets/js/careers.js",
  ],
  bundle: false,
  minify: !isDev,
  outdir: "public/assets/dist/js",
  entryNames: "[name].min",
  logLevel: "info",
});

console.log(`✅ Build complete (${isDev ? "development" : "production"})`);
