$(document).ready(function() {
    $('.fonctionnality').mouseenter(function() {
        $('.f-row .fonctionnality i').css('display', 'block')
    })
    $('.accueil-carousel').owlCarousel({
        autoplay: true,
        loop: true,
        margin: 10,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })

    $('#get-avenant').on('click', function() {
        /* var pageURL = $(location).attr("href");
         alert(pageURL);*/
        $('#avenant').fadeIn();
    })
    $('.close').on('click', function() {
        /*var pageURL = $(location).attr("href");
        alert(pageURL);*/
        $('#avenant').fadeOut();
    })
    $('#avenant-form').on('submit', function() {
        alert('yes');
    })

})