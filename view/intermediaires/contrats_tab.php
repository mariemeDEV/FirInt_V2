                <div class="col-md-12">
                    <div class="panel panel-visible data-panel" id="spy2">
                        <div class="panel-heading">
                            <div class="panel-title hidden-xs">
                                <span class="glyphicon glyphicon-tasks"></span>Production</div>
                            </div>
                        <div class="panel-body pn">
                            <table class="table table-striped table-hover data_tab data" id="datatable3" cellspacing="0" style='width:100%;font-size:12px !important'>
                                <thead>
                                    <tr>
                                        <th>No. Police</th>
                                        <th>Assuré</th>
                                        <th>Immat. Véhicule</th>
                                        <th>Avenant</th>
                                        <th>Effet contrat</th>
                                        <th>Durée</th>
                                        <th>Echéance contrat</th>
                                        <th>Etat</th>
                                        <th>Montant prime</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                    foreach ($contrats as $c=>$value){
                                    echo '
                                    <tr>
                                        <td>'.$value['numpolice'].'</td>
                                        <td>'.$value['prenom'].' '.$value['nom'].'</td>
                                        <td>'.$value['immatriculation'].'</td>
                                        <td>0</td>
                                        <td>'.$value['dateeffet'].'</td>
                                        <td>'.$value['duree'].'</td>
                                        <td>'.$value['dateecheance'].'</td>
                                        <td>En cours</td>
                                        <td>'.$value['montant_ttc'].'</td>
                                        <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">Actions
                                                <span class="caret ml5"></span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li>
                                                    <a href="#">Editer</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="#">Avenant</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="#">Imprimer</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="#">Annuler</a>
                                                </li>
                                            </ul>
                                        </div>
                                        </td>
                                    </tr>';
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <p class="commissions">
                        Total des commissions : <span class='com-sum divide'>50000</span>
                    </p>
                </div>

                