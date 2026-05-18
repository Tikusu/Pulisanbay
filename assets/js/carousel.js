// =============================================
// CAROUSEL INITIALIZATIONS (SWIPER JS)
// =============================================

document.addEventListener("DOMContentLoaded", () => {
  // 1. 3D WILDLIFE CAROUSEL (activities.php)
  const swiperElement = document.querySelector(".wildlife-swiper");
  if (swiperElement) {
    // --- Manual pagination logic (3 dots for 3 unique species) ---
    // Must be declared BEFORE new Swiper() to avoid TDZ in the slideChange callback
    const dots = document.querySelectorAll("#wildlife-dots .carousel-dot");

    function updateDots(activeIndex) {
      dots.forEach((dot, i) => {
        dot.classList.toggle("carousel-dot--active", i === activeIndex);
      });
    }

    const swiper = new Swiper(".wildlife-swiper", {
      effect: "coverflow",
      grabCursor: true,
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
        900: {
          slidesPerView: 2,
        },
      },
      autoplay: {
        delay: 6000,
        disableOnInteraction: false,
        pauseOnMouseEnter: true,
      },
      navigation: {
        nextEl: ".swiper-button-next-custom",
        prevEl: ".swiper-button-prev-custom",
      },
      keyboard: {
        enabled: true,
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
  } // end if (swiperElement)

  // 2. FOUR PILLARS CAROUSEL (about.php)
  const pillarsSwiperElement = document.querySelector(".pillars-swiper");
  if (pillarsSwiperElement) {
    const pillarsSwiper = new Swiper(".pillars-swiper", {
      effect: "slide",
      freeMode: {
        enabled: true,
        sticky: true,
      },
      speed: 500,
      spaceBetween: 30,
      grabCursor: true,
      loop: true,
      autoplay: {
        delay: 6000,
        disableOnInteraction: false,
        pauseOnMouseEnter: true,
      },
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
  // 3. AROUND NOMA CAROUSEL (noma-campsite.php)
  const nomaSwiperElement = document.querySelector(".noma-around-swiper");
  if (nomaSwiperElement) {
    const nomaSwiper = new Swiper(".noma-around-swiper", {
      slidesPerView: 1, // 1 on mobile
      spaceBetween: 24,
      grabCursor: true,
      loop: false,
      breakpoints: {
        768: {
          slidesPerView: 2, // 2 when above 768px
          spaceBetween: 32,
        },
      },
      pagination: {
        el: ".noma-around-pagination",
        clickable: true,
      },
      autoplay: {
        delay: 5000,
        disableOnInteraction: false,
        pauseOnMouseEnter: true,
      },
    });
  }
  // 4. CULINARY ICONS SLIDER (gastronomy.php)
  const culinarySwiper = document.querySelector(".gast-culinary-swiper");
  if (culinarySwiper) {
    new Swiper(".gast-culinary-swiper", {
      effect: "slide",
      freeMode: {
        enabled: true,
        sticky: true,
      },
      slidesPerView: 1,
      spaceBetween: 0,
      grabCursor: true,
      loop: true,
      autoplay: {
        delay: 4500,
        disableOnInteraction: false,
        pauseOnMouseEnter: true,
      },
      pagination: {
        el: ".gast-culinary-pagination",
        clickable: true,
      },
      keyboard: {
        enabled: true,
      },
    });
  }
  // 5. ECHOES GALLERY SLIDER (culture.php)
  const echoesSwiper = document.querySelector(".cult-echoes-swiper");
  if (echoesSwiper) {
    new Swiper(".cult-echoes-swiper", {
      effect: "slide",
      freeMode: {
        enabled: true,
        sticky: false,
      },
      slidesPerView: "auto",
      spaceBetween: 16,
      grabCursor: true,
      pagination: {
        el: ".cult-echoes-pagination",
        clickable: true,
      },
      keyboard: {
        enabled: true,
      },
      breakpoints: {
        0: {
          spaceBetween: 12,
        },
        768: {
          spaceBetween: 16,
        },
      },
    });
  }
});
