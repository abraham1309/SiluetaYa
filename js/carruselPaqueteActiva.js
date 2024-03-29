var swiper = new Swiper('.contenedor-carrusel-activaYa', {
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev'
    },
    slidesPerView: 1,
    spaceBetween: 10,
    loop: "true",
    // init: false,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },


    breakpoints: {
        620: {
            slidesPerView: 1,
            spaceBetween: 0,
        },
        680: {
            slidesPerView: 1,
            spaceBetween: 0,
        },
        920: {
            slidesPerView: 1,
            spaceBetween: 0,
        },
        1240: {
            slidesPerView: 1,
            spaceBetween: 0,
        },
    },

});