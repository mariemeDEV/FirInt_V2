//https://stackoverflow.com/questions/12409299/how-to-get-current-formatted-date-dd-mm-yyyy-in-javascript-and-append-it-to-an-i
function formatDate(dateToFormat) {
    var dd = dateToFormat.getDate();
    var mm = dateToFormat.getMonth() + 1; //January is 0!
    var yyyy = dateToFormat.getFullYear();
    if (dd < 10) {
        dd = '0' + dd;
    }
    if (mm < 10) {
        mm = '0' + mm;
    }
    var formatedDate = dd + '/' + mm + '/' + yyyy;
    return formatedDate;
}
//Calcul de la date d'echeance
function getEcheance() {
    var dateChoisie = $('#effet').val()
    var dateEffet = new Date(dateChoisie)
    var dateSimple = new Date();
    if (formatDate(dateEffet) < formatDate(dateSimple)) {
        $('#date_echeance').fadeOut();
        alert('La d\'effet ne peut etre antéreure à aujord\'hui.');
        $('#effet').val('0000-00-00');
    } else {
        //  $('#echeance').val('21/12/2020');
        $('#date_echeance').fadeIn();
        if ($('#duree').value == 12) {
            $("#date_echeance").text("Votre contrat prend fin le : " + parseInt(dateEffet.getDate() - 1) + "/" + parseInt(dateEffet.getMonth() + 1) + "/" + parseInt(dateEffet.getFullYear() + 1) + " à 23H 59min")
        } else {
            $("#date_echeance").text("Votre contrat prend fin le : " + parseInt(dateEffet.getDate() - 1) + "/" + parseInt(dateEffet.getMonth() + 1) + "/" + parseInt(dateEffet.getFullYear()) + " à 23H 59min")
        }
    }
}
//Affichage des champs en fonction des catégories
function getCols() {
    if ($("#vv_col, #vn_col, #energie_col, #nombre_de_places_col, #mise_en_circulation_col,#puissance_col, #vv_col, #vn_col,#nombre_de_places_col, #mise_en_circulation_col, #charge_col, #surplus_col,#marque_col, #modele_col,#immatriculation_col,#cylindre_col").is(":hidden")) {
        $("#vv_col, #vn_col, #energie_col, #nombre_de_places_col, #mise_en_circulation_col,#puissance_col, #vv_col, #vn_col,#nombre_de_places_col, #mise_en_circulation_col, #charge_col, #surplus_col,#marque_col, #modele_col,#immatriculation_col,#cylindre_col").fadeIn();
    }
}
//Vérifier si des valeurs correctes sont selectionnées pour les champs select
function checkSelect(inputId) {
    $('.caracteristiques_sect').find('select,input').each(function(i, champ) {
        var checkedInput = $(this).attr('id');
        if (checkedInput != inputId) {
            $(this).prop('disabled', true)
        }
    })
}
//Acrivationbris de glaces; incendie, vol
function enableCheck() {
    $('#bris_check,#incendie-check,#vol-check').prop('disabled', false);
}
//Désactivation bris de glaces; incendie, vol
function disableCheck() {
    $('#bris_check,#incendie-check,#vol-check').prop('disabled', true);
}
//Recupérer la valeur d'un champs donné en fonction de son Id
function resetField(champId) {
    $("#" + champId).val(0)
}

function uncheckField(champId) {
    $("#" + champId).prop('checked', false)
}
//Affichage des champs/activation désactivation garanties en fonction des catégories
function getCategorieCol() {
    categorie = $("#categorie").val();
    if (categorie == "1") {
        //enableFields({ a: '#defense-recours-check', b: '#tc-check', c: '#tcol-check' })
        $('#genre').val('promenade et affaires personne physique');
        $('#defense-recours-check,#tc-check,#tcol-check,#bonus_sur_rc').prop('disabled', false);
        $("#bris_check").prop('disabled', true);
        getCols();
        enableCheck();
        $('#charge_col, #surplus_col, #packs_col,#cylindre_col,.vert-col').fadeOut();
        $('#defense-recours-check,#bris_check,#persones_trans').prop('disabled', false);
        $('#avance-recours').prop('disabled', false);
    } else if (categorie == "2") {
        $('#charge option:eq(1),#defense-recours-check,#persones_trans,#bris_check,#tc-check,#tcol-check,#avance-recours,#bonus_sur_rc').prop('disabled', false);
        $('#genre').val('transport pour propre compte');
        $("#charge_col, #surplus_col").fadeIn();
        enableCheck();
        getCols();
        if ($("#charge_col, #surplus_col").is(":hidden")) {
            $("#charge_col, #surplus_col").fadeIn();
            $("#cylindre_col,.vert-col").fadeOut();
        } else {
            $("#charge_col").fadeIn();
        }
        $('#cylindre_col').fadeOut();
    } else if (categorie == "3" || categorie == "4") {
        //La charge utile Break est eliminée pour les catégories 3 et 4
        $('#charge option:eq(1)').prop('disabled', true)
        $('#genre').val('transport public de marchandises');
        $('#bris_check,#persones_trans').prop('disabled', false);
        enableCheck();
        if (categorie == "4") {
            $('#genre').val('transport public de voyageurs');
            $("#charge_col,.jaune-col").fadeOut();
            $('#defense-recours-check,#tc-check,#bonus_sur_rc').prop('disabled', true);
            resetField('defense_et_recours_val');
            uncheckField('defense-recours-check');
            $('#tcol-check').prop('disabled', false);
            uncheckField('defense-recours-check');
            resetField('defense-recours-check');
            $('#cat4-modal,.vert-col').fadeIn();
            $('.close').on('click', function() {
                $('#cat4-modal').fadeOut();
            })
            uncheckField('tc-check');
            uncheckField('tcol-check');
        } else if (categorie == "3") {
            $('#bris_check,#defense-recours-check,#persones_trans,#tc-check,#tcol-check,#avance-recours,#bonus_sur_rc').prop('disabled', false);
        }
        $("#charge_col").fadeIn(function() {
            $("#surplus_col, #packs_col,#cylindre_col,.vert-col").fadeOut();
            $("jaune-col").fadeIn();

        });
        getCols();
    } else if (categorie == "5") {
        $('#bris_check').prop('disabled', true);
        $('#defense-recours-check,#bonus_sur_rc').prop('disabled', false);
        $('#genre').val('2 roues');
        disableCheck()
        $("#categorie_col, #genre_col, #marque_col, #modele_col,#immatriculation_col,#cylindre_col,.jaune-col").fadeIn(function() {
            $("#puissance_col, #vv_col, #vn_col, #energie_col, #nombre_de_places_col, #mise_en_circulation_col, #charge_col, #surplus_col, #packs_col,.vert-col,.cedeao-col").fadeOut()
        });
        $('#bris_check,#incendie-check,#vol-check,#persones_trans,#tc-check,#tcol-check,#avance-recours').prop('disabled', true);
        resetField('defense_et_recours');
        resetField('bris_de_glace_val');
        resetField('incendie_val');
        resetField('vol_val');
        resetField('tierce_val');
        resetField('avance_sur_recours_val');
        //resetField('defense_et_recours_val');
        uncheckField('incendie-check');
        uncheckField('bris_check');
        uncheckField('tc-check');
        uncheckField('tcol-check');
        uncheckField('vol-check');
        //uncheckField('defense-recours-check');
        $('.tierce').val(0);
    } else if (categorie == "6") {
        $('#genre').val('Pack Auto');
        enableCheck();
        $('#bonus_sur_rc').prop('disabled', true);
        $('#defense-recours-check').prop('disabled', false);
        $('#defense-recours-check').prop('disabled', false);
        $('#genre').val('transport public de voyageurs')
        $('#bris_check,#avance-recours').prop('disabled', false);
        $("#packs_col").fadeIn(function() {
            $("#puissance_col, #vv_col, #vn_col, #energie_col, #nombre_de_places_col, #mise_en_circulation_col, #modele_col,#immatriculation_col,.cedeao-col,.jaune-col").fadeIn();
        });
        $('#charge_col,#surplus_col,#cylindre_col,.vert-col').fadeOut();
        $('#packs_col').fadeIn(3000)
        getCols();
        /*if (getValueInput('packs') == "mini") {
            alert('mini')
        } else if (getValueInput('packs') == "classic") {
            alert('classic')
        } else if (getValueInput('packs') == "confort") {
            alert('confort')
        } else if (getValueInput('packs') == "liberte") {
            alert('liberte')
        }*/
    }
}
/*$('#packs').on('change', function() {
    alert('yes')
})*/

