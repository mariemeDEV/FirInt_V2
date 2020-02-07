function getModal(modal) {
    $("." + modal).fadeIn();
}
$(document).ready(function() {
    $('#new-user').on('click', function() {
        getModal('add-user-modal')
    })
    $('#new-office').on('click', function() {
        getModal('add-office-modal')
    })
    $('.dots').each(function() {
        $(this).on('click', function() {
            $('#matricule-inter').val($(this).find('#user-dotation').val())
            getModal('dots-modal');
        })
    })
    $('.extract-production').each(function() {
        $(this).on('click', function() {
            $('#mat-extraction').val($(this).find('#user-extract-prod').val())
            getModal('extract-modal')
        })
    })
    $('.update-data').each(function() {
        $(this).on('click', function() {
            console.log($(this).find('#role-up').val())
                /* switch ($(this).find('#role-up').val()) {
                     case '1':
                         $('#admin-update').prop('ckecked', true);
                         $('#intermediaire-update').prop('ckecked', false);
                         $('#controlleur-update').prop('ckecked', false);
                         break;
                     case '2':
                         $('#admin-update').prop('ckecked', false);
                         $('#intermediaire-update').prop('ckecked', true);
                         $('#controlleur-update').prop('ckecked', false);
                         break;
                     case '3':
                         $('#admin-update').prop('ckecked', false);
                         $('#intermediaire-update').prop('ckecked', false);
                         $('#controlleur-update').prop('ckecked', true);
                         break;
                 }
                 $('#mat-update').val($(this).find('#mat-up').val());
                 $('#prenom-up').val($(this).find('#user-extract-prod').val());
                 $('#nom-up').val($(this).find('#user-extract-prod').val());
                 $('#adresse-up').val($(this).find('#user-extract-prod').val());
                 $('#telephone-up').val($(this).find('#user-extract-prod').val());
                 $('#email-up').val($(this).find('#user-extract-prod').val());
                 $('#password-up').val($(this).find('#user-extract-prod').val());*/
            getModal('update-modal');
        })
    })

    $('#intermediaire').on('click', function() {
        $('#mat').prop('disabled', false);
    })
    $('.close').on('click', function() {
        $('.add-user-modal,.add-office-modal,.dots-modal,.extract-modal,.update-modal').fadeOut();
    })

    /*Get the value of the id on the table data*/
    /*$('.id-cell').on('click', function() {
        
    })*/

    /*Get the value of the if on the table data*/

    /*Add a new user*/
    var resource = '../../../view/admin/';
    $('#add-user').on('submit', function(e) {
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: "../controllers/UserController.php",
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

    /*Faire une dotation*/
    $('#dotations-attestations').on('submit', function() {
            $.ajax({
                type: "POST",
                url: "../controllers/UserController.php",
                data: $(this).serialize(),
                dataType: "json",
                success: function(response) {
                    alert(response);
                },
                error: function(response) {
                    alert(response);
                }
            })
        })
        /*Faire une dotation*/


})