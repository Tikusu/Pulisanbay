// =============================================
// PULISANBAY — MAIN JS
// =============================================
// Core interactive behaviors shared across all pages:
// navbar scroll effect, scroll-reveal animations,
// mobile menu, fan menu sub-dropdowns, lightbox, and toast.
// =============================================

document.addEventListener("DOMContentLoaded", () => {
  initNavbar();
  initScrollReveal();
  initMobileMenu();
  initFanMenu();
  initDropdowns();
  initLightbox();
  initInteractiveCards(".acco-card");
  initInteractiveCards(".idea-card");
  initToggleAmenities();
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

  /** Shared helper — closes the mobile nav and restores page scroll. */
  function closeMobileMenu() {
    hamburger.classList.remove("active");
    navLinks.classList.remove("open");
    document.body.style.overflow = "";
  }

  hamburger.addEventListener("click", () => {
    const isOpen = navLinks.classList.contains("open");
    if (isOpen) {
      closeMobileMenu();
    } else {
      hamburger.classList.add("active");
      navLinks.classList.add("open");
      document.body.style.overflow = "hidden";
    }
  });

  // Close menu when a regular (non-dropdown) link is tapped
  navLinks.querySelectorAll("a:not(.dropdown-toggle)").forEach((a) => {
    a.addEventListener("click", closeMobileMenu);
  });

  // Close menu when clicking outside
  document.addEventListener("click", (e) => {
    if (navLinks.classList.contains("open")) {
      if (!navLinks.contains(e.target) && !hamburger.contains(e.target)) {
        closeMobileMenu();
      }
    }
  });
}

// --- FAN MENU (hover to open / close, sub-dropdown toggles) ---
// Uses a JS-driven "is-open" class on .fan-menu for reliable
// hover detection with a grace delay so the menu doesn't close
// instantly when the cursor moves between blades.
function initFanMenu() {
  const fanMenu = document.getElementById("fanMenu");
  if (!fanMenu) return;

  let closeTimer = null;
  const CLOSE_DELAY = 300; // ms grace period before closing

  /** Open the fan */
  function openFan() {
    clearTimeout(closeTimer);
    fanMenu.classList.add("is-open");
    fanMenu.querySelector(".fan-trigger")?.setAttribute("aria-expanded", "true");
  }

  /** Close the fan (with delay) */
  function scheduleFanClose() {
    closeTimer = setTimeout(() => {
      fanMenu.classList.remove("is-open");
      fanMenu.querySelector(".fan-trigger")?.setAttribute("aria-expanded", "false");
      // Also close any open sub-dropdowns
      fanMenu.querySelectorAll(".fan-item--has-sub.sub-open").forEach((el) => {
        el.classList.remove("sub-open");
        el.querySelector(".fan-sub-toggle")?.setAttribute("aria-expanded", "false");
      });
    }, CLOSE_DELAY);
  }

  // Hover in → open, hover out → close (with delay)
  fanMenu.addEventListener("mouseenter", openFan);
  fanMenu.addEventListener("mouseleave", scheduleFanClose);

  // Also toggle on click of the trigger (for touch)
  const trigger = fanMenu.querySelector(".fan-trigger");
  if (trigger) {
    trigger.addEventListener("click", (e) => {
      e.stopPropagation();
      if (fanMenu.classList.contains("is-open")) {
        clearTimeout(closeTimer);
        fanMenu.classList.remove("is-open");
        trigger.setAttribute("aria-expanded", "false");
      } else {
        openFan();
      }
    });
  }

  // Sub-dropdown toggles (for items with children)
  fanMenu.querySelectorAll(".fan-sub-toggle").forEach((btn) => {
    btn.addEventListener("click", (e) => {
      e.stopPropagation();
      const item = btn.closest(".fan-item--has-sub");
      if (!item) return;
      const isSubOpen = item.classList.contains("sub-open");
      // Close all other sub-dropdowns
      fanMenu.querySelectorAll(".fan-item--has-sub.sub-open").forEach((el) => {
        el.classList.remove("sub-open");
        el.querySelector(".fan-sub-toggle")?.setAttribute("aria-expanded", "false");
      });
      if (!isSubOpen) {
        item.classList.add("sub-open");
        btn.setAttribute("aria-expanded", "true");
      }
    });
  });

  // Close fan when clicking outside
  document.addEventListener("click", (e) => {
    if (!fanMenu.contains(e.target)) {
      clearTimeout(closeTimer);
      fanMenu.classList.remove("is-open");
      fanMenu.querySelector(".fan-trigger")?.setAttribute("aria-expanded", "false");
      fanMenu.querySelectorAll(".fan-item--has-sub.sub-open").forEach((el) => {
        el.classList.remove("sub-open");
        el.querySelector(".fan-sub-toggle")?.setAttribute("aria-expanded", "false");
      });
    }
  });

  // Close fan on Escape
  document.addEventListener("keydown", (e) => {
    if (e.key === "Escape" && fanMenu.classList.contains("is-open")) {
      clearTimeout(closeTimer);
      fanMenu.classList.remove("is-open");
      fanMenu.querySelector(".fan-trigger")?.setAttribute("aria-expanded", "false");
    }
  });
}

// --- DROPDOWNS (mobile slide-out tap) ---
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
      // Set src and alt first
      lbImg.src = img.src;
      lbImg.alt = img.alt;

      // Asynchronously decode the high-res image off the main thread before starting transition
      // This completely avoids frame drops and UI locking
      if (typeof lbImg.decode === "function") {
        lbImg.decode()
          .then(() => {
            lightbox.classList.add("active");
            document.body.style.overflow = "hidden";
          })
          .catch(() => {
            // Fallback in case of decode error
            lightbox.classList.add("active");
            document.body.style.overflow = "hidden";
          });
      } else {
        // Fallback for older browsers
        lightbox.classList.add("active");
        document.body.style.overflow = "hidden";
      }
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
let _toastTimer = null;
function showToast(message, type = "success") {
  let toast = document.querySelector(".toast");
  if (!toast) {
    toast = document.createElement("div");
    toast.className = "toast";
    document.body.appendChild(toast);
  }

  // Clear any previous dismiss timer to prevent premature hide
  if (_toastTimer) {
    clearTimeout(_toastTimer);
  }

  toast.textContent = message;
  toast.className = `toast ${type}`;
  requestAnimationFrame(() => toast.classList.add("show"));
  _toastTimer = setTimeout(() => {
    toast.classList.remove("show");
    _toastTimer = null;
  }, 4000);
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


// --- TOGGLE MORE AMENITIES (event-delegated) ---
// Shows/hides the hidden amenities section and animates the CSS chevron.
// Listens on buttons with class `.btn-more-amenities` that have
// `data-panel` and `data-btn` attributes instead of inline onclick.
function initToggleAmenities() {
  document.querySelectorAll(".btn-more-amenities").forEach((btn) => {
    const panelId = btn.getAttribute("data-panel");
    const panel = panelId ? document.getElementById(panelId) : null;
    if (!panel) return;

    btn.addEventListener("click", () => {
      const isOpen = panel.style.display !== "none";
      panel.style.display = isOpen ? "none" : "block";
      btn.classList.toggle("open", !isOpen);

      const label = btn.querySelector(".toggle-label");
      if (label) {
        label.textContent = isOpen ? "More..." : "Less";
      }
    });
  });
}
