$(document).ready(function() {
    var marques_voitures = ['FIAT', 'BMW', 'ACURA', 'FORD', 'HOLDEN', 'HONDA', 'HYUNDAI', 'ISUZU', 'KIA', 'LEXUS', 'NISSAN', 'RENAULT', 'SEAT', 'CHEVROLET', 'CITROEN', 'DACIA', 'INFINITI', 'MAZDA', 'MITSUBISHI', 'PEUGEOT', 'SUBARU', 'TOYOTA', 'VOLSWAGEN']
        //Champ autocomplete
    fieldComplete('ville', marques_voitures);

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
            }
        }
    })

})