//Recupérer la valeur d'un champs donné en fonction de son Id
function getValueInput(champId) {
    return $("#" + champId).val()
}

//Calcul de l'age de la voiture en fonction de la date de premiére mise en circulation et la date actuelle
function getVoitureAge() {
    return Math.round((Date.now() - (+new Date(getValueInput('date_circulation')))) / (31557600000)) - 1;
}

//Les surplus
function getSurPlusvalue(surplus) {
    return surplus * 4852
}

//Les taux
function getTaux(duree) {
    //La durée est éstimée en mois
    if (duree <= 9) {
        var taux = duree * 8.75
    } else {
        var taux = 100
    }
    return taux
}
/*-----------------------------------------CALCULS CATEGORIE1-----------------------------*/
//Obtention de la RC en fonction de la puissance dans la CATEGORIE1
function getRC1(puissance) {
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
    //Calcul de la prime rc
    var tauxProrata = (getTaux(getValueInput('duree')) / 100)
    return parseInt(primeRc * tauxProrata);
}
/*-----------------------------------------CALCULS CATEGORIE1-----------------------------*/

/*-----------------------------------------CALCULS CATEGORIE2-----------------------------*/
//Obtention de la RC en fonction de la puissance pour la charge utile Break en CATEGORIE2
function getRC2Break(puissance) {
    var primeRc
    if (puissance <= 2) {
        primeRc = 56958
    }
    if (puissance >= 3 && puissance <= 6) {
        primeRc = 67644;
    }
    if (puissance >= 7 && puissance <= 10) {
        primeRc = 78974;
    }
    if (puissance >= 11 && puissance <= 14) {
        primeRc = 113944;
    }
    if (puissance >= 15 && puissance <= 23) {
        primeRc = 146969;
    }
    if (puissance >= 24) {
        primeRc = 174491;
    }
    return primeRc;
}
//Obtention de la RC en fonction de la puissance pour la charge utile Moins de 3Tonnes en CATEGORIE2
function getRC2MoinsDe3Tonnes(puissance) {
    var primeRc;
    if (puissance <= 2) {
        primeRc = 88759
    }
    if (puissance >= 3 && puissance <= 6) {
        primeRc = 101048;
    }
    if (puissance >= 7 && puissance <= 10) {
        primeRc = 127880;
    }
    if (puissance >= 11 && puissance <= 14) {
        primeRc = 168085;
    }
    if (puissance >= 15 && puissance <= 23) {
        primeRc = 206063;
    }
    if (puissance >= 24) {
        primeRc = 237710;
    }
    return primeRc;
}
//Obtention de la RC en fonction de la puissance pour la charge utile Plus de 3Tonnes en CATEGORIE2
function getRC2PlusDe3Tonnes(puissance) {
    var primeRc;
    if (puissance <= 2) {
        primeRc = 91294
    }
    if (puissance >= 3 && puissance <= 6) {
        primeRc = 103580;
    }
    if (puissance >= 7 && puissance <= 10) {
        primeRc = 130415;
    }
    if (puissance >= 11 && puissance <= 14) {
        primeRc = 170617;
    }
    if (puissance >= 15 && puissance <= 23) {
        primeRc = 208597;
    }
    if (puissance >= 24) {
        primeRc = 240245;
    }
    return primeRc;
}
//Obtention de la RC en fonction de la charge utile et de l'énérgie EN  CATEGORIE2
function getRC2(chargeUtile, energie, puissance) {
    var primeRc = 0;
    if (energie == "diesel" || energie == "essence") {
        if (chargeUtile == "Break") {
            primeRc = getRC2Break(puissance)
        } else if (chargeUtile == "Moins de 3,5T") {
            primeRc = getRC2MoinsDe3Tonnes(puissance)
        } else if (chargeUtile = "Plus de 3,5T") {
            primeRc = getRC2PlusDe3Tonnes(puissance)
        }
    }
    var tauxProrata = (getTaux(getValueInput('duree')) / 100)
    var surplus = getSurPlusvalue(getValueInput('surplus'))
    return Math.round(parseInt(primeRc * tauxProrata) + surplus);
}
/*-----------------------------------------CALCULS CATEGORIE2-----------------------------*/

