$(document).ready(function() {
    $('#new-user').on('click', function() {
        $('.add-user-modal').fadeIn();
    })
    $('#new-office').on('click', function() {
        $('.add-office-modal').fadeIn();
    })
    $('#intermediaire').on('click', function() {
        $('#mat').prop('disabled', false);
    })
    $('.close').on('click', function() {
        $('.add-user-modal,.add-office-modal').fadeOut();
    })

    /*Print users data*/
    /* $.ajax({
             url: "controllers/UserController.php",
             type: "GET",
             dataType: "json",
             success: function(data) {
                 console.log(data);
                 /* $.each(data,function(index,value){
                      $("#produits").append("<tr><td>"+data[index].nomProd+"</td><td>"+data[index].quantiteEnStock+"</td><td>"+data[index].prixUnitaire+"</td>"+"<td>"+"<img style='width:40px' src="+"'images/"+data[index].image+"'/>"+"<td><a href='#' class='bg-success details' style='color:white' data-id="+data[index].IdProd+">Details</a></td>"+"</tr>");
                      nomProduits.push(data[index].nomProd);
                  })*/
    /* },
            error: function(res, st, error) {
                alert(error);
            },
            complete: function() {

            }
        })*/
    /*Print users data*/

    /*Add a new user*/
    /* $('#add-user').on('submit', function(e) {
             e.preventDefault();
             $.ajax({
                 type: $(this).attr('method'),
                 url: $(this).attr('action'),
                 data: $(this).serialize(),
                 dataType: "json",
                 success: function(data) {
                     console.log(data);
                 },
                 error: function() {
                     console.log('no data');
                 }
             })
         })*/
    /*Add a new user*/




})