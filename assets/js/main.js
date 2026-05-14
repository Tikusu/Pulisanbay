// =============================================
// PULISANBAY — MAIN JS
// =============================================
// Core interactive behaviors shared across all pages:
// navbar scroll effect, scroll-reveal animations,
// mobile menu, dropdown toggles, lightbox, and toast.
// =============================================

document.addEventListener("DOMContentLoaded", () => {
  initNavbar();
  initScrollReveal();
  initMobileMenu();
  initDropdowns();
  initLightbox();
  initInteractiveCards(".acco-card");
  initInteractiveCards(".idea-card");
});

// --- NAVBAR SCROLL EFFECT ---
// Toggles the "scrolled" class on the navbar when the user
// scrolls past 60px, switching from transparent to white bg.
function initNavbar() {
  const navbar = document.querySelector(".navbar");
  if (!navbar) return;

  // If the server explicitly rendered the navbar with the "scrolled" class 
  // (e.g., on pages without a hero section like contact.php), it should remain solid.
  if (navbar.classList.contains("scrolled")) return;

  const onScroll = () => {
    navbar.classList.toggle("scrolled", window.scrollY > 60);
  };
  window.addEventListener("scroll", onScroll, { passive: true });
  onScroll();
}

// --- SCROLL REVEAL ---
// Uses IntersectionObserver to add "revealed" class to elements
// with class "reveal" when they enter the viewport.
// Once revealed, the element is unobserved (one-time animation).
function initScrollReveal() {
  const els = document.querySelectorAll(".reveal");
  if (!els.length) return;
  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((e) => {
        if (e.isIntersecting) {
          e.target.classList.add("revealed");
          observer.unobserve(e.target);
        }
      });
    },
    { threshold: 0.12, rootMargin: "0px 0px -40px 0px" },
  );
  els.forEach((el) => observer.observe(el));
}

// --- MOBILE MENU ---
// Toggles the slide-out nav panel on hamburger click.
// Also closes the menu when a non-dropdown link is clicked.
function initMobileMenu() {
  const hamburger = document.querySelector(".hamburger");
  const navLinks = document.querySelector(".nav-links");
  if (!hamburger || !navLinks) return;

  hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("active");
    navLinks.classList.toggle("open");
    document.body.style.overflow = navLinks.classList.contains("open")
      ? "hidden"
      : "";
  });

  // Close menu when a regular (non-dropdown) link is tapped
  navLinks.querySelectorAll("a:not(.dropdown-toggle)").forEach((a) => {
    a.addEventListener("click", () => {
      hamburger.classList.remove("active");
      navLinks.classList.remove("open");
      document.body.style.overflow = "";
    });
  });

  // Close menu when clicking outside
  document.addEventListener("click", (e) => {
    if (navLinks.classList.contains("open")) {
      if (!navLinks.contains(e.target) && !hamburger.contains(e.target)) {
        hamburger.classList.remove("active");
        navLinks.classList.remove("open");
        document.body.style.overflow = "";
      }
    }
  });
}

// --- DROPDOWNS (mobile tap) ---
// On mobile (≤1024px), dropdown toggles open on tap
// instead of hover since there's no hover on touch devices.
function initDropdowns() {
  document.querySelectorAll(".dropdown-toggle").forEach((toggle) => {
    toggle.addEventListener("click", (e) => {
      if (window.innerWidth <= 1024) {
        e.preventDefault();
        toggle.closest("li").classList.toggle("dropdown-open");
      }
    });
  });
}

// --- LIGHTBOX ---
// Opens a full-screen lightbox overlay when a gallery image
// is clicked. Closes on backdrop click, close button, or Escape key.
function initLightbox() {
  const lightbox = document.getElementById("lightbox");
  if (!lightbox) return;
  const lbImg = lightbox.querySelector("img");
  const lbClose = lightbox.querySelector(".lightbox-close");

  // Open lightbox when any gallery image is clicked
  document.querySelectorAll(".gallery-item img").forEach((img) => {
    img.addEventListener("click", () => {
      lbImg.src = img.src;
      lbImg.alt = img.alt;
      lightbox.classList.add("active");
      document.body.style.overflow = "hidden";
    });
  });

  // Close handler (reused by button, backdrop, and keyboard)
  const closeLb = () => {
    lightbox.classList.remove("active");
    document.body.style.overflow = "";
  };
  if (lbClose) lbClose.addEventListener("click", closeLb);
  lightbox.addEventListener("click", (e) => {
    if (e.target === lightbox) closeLb();
  });
  document.addEventListener("keydown", (e) => {
    if (e.key === "Escape") closeLb();
  });
}

// --- TOAST NOTIFICATION ---
// Creates or reuses a toast element to show success/error messages.
// Used by the form submission handler in form.js.
function showToast(message, type = "success") {
  let toast = document.querySelector(".toast");
  if (!toast) {
    toast = document.createElement("div");
    toast.className = "toast";
    document.body.appendChild(toast);
  }
  toast.textContent = message;
  toast.className = `toast ${type}`;
  requestAnimationFrame(() => toast.classList.add("show"));
  setTimeout(() => toast.classList.remove("show"), 4000);
}

// --- INTERACTIVE CARDS ---
// Handle click to stay active, click outside to dismiss, and remove active when out of viewport
function initInteractiveCards(selector) {
  const cards = document.querySelectorAll(selector);
  if (!cards.length) return;

  // Click to toggle active state
  cards.forEach((card) => {
    card.addEventListener("click", (e) => {
      // Only apply click-to-stay-active logic on mobile/tablets
      if (window.innerWidth > 1024) return;

      if (!card.classList.contains("is-active")) {
        // Prevent immediate navigation on first click if it's a link
        if (card.tagName.toLowerCase() === "a") {
          e.preventDefault();
        }
        // Remove active state from all other cards
        cards.forEach((c) => c.classList.remove("is-active"));
        card.classList.add("is-active");
      } else if (card.tagName.toLowerCase() !== "a") {
        // If it's a div, clicking again dismisses it
        card.classList.remove("is-active");
      }
    });
  });

  // Click outside to dismiss
  document.addEventListener("click", (e) => {
    if (!e.target.closest(selector)) {
      cards.forEach((c) => c.classList.remove("is-active"));
    }
  });

  // Remove active state when scrolling out of viewport
  const observer = new IntersectionObserver((entries) => {
    entries.forEach((e) => {
      if (!e.isIntersecting) {
        e.target.classList.remove("is-active");
      }
    });
  }, { threshold: 0 });

  cards.forEach((card) => observer.observe(card));
}