/*-----------------------------------------CALCULS CATEGORIE3-----------------------------*/
//Obtention de la RC en fonction de la charge utile et de l'énérgie en  CATEGORIE3
function getRC3MoinsDe3Tonnes(puissance) {
    var primeRc;
    if (puissance <= 2) {
        primeRc = 115559;
    }
    if (puissance >= 3 && puissance <= 6) {
        primeRc = 133050
    }
    if (puissance >= 7 && puissance <= 10) {
        primeRc = 165601;
    }
    if (puissance >= 11 && puissance <= 14) {
        primeRc = 222270;
    }
    if (puissance >= 15 && puissance <= 24) {
        primeRc = 293130;
    }
    if (puissance >= 24) {
        primeRc = 328955;
    }
    return primeRc;
}

function getRC3PlusDe3Tonnes(puissance) {
    var primeRc;
    if (puissance <= 2) {
        primeRc = 117937
    }
    if (puissance >= 3 && puissance <= 6) {
        primeRc = 135437;
    }
    if (puissance >= 7 && puissance <= 10) {
        primeRc = 167982;
    }
    if (puissance >= 11 && puissance <= 14) {
        primeRc = 224650;
    }
    if (puissance >= 15 && puissance <= 23) {
        primeRc = 285510;
    }
    if (puissance >= 24) {
        primeRc = 331336;
    }
    return primeRc;
}
//Obtention de la RC en fonction de la charge utile et de l'énérgie EN  CATEGORIE3
function getRC3(chargeUtile, energie, puissance) {
    var primeRc = 0;
    if (energie == "diesel" || energie == "essence") {
        if (chargeUtile == "Moins de 3,5T") {
            primeRc = getRC3MoinsDe3Tonnes(puissance)
        } else if (chargeUtile = "Plus de 3,5T") {
            primeRc = getRC3PlusDe3Tonnes(puissance)
        }
    }
    var tauxProrata = (getTaux(getValueInput('duree')) / 100)
    return Math.round(parseInt(primeRc * tauxProrata));
}
/*-----------------------------------------CALCULS CATEGORIE3-----------------------------*/

/*-----------------------------------------CALCULS CATEGORIE4-----------------------------*/
//Obtention de la RC en fonction du nombre de places de l'énergie et de la puissance en CATEGORIE4

function getRC4_60Places() {
    var primeRc;
    //La durée est exprimée en mois
    var duree = getValueInput('duree');
    if (puissance >= 5 && puissance <= 7) {
        if (duree == 1) {
            primeRc = 52071;
        }
        if (duree == 2) {
            primeRc = 104142;
        }
        if (duree == 3) {
            primeRc = 156213;
        }
        if (duree == 4) {
            primeRc = 208284;
        }
        if (duree == 5) {
            primeRc = 260355;
        }
        if (duree == 6) {
            primeRc = 312426;
        }
    }
    if (puissance >= 8 && puissance <= 10) {
        if (duree == 1) {
            primeRc = 56421;
        }
        if (duree == 2) {
            primeRc = 112922;
        }
        if (duree == 3) {
            primeRc = 169383;
        }
        if (duree == 4) {
            primeRc = 225844;
        }
        if (duree == 5) {
            primeRc = 282305;
        }
        if (duree == 6) {
            primeRc = 338766;
        }
    }
    if (puissance >= 11 && puissance <= 16) {
        if (duree == 1) {
            primeRc = 61391;
        }
        if (duree == 2) {
            primeRc = 122782;
        }
        if (duree == 3) {
            primeRc = 184173;
        }
        if (duree == 4) {
            primeRc = 245564;
        }
        if (duree == 5) {
            primeRc = 306955;
        }
        if (duree == 6) {
            primeRc = 368346;
        }
    }
    return primeRc;
}

function getRC4Essence(puissance, places) {
    var primeRc;
    if (places == 4) {
        if (puissance >= 7 && puissance <= 10) {
            primeRc = 12772
        }
        if (puissance >= 11 && puissance <= 14) {
            primeRc = 17162
        }
    } else if (places == 7) {
        if (puissance >= 11 && puissance <= 14) {
            primeRc = 23302
        }
    } else if (places == 15) {
        if (puissance == 2) {
            primeRc = 23888;
        } else if (puissance >= 3 && puissance <= 6) {
            primeRc = 25273;
        } else if (puissance >= 7 && puissance <= 10) {
            primeRc = 26763;
        } else if (puissance >= 11 && puissance <= 14) {
            primeRc = 31153;
        } else if (puissance >= 15 && puissance <= 23) {
            primeRc = 36084;
        } else if (puissance >= 24) {
            primeRc = 39384;
        }
    } else if (places == 23) {
        if (puissance >= 15 && puissance <= 23) {
            primeRc = 38557;
        }
    } else if (places == 24) {
        if (puissance >= 11 && puissance <= 14) {
            primeRc = 34450;
        } else if (puissance >= 15 && puissance <= 23) {
            primeRc = 39381;
        }
    } else if (places == 28) {
        if (puissance >= 5 && puissance <= 23) {
            primeRc = 42676;
        }
    } else if (places == 29) {
        if (puissance >= 5 && puissance <= 23) {
            primeRc = 43500;
        }
    } else if (places == 39) {
        if (puissance >= 15 && puissance <= 23) {
            primeRc = 49621;
        }
    }
    return primeRc;
}

