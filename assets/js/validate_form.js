$(document).ready(function() {
    var form = $(".auto-form");
    form.validate({
        errorPlacement: function errorPlacement(error, element) { element.before(error); },
        rules: {
            confirm: {
                equalTo: "#password"
            }
        }
    });

    function printData1() {
        //window.open("http://localhost/forint_v2/jaune.php");
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
        //window.open("http://localhost/forint_v2/jaune.php");
        var divContents = document.getElementById('CP-body').innerHTML;
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
        var divContents = document.getElementById('item2').innerHTML;
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
        /* onFinishing: function(event, currentIndex) {
             form.validate().settings.ignore = ":disabled";
             console.log(form.valid())
             return form.valid();
         },*/
        onFinished: function(event, currentIndex) {
            $('#documents').fadeIn(function() {
                $('#impress-btn').on('click', function() {
                    printData1()
                    printData2()
                    printData3()
                    $('#documents').fadeOut()
                    $('#success-souscript').fadeIn()
                })
                $('.close').on('click', function() {
                    $('#documents').fadeOut()
                })
            });
            var souscription_data = $(".auto-form").serializeArray()
            console.log(souscription_data)
        }
    });
    if (form.valid()) {
        $('#content').fadeIn()
    }
})