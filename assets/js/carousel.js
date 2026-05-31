// =============================================
// CAROUSEL INITIALIZATIONS (SWIPER JS)
// =============================================
// All Swiper carousel instances are initialized here.
// Each carousel guards against missing DOM elements
// so this file can be safely loaded on any page.
// =============================================

/**
 * Shared Swiper defaults — autoplay, keyboard, and cursor settings
 * reused across multiple carousel instances to keep configs DRY.
 */
const SWIPER_DEFAULTS = {
  grabCursor: true,
  autoplay: {
    delay: 6000,
    disableOnInteraction: false,
    pauseOnMouseEnter: true,
  },
  keyboard: {
    enabled: true,
  },
};

document.addEventListener("DOMContentLoaded", () => {
  // Guard: skip initialization if Swiper wasn't loaded
  if (typeof Swiper === "undefined") return;

  initWildlifeCarousel();
  initPillarsCarousel();
  initNomaCarousel();
  initNomaTentCarousel();
  initCulinaryCarousel();
  initEchoesCarousel();
});

// --- 1. 3D WILDLIFE CAROUSEL (activities.php) ---
function initWildlifeCarousel() {
  const swiperElement = document.querySelector(".wildlife-swiper");
  if (!swiperElement) return;

  // Manual pagination logic (3 dots for 3 unique species)
  // Must be declared BEFORE new Swiper() to avoid TDZ in the slideChange callback
  const dots = document.querySelectorAll("#wildlife-dots .carousel-dot");

  function updateDots(activeIndex) {
    dots.forEach((dot, i) => {
      dot.classList.toggle("carousel-dot--active", i === activeIndex);
    });
  }

  const swiper = new Swiper(".wildlife-swiper", {
    ...SWIPER_DEFAULTS,
    effect: "coverflow",
    centeredSlides: true,
    slidesPerView: 1,
    loop: true,
    coverflowEffect: {
      rotate: 20,
      stretch: 0,
      depth: 100,
      modifier: 1,
      scale: 1,
      slideShadows: true,
    },
    breakpoints: {
      900: { slidesPerView: 2 },
    },
    navigation: {
      nextEl: ".swiper-button-next-custom",
      prevEl: ".swiper-button-prev-custom",
    },
    on: {
      slideChange: function () {
        // Sync description panels (modulo 3 — slides are duplicated)
        const activeIndex = this.realIndex % 3;
        document.querySelectorAll(".desc-panel").forEach((panel) => {
          panel.classList.remove("swiper-desc-active");
          if (parseInt(panel.dataset.index, 10) === activeIndex) {
            panel.classList.add("swiper-desc-active");
          }
        });
        // Sync manual pagination dots
        updateDots(activeIndex);
      },
    },
  });

  // Click on dot → navigate to the corresponding real slide
  dots.forEach((dot, i) => {
    dot.addEventListener("click", () => {
      swiper.slideToLoop(i);
    });
  });

  // Set correct initial dot state
  updateDots(swiper.realIndex % 3);
}

// --- 2. FOUR PILLARS CAROUSEL (about.php) ---
function initPillarsCarousel() {
  if (!document.querySelector(".pillars-swiper")) return;

  new Swiper(".pillars-swiper", {
    ...SWIPER_DEFAULTS,
    effect: "slide",
    freeMode: { enabled: true, sticky: true },
    speed: 500,
    spaceBetween: 30,
    loop: true,
    navigation: {
      nextEl: ".pillars-nav-next",
      prevEl: ".pillars-nav-prev",
    },
    pagination: {
      el: ".pillars-pagination",
      clickable: true,
    },
  });
}

// --- 3. AROUND NOMA CAROUSEL (noma-campsite.php) ---
function initNomaCarousel() {
  if (!document.querySelector(".noma-around-swiper")) return;

  new Swiper(".noma-around-swiper", {
    ...SWIPER_DEFAULTS,
    autoplay: false,
    speed: 500,
    slidesPerView: 1,
    spaceBetween: 24,
    loop: false,
    breakpoints: {
      768: { slidesPerView: 2, spaceBetween: 32 },
    },
    pagination: {
      el: ".noma-around-pagination",
      clickable: true,
    },
  });
}

// --- 4. NOMA TENT PACKAGES CAROUSEL (noma-campsite.php) ---
function initNomaTentCarousel() {
  if (!document.querySelector(".noma-tent-swiper")) return;

  new Swiper(".noma-tent-swiper", {
    effect: "slide",
    grabCursor: true,
    freeMode: { enabled: true, sticky: true },
    speed: 500,
    slidesPerView: 1,
    spaceBetween: 24,
    loop: true,
    breakpoints: {
      1024: {
        slidesPerView: 2,
        spaceBetween: 32,
      },
    },
    pagination: {
      el: ".noma-tent-pagination",
      clickable: true,
    },
  });
}

// --- 5. CULINARY ICONS SLIDER (gastronomy.php) ---
function initCulinaryCarousel() {
  if (!document.querySelector(".gast-culinary-swiper")) return;

  new Swiper(".gast-culinary-swiper", {
    ...SWIPER_DEFAULTS,
    autoplay: { ...SWIPER_DEFAULTS.autoplay, delay: 4500 },
    effect: "slide",
    freeMode: { enabled: true, sticky: true },
    slidesPerView: 1,
    spaceBetween: 0,
    loop: true,
    pagination: {
      el: ".gast-culinary-pagination",
      clickable: true,
    },
  });
}

// --- 5. ECHOES GALLERY SLIDER (culture.php) ---
function initEchoesCarousel() {
  if (!document.querySelector(".cult-echoes-swiper")) return;

  new Swiper(".cult-echoes-swiper", {
    ...SWIPER_DEFAULTS,
    autoplay: false,
    effect: "slide",
    freeMode: { enabled: true, sticky: false },
    slidesPerView: "auto",
    spaceBetween: 16,
    pagination: {
      el: ".cult-echoes-pagination",
      clickable: true,
    },
    breakpoints: {
      0: { spaceBetween: 12 },
      768: { spaceBetween: 16 },
    },
  });
}