function getRC4Diesel(puissance, places) {
    var primeRc;
    if (places == 4) {
        if (puissance >= 5 && puissance <= 7) {
            primeRc = 12772;
        } else if (puissance >= 8 && puissance <= 10) {
            primeRc = 17162;
        }
    } else if (places == 7) {
        if (puissance >= 8 && puissance <= 10) {
            primeRc = 23302;
        }
    } else if (places == 15) {
        if (puissance == 2) {
            primeRc = 23888
        } else if (puissance >= 2 && puissance <= 4) {
            primeRc = 25273
        } else if (puissance >= 5 && puissance <= 7) {
            primeRc = 26763
        } else if (puissance >= 8 && puissance <= 10) {
            primeRc = 31153
        } else if (puissance >= 11 && puissance <= 16) {
            primeRc = 36084
        } else if (puissance >= 24) {
            primeRc = 39384
        }
    } else if (places == 23) {
        if (puissance >= 11 && puissance <= 16) {
            primeRc = 38557;
        }
    } else if (places == 24) {
        if (puissance >= 8 && puissance <= 10) {
            primeRc = 34450;
        } else if (puissance >= 11 && puissance <= 16) {
            primeRc = 39381;
        }
    } else if (places == 39) {
        if (puissance >= 11 && puissance <= 16) {
            primeRc = 49621;
        }
    } else if (places == 60) {
        getRC4_60Places()
    }
    return primeRc;
}
//Obtention de la RC en fonction de l'énérgie et de la puissance EN  CATEGORIE4
function getRC4(energie) {
    var primeRc = 0;
    if (energie == "diesel") {
        primeRc = getRC4Diesel(getPuissance(), getValueInput('nombre_de_places'))
    } else if (energie == 'essence') {
        primeRc = getRC4Essence(getValueInput('puissance'), getValueInput('nombre_de_places'))
    }
    return Math.round(parseInt(primeRc));
}
/*-----------------------------------------CALCULS CATEGORIE4-----------------------------*/

/*-----------------------------------------CALCULS CATEGORIE5-----------------------------*/
//Obtention de la RC en fonction du nombre de cylindres en CATEGORIE5
function getRCcylindre5(cylindre) {
    var primeRc;
    if (cylindre <= 49) {
        primeRc = 18780;
    } else if (cylindre >= 50 && cylindre <= 125) {
        primeRc = 29448;
    } else if (cylindre > 125) {
        primeRc = 34021;
    }
    return primeRc;
}

function getRC5() {
    var primeRc = getRCcylindre5(getValueInput('cylindre'));
    var tauxProrata = (getTaux(getValueInput('duree')) / 100)
    return Math.round(parseInt(primeRc * tauxProrata));
}
/*-----------------------------------------CALCULS CATEGORIE5-----------------------------*/


/*-----------------------------------------CALCULS CATEGORIE6-----------------------------*/
function getRC6(puissance) {
    var rc = 0;
    if (puissance == 2) {
        rc = 37601
    } else if (puissance >= 3 && puissance <= 6) {
        rc = 45181
    } else if (puissance >= 7 && puissance <= 10) {
        rc = 51078
    } else if (puissance >= 11 && puissance <= 14) {
        rc = 6545677
    } else if (puissance >= 15 && puissance <= 23) {
        rc = 86456
    } else if (puissance > 24) {
        rc = 104143
    } else {
        rc = 0;
    }
    return rc;
}
/*-----------------------------------------CALCULS CATEGORIE6-----------------------------*/
/*-----------------------------------------CALCULS GARANTIES CATEGORIE6-------------------*/

/*-----------------------------------------DEBUT CALCUL TIERCE COMPLETE ET TIERCE COLLUSION----- */
function alerteTierce() {
    $('#collisions').fadeIn()
}
//Obtention la valeur de la tierce complete ou de la tierce collision
function getTierceCat(tauxCatComp, tauxCatCol) {
    var tierce;
    var tauxCat;
    var tauxProrata = (getTaux(getValueInput('duree')) / 100)
    if ($('#tc-check').prop('checked')) {
        tauxCat = tauxCatComp;
        var valeurNeuveTaux = parseInt(getValueInput('valeur_neuve') * ((tauxCat) / 100));
        tierce = parseInt(valeurNeuveTaux * tauxProrata);
    } else if ($('#tcol-check').prop('checked')) {
        tauxCat = tauxCatCol;
        var valeurNeuveTaux = parseInt(getValueInput('valeur_neuve') * ((tauxCat) / 100));
        tierce = parseInt(valeurNeuveTaux * tauxProrata);
    }
    return tierce;
}
/*-----------------------------------------FIN CALCUL TIERCE COMPLETE ET TIERCE COLLUSION----- */

/*-----------------------------------------DEBUT CALCUL VOL--------------------------------------- */
function getVolCat(tauxCat) {
    var vol;
    if ($('#vol-check').prop('checked')) {
        var valeurVenaleTaux = parseInt(getValueInput('valeur_venale') * ((tauxCat) / 100));
        var tauxProrata = (getTaux(getValueInput('duree')) / 100)
        vol = parseInt(valeurVenaleTaux * tauxProrata);
    } else {
        vol = 0
    }
    return vol;
}
/*-----------------------------------------FIN CALCUL VOL--------------------------------------- */

/*---------------------------------DEBUT GARANTIE RECOURS DES TIERCES---------------------------*/
function getRecoursTierces() {
    var recoursTierce;
    if ($('#recours-check').prop('checked')) {
        recoursTierce = 'GRATUITS';
    } else {
        recoursTierce = 0;
    }
    return recoursTierce;
}
/*---------------------------------FIN GARANTIE RECOURS DES TIERCES----------------------------*/

/*----------------------------------DEBUT INCENDIE---------------------------------- */
function getIncendieBrute(tauxCat) {
    var incendie;
    if ($('#incendie-check').prop('checked')) {
        var valeurVenaleTaux = parseInt(getValueInput('valeur_venale') * ((tauxCat) / 100));
        var tauxProrata = (getTaux(getValueInput('duree')) / 100)
        incendie = parseInt(valeurVenaleTaux * tauxProrata);
    } else {
        incendie = 0
    }
    return incendie;
}
/*----------------------------------FIN INCENDIE-----------------------------------*/

/*----------------------------------DEBUT BRIS DE GLACE------------------------------*/
function getBrisDeGlaceBrute(brute) {
    var bris;
    if ($('#bris_check').prop('checked')) {
        var tauxProrata = (getTaux(getValueInput('duree')) / 100)
        bris = parseInt(brute * tauxProrata);
    } else {
        bris = 0;
    }
    return bris;
}
/*---------------------------------FIN BRIS DE GLACE---------------------------------*/

