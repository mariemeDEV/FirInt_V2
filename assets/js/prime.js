//Calcul de la date d'echeance
function getEcheance(effet, duree) {
    var dateChoisie = $('#effet').val()
    var dateEffet = new Date(dateChoisie)
    var dateSimple = new Date();
    curentYear = dateSimple.getFullYear();
    if (curentYear > dateEffet.getFullYear()) {
        $('#date_echeance').fadeOut();
        alert('La date choisie est invalide.');
    } else {
        $('#date_echeance').fadeIn();
        $("#date_echeance").text("Votre contrat prend fin le : " + parseInt(dateEffet.getDate() - 1) + "/" + parseInt(dateEffet.getMonth() + 1) + "/" + parseInt(dateEffet.getFullYear() + 1) + " à 23H 59min")
    }
}

function getCols() {
    if ($("#puissance_col, #vv_col, #vn_col, #energie_col, #nombre_de_places_col, #mise_en_circulation_col").is(":hidden")) {
        $("#puissance_col, #vv_col, #vn_col, #energie_col, #nombre_de_places_col, #mise_en_circulation_col").fadeIn("3000");
    }
}

function getCategorieCol() {
    categorie = $("#categorie").val();
    if (categorie == "1") {
        $('#charge_col, #surplus_col, #packs_col').fadeOut("3000", function() {
            getCols();
        });
    } else if (categorie == "2") {
        $("#charge_col, #surplus_col").fadeIn("3000")
        getCols();
        if ($("#charge_col, #surplus_col").is(":hidden")) {
            $("#charge_col, #surplus_col").fadeIn("3000");
        } else {
            $("#charge_col").fadeIn("3000");
        }
    } else if (categorie == "3" || categorie == "4") {
        $("#charge_col").fadeIn("3000", function() {
            $("#surplus_col, #packs_col").fadeOut("3000");
        });
        getCols();
    } else if (categorie == "5") {
        $("#categorie_col, #genre_col, #marque_col, #modele_col,#immatriculation_col").fadeIn("3000", function() {
            $("#puissance_col, #vv_col, #vn_col, #energie_col, #nombre_de_places_col, #mise_en_circulation_col, #charge_col, #surplus_col, #packs_col").fadeOut("3000")
        });
    } else if (categorie == "6") {
        $("#packs_col").fadeIn("3000", function() {
            $("#charge_col, #surplus_col").fadeOut("3000");
        });
        getCols();
    } else {
        alert("Choisissez unz catégorie sur la liste.")
    }
}

//Recupérer la puissance
function getPuissance() {
    var puissance = $("#puissance").val();
    return puissance;

}
//Recupérer la RC en fonction de la puissance
function getRC(puissance) {
    var primeRc = 0;
    if (puissance == 2) {
        primeRc = 37601
    } else if (puissance >= 3 && puissance <= 6) {
        primeRc = 45181
    } else if (puissance >= 7 && puissance <= 10) {
        primeRc = 51078
    } else if (puissance >= 11 && puissance <= 14) {
        primeRc = 65677
    } else if (puissance >= 15 && puissance <= 23) {
        primeRc = 86456
    } else if (puissance >= 24) {
        primeRc = 104143
    }
    return primeRc
}

function getDureeContrat() {
    var duree = $("#duree").val();
    return duree;
}

function getEnergie() {
    var energie = $("#energie").val();
    return energie;
}

function getValeurVenale() {

}

function getValeurNeuve() {

}

function getNombreDePlaces() {

}

function getDMC() {

}

function getSurPlus() {

}



function getPack() {

}


function getStock() {

}

function chechStock() {

}


function getTaxe() {

}

function getPrimeGaranties() {

}

function changedInput(inputChanged) {
    $(inputChanged).on('change', function() {
        if (inputChaged == "categorie") {
            getCategorieCol()
        } else if (inputChanged == "puissance") {
            $("#rc").val(getRC(getPuissance()));
        } else if (inputChanged == "effet") {
            getEcheance($(this).val(), 2);
        }
    })
}


function getFGA() {

}

function getAccessoires() {

}

function getReductions() {

}

function getTaux(mois) {
    if (mois == 1) { var taux = 8.75 } else if (mois == 2) { var taux = 2 * (8.75) } else if (mois == 3) { var taux = 3 * (8.75) } else if (mois == 4) { var taux = 4 * (8.75) } else if (mois == 5) { var taux = 5 * (8.75) } else if (mois == 6) { var taux = 6 * (8.75) } else if (mois == 7) { var taux = 7 * (8.75) } else if (mois == 8) { var taux = 8 * (8.75) } else if (mois == 9) { var taux = 9 * (8.75) } else { var taux = 100 }
}

//Calcul de la prime en fonction de la catégorie
function getPrimeCat() {

}


function getPrimeNette() {

}

function getPrimeTotale() {

}

//Appel des fonctions
$(document).ready(function() {
    //Number divider
    $('.divide').divide();

    /*Changed values actions*/
    changedInput('#categorie');
    changedInput('#puissance');
    changedInput('#effet');
})