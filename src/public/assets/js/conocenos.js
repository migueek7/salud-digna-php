window.addEventListener('DOMContentLoaded', (event) => {

    let navSecondary = document.querySelectorAll('.nav-secondary .item');
    console.log("navSecondary", navSecondary);


    navSecondary.forEach(element => {
        element.addEventListener('click', (e) => {
            
            console.log(e.target.parentElement.getElementsByClassName('parrafo')[0]);
            if (e.target.parentElement.getElementsByClassName('parrafo')[0].classList.contains('active')) 
            {
                e.target.parentElement.getElementsByClassName('parrafo')[0].classList.remove('active');
                e.target.parentElement.getElementsByTagName('button')[0].classList.remove('active');
            } else {
                e.target.parentElement.getElementsByClassName('parrafo')[0].classList.add('active');
                e.target.parentElement.getElementsByTagName('button')[0].classList.add('active');
            }
        })
    });



    
    var swiper = new Swiper(".mySwiperNosotros", {
        slidesPerView: 1,
        spaceBetween: 0,
        effect: "fade",
        loop: true,
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
            pauseOnMouseEnter: false,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
  

});