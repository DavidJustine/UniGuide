var swiper = new Swiper(".swiper", {
  effect: "coverflow",
  grabCursor: true,
  centeredSlides: true,
  slidesPerView: "auto",
  coverflowEffect: {
    rotate: 0,
    stretch: 0,
    depth: 100,
    modifier: 2,
    slideShadows: true
  },
  keyboard: {
    enabled: true
  },
  mousewheel: {
    thresholdDelta: 70
  },
  spaceBetween: 60,
  loop: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true
  }
});

var swiperEl = document.querySelector('.swiper');

swiperEl.addEventListener('click', function(event) {
  var clickedSlide = event.target.closest('.swiper-slide'); // Get the clicked slide
  var index = parseInt(clickedSlide.getAttribute('data-swiper-slide-index')); // Get the index of the clicked slide

  if (!swiper.slides[index].classList.contains('swiper-slide-active')) {
    swiper.slideTo(index); // Slide to the clicked slide
  }
});
