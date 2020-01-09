$(document).ready(function() {
    $('#new-user').on('click', function() {
        $('.add-user-modal').fadeIn();
    })
    $('#new-office').on('click', function() {
        $('.add-office-modal').fadeIn();
    })
    $('.dots a').on('click', function() {
        console.log('Mon mari, Fallou Ndiaye');
        $('.dots-modal').fadeIn();
        //$('.dotation-modal').fadeIn();
    })
    $('#intermediaire').on('click', function() {
        $('#mat').prop('disabled', false);
    })
    $('.close').on('click', function() {
        $('.add-user-modal,.add-office-modal,.dotation-modal').fadeOut();
    })

    /*Add a new user*/
    var resource = '../../../view/admin/';
    $('#add-user').on('submit', function(e) {
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: '../controllers/UserController.php',
                data: $(this).serialize(),
                dataType: "json",
                success: function(response) {
                    console.log(response);
                    window.location.replace(resource + 'users.php');
                },
                error: function(response) {
                    console.log(response);
                    window.location.replace(resource + 'users.php');
                }
            })
        })
        /*Add a new user*/




})