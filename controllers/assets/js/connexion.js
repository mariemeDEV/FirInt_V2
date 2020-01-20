$(document).ready(function() {
    /*Connection*/
    $('#connexion').on('submit', function(e) {
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: '../controllers/UserController.php',
                data: $(this).serialize(),
                dataType: 'html',
                success: function(userData) {
                    if (userData == false) {
                        $('.error-modal').fadeIn().delay(3000).queue(function() {
                            $(this).fadeOut();
                            $(this).dequeue();
                        });
                    } else {
                        var user = JSON.parse(userData);
                        console.log(user);
                        var role = user[0].role_user;
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

                    }
                },
                error: function() {
                    console.log('No data')
                }
            })
        })
        /*Connexion*/
})