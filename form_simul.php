<form id="contact" action="modal.php">
      <div>

        <h3>Période de garantie</h3><!--Début période de garantie-->
        <section><!--Début période de garantie-->
            <div class="row">
                <div class="col col-md-6">
                <label for="userName">Durée contrat <span class="require-caracter">*</span></label>
                    <select style='height:32px'>
                        <option value="1">1 mois</option>
                        <option value="1">2 mois</option>
                        <option value="3">3 mois</option>
                        <option value="4">4 mois</option>
                        <option value="5">5 mois</option>
                        <option value="6">6 mois</option>
                    </select>
                </div>
                <div class="col col-md-6">
                    <label for="password">Date d'effet <span class="require-caracter">*</span></label>
                    <input id="password" name="nom_assure" type="date" class="required"style='height: 32px !important'>
                </div>
            </div>
            <p class="echeance">Date d'echéance : <span class="echeance" id="date_echeance">21 / 12 / 2014</span></p>
        </section><!--Fin Période de garantie-->

        <h3>Caractéristiques du véhicule</h3>
            <section><!--Début caractéristiques véhcule-->
            <div class="row">
                <div class="col col-md-4">
                    <label for="userName">Catégorie <span class="require-caracter">*</span></label>
                    <select style='height:32px'>
                        <option value="categorie">Catégorie</option>
                        <option value="1">CAT 401</option>
                        <option value="2">CAT 402</option>
                        <option value="3">CAT 403</option>
                        <option value="4">CAT 404</option>
                        <option value="5">CAT 405</option>
                        <option value="6">CAT 418</option>
                    </select>
                </div>
                <div class="col col-md-4">
                    <label for="password">Genre </label>
                    <input id="password" name="nom_assure" type="text">
                </div>
                <div class="col col-md-4">
                    <label for="userName">Marque <span class="require-caracter">*</span></label>
                    <input id="userName" name="prenom_assure" type="text" class="required">
                </div>
            </div>
            <div class="row">
                <div class="col col-md-4">
                    <label for="userName">Modéle</label>
                    <input id="userName" name="prenom_assure" type="text">
                </div>
                <div class="col col-md-4">
                    <label for="password">Immatriculation <span class="require-caracter">*</span></label>
                    <input id="password" name="nom_assure" type="text" class="required">
                </div>
                <div class="col col-md-4">
                    <label for="userName">Puissance <span class="require-caracter">*</span></label>
                    <input id="userName" name="prenom_assure" type="number" class="required" style='height:32px'>
                </div>
            </div>
            <div class="row">
                <div class="col col-md-4">
                    <label for="userName">Valeur neuve</label>
                    <input id="userName" name="prenom_assure" type="text">
                </div>
                <div class="col col-md-4">
                    <label for="password">Valeur vénale</label>
                    <input id="password" name="nom_assure" type="text">
                </div>
                <div class="col col-md-4">
                    <label for="userName">Enérgie</label>
                    <input id="userName" name="prenom_assure" type="text" class="required">
                </div>
            </div>
            <div class="row">
                <div class="col col-md-4">
                    <label for="userName">Nombre de places <span class="require-caracter">*</span></label>
                    <input id="userName" name="prenom_assure" type="number" class="required" style='height:32px'>
                </div>
                <div class="col col-md-4">
                    <label for="password">Date de mise en circulation <span class="require-caracter">*</span></label>
                    <input id="password" name="nom_assure" type="date" class="required" style='height:32px'>
                </div>
                <div class="col col-md-4">
                    <label for="userName">Charge utile <span class="require-caracter">*</span></label>
                    <select style='height:32px'>
                        <option>Break</option>
                        <option>Moins de 3,5T</option>
                        <option>Plus de 3,5T</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col col-md-4">
                    <label for="userName">Surplus <span class="require-caracter">*</span></label>
                    <input id="userName" name="prenom_assure" type="number" class="required" style='height:32px'>
                </div>
            </div>
        </section><!--Début caractéristiques véhcule-->


        <h3>Garanties</h3>
        <section>
        <table  class="table table-bordered mbn primes-tab" style="border:0px !important">
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
                        <label for="RC" class="garantie-label" style="position: relative;top: -26px;left: 16px;">Résponsabilité civile</label>
                    </td>
                    <td>
                        <input type="text" class='garantie-val' value="0">
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
        </section>

        <h3>Quitence</h3>
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
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>11</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                    </tr>
                </tbody>
            </table>
            <h1 class="total-text">PRIME TOTALE(FCFA)</h1>
            <h1 id='prime-value'>50 000 000</h1>
            <img src="./assets/img/patterns/prime.png" alt="">
        </section>

      
      </div>
      </form>