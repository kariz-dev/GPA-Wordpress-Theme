var swiper = new Swiper(".mySwiper", {
  slidesPerGroup: 3,
  loop: true,
  // Responsive breakpoints
  breakpoints: {
    // when window width is >= 320px
    320: {
      slidesPerView: 1,
      spaceBetween: 6,
    },
    // when window width is >= 480px
    480: {
      slidesPerView: 2,
      spaceBetween: 6,
    },
    // when window width is >= 640px
    640: {
      slidesPerView: 3,
      spaceBetween: 6,
    },
  },
  lazy: {
    loadPrevNext: true,
  },
  autoplay: {
    delay: 5000,
  },
  pagination: {
    el: ".swiper-pagination",
    type: "bullets",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

// New Swiper
var swipergallery = new Swiper(".swiper-gallery", {
  slidesPerGroup: 1,
  loop: true,
  // Responsive breakpoints
  breakpoints: {
    // when window width is >= 320px
    320: {
      slidesPerView: 1,
      spaceBetween: 6,
    },
    // when window width is >= 480px
    480: {
      slidesPerView: 2,
      spaceBetween: 6,
    },
    // when window width is >= 640px
    640: {
      slidesPerView: 4,
      spaceBetween: 6,
    },
  },
  lazy: {
    loadPrevNext: true,
  },
  autoplay: {
    delay: 5000,
  },
  pagination: {
    el: ".swiper-pagination",
    type: "bullets",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

// Galley Load More
$(document).ready(function($) {

  // hide items on page load
  $('.gallery-wrap .gallery-item').hide();

  // show first items
  $('.gallery-wrap .gallery-item').slice(0, 4).show();

  // add click event to load more button
  $('#load-more').on('click', function(e) {
    e.preventDefault();

    // show next 4 items
    $('.gallery-wrap .gallery-item:hidden').slice(0, 4).slideDown();

    // check if there is no hidden item left
    if ($('.gallery-wrap .gallery-item:hidden').length == 0) {
      $('#load-more').text('No Content').addClass('noContent');
    }
  });
});