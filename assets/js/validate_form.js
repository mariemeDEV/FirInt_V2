$(document).ready(function() {
    var form = $("#souscription-form");

    function printData1() {
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
    }

    function printData2() {
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
    }

    function printData3() {
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
    }

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
            $("#souscription-form").on('submit', function() {
                event.preventDefault(); // Empêcher le rechargement de la page.
                var formData = form.serialize();
                console.log(formData)
                    /*  $.ajax({
                          type: "POST",
                          url: "../../controllers/PoliceController.php",
                          data: formData,
                          success: function() {
                              console.log(data)
                          },
                          error: function() {
                              console.log('nothing')
                          }
                      });*/
                printData1();
            })

        }
    });
})