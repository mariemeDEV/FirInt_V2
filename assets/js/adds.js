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

})