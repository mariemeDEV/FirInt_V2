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
                        var ressource = 'http://localhost/forint_v2/view/';
                        var url1 = ressource + 'admin/accueil_admin.php';
                        var url2 = ressource + 'intermediaires/accueil.php';
                        var url3 = ressource + 'controlleurs/accueil_controlleur.php';
                        var notFound = ressource + 'pages_404.php';
                        switch (role) {
                            case '1':
                                alert('1')
                                window.location.replace(url1);
                                break;
                            case '2':
                                alert('2')
                                window.location.replace(url2);
                                break;
                            case '3':
                                alert('3')
                                window.location.replace(url3);
                                break;
                            default:
                                window.location.replace(notFound);
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