/*---------------------------------DEBUT DEFENSE ET RECOURS---------------------------*/
function getDefenseEtRecoursBrute(brute) {
    var defenseEtRecours;
    if ($('#defense-recours-check').prop('checked')) {
        var tauxProrata = (getTaux(getValueInput('duree')) / 100)
        defenseEtRecours = parseInt(brute * tauxProrata);
    } else {
        defenseEtRecours = 0;
    }
    return defenseEtRecours;
}
/*--------------------------------FIN DEFENSE ET RECOURS-----------------------------*/

/*--------------------------------DEBUT PERSONNES TRANSPORTEES---------------------- */
function getPersonnesTransporteesBrute(montantParPlace) {
    var tauxProrata = (getTaux(getValueInput('duree')) / 100)
    return parseInt((getValueInput('nombre_de_places') * montantParPlace) * tauxProrata);
}
/*---------------------------------FIN PERSONNES TRANSPORTEES----------------------- */

/*---------------------------------DEBUT AVANCE SUR RECOURS---------------------------*/
//Vérifier si l'avace dur recours est permis(pas d'avance sur recours si les garanties tierces complétes/collision sont prises)
function checkAvanceAvailable() {
    if ($('#tc-check').prop('checked') || $('#tcol-check').prop('checked')) {
        $('#avance-recours').prop('disabled', true);
        $('#avance_sur_recours_val').val(0);
    } else {
        if (getValueInput('categorie') != '4') {
            $('#avance-recours').prop('disabled', false);
        }
    }
}

function getAvanceSurRecoursBrute(taux, limitation) {
    checkAvanceAvailable();
    return parseInt(limitation * (getTaux(getValueInput('duree')) / 100) * (taux / 100));
}
/*---------------------------------FIN AVANCE SUR RECOURS-----------------------------*/



//Obtention de la RC en fonction de la catégorie
function getRC(categorie) {
    var rc;
    switch (categorie) {
        case '1':
            rc = getRC1(getValueInput('puissance'));
            break;
        case '2':
            rc = getRC2(getValueInput('charge'), getValueInput('energie'), getValueInput('puissance'));
            break;
        case '3':
            rc = getRC3(getValueInput('charge'), getValueInput('energie'), getValueInput('puissance'));
            break;
        case '4':
            rc = getRC4(getValueInput('energie'));
            break;
        case '5':
            getRC5();
            break;
        case '6':
            rc = getRC6(getValueInput('puissance'));
            break;
        default:
            rc = 0
    }
    return rc;
}
//Obtention de la tierce compléte ou de la tiérce collision en fonction da la catégorie
//Ces garanties sont résérvées aux voitures de moins de 5ans et avec une période de couverture d'au moins 6mois
function getTierces(categorie) {
    var tierce;
    if (getVoitureAge() <= 5 && getValueInput('duree') >= 6) {
        var tierce;
        var taux = getTaux(getValueInput('duree'));
        switch (categorie) {
            case "1":
                tierce = getTierceCat(5.50, 3)
                break;
            case "2":
                tierce = getTierceCat(10, 6)
                break;
            case "3":
                $('#tc-check').prop('disabled', true);
                alerteTierce();
                $('.close').on('click', function() {
                    $('#collision').fadeOut(3000);
                })
                tierce = getTierceCat(0, 19.25)
                break;
            case "4":
                $('#tc-check').prop('disabled', true)
                alerteTierce();
                $('.close').on('click', function() {
                    $('#collision').fadeOut(3000);
                })
                tierce = getTierceCat(0, 20)
                break;
            case "5":
                $('.tierce').prop('disabled', true);
                alerteTierce();
                $('.close').on('click', function() {
                    $('#collision').fadeOut();
                })
                tierce = getTierceCat(0, 0)
                break;
            case "6":
                tierce = getTierceCat(3, 2)
                break;
        }
    } else {
        $('.tierce').prop('disabled', false)
        $('#tierce-modal').fadeIn('3000', function() {
            $('.close').on('click', function() {
                $('#tierce-modal').fadeOut('3000')
            })
        })
        tierce = 0
    }
    return tierce
}
//Obtention de la prime vol en fonction de la categorie
function getVol(categorie) {
    var vol;
    switch (categorie) {
        case "1":
            vol = getVolCat(0.3);
            break;
        case "2":
            vol = getVolCat(0.15);
            break;
        case "3":
            vol = getVolCat(0.28);
            break;
        case "4":
            vol = getVolCat(0.42);
            break;
        case "6":
            var pack = getValueInput('packs');
            if (pack == "classic" || pack == "confort" || pack === "liberte") {
                vol = getVolCat(0.20);
            }
            break;
    }
    return vol;
}
//Obtention de la primedéfense et recours en fonction de la catégoorie
function getDefenseEtRecoursCat(categorie) {
    var defenseEtRecours;
    switch (categorie) {
        case '1':
            defenseEtRecours = getDefenseEtRecoursBrute(6000);
            break;
        case '2':
            defenseEtRecours = getDefenseEtRecoursBrute(8000);
            break;
        case '3':
            defenseEtRecours = getDefenseEtRecoursBrute(8000);
            break;
        case '5':
            defenseEtRecours = getDefenseEtRecoursBrute(3000);
            break;
        case '6':
            defenseEtRecours = 'GRATUIT';
            break;
    }
    return defenseEtRecours;
}
//Obtention de la prime Bris de glace en fonction de la puissance
function getBrisDeGlacePuissance(puissance) {
    var brisDeGlace;
    var pack = getValueInput('pack');
    var places = getValueInput('nombre_de_places')
    if (puissance >= 1 && puissance <= 7) {
        brisDeGlace = getBrisDeGlaceBrute(15750);
    }
    if (puissance >= 8 && puissance <= 10) {
        brisDeGlace = getBrisDeGlaceBrute(20000);
    }
    if (puissance >= 11 && puissance <= 14) {
        brisDeGlace = getBrisDeGlaceBrute(26250);
    }
    if (puissance >= 15 && puissance <= 20) {
        brisDeGlace = getBrisDeGlaceBrute(31500);
    }
    if (puissance >= 24) {
        brisDeGlace = getBrisDeGlaceBrute(36750);
        var primebrute_6 = 36750;
    }
    if (places == 39 || places >= 60) {
        brisDeGlace = getBrisDeGlaceBrute(105000);
    }
    if (pack == "classic" || pack == "confort" || pack == "liberte") {
        brisDeGlace = getBrisDeGlaceBrute(10000);
    }
    return brisDeGlace;
}
//Obtention de la prime garantie en fonction de la catégorie
function getIncendieCat(categorie) {
    var incendie;
    var pack = getValueInput('pack');
    switch (categorie) {
        case "1":
            incendie = getIncendieBrute(0.5);
            break;
        case "2":
            incendie = getIncendieBrute(0.75);
            break;
        case "3":
            incendie = getIncendieBrute(1.5);
            break;
        case "4":
            incendie = getIncendieBrute(1.5);
            break;
        case "6":
            if (pack == "classic" || pack == "confort" || pack == "liberte") {
                incendie = getIncendieBrute(0.20);
            }
            break;
    }
    return incendie;
}
//Obtention de la garantie peesonnes transportees en fonction des montants par place et des options
function getPersonnesTransportees() {
    var option = getValueInput('persones_trans');
    var pack = getValueInput('packs');
    var personnesTransportees;
    switch (option) {
        case '1':
            personnesTransportees = getPersonnesTransporteesBrute(1200);
            break;
        case '2':
            personnesTransportees = getPersonnesTransporteesBrute(2400);
            break;
        case '3':
            personnesTransportees = getPersonnesTransporteesBrute(3600);
            if (pack == 'mini') {
                personnesTransportees = getPersonnesTransporteesBrute(5000);

            } else if (pack == "classic" || pack == "confort" || pack == "liberte") {
                personnesTransportees = getPersonnesTransporteesBrute(5000);
            }
            break;
    }
    return personnesTransportees;
}

