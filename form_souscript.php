 <form id="contact" action="modal.php">
      <div>
        <h3>Assuré</h3>
        <section><!--Début Bloc assuré-->
        <div class="row">
            <div class="col col-md-6">
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
        </div>
        <p><span class="require-caracter">(*) Champs Obligatoires</span></p>
        </section><!--Fin Bloc assuré-->

        <h3>Période de garantie</h3><!--Début période de garantie-->
        <section><!--Début période de garantie-->
            <div class="row">
                <div class="col col-md-6">
                <label for="duree contrat">Durée contrat <span class="require-caracter">*</span></label>
                    <select style='height:32px' id="duree" name="duree_contrat">
                        <option value="1">1 mois</option>
                        <option value="1">2 mois</option>
                        <option value="3">3 mois</option>
                        <option value="4">4 mois</option>
                        <option value="5">5 mois</option>
                        <option value="6">6 mois</option>
                        <option value="annuel">Annuel</option>
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
            <section><!--Début caractéristiques véhcule-->
            <div class="row">
                <div class="col col-md-4" id="categorie_col">
                    <label for="Categorie vehicule">Catégorie <span class="require-caracter">*</span></label>
                    <select style='height:32px' id="categorie">
                        <option value="categorie">Catégorie</option>
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
                    <input id="genre" name="genre" type="text">
                </div>
                <div class="col col-md-4" id="marque_col">
                    <label for="Marque">Marque <span class="require-caracter">*</span></label>
                    <input id="marque" name="marque" type="text" class="required">
                </div>
            </div>
            <div class="row">
                <div class="col col-md-4" id="modele_col">
                    <label for="Modele">Modéle</label>
                    <input id="modele" name="modele" type="text">
                </div>
                <div class="col col-md-4" id="immatriculation_col">
                    <label for="Immatriculation">Immatriculation <span class="require-caracter">*</span></label>
                    <input id="immatriculation" name="immatriculation" type="text" class="required">
                </div>
                <div class="col col-md-4" id="puissance_col">
                    <label for="Puissance">Puissance <span class="require-caracter">*</span></label>
                    <input id="puissance" name="puissance" type="number" class="required" style='height:32px'>
                </div>
            </div>
            <div class="row">
                <div class="col col-md-4" id="vv_col">
                    <label for="Valeur venale">Valeur neuve</label>
                    <input id="valeur_venale" name="valeur_venale" type="text">
                </div>
                <div class="col col-md-4" id="vn_col">
                    <label for="Valeur neuve">Valeur vénale</label>
                    <input id="valeur_neuve" name="valeur_neuve" type="text">
                </div>
                <div class="col col-md-4" id="energie_col">
                    <label for="Energie">Enérgie</label>
                    <input id="energie" name="energie" type="text">
                </div>
            </div>
            <div class="row">
                <div class="col col-md-4" id="nombre_de_places_col">
                    <label for="Nombre de places">Nombre de places <span class="require-caracter">*</span></label>
                    <input id="nombre_de_places" name="nombre de places" type="number" class="required" style='height:32px'>
                </div>
                <div class="col col-md-4" id="mise_en_circulation_col">
                    <label for="Date de mse en crculation">Date de mise en circulation <span class="require-caracter">*</span></label>
                    <input id="date_de mise_en_circulation" name="date_de_mise_en_circulation" type="date" class="required" style='height:32px'>
                </div>
                <div class="col col-md-4" id="charge_col">
                    <label for="Charge utile" id="charge_label">Charge utile <span class="require-caracter">*</span></label>
                    <select style='height:32px' name="charge_utile" id="charge">
                        <option>Break</option>
                        <option>Moins de 3,5T</option>
                        <option>Plus de 3,5T</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col col-md-4" id="surplus_col">
                    <label for="Surplus de places" id="label_surplus">Surplus <span class="require-caracter">*</span></label>
                    <input id="surplus" name="surplus" type="number" class="required" style='height:32px'>
                </div>
                <div class="col col-md-4" id="packs_col">
                <label for="Packs" id="label_packs">Packs <span class="require-caracter">*</span></label>
                    <select style='height:32px' name="pack" id="packs">
                        <option>Pack classic</option>
                        <option>Pack confort</option>
                        <option>Pack libérté</option>
                    </select>
                </div>
            </div>
        </section><!--Début caractéristiques véhcule-->


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
                        <input type="checkbox" id="rc-check" name="responsabilite-civile" class='val_input' checked>
                        <label for="RC" class="garantie-label" style="position: relative;top: -26px;left:16px;">Résponsabilité civile</label>
                    </td>
                    <td>
                        <input type="text" class='garantie-val divide' id="rc" disabled value="0">
                    </td>
                    <td>
                        <input type="checkbox" id="bg-check" name="bris-de-glace" class='val_input' checked>
                        <label for="BG" class="garantie-label">Bris de glace</label>
                    </td>
                    <td>
                        <input type="text" class='garantie-val' value="0">
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="checkbox" id="rdt-check" name="recours-des-tiers" class='val_input' checked>
                        <label for="BG" class="garantie-label">Recours des tiers</label>
                    </td>
                    <td>
                        <input type="text" class='garantie-val' value="0">
                    </td>
                    <td> 
                        <input type="checkbox" id="tc-check" name="tierscomplete" class='val_input' checked>
                        <label for="BG" class="garantie-label">Tiérce complete</label>

                        <input type="checkbox" id="tcol-check" name="tierce-collision" class='val_input' checked>
                        <label for="tcol" class="garantie-label">Tiérce collision</label>
                    </td>
                    <td>
                        <input type="text" class='garantie-val' value="0">
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="checkbox" id="bg-check" name="bris-de-glace" class='val_input' checked>
                        <label for="DR" class="garantie-label">Défense et recours</label>
                    </td>
                    <td>
                        <input type="text" class='garantie-val' value="0">
                    </td>
                        <td>
                            <select class="form-control" name="avance_recours" id="avance-recours" style="height:33px !important">
                                <option value="avance sur recours">Avance sur recours</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                            </select>
                        </td>
                    <td>
                        <input type="text" class='garantie-val' value="0">
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="checkbox" id="bg-check" name="bris-de-glace" class='val_input' checked>
                        <label for="BG" class="garantie-label">Incendie</label>
                    </td>
                    <td>
                        <input type="text" class='garantie-val' value="0">
                    </td>
                    <td>
                        <select class="form-control" name="p_trans" id="avance-recours" style='width:32px'>
                            <option value="avance sur recours">Personnes transportées</option>
                            <option value="option 1">Option1</option>
                            <option value="option 2">Option2</option>
                        </select>
                    </td>
                    <td>
                        <input type="text" class='garantie-val' value="0">
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="checkbox" id="bg-check" name="bris-de-glace" class='val_input' checked>
                        <label for="BG" class="garantie-label">Vol</label>
                    </td>
                    <td>
                        <input type="text" class='garantie-val' value="0">
                    </td>
                    <td>
                        <input type="checkbox" id="bg-check" name="bris-de-glace" class='val_input' checked>
                        <label for="BG" class="garantie-label">Assistance</label>
                    </td>
                    <td>
                        <input type="text" class='garantie-val' value="0">
                    </td>
                </tr>

            </tbody>
        </table>
        </section><!--Début caractéristiques véhcule-->

        <h3>Quitence</h3><!--Début quittence-->
        <section class='prime-sector' id='prime-section'>
            <table class="table table-bordered mbn decompte-tab">
                <thead>
                    <tr class="decompte-header">
                        <th class='decompte-header'>Bonus RC</th>
                        <th class='decompte-header'>Réduction Commerciale</th>
                        <th class='decompte-header'>Prime Nette</th>
                        <th class='decompte-header'>Accessoires</th>
                        <th class='decompte-header'>Taxes</th>
                        <th class='decompte-header'>FGA</th>
                        <th class='decompte-header'>Prime totale</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <select class="form-control" name="p_trans" id="avance-recours" style='width:115px !important;height:32px !important'>
                                <option value="Bonus sur RC">0</option>
                                <option value="option 1">5%</option>
                                <option value="option 2">10%</option>
                                <option value="option 3">15%</option>
                                <option value="option 4">20%</option>

                            </select>
                        </td>
                        <td>
                            <select class="form-control" name="p_trans" id="avance-recours" style='width:115px !important;height:32px !important'>
                                <option value="Réduction commerciale">0</option>
                                <option value="option 1">5%</option>
                                <option value="option 2">10%</option>
                                <option value="option 3">15%</option>
                                <option value="option 4">20%</option>
                                <option value="option 4">25%</option>
                                <option value="option 4">30%</option>
                            </select>
                        </td>
                        <td><input type="text" value="0" disabled></td>
                        <td><input type="text" value="0" disabled></td>
                        <td><input type="text" value="0" disabled></td>
                        <td><input type="text" value="0" disabled></td>
                        <td><input type="text" value="0" disabled></td>
                    </tr>
                </tbody>
            </table>
            <div class="prime_section">
                <h1 class="total-text animated fadeInLeft animation-delay-100">PRIME TOTALE(FCFA)</h1>
                <h1 id='prime-value' class="animated fadeInLeft animation-delay-100">50 000 000</h1>
                <img src="./assets/img/patterns/prime.png" class="animated fadeInLeft animation-delay-100" alt="">
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
                    <li>Editio des attestations</li>
                </ul>
           </div>
           <div class="row inputs-row">
                <div class="col-md-6">
                    <label for="attestations jaunes" class="garantie-label">No attestation jaune</label>
                    <input id="jaunes" name="att_jaunes" type="text" class="required">
                </div>
                <div class="col-md-6">
                    <label for="attestations vertes" class="garantie-label">No attestation verte</label>
                    <input id="vertes" name="att_vertes" type="text" class="required">
                </div>
                <div class="col-md-6">
                    <label for="attestations_cedeao" class="garantie-label">No attestation cedeao</label>
                    <input id="cedeao" name="att_cedeao" type="text" class="required">
                </div>
           </div>
        </section><!--Fin validation-->

      </div>
      </form>