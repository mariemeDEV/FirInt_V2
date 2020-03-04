<?php
   /* include('includes_css.php');
    $assets = 'http://localhost/forint_v2/assets/';
    $vendor = 'http://localhost/forint_v2/vendor/';*/
    $routes = '../../forInt_v2/controllers/users_routes.php';
?><!--Header include-->
               
                <div class="col-md-12">
                    <div class="panel panel-visible data-panel" id="spy2">
                        <div class="panel-heading">
                            <div class="panel-title hidden-xs">
                                <span class="glyphicon glyphicon-tasks"></span>Attestations</div>
                            </div>
                        <div class="panel-body pn">
                            <table class="table table-striped table-hover table-bordered mbn data_tab data" id="datatable3" cellspacing="0" style='width:100%;font-size:12px !important'>
                                <thead>
                                    <tr>
                                        <th>Matricule</th>
                                        <th>Numero attestation</th>
                                        <th>Type attestation</th>
                                        <th>Etat attestation</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                  foreach ($att as $a=>$value){
                                      //  $id=$value['id'];
                                    echo'<tr>
                                        <td>'.$value['intermediaire'].'</td>
                                        <td>'.$value['numero_attestation'].'</td>';
                                        if($value['id_type']==1){
                                            echo('<td style="background-color:#2ade2a;text-align:center">VERTE</td>');
                                        }else if($value['id_type']==2){
                                            echo('<td style="background-color:#efef33;text-align:center">JAUNE</td>');
                                        }else if($value['id_type']==3){
                                            echo('<td style="background-color:#f7ba4b;text-align:center">CEDEAO</td>');
                                        }
                                        if($value['etat_attestation']=="attribuee,restante"){
                                            echo('<td style="background-color:#98d698;text-align:center">Attribuée, restante</td>');
                                        }else {
                                            echo('<td style="background-color:#e86262;text-align:center">Attribuée, vendue</td>');
                                        }
                                    echo'</tr>';
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>                   
                </div>

                