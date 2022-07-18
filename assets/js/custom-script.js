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
let loadMoreBtn = document.querySelector('#load-more');
let currentItem = 3;

loadMoreBtn.onclick = () =>{
   let boxes = [...document.querySelectorAll('.gallery .box-gallery .box')];
   for (var i = currentItem; i < currentItem + 3; i++){
      boxes[i].style.display = 'inline-block';
   }
   currentItem += 3;

   if(currentItem >= boxes.length){
      loadMoreBtn.style.display = 'none';
   }
}