//Obtention de la garantie avance sur recours
function getAvanceSurRecoursCat(categorie) {
    var avanceSurRecours;
    var option = getValueInput('avance-recours');
    if (option == '1') {
        switch (categorie) {
            case '1':
                avanceSurRecours = getAvanceSurRecoursBrute(3, 500000)
                break;
            case '2':
                avanceSurRecours = getAvanceSurRecoursBrute(5.10, 500000)
                break;
            case '3':
                avanceSurRecours = getAvanceSurRecoursBrute(6, 500000)
                break;
            case '4':
                avanceSurRecours = getAvanceSurRecoursBrute(6.20, 500000)
                break;
            case '6':
                if (getValueInput('packs') == 'classic') {
                    avanceSurRecours = 10000
                }
                break;
        }
    } else if (option == '2') {
        avanceSurRecours = getAvanceSurRecoursBrute(3, 750000)
    } else if (option == '3') {
        avanceSurRecours = getAvanceSurRecoursBrute(3, 1000000)
    }
    return avanceSurRecours
}
//Obtention de l'assistance en fonction de la catégorie
function getAssistaceCat(categorie) {
    var assistance;
    if (categorie == 1) {
        $('#assistance_check').prop('checked', true);
        assistance = 'GRATUIT';
    } else {
        $('#assistance_check').prop('checked', false);
        assistance = '0';
    }
    $('#assistance_check').prop('disabled', true);
    return assistance;
}
//Changement de l'apparition du formulaire en fonction de la catégorie
function getCaracteristiquesCat() {
    $('.caracteristiques_sect').find('select,input').each(function(i, champ) {
        var id = "#" + $(this).attr('id');
        $(this).on("mouseleave", function() {
            if (id == "#categorie") {
                getCategorieCol();
            }
        })
    })
}
//Calcul de la somme des garanties
function getSumGaranties() {
    var categorie = getValueInput('categorie');
    var puissance = getValueInput('puissance');
    var somme = 0;
    var garanties = ['defense_et_recours_val', 'incendie_val', 'vol_val', 'bris_de_glace_val', 'tierce_val', 'avance_sur_recours_val', 'personnes_transportees'];
    for (var i = 0; i < garanties.length; i++) {
        var inputValue = parseInt(getValueInput(garanties[i]));
        somme += inputValue;
    }
    return Math.floor(somme);
}
//Calcul de la prime nette
function getPrimeNette() {
    var categorie = getValueInput('categorie');
    puissance = getValueInput('puissance');
    var garanties = getSumGaranties();
    rc = getRC(getValueInput('categorie'));
    var primeNette = parseInt(rc) + garanties;
    return primeNette;
}
//Les accessoires
function getAccessoires() {
    var accessoire = 0;
    var nette = getPrimeNette();
    if (nette <= 50000) {
        accessoire = 2000;
    } else if (nette > 50000 && nette <= 100000) {
        accessoire = 3000;
    } else if (nette > 100000 && nette <= 500000) {
        accessoire = 5000;
    } else if (nette > 500000 && nette <= 1000000) {
        accessoire = 8000;
    } else if (nette > 1000000 && nette <= 5000000) {
        accessoire = 10000;
    } else {
        accessoire = 20000;
    }
    return accessoire;
}
//Les taxes
function getTaxe() {
    var total = parseInt(getPrimeNette()) + parseInt(getAccessoires());
    var taux = parseInt(10) / 100;
    return Math.floor(total * taux);
}

