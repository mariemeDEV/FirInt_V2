
 <form method='POST' id="souscription-form" class="auto-form">
      <div>
        <h3>Assuré</h3>
        <section><!--Début Bloc assuré-->
        <div class="row">
            <div class="col col-md-6">
            <input type="hidden" name='souscription'>
                <label for="prenom">Prénom assuré <span class="require-caracter">*</span></label>
                <input id="prenom" name="prenom_assure" type="text" class="required">
            </div>
            <div class="col col-md-6">
                <label for="nom">Nom assuré <span class="require-caracter">*</span></label>
                <input id="nom" name="nom_assure" type="text" class="required">
            </div>
        </div>
        <div class="row">
            <div class="col col-md-6">
                <label for="adresse">Adresse </label>
                <input id="adresse" name="adresse_assure" type="text">
            </div>
            <div class="col col-md-6">
                <label for="telephone">Téléphone </label>
                <input id="telephone" name="telephone_assure" type="text">
            </div>
        </div>
        <div class="row">
            <div class="col col-md-6">
                <label for="email">E-mail </label>
                <input id="mail" name="email_assure" type="email">
            </div>
            <div class="col col-md-6">
                <label for="ville">Ville <span class="require-caracter">*</span></label>
                <select name="ville_assure" id="ville">
                <option value="00010">Dakar</option>
                <option value="00150">Thies</option>
                </select>
            </div>
        </div>
        <p><span class="require-caracter">(*) Champs Obligatoires</span></p>
        </section><!--Fin Bloc assuré-->

        <h3>Période de garantie</h3><!--Début période de garantie-->
        <section><!--Début période de garantie-->
            <div class="row">
                <div class="col col-md-6">
                    <label for="effet contrat">Date d'effet <span class="require-caracter">*</span></label>
                    <input id="effet" name="date_effet" type="date" class="required">
                </div>
                <div class="col col-md-6">
                <label for="duree contrat">Durée contrat <span class="require-caracter">*</span></label>
                    <select id="duree" name="duree_contrat">
                        <option value="1">1 mois</option>
                        <option value="2">2 mois</option>
                        <option value="3">3 mois</option>
                        <option value="4">4 mois</option>
                        <option value="5">5 mois</option>
                        <option value="6">6 mois</option>
                        <option value="12">Annuel</option>
                    </select>
                </div>
            </div>
            <p class="echeance">Echéance : <p class="echeance" id="date_echeance"></p></p>
            <input id="echeance" name="date_echeance" type='hidden'>
        </section><!--Fin Période de garantie-->

        <h3>Caractéristiques du véhicule</h3>
            <section class="caracteristiques_sect" ><!--Début caractéristiques véhcule-->
            <div class="row">
                <div class="col col-md-4" id="categorie_col">
                    <label for="Categorie vehicule">Catégorie<span class="require-caracter">*</span></label>
                    <select class="required" id="categorie" name='categorie'>
                        <option value="categorie" disabled selected>Catégorie</option>
                        <option value="1">CAT 401</option>
                        <option value="2">CAT 402</option>
                        <option value="3">CAT 403</option>
                        <option value="4">CAT 404</option>
                        <option value="5">CAT 405</option>
                        <option value="6">CAT 418</option>
                    </select>
                </div>
                <div class="col col-md-4" id="genre_col">
                    <label for="Genre">Genre </label>
                    <input id="genre" name="genre" type="text" value="" placeholder="Genre">
                </div>
                <div class="col col-md-4" id="marque_col">
                    <label for="Marque">Marque <span class="require-caracter">*</span></label>
                    <select name="marque" id="marque">
                        <option value="marque" disabled selected>Marque</option>
                        <option value="1">A</option>
                        <option value="2">B</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col col-md-4" id="modele_col">
                    <label for="Modele">Modéle</label>
                    <input id="modele" name="modele" type="text" value="" placeholder="Modéle">
                </div>
                <div class="col col-md-4" id="immatriculation_col">
                    <label for="Immatriculation">Immatriculation <span class="require-caracter">*</span></label>
                    <input id="immatriculation" name="immatriculation" type="text" class="required" value="" placeholder="Immatriculation">
                </div>
                <div class="col col-md-4" id="puissance_col">
                    <label for="Puissance">Puissance <span class="require-caracter">*</span></label>
                    <input id="puissance" name="puissance" type="number" class="required" value="" placeholder="Puissance" min="1" max="1000">
                </div>
            </div>
            <div class="row">
                <div class="col col-md-4" id="vv_col">
                    <label for="Valeur neuve">Valeur neuve</label>
                    <input id="valeur_neuve" class="divide" name="valeurVenale" type="text" value="" placeholder="Valeur Neuve">
                </div>
                <div class="col col-md-4" id="vn_col">
                    <label for="Valeur neuve">Valeur vénale</label>
                    <input id="valeur_venale" class="divide" name="valeurNeuve" type="text" value="" placeholder="Valeur Vénale">
                </div>
                <div class="col col-md-4" id="energie_col">
                    <label for="Energie">Enérgie</label>
                    <select id="energie" name="energie" type="text">
                        <option value="energie" disabled selected>Energie</option>
                        <option value="essence">Essence</option>
                        <option value="diesel">Diesel</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col col-md-4" id="nombre_de_places_col">
                    <label for="Nombre de places">Nombre de places <span class="require-caracter">*</span></label>
                    <select id="nombre_de_places" name="nombreDePlaces" class="required">
                        <option value="Nombre de places" selected disabled>Nombre de places</option>
                        <option value="5">5</option>
                        <option value="3">3 places</option>
                        <option value="4">4 places</option>
                        <option value="2">2 places</option>
                        <option value="6">6 places</option>
                        <option value="7">7 places</option>
                        <option value="8">8 places</option>
                        <option value="9">9 places</option>
                        <option value="10">10 places</option>
                        <option value="11">11 places</option>
                        <option value="12">12 places</option>
                        <option value="13">13 places</option>
                        <option value="14">14 places</option>
                        <option value="15">15 places</option>
                        <option value="23">23 places</option>
                        <option value="24">24 places</option>
                        <option value="28">28 places</option>
                        <option value="29">29 places</option>
                        <option value="39">39 places</option>
                    </select>
                </div>
                <div class="col col-md-4" id="mise_en_circulation_col">
                    <label for="Date de mse en crculation">Date de mise en circulation <span class="require-caracter">*</span></label>
                    <input id="date_circulation" name="dateDeMiseEnCirculation" type="date" class="required" value="">
                </div>
                <div class="col col-md-4" id="charge_col">
                    <label for="Charge utile" id="charge_label">Charge utile <span class="require-caracter">*</span></label>
                    <select name="chargeUtile" id="charge">
                        <option value="Charge utile" selected disabled>Charge utile</option>
                        <option value="Break">Break</option>
                        <option value="Moins de 3,5T">Moins de 3,5T</option>
                        <option value="Plus de 3,5T">Plus de 3,5T</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col col-md-4" id="cylindre_col">
                    <label for="Cylindre">Cylindre</label>
                    <input id="cylindre" name="cylindre" type="number">
                </div>
                <div class="col col-md-4" id="surplus_col">
                    <label for="Surplus de places" id="label_surplus">Surplus <span class="require-caracter">*</span></label>
                    <select name="surplus" id="surplus" class="required">
                        <option value="Surplus" selected disabled>Surplus</option>
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>               
                </div>
                <!--Les packs-->
                    <div class="col col-md-4" id="packs_col">
                        <label for="Packs" >Packs <span class="require-caracter">*</span></label>
                        <select name="pack" id="packs">
                            <option value="Pack" value="Pack" selected disabled>Pack</option>
                            <option value="mini">Pack Mini</option>
                            <option value="classic">Pack Classic</option>
                            <option value="confort">Pack Confort</option>
                            <option value="liberte">Pack Libérté</option>
                        </select>
                    </div>
            </div>
        </section><!--Fin caractéristiques véhcule-->
        <h3>Garanties</h3><!--Début garanties-->
        <section>
        <table  class="primes-tab">
            <tbody>
                <tr>
                    <td>
                        <input type="checkbox" id="rc-check" class='val_input divide' checked disabled value='Responsabilité Civile'>
                        <label for="RC" class="garantie-label">Résponsabilité civile</label>
                    </td>
                    <td>
                        <input type="text" class='garantie-val divide' name='RC_value' id="rc" disabled value="0">
                        <input type="hidden" name='Rc_code' value='17'>
                    </td>

                    <td>
                        <input type="checkbox" id="bris_check" class='val_input'>
                        <label for="BG" class="garantie-label">Bris de glace</label>
                    </td>
                    <td>
                        <input type="text" class='garantie-val divide' id='bris_de_glace_val' name='BG_value' value="0">
                        <input type="hidden" name='BG' value='7'>
                     </td>

                </tr>
                <tr>
                    <td>
                        <input type="checkbox" id="recours-check" class='val_input' disabled checked value='Recours des tiers'>
                        <label for="BG" class="garantie-label">Recours des tiers</label>
                    </td>
                    <td>
                        <input type="text" class='garantie-val' id="recours_val" name='RTI_value' value="0">
                        <input type="hidden" name='Rti_code' value='18'>
                    </td>
                    <td> 
                        <input type="checkbox" id="tc-check" class='val_input tierce'>
                        <label for="BG" class="garantie-label">Tiérce complete</label>
                        <input type="checkbox" id="tcol-check" class='val_input tierce'>
                        <label for="tcol" class="garantie-label">Tiérce collision</label>
                    </td>
                    <td>
                        <input type="text" class='garantie-val divide' value="0" id='tierce_val' name='TIERCE_value'>
                        <input type="hidden" value="5" name='TC'>
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="checkbox" id="defense-recours-check" class='val_input'>
                        <label for="DR" class="garantie-label">Défense et recours</label>
                    </td>
                    <td>
                        <input type="text" class='garantie-val divide' name='DR_value' value="0" id='defense_et_recours_val'>
                        <input type="hidden" value='1' name='DR'>
                    </td>
                        <td>
                            <select class="form-control" name="ASR" id="avance-recours">
                                <option value="0" selected>Avance sur recours</option>
                                <option value="9">Avance sur recours Option 1</option>
                                <option value="22">Avance sur recours Option 2</option>
                                <option value="23">Avance sur recours Option 3</option>
                            </select>
                        </td>
                    <td>
                        <input type="text" class='garantie-val divide' value="0" id='avance_sur_recours_val' name='ASR_value'>
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="checkbox" class='val_input divide' id="incendie-check">
                        <label for="BG" class="garantie-label">Incendie</label>
                    </td>
                    <td>
                        <input type="text" class='garantie-val divide' name='INC_value' id='incendie_val' name='INCENDIE_value' value="0">
                        <input type="hidden" name="INC" value='2'>
                    </td>
                    <td>
                        <select class="form-control" name="PT" id="persones_trans">
                            <option value="0" selected>Personnes transportées</option>
                            <option value="11">Personnes transportées Option1</option>
                            <option value="19">Personnes transportées Option2</option>
                            <option value="20">Personnes transportées Option3</option>
                            <option value="21">Personnes transportées Option4</option>
                        </select>
                    </td>
                    <td>
                        <input type="text" class='garantie-val divide' id='personnes_transportees' name='PT_value' value="0">
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="checkbox" id='vol-check' class='val_input'>
                        <label for="Vol" class="garantie-label">Vol</label>
                    </td>
                    <td>
                        <input type="text" id='vol_val' class='garantie-val divide' name='VoL_value' value='0'>
                        <input type="hidden" name="VoL" value='3'>
                    </td>
                    <td>
                        <input type="checkbox" id="assistance_check" class='val_input'>
                        <label for="Assistance" class="garantie-label">Assistance</label>
                    </td>
                    <td>
                        <input type="text" class='garantie-val divide' name='ASSISTANCE_value' id='assistance_val' name='ASSISTANCE_value' value="GRATUIT">
                        <input type="hidden" class='garantie-val' name='ASSISTANCE_code' value="13">

                        <input type="hidden" class='garantie-val' name='carte_brune' value="12">
                    </td>
                </tr>
            </tbody>
        </table>
        </section><!--Fin caractéristiques véhcule-->

        <h3>Quitence</h3><!--Début quittence-->
        <section class='prime-sector' id='prime-section'>
            <table class="table table-bordered mbn decompte-tab">
                <thead>
                    <tr class="decompte-header">
                        <th class='decompte-header'>Bonus RC</th>
                        <th class='decompte-header'>Réduction Com.</th>
                        <th class='decompte-header'>FGA</th>
                        <th class='decompte-header'>Taxes</th>
                        <th class='decompte-header'>Accessoires</th>
                        <th class='decompte-header'>Prime Nette</th>
                        <th class='decompte-header'>Prime totale</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <select class="form-control" name="bonus_rc" id="bonus_sur_rc">
                                <option value="0">0</option>
                                <option value="5">5%</option>
                                <option value="10">10%</option>
                                <option value="15">15%</option>
                                <option value="20">20%</option>
                            </select>
                        </td>
                        <td>
                            <select class="form-control" name="reduction-commerciale" id="reduction_commerciale">
                                <option value="0">0</option>
                                <option value="5">5%</option>
                                <option value="10">10%</option>
                                <option value="15">15%</option>
                                <option value="20">20%</option>
                                <option value="25">25%</option>
                                <option value="30">30%</option>
                                <option value="35">35%</option>
                            </select>
                        </td>
                        <td><input type="text" value="0" class ="divide" id="fga"  disabled name='fga'></td>
                        <td><input type="text" value="0" class ="divide" id="taxe" disabled name='taxe'></td>
                        <td><input type="text" value="0" class ="divide" id="accessoires" disabled name='acc'></td>
                        <td><input type="text" value="0" class ="divide" id="prime-nette" disabled name='nette'></td>
                        <td><input type="text" value="0" class ="divide" id="prime-totale" disabled name='totale'></td>
                    </tr>
                </tbody>
            </table>
            <div class="prime_section">
                <h1 class="total-text animated fadeInLeft animation-delay-100">PRIME TOTALE(FCFA)</h1>
                <input type='text' value='0' id='valueTotale' class='divide total-input  animated fadeInLeft animation-delay-100' disabled>
                <img src="./assets/img/patterns/prime.png" class="animated fadeInLeft animation-delay-100" alt="">
                <label for="" style='position: relative;left: 235px;top: 169px;color: white !important;'>Bonus RC</label>
                <p class="reductions"><input type="text" class='garantie-val divide' name='bonus-sur-rc' id='bonus-rc' value="0" 
                style='position: relative;
                top: 123px;
                width: 90px !important;
                left: 313px;
                background: #011221;
                border: none;
                color: #cc9e39;
                font-weight: bold;' disabled>
                </p>
                <label for="" style='position: relative;left: 472px;top: 80px;color:white !important'>Réduction Com.</label>
                <p class="reductions"><input type="text" class='garantie-val' name='reduction-com' id='reduction-com' value="0" 
                    style='position: relative;
                    top: 47px;
                    width: 56px !important;
                    left: 601px;
                    background: #011221;
                    border: none;
                    color: #cc9e39;
                    font-weight: bold;' disabled>
                </p>
            </div>
        </section><!--Fin quittence-->

        <h3>Validation</h3><!--Début validation-->
        <section class='documents-sector' id='documents-section'>
           <div class="row conditions-row" style="margin-left:15px !important;position:relative !important;top:-31px !important;color: #163b66 !important">
                <h3>Confirmez-vous la création de ce contrat ?</h3>
                <p>Les actions suivates seront éxecutées</p>
                <ul>
                    <li>Création d'une police</li>
                    <li>Edition des conditions particuliéres</li>
                    <li>Edition des attestations</li>
                </ul>
           </div>
           <div class="row inputs-row">
                <?php 
                    $attJaunes = json_decode($jauneData);
                    echo '<div class="col-md-6 jaune-col">
                    <label for="attestations jaunes" class="garantie-label">No attestation jaune</label>
                    <select id="att_jaune" name="att_jaunes" type="text" style="text-align:center !important">';
                    echo '<option value="No attestation jaune" selected disabled>attestations jaunes</option>';
                    foreach($attJaunes as $key=>$attJaune){
                        echo '<option value="'.$attJaune->numero_attestation.'">'.$attJaune->numero_attestation.'</option>';
                    }
                    echo '</select></div>';
                    $attVertes = json_decode($verteData);
                    echo '<div class="col-md-6 vert-col">
                    <label for="attestations vertes" class="garantie-label">attestations vertes</label>
                    <select id="att_verte" name="att_vertes" type="text" style="text-align:center !important">';
                    echo '<option value="No attestation verte" selected disabled>No attestation verte</option>';
                    foreach($attVertes as $key=>$attVerte){
                        echo '<option value="'.$attVerte->numero_attestation.'">'.$attVerte->numero_attestation.'</option>';
                    }
                    echo '</select></div>';
                    $attCedeao = json_decode($cedeaoData);
                    echo '<div class="col-md-6 cedeao-col">
                    <label for="attestations_cedeao" class="garantie-label">attestations cedeao</label>
                    <select  id="att_cedeao"  name="att_cedeao" type="text" style="text-align:center !important">';
                    echo '<option value="No attestation cedeao" selected disabled>No attestation cedeao</option>';
                    foreach($attCedeao as $key=>$attC){
                        echo '<option value="'.$attC->numero_attestation.'">'.$attC->numero_attestation.'</option>';
                    }
                    echo '</select></div>';
                ?>
                <!--div class="col-md-6 jaune-col">
                    <label for="attestations jaunes" class="garantie-label">No attestation jaune</label>
                    <input id="jaunes" name="att_jaunes" type="text" class="required" style='text-align:center !important'>
                </div>
                <div class="col-md-6 verte-col">
                    <label for="attestations vertes" class="garantie-label">No attestation verte</label>
                    <input id="vertes" name="att_vertes" type="text" class="required" style='text-align:center !important'>
                </div>
                <div class="col-md-6 cedeao-col">
                    <label for="attestations_cedeao" class="garantie-label">No attestation cedeao</label>
                    <input id="cedeao" name="att_cedeao" type="text" class="required" style='text-align:center !important'>
                </div-->
           </div>
        </section><!--Fin validation-->

        <h3>Récaputilatif</h3><!--Début récaputilatif-->
        <section class='recap-sector' id='recap-section'>
            <section id="content" class="table-layout animated fadeIn">
            <!--Begi left-->
            <aside class="tray tray-left tray310 p10 recap-tray">
                <h4> ASSURE</h4>
                <hr class="alt short">
                    <ul id='assure_data'></ul>
            </aside>
            <aside class="tray tray-left tray310 p10  recap-tray">
                <h4>VEHICULE</h4>
                <hr class="alt short">
                    <ul id='vehicule_data'></ul>
            </aside>
            <aside class="tray tray-left tray310 p10  recap-tray">
                <h4> PERIODE DE GARANTIE </h4>
                <hr class="alt short">
                    <ul id='periode_data'></ul>
            </aside> 
            <aside class="tray tray-left tray310 p10  recap-tray">
                <h4> GARANTIES</h4>
                <hr class="alt short">
                    <ul id='garanties_data'></ul>
            </aside>
            <!-- end: .tray-left -->
            </section>
            <!-- End: Content -->
            <div class='quittence-section'>
            <section class='prime-sector' id='prime-recap-section'>
            <table class="table table-bordered mbn decompte-tab recap-decompte" style='position: absolute;top:304px'>
                <thead>
                    <tr class="decompte-header">
                        <th class='decompte-header'>Bonus RC</th>
                        <th class='decompte-header'>Réduction Com.</th>
                        <th class='decompte-header'>FGA</th>
                        <th class='decompte-header'>Taxes</th>
                        <th class='decompte-header'>Accessoires</th>
                        <th class='decompte-header'>Prime Nette</th>
                        <th class='decompte-header'>Prime totale</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="text" value="0" class ="divide" id="bonus"  disabled></td>
                        <td><input type="text" value="0" class ="divide" id="red"  disabled></td>
                        <td><input type="text" value="0" class ="divide" id="fg"  disabled></td>
                        <td><input type="text" value="0" class ="divide" id="tax" disabled></td>
                        <td><input type="text" value="0" class ="divide" id="accessoire" disabled></td>
                        <td><input type="text" value="0" class ="divide" id="prime-nett" disabled></td>
                        <td><input type="text" value="0" class ="divide" id="prime-total" disabled ></td>
                    </tr>
                </tbody>
            </table>
            </div>
        </section><!--Fin récapitulatif-->
    </div>
    <section id='documents' class='modal'><!--Documents-->
        <span class="close">&times;</span>
        <div class="documents-content">
        <i class="fa fa-print animated infinite bounceIn delay-1s tooltip" id='impress-btn' title='Imprimer les documents...'></i>
        <div class="owl-carousel owl-theme">
            <div class="item" id='item1' style="width: 180%"><!--JAUNE DATA-->
                <img src="./assets/img/documents/jaune.JPG" alt="" style="width: 52% !important;margin-left: 2% !important">
            </div><!--JAUNE DATA-->
            <div class="item" id='item2' style="width: 180%"><!--CP DATA-->
                <img src="./assets/img/documents/jaune.JPG" alt="" style="width: 52% !important;margin-left: 2% !important">
            </div><!--CP DATA-->
            <div class="item" id='item3' style="width: 180%"><!--CEDEAO DATA-->
                <img src="./assets/img/documents/cp.JPG" alt="" style="width: 52% !important;margin-left: 2% !important">
            </div><!--CEDEAO DATA-->
        </div>
    </section><!--Documents-->
    <section id='success-souscript' class='modal'><!--Documents-->
      <img src="./assets/img/patterns/ajax-loader.gif" id='loader' alt="" style='margin-left:42%'>
      <!--img src="../../assets/img/patterns/success-img.JPG" id='success-img' alt="" style='display:none'-->
      <p  style='text-align: center;color: #f7ba00;font-size: 23px;padding-top:45px'>Souscrption effectuée avec succés...</p>
    </section><!--Documents-->
    </form>
    
     

