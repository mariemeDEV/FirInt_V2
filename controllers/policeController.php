<?php
//Mappings
require_once '../mapping/PoliceDao.php';
//Entities
require_once '../entities/Police.php';
//obtenir le numéro de police
function getNumeroPolice($cat){
   $pDao = new PoliceDao();
   $policeNumber = $pDao->getNumPolice($cat);
   if($policeNumber[0]['max(numpolice)+1']==''){
      $numPolice="40".$cat."0000001";
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
   $p = new Police($numeroPolice,'NULL',30,$categorie,'NULL','NULL',$date_effet,$duree_contrat,$date_echeance,'NULL',$nom_assure,$prenom_assure,$adresse_assure,'NULL',$ville_assure,'NULL','NULL','NULL',$telephone_assure,'NULL','NULL','NULL','NULL',$immatriculation,$immatriculation,2,$marque,1,'NULL',getCodeEnergie($energie),$nombreDePlaces,$cylindre,$valeurNeuve,$valeurVenale,$puissance,'NULL',$dateDeMiseEnCirculation,$nette,$acc,$taxe,$fga,$totale,'NULL','NULL',date_create()->format('Y-m-d H:i:s'),'NULL');
   $pDao = new PoliceDao();
   echo($pDao->insertPolice($p,$garanties));
}