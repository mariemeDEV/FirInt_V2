$(document).ready(function() {
    function timer(modal) {

    }
    $('#connexion').on('submit', function() {
        $.ajax({
            type: 'POST',
            url: 'controllers/UserController.php',
            data: $(this).serialize(),
            success: function(data) {
                if (data == false) {
                    $('.error-modal').fadeIn().delay(3000).queue(function() {
                        $(this).fadeOut();
                        $(this).dequeue();
                    });
                } else {
                    var user = JSON.parse(data);
                    var role = user[0].role_user;
                    console.log(role);
                    switch (role) {
                        case '1':
                            window.location.replace("accueil_admin.php")
                            break;
                        case '2':
                            window.location.replace("accueil.php")
                            break;
                        case '3':
                            window.location.replace("accueil_controlleur.php")
                            break;
                    }
                    /*$('.connection-modal').fadeIn().delay(5000).queue(function() {
                        $(this).fadeOut();
                        $(this).dequeue();
                        console.log(data);*/
                    //window.location.replace("accueil.php");
                    // });
                }
            },
            error: function(data) {
                console.log(data)
            }
        })
    })
})