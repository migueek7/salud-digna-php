window.addEventListener('DOMContentLoaded', (event) => {

    if (document.querySelector(".mySwiper")) {
        var swiper1 = new Swiper(".mySwiper", {
            spaceBetween: 30,
            loop: true,
            autoplay: {
                delay: 6000,
                disableOnInteraction: false,
                pauseOnMouseEnter: true,
            },
            speed: 900,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });

    }
    if (document.getElementById("swiperServicios")) {

        var swiper2 = new Swiper("#swiperServicios", {
            loop: true,
            centeredSlides: true,
            slidesPerView: 'auto',
            centeredSlides: true,
            keyboardControl: true,
            a11y: true,
            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
                pauseOnMouseEnter: true,
            },
            speed: 900,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            }
        });

    }

});