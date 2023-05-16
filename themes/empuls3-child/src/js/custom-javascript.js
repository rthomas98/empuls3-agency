// Add your custom JS here.
(function($) {

    $(document).ready(function($){

    });

})( jQuery );

// changes background color on main nav
window.onscroll = function() {
    let navbar = document.getElementById("main-nav");
    if (window.pageYOffset > 0) {
        navbar.classList.add("scrolled");
    } else {
        navbar.classList.remove("scrolled");
    }
};

const swiper = new Swiper('.testimonial-swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    autoplay: {
        delay: 3000,
    },
    pauseOnMouseEnter: true,
    spaceBetween: 100,

    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
    }
});
