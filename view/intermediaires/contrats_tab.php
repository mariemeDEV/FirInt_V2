                <div class="col-md-12">
                    <div class="panel panel-visible data-panel" id="spy2">
                        <div class="panel-heading">
                            <div class="panel-title hidden-xs">
                                <span class="glyphicon glyphicon-tasks"></span>Table des productions</div>
                        </div>
                        <div class="panel-body pn">
                            <table class="table table-striped table-hover data_tab data" id="datatable3" cellspacing="0" style='width:100%;font-size:12px !important'>
                                <thead>
                                    <tr>
                                        <th>No. Police</th>
                                        <th>Mat. Intermédiaire</th>
                                        <th>Prénom/Nom Int.</th>
                                        <th>Immat. Véhicule</th>
                                        <th>No. Avenant</th>
                                        <th>Effet contrat</th>
                                        <th>Echéance contrat</th>
                                        <th>Montant prime</th>
                                        <th>Documents</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr>
                                <?php print_r($contrats[0]['numpolice'])?>
                                </tr>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>$320,800</td>
                                        <td>2011/04/25</td>
                                        <td>$320,800</td>
                                        <td>
                                            <button>Documents</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <p class="commissions">
                        Total des commissions : <span class='com-sum divide'>50000</span>
                    </p>
                </div>

                