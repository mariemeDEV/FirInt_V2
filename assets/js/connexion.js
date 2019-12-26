$(document).ready(function() {
    $('#connexion').on('submit', function() {
        $.ajax({
            type: 'POST',
            url: 'controllers/UserController.php',
            dataType: "json",
            //data: $('#connexion').serialize(),
            success: function(data) {
                if (data != '') {
                    console.log(data);
                }
            },
            error: function() {
                console.log('no data')
            }
        })
    })
})