<form id="souscription-form" action="modal.php" class="auto-form">
      <div>      
        <h3>Période de garantie</h3><!--Début période de garantie-->
        <section><!--Début période de garantie-->
            <div class="row">
                <div class="col col-md-6">
                <label for="duree contrat">Durée contrat <span class="require-caracter">*</span></label>
                    <select style='height:32px' id="duree" name="duree_contrat">
                        <option value="1">1 mois</option>
                        <option value="2">2 mois</option>
                        <option value="3">3 mois</option>
                        <option value="4">4 mois</option>
                        <option value="5">5 mois</option>
                        <option value="6">6 mois</option>
                        <option value="12">Annuel</option>
                    </select>
                </div>
                <div class="col col-md-6">
                    <label for="effet contrat">Date d'effet <span class="require-caracter">*</span></label>
                    <input id="effet" name="date_effet" type="date" class="required"style='height: 32px !important'>
                </div>
            </div>
            <p class="echeance">Echéance : <p class="echeance" id="date_echeance"></p></p>
        </section><!--Fin Période de garantie-->

        <h3>Caractéristiques du véhicule</h3>
            <section class="caracteristiques_sect" ><!--Début caractéristiques véhcule-->
            <div class="row">
                <div class="col col-md-4" id="categorie_col">
                    <label for="Categorie vehicule">Catégorie<span class="require-caracter">*</span></label>
                    <select style='height:32px' class="required" id="categorie">
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
                    <input id="marque" name="marque" type="text" class="required" value="" placeholder="Marque">
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
                    <input id="puissance" name="puissance" type="number" class="required" style='height:32px' value="" placeholder="Puissance" min="1" max="1000">
                </div>
            </div>
            <div class="row">
                <div class="col col-md-4" id="vv_col">
                    <label for="Valeur neuve">Valeur neuve</label>
                    <input id="valeur_neuve" class="divide" name="valeur_venale" type="text" value="" placeholder="Valeur Neuve">
                </div>
                <div class="col col-md-4" id="vn_col">
                    <label for="Valeur neuve">Valeur vénale</label>
                    <input id="valeur_venale" class="divide" name="valeur_neuve" type="text" value="" placeholder="Valeur Vénale">
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
                    <select id="nombre_de_places" name="nombre de places" class="required" style='height:32px'>
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
                    <input id="date_circulation" name="date_de_mise_en_circulation" type="date" class="required" style='height:32px' value="">
                </div>
                <div class="col col-md-4" id="charge_col">
                    <label for="Charge utile" id="charge_label">Charge utile <span class="require-caracter">*</span></label>
                    <select style='height:32px' name="charge_utile" id="charge">
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
                    <input id="cylindre" name="cylindre" type="number" style='height:32px'>
                </div>
                <div class="col col-md-4" id="surplus_col">
                    <label for="Surplus de places" id="label_surplus">Surplus <span class="require-caracter">*</span></label>
                    <select name="surplus" id="surplus" class="required" style='height:32px'>
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
        <table  class="table table-bordered mbn primes-tab">
            <thead>
                <tr>
                    <th class='garantie-header'>Garanties</th>
                    <th class='garantie-header'>Primes</th>
                    <th class='garantie-header'>Garanties</th>
                    <th class='garantie-header'>Primes</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <input type="checkbox" id="rc-check" name="responsabilite-civile" class='val_input divide' checked disabled>
                        <label for="RC" class="garantie-label" style="position: relative;top: -26px;left:16px;">Résponsabilité civile</label>
                    </td>
                    <td>
                        <input type="text" class='garantie-val divide' id="rc" disabled value="0">
                    </td>
                    <td>
                        <input type="checkbox" id="bris_check" name="bris-de-glace" class='val_input'>
                        <label for="BG" class="garantie-label">Bris de glace</label>
                    </td>
                    <td>
                        <input type="text" class='garantie-val divide' id='bris_de_glace_val' value="0">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" id="recours-check" name="responsabilite-civile" class='val_input' disabled checked>
                        <label for="BG" class="garantie-label">Recours des tiers</label>
                    </td>
                    <td>
                        <input type="text" class='garantie-val' id="recours_val" value="0">
                    </td>
                    <td> 
                        <input type="checkbox" id="tc-check" name="tierscomplete" class='val_input tierce'>
                        <label for="BG" class="garantie-label">Tiérce complete</label>
                        <input type="checkbox" id="tcol-check" name="tierce-collision" class='val_input tierce'>
                        <label for="tcol" class="garantie-label">Tiérce collision</label>
                    </td>
                    <td>
                        <input type="text" class='garantie-val divide' value="0" id='tierce_val'>
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="checkbox" id="defense-recours-check" name="defense_et_recours" class='val_input'>
                        <label for="DR" class="garantie-label">Défense et recours</label>
                    </td>
                    <td>
                        <input type="text" class='garantie-val divide' value="0" id='defense_et_recours_val'>
                    </td>
                        <td>
                            <select class="form-control" name="avance_recours" id="avance-recours" style="height:33px !important">
                                <option value="avance sur recours" selected disabled>Avance sur recours</option>
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                            </select>
                        </td>
                    <td>
                        <input type="text" class='garantie-val divide' value="0" id='avance_sur_recours_val'>
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="checkbox" name="incendie" class='val_input divide' id="incendie-check">
                        <label for="BG" class="garantie-label">Incendie</label>
                    </td>
                    <td>
                        <input type="text" class='garantie-val divide' name='incendie_value' id='incendie_val' value="0">
                    </td>
                    <td>
                        <select class="form-control" name="p_trans" id="persones_trans" style='width:32px;height:33px '>
                            <option value="personnes transportées" selected disabled>Personnes transportées</option>
                            <option value="1">Option1</option>
                            <option value="2">Option2</option>
                            <option value="3">Option3</option>
                        </select>
                    </td>
                    <td>
                        <input type="text" class='garantie-val divide' id='personnes_transportees' value="0">
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="checkbox" name="garantie_vol" id='vol-check' class='val_input'>
                        <label for="Vol" class="garantie-label">Vol</label>
                    </td>
                    <td>
                        <input type="text" name='vol' id='vol_val' class='garantie-val divide' value='0'>
                    </td>
                    <td>
                        <input type="checkbox" id="assistance_check" name="garantie_assistance" class='val_input'>
                        <label for="BG" class="garantie-label">Assistance</label>
                    </td>
                    <td>
                        <input type="text" class='garantie-val divide' name='assistance' id='assistance_val' value="0">
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
                            <select class="form-control" name="bonus_rc" id="bonus_sur_rc" style='width:115px !important;height:32px !important'>
                                <option value="0">0</option>
                                <option value="5">5%</option>
                                <option value="10">10%</option>
                                <option value="15">15%</option>
                                <option value="20">20%</option>
                            </select>
                        </td>
                        <td>
                            <select class="form-control" name="p_trans" id="reduction_commerciale" style='width:115px !important;height:32px !important'>
                                <option value="Réduction commerciale" id='reduction-value'>0</option>
                                <option value="5">5%</option>
                                <option value="10">10%</option>
                                <option value="15">15%</option>
                                <option value="20">20%</option>
                                <option value="25">25%</option>
                                <option value="30">30%</option>
                            </select>
                        </td>
                        <td><input type="text" value="0" class ="divide" id="fga"  disabled></td>
                        <td><input type="text" value="0" class ="divide" id="taxe" disabled></td>
                        <td><input type="text" value="0" class ="divide" id="accessoires" disabled></td>
                        <td><input type="text" value="0" class ="divide" id="prime-nette" disabled></td>
                        <td><input type="text" value="0" class ="divide" id="prime-totale" disabled ></td>
                    </tr>
                </tbody>
            </table>
            <div class="prime_section">
                <h1 class="total-text animated fadeInLeft animation-delay-100">PRIME TOTALE(FCFA)</h1>
                <input type='text' value='0' id='valueTotale' class='divide total-input  animated fadeInLeft animation-delay-100' disabled>
                <img src="./assets/img/patterns/prime.png" class="animated fadeInLeft animation-delay-100" alt="">
                <label for="" style='position: relative;left:299px;top: 169px;color:white !important'>Bonus RC</label>
                <p class="reductions"><input type="text" class='garantie-val divide' name='bonus-sur-rc' id='bonus-rc' value="0" 
                style='position: relative;
                top: 123px;
                width: 90px !important;
                left: 355px;
                background: #011221;
                border: none;
                color: #cc9e39;
                font-weight: bold;' disabled>
                </p>
                <label for="" style='position: relative;left: 472px;top: 80px;color:white !important'>Réduction Com.</label>
                <p class="reductions"><input type="text" class='garantie-val divide' name='reduction-commerciale' id='reduction-commerciale' value="0" 
                    style='position: relative;
                    top: 36px;
                    width: 56px !important;
                    left: 582px;
                    background: #011221;
                    border: none;
                    color: #cc9e39;
                    font-weight: bold;' disabled>
                </p>
            </div>
        </section><!--Fin quittence-->

        

      </div>
      </form>