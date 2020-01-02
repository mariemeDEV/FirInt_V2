$(document).ready(function() {
    $('#new-user').on('click', function() {
        $('.add-user-modal').fadeIn()
    })
    $('#new-office').on('click', function() {
        $('.add-office-modal').fadeIn()
    })
    $('.close').on('click', function() {
        $('.add-user-modal,.add-office-modal').fadeOut()
    })

    /*Add a new user*/
    $('#add-user').on('submit', function(e) {
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: 'controllers/UserController.php',
                data: $(this).serialize(),
                success: function(data) {
                    console.log(data);
                },
                error: function() {
                    console.log('no data');
                }
            })
        })
        /*Add a new user*/


})