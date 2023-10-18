// Configuration des options du slider utilisant la librairie Swiper.js
const swiper = new Swiper("#slider-personnage", {
  // Optional parameters
  direction: "horizontal",
  effect: "coverflow",
  centeredSlides: true,
  slidesPerView: 3,
  grabCursor: true,
  loop: true,
  coverflowEffect: {
    rotate: 50,
    stretch: 0,
    depth: 100,
    modifier: 1,
    slideShadows: false,
  },
  keyboard: {
    enabled: true,
  },
  breakpoints: {
    320: {
      slidesPerView: 1.5,
    },
    640: {
      slidesPerView: 1.5,
    },
    1024: {
      slidesPerView: 3,
    },
  },
});
