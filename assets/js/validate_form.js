$(document).ready(function() {

    $('.owl-carousel').owlCarousel({
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

    var form = $("#souscription-form");

    /* function printData1() {
         var divContents = document.getElementById('item1').innerHTML;
         var a = window.open('', '', 'height=500, width=500');
         a.document.write('<html>');
         a.document.write('<body > <h1>Div contents are <br>');
         a.document.write(divContents);
         a.document.write('</body></html>');
         a.document.close();
         a.print();
         window.close();
         a.close();
     }*/

    /* function printData2() {
         var divContents = document.getElementById('item2').innerHTML;
         var a = window.open('', '', 'height=500, width=500');
         a.document.write('<html>');
         a.document.write('<body > <h1>Div contents are <br>');
         a.document.write(divContents);
         a.document.write('</body></html>');
         a.document.close();
         a.print();
         window.close();
         a.close();
     }*/

    /*function printData3() {
        var divContents = document.getElementById('item3').innerHTML;
        var a = window.open('', '', 'height=500, width=500');
        a.document.write('<html>');
        a.document.write('<body> <h1>Div contents are <br>');
        a.document.write(divContents);
        a.document.write('</body></html>');
        a.document.close();
        a.print();
        window.close();
        a.close();
    }*/

    form.children("div").steps({
        headerTag: "h3",
        bodyTag: "section",
        transitionEffect: "slideLeft",
        onStepChanging: function(event, currentIndex, newIndex) {
            form.validate().settings.ignore = ":disabled,:hidden";
            return form.valid();
        },
        onFinishing: function(event, currentIndex) {
            return form.valid();
        },
        onFinished: function(event, currentIndex) {
            //  $("#souscription-form").on('submit', function() {
            event.preventDefault(); // Empêcher le rechargement de la page.
            var formData = form.serialize();
            //policeData = JSON.parse(formData);
            // console.log(formData)
            $.ajax({
                type: "POST",
                url: "../../controllers/PoliceController.php",
                data: formData,
                success: function(data) {
                    console.log(data)
                },
                error: function() {
                    console.log('nothing')
                }
            });
            $('#documents').fadeIn()
            $('.close').on('click', function() {
                $('#documents').fadeOut()
            })
            $('#impress-btn')
                .on('click', function() {
                    /*   printData1();
                       printData2();
                       printData3();*/
                    $('#documents').printThis()
                        //  $('#documents').fadeOut()
                    $('#success-souscript').fadeIn(function() {
                            $('#success-souscript').delay(5000).fadeOut()
                        })
                        /*window.setTimeout(function() {
                            location.reload()
                        }, 5000)*/
                });
        }
    });
})