//La FGA
function getFGA() {
    var rc = parseInt(getRC(getValueInput('categorie')));
    var taux = parseInt(25) / 1000;
    return Math.floor(rc * taux);
}
//Le bonus sur la RC 
function getBonusRC() {
    var rc = parseInt(getRC(getValueInput('categorie')));
    var bonusRc = parseInt(getValueInput('bonus_sur_rc')) / 100;
    return Math.floor(rc * bonusRc);
}
//La réduction commerciale
function getReductionCommerciale() {
    var totale = parseInt(getPrimeNette()) + parseInt(getTaxe()) + parseInt(getFGA()) + parseInt(getAccessoires());
    var rc = parseInt(getRC(getValueInput('categorie')));
    var reductionCom = parseInt(getValueInput('reduction_commerciale')) / 100;
    var valueReduction = totale - rc;
    return valueReduction * reductionCom;
}
//Calcul de la prime totale
function getPrimeTotale() {
    var primeTotale = parseInt(getPrimeNette()) + parseInt(getTaxe()) + parseInt(getFGA()) + parseInt(getAccessoires());
    var reductions = parseInt(getValueInput('bonus-rc')) + parseInt(getValueInput('reduction-com'));
    return primeTotale - reductions;
}
//Les stocks d'attestations
function getAttestations() {
    var categorie = getValueInput('categorie');
    if (categorie == '4') {
        $('.jaune-col').fadeOut('3000');
        $('.verte-col').fadeIn('3000');
        $('.cedeao-col').fadeIn('3000');
    } else if (categorie == '5') {
        $('.verte-col').fadeOut('3000')
        $('.cedeao-col').fadeOut('3000');
        $('.jaune-col').fadeIn('3000');
    } else {
        $('.jaune-col').fadeIn('3000');
        $('.cedeao-col').fadeIn('3000');
        $('.verte-col').fadeOut('3000');
    }
}
//Obtenir les données des differentes sections
function getSectionData(section_number) {
    var sectionData = [];
    var insertedData;
    $('#steps-uid-0-p-' + section_number).find('select,input,checkbox').each(function(i, champ) {
            insertedData = champ.value;
            if (insertedData != '' && insertedData != 0 && insertedData != 'on') {
                if (section_number == 3) {
                    if (champ.type == 'checkbox') {
                        if (champ.checked) {
                            sectionData.push(insertedData)
                        }
                    } else if (champ.type != 'checkbox') {}
                } else {
                    sectionData.push(insertedData)
                }
            }
        })
        //console.log(sectionData);
    return sectionData;
}
//Vérification des stocks
function chechStock() {
    var attestationsVertes = ['1', '2'];
    var attestationsJaunes = ['3', '4'];
    var attestationsCedeao = ['5', '6'];

    function pushAttestations(selector, tab = []) {
        $(selector).each(function() {
            tab.push($(this).val())
        })
        return tab;
    }
    var vertes = pushAttestations('#vertes-attestations option', attestationsVertes);
    var jaunes = pushAttestations('#jaunes-attestations option', attestationsJaunes);
    var cedeao = pushAttestations('#cedeao-attestations option', attestationsCedeao);
    $("#vertes").autocomplete({
        source: vertes
    });
    $("#jaunes").autocomplete({
        source: jaunes
    });
    $("#cedeao").autocomplete({
        source: cedeao
    });
}
//Ecrire les marques des voitues
function setMarques() {
    var marques_voitures = ['FIAT', 'BMW', 'ACURA', 'FORD', 'HOLDEN', 'HONDA', 'HYUNDAI', 'ISUZU', 'KIA', 'LEXUS', 'NISSAN', 'RENAULT', 'SEAT', 'CHEVROLET', 'CITROEN', 'DACIA', 'INFINITI', 'MAZDA', 'MITSUBISHI', 'PEUGEOT', 'SUBARU', 'TOYOTA', 'VOLSWAGEN']
    $('#marque').autocomplete({
        source: marques_voitures
    })
}
//Ecrire la valeur de la RC calculée
function setRC() {
    $('#rc').val(getRC(getValueInput('categorie')));
}
//Ecrire la valeur de la tierce compléte ou de la tierce collision
function setTierce() {
    $('#tierce_val').val(getTierces(getValueInput('categorie')))
}
//Ecrire la valeur de la prime de vol
function setVol() {
    $('#vol_val').val(getVol(getValueInput('categorie')));
}
//Ecrire la valeur du recours des tierces
function setRecoursTierces() {
    $('#recours_val').val(getRecoursTierces());
}
//Ecrire la valeur de defense et recours
function setDefenseEtRecours() {
    $('#defense_et_recours_val').val(getDefenseEtRecoursCat(getValueInput('categorie')));
}
//Ecrire la veleur de la prime bris de glace
function setBrisDeGlace() {
    $('#bris_de_glace_val').val(getBrisDeGlacePuissance(getValueInput('puissance')));
}
//Ecrire la valeur de la prime ince,die
function setIncendie() {
    $('#incendie_val').val(getIncendieCat(getValueInput('categorie')));
}
//Ecrire la valeur de la prime personnes transportées
function setPersonnesTransportees() {
    $('#personnes_transportees').val(getPersonnesTransportees())
}
//Ecrire la defense sur recours
function setAvanceSurRecours() {
    $('#avance_sur_recours_val').val(getAvanceSurRecoursCat(getValueInput('categorie')))
}
//Ecrire l'assistance
function setAssistance() {
    $('#assistance_val').val(getAssistaceCat(getValueInput('categorie')));
}
//Ecrire la prime nette
function setPrimeNette() {
    $('#prime-nette,#prime-nett').val(getPrimeNette());
}
//Ecrire la valeur des accessoires 
function setAccessoires() {
    $('#accessoires,#accessoire').val(getAccessoires());
}
//Ecrire la FGA
function setFGA() {
    $('#fga,#fg').val(getFGA());
}
//Ecrire la taxe
function setTaxes() {
    $('#taxe,#tax').val(getTaxe());
}
//Ecrire le bonus sur RC
function setBonusRC() {
    $('#bonus-rc').val(getBonusRC());
}
//Ecrire la réduction commerciale
function setReductionCommerciale() {
    $('#reduction-com').val(getReductionCommerciale());
}
//Ecrire la prime totale
function setPrimeTotale() {
    var totale = getPrimeTotale();
    $('#prime-totale,#prime-total').val(totale);
    $('#valueTotale').val(totale);
}
//Ecrire les réductions sur le récapitulatif
function setReductions() {
    $('#red').val(getValueInput('reduction-com'));
    $('#bonus').val(getValueInput('bonus-rc'));
}

//Ecrire les données sur le récaputilatif
function writeData() {
    var assureData = getSectionData(0);
    var periodeData = getSectionData(1);
    var garantiesData = getSectionData(3);
    var vehiculeData = getSectionData(2);
    var assureLibelles = ['Prénom', 'Nom'];
    $('#assure_data li').remove();
    for (a = 0; a < assureData.length; a++) {
        $('#assure_data').append('<li>' + assureData[a] + '</li>');
    }
    $('#periode_data li').remove();
    for (p = 0; p < periodeData.length; p++) {
        $('#periode_data').append('<li>' + periodeData[p] + '</li>');
    }
    $('#garanties_data li').remove();
    for (g = 0; g < garantiesData.length; g++) {
        $('#garanties_data').append('<li>' + garantiesData[g] + '</li>');
    }
    $('#vehicule_data li').remove();
    for (v = 0; v < garantiesData.length; v++) {
        $('#vehicule_data').append('<li>' + garantiesData[v] + '</li>');
    }
}

//Rafréchir les valeurs des garanties si les caractéristiques changent
function resetCheckboxes() {
    $('#steps-uid-0-t-3').on('click', function() {
        setRC();
        if ($('#incendie-check').prop('checked')) {
            setIncendie();
        } else if ($('#bris_check').prop('checked')) {
            setBrisDeGlace();
        } else if ($('#vol-check').prop('checked')) {
            setVol();
        } else if ($('.tierce').prop('checked')) {
            setTierce();
        } else if ($('#defense-recours-check').prop('checked')) {
            setDefenseEtRecours();
        }
        setPersonnesTransportees();
        setAvanceSurRecours();
        setAssistance();
        setPrimeNette();
    })
    $('#steps-uid-0-t-4').on('click', function() {
        setAccessoires();
        setFGA();
        setTaxes();
        setPrimeNette();
        setPrimeTotale();
        setBonusRC();
        setReductionCommerciale();
    })
    $('#steps-uid-0-t-5').on('click', function() {
        getAttestations()
    })
    $('#steps-uid-0-t-6').on('click', function() {
        setAccessoires();
        setFGA();
        setTaxes();
        setPrimeNette();
        setPrimeTotale();
        setReductions();
        writeData();
    })
}

//Appel des fonctions
$(document).ready(function() {
    resetCheckboxes();
    //Appel aux fonctions
    $('#souscription-form').find('select,input').each(function(i, champ) {
            $(this).on('change', function() {
                //Action sur les champs concernés par le calcul de la date d'effet
                if (champ.id == 'effet' || champ.id == 'duree') {
                    getEcheance();
                    //Action sur les champs concérnés par me changement de catégorie
                } else if (champ.id == 'categorie') {
                    getCaracteristiquesCat();
                    //Action sur les champs concérnés par le changement de puissace
                } else if (champ.id == 'puissance') {
                    setRC();
                    //Champs concérnés pour le paramétrage de la catégorie2
                } else if (champ.id == 'energie' || champ.id == 'charge' || champ.id == 'surplus' || champ.id == 'duree') {
                    setRC();
                }
                //Champs concérnés pour le paramétrage de la catégoie3
                else if (champ.id == 'puissance' || champ.id == 'energie' || champ.id == 'charge') {
                    setRC();
                }
                //Champs concérnés pour le paramétrage de la catégoie4
                else if (champ.id == 'energie' || champ.id == 'puissance' || champ.id == 'nombre_de_places') {
                    setRC();
                }
                //Champs concérnés pour le paramétrage de la catégoie5
                else if (champ.id == 'energie' || champ.id == 'puissance' || champ.id == 'cylindre') {
                    setRC();
                } //Champs concérnés par la tierce complete et la tierce collision
                else if (champ.id == 'tc-check' || champ.id == 'tcol-check' || champ.id == 'duree' || champ.id == 'categorie') {
                    $('.tierce').not(this).prop('checked', false);
                    setTierce();
                } else if (champ.id == 'vol-check' || champ.id == 'valeur_neuve' || champ.id == 'valeur_venale' || champ.id == 'categorie' || champ.id == 'packs') {
                    setVol();
                } //Champ concérnés pour le paramétrage de la defense et recours
                else if (champ.id == 'categorie' || champ.id == 'duree') {
                    setDefenseEtRecours();
                } //Champs concérnés par le paramétrage du bris de glace
                else if (champ.id == 'bris_check' || champ.id == 'puissance' || champ.id == 'categorie' || champ.id == 'nombre_de_places' || champ.id == 'packs') {
                    setBrisDeGlace();
                } //Champs conncérnés par le paramétrage de la prime incendie
                else if (champ.id == 'incendie-check' || champ.id == 'categorie' || champ.id == 'duree' || champ.id == 'valeur_venale') {
                    setIncendie();
                } else if (champ.id == 'defense-recours-check') {
                    setDefenseEtRecours();
                } //Champs concérnés par le paramétrage de la garantie personnes transportées
                else if (champ.id == 'persones_trans' || champ.id == 'duree' || champ.id == 'nombre_de_places' || champ.id == 'packs' || champ.id == 'packs') {
                    setPersonnesTransportees()
                } //Champs concérnés par le paramétrage de la garantie avance sur recours
                else if (champ.id == 'avance-recours' || champ.id == 'duree' || champ.id == 'packs') {
                    setAvanceSurRecours();
                } //Champs concerés par le paramétrage de l'assistance
                else if (champ.id == 'categorie') {
                    setAssistance();
                } //Champs concernés par la FGA
                else if (champ.id == 'categorie') {
                    setFGA();
                }
                //Champs concérnés par le bonus sur RC
                else if (champ.id == 'bonus_sur_rc' || champ.id == 'categorie' || champ.id == 'puissance') {
                    setBonusRC();
                    setPrimeTotale();
                } //Champs concérnés par les attestations
                else if (champ.id == 'categorie') {
                    getAttestations();
                } //Champs concérnés par le chargement des numéros d'attestations
                else if (champ.id == 'jaunes' || champ.id == 'vertes' || champ.id == 'cedeao') {
                    chechStock();
                } //Champs concernés par les réductions commerciales
                else if (champ.id == 'reduction_commerciale') {
                    setReductionCommerciale();
                    setPrimeTotale();
                }
                //Champs concérnés par le chargement des differentes marques de voitures
                else if (champ.id == 'marque') {
                    setMarques();
                }
            })
        })
        //L'appel à la fonction setRecoursTierces e dépends de aucun paramétre
    setRecoursTierces();
    //Number divider
    $('.divide').divide();
});