$(document).ready(function () {
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 30,
        navigation: false,
        autoplay: true,
        autoplayTimeout: 3000,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: false,
            },
            600: {
                items: 2,
                nav: false
            },
            1000: {
                items: 3,
                nav: false,
                loop: false,
                margin: 20
            }
        }
    });

    $('#tes1').flatpickr({
        enableTime: false,
        dateFormat: "d/m/Y",
        minDate:"today"
    });
})
