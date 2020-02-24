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

    $('.get-avenant').on('click', function() {
        $('.avenant').fadeIn();
    })
    $('.close').on('click', function() {
            $('.avenant').fadeOut();
        })
        //  $('select.type_av').change(function() {
        /* if (selectedAvenant == 1) {
             $('#souscription-form').find('select,input').each(function() {
                 $(this).prop('disabled', true);
             })
         } else if (selectedAvenant == 2) {
             $('#souscription-form').find('select,input').each(function() {
                 $(this).prop('disabled', true);
             })
         } else if (selectedAvenant == 3) {
             $('#souscription-form').find('select,input').each(function() {
                 $(this).prop('disabled', true);
             })
         }*/
        // });


})