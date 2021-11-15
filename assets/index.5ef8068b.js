document.addEventListener("DOMContentLoaded", function () {
    new Swiper(".home-page-block-6-swiper", {
        slidesPerView: 1,
        spaceBetween: 10,
        loop: !0,
        loopFillGroupWithBlank: !0,
        navigation: {nextEl: ".home-page-block-6-swiper-button-next", prevEl: ".home-page-block-6-swiper-button-prev"},
        breakpoints: {
            576: {slidesPerView: 2, spaceBetween: 30},
            960: {slidesPerView: 3, spaceBetween: 30},
            1360: {slidesPerView: 4, spaceBetween: 30}
        }
    }), new Swiper(".home-page-block-9-swiper", {
        slidesPerView: 1,
        spaceBetween: 10,
        loop: !0,
        loopFillGroupWithBlank: !0,
        navigation: {nextEl: ".home-page-block-9-swiper-button-next", prevEl: ".home-page-block-9-swiper-button-prev"},
        breakpoints: {
            576: {slidesPerView: 2, spaceBetween: 30},
            960: {slidesPerView: 3, spaceBetween: 30},
            1360: {slidesPerView: 4, spaceBetween: 30}
        }
    })
});
