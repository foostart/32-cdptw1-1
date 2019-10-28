var swiper = new Swiper('.swiper-container', {
    slidesPerView: 3,
    spaceBetween: 30,
    loop: true,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    breakpoints: {
        1200: {
            slidesPerView: 3,
            spaceBetween: 100,
        },

        1100: {
            slidesPerView: 2,
            spaceBetween: 30,
        },

        1000: {
            slidesPerView: 2,
            spaceBetween: 15,
        },
        950: {
            slidesPerView: 2,
            spaceBetween: 30,
        },
        850: {
            slidesPerView: 2,
            spaceBetween: 45,
        },

        768: {
            slidesPerView: 2,
            spaceBetween: 45,
        },
        700: {
            slidesPerView: 1,
            spaceBetween: 30,
        },
        500: {
            slidesPerView: 1,
            spaceBetween: 30,
        },
    }
});