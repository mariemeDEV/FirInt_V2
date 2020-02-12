<?php
//Mappings
require_once '../mapping/PoliceDao.php';
require_once '../mapping/AvenantPoliceDao.php';
//Entities
require_once '../entities/Police.php';
//obtenir le numéro de police
function getNumeroPolice($cat){
   $pDao = new PoliceDao();
   $policeNumber = $pDao->getNumPolice($cat);
   if($policeNumber[0]['max(numpolice)+1']==''){
      $numPolice="40".$cat."0000000";
   }else{
      $numPolice=$policeNumber[0]['max(numpolice)+1'];  
   }
return $numPolice;
}
//obtenir de code energie
   function getCodeEnergie($energie){
   $codeEnergie=0;
   if($energie=='essence'){
      $codeEnergie=1;
   }else if($energie=='diesel'){
      $codeEnergie=2;
   }
   return $codeEnergie;
}
//Insertion d'une nouvelle police
if(isset($_POST['souscription'])){
   extract($_POST);
   $numeroPolice = getNumeroPolice($categorie);
   $garanties=array(
      $Rc_code => $RC_value,
      $BG=>$BG_value,
      $Rti_code=>$RTI_value,
      $TC=>$TIERCE_value,
      $DR=>$DR_value,
      $ASR=>$ASR_value,
      $INC=>$INC_value,
      $PT=>$PT_value,
      $VoL=>$VoL_value,
      $ASSISTANCE_code=>$ASSISTANCE_value,
      $carte_brune=>'GRATUIT'
   );
   $pDao = new PoliceDao();
   $av   = new AvenantPoliceDao();
   $p    = new Police('NULL',$numeroPolice,'NULL',30,$categorie,'NULL','NULL',$date_effet,$duree_contrat,$date_echeance,'NULL',$nom_assure,$prenom_assure,$adresse_assure,'NULL',$ville_assure,'NULL','NULL','NULL',$telephone_assure,'NULL','NULL','NULL','NULL',$immatriculation,$immatriculation,2,$marque,1,'NULL',getCodeEnergie($energie),$nombreDePlaces,$cylindre,$valeurNeuve,$valeurVenale,$puissance,$chargeUtile,'NULL',$dateDeMiseEnCirculation,$nette,$acc,$taxe,$fga,$totale,'NULL','NULL',date_create()->format('Y-m-d H:i:s'),'NULL');
   $pol  = $pDao->getPoliceByImmat($p);
   if($pol!=[]){
      $av->setAvenantPolice($p->getImmatriculation());
  }else if($pol==[]){
      echo($pDao->insertPolice($p,$garanties));
  }
}
//Création d'un avenant de police
if(isset($_POST['avenant'])){
   extract($_POST);
   $udao = new AttestationsDao();
   $pDao = new PoliceDao();
   $data = $pDao->getPoliceByMat($immatriculation_vehicule,$matricule_intermediaire);
   if($data==[]){
      $message = 'Ce véhicule n\'a jamas étè couvert dans vos contrats, veuillez créer un nouveau contrat.';
      require_once('../view/intermediaires/souscription.php');
   }else{
      $jauneData  = json_encode($udao->getAttestationsRestantes(1,40)) ;
      $verteData  = json_encode($udao->getAttestationsRestantes(2,40)) ;
      $cedeaoData = json_encode($udao->getAttestationsRestantes(3,40)) ;
      require_once('../view/intermediaires/avenant.php');
   }
}
//Insertion d'un avenant
if(isset($_POST['avenant_data'])){
   extract($_POST);
   $av = new AvenantPoliceDao();
  $av->setAvenantPolice($immatriculation);
}
