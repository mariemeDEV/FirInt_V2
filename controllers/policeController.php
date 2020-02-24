<?php
require_once '../mapping/PoliceDao.php';
require_once '../mapping/AvenantPoliceDao.php';
require_once '../entities/Police.php';
require_once '../entities/AvenantPolice.php';

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

//Création d'un avenant de police
if(isset($_POST['avenant'])){
   $udao = new AttestationsDao();
   $pDao = new PoliceDao();
   $immatriculation = $_POST['immatriculation_vehicule'];
   $intermediaire   = $_POST['matricule_intermediaire'];
   $tyeAvenant      = $_POST['type_avenant'];
   $data            = $pDao->getPoliceByMat( $immatriculation,$intermediaire);
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

//Insertion d'une nouvelle police
if(isset($_POST['souscription'])){
   extract($_POST);
   $pDao = new PoliceDao();
   $avenantP   = new AvenantPoliceDao();
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
   $p = new Police('NULL',$numeroPolice,'NULL',30,$categorie,'NULL','NULL',$date_effet,$duree_contrat,$date_echeance,'NULL',$nom_assure,$prenom_assure,$adresse_assure,'NULL',$ville_assure,'NULL','NULL','NULL',$telephone_assure,'NULL','NULL','NULL','NULL',$immatriculation,$immatriculation,2,$marque,1,'NULL',getCodeEnergie($energie),$nombreDePlaces,$cylindre,$valeurNeuve,$valeurVenale,$puissance,$chargeUtile,'NULL',$dateDeMiseEnCirculation,$nette,$acc,$taxe,$fga,$totale,'NULL','NULL',date_create()->format('Y-m-d H:i:s'),'NULL');
   $idInserted = $pDao->insertPolice($p,$garanties);
   $avenant = new AvenantPolice(0,1,$idInserted);
   $avenantP->insertAvenant($avenant);
}

//Insertion d'un avenant
if(isset($_POST['avenant_data'])){
   extract($_POST);
   $av   = new AvenantPoliceDao();
   $pDao = new PoliceDao();
   $avenantPolice=$av->setAvenantPolice($vehicule,$type);
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
   $p = new Police('NULL',$avenantPolice[1],'NULL',30,$categorie,'NULL','NULL',$date_effet,$duree_contrat,$date_echeance,'NULL',$nom_assure,$prenom_assure,$adresse_assure,'NULL',$ville_assure,'NULL','NULL','NULL',$telephone_assure,'NULL','NULL','NULL','NULL',$immatriculation,$immatriculation,2,$marque,1,'NULL',$energie,$nombreDePlaces,$cylindre,$valeurNeuve,$valeurVenale,$puissance,$chargeUtile,'NULL',$dateDeMiseEnCirculation,$nette,$acc,$taxe,$fga,$totale,'NULL','NULL',date_create()->format('Y-m-d H:i:s'),'NULL');
   $pDao->insertPolice($p,$garanties,$avenantPolice[0]->getNumAvenant());
}
//Insertion d'un dévis
if(isset($_POST['devis'])){
   extract($_POST);
   $pDao = new PoliceDao();
   $p = new Police('NULL',getNumeroPolice($categorie),'NULL',30,$categorie,'NULL','NULL',$date_effet,$duree_contrat,$date_echeance,'NULL','Nom Prospect','Prenom Prospect','Adresse Prospect','NULL','Ville Prospect','NULL','NULL','NULL','Telephone Prospect','NULL','NULL','NULL','NULL',$immatriculation,$immatriculation,2,$marque,1,'NULL',$energie,$nombreDePlaces,$cylindre,$valeurNeuve,$valeurVenale,$puissance,$chargeUtile,'NULL',$dateDeMiseEnCirculation,$nette,$acc,$taxe,$fga,$totale,'NULL','NULL',date_create()->format('Y-m-d H:i:s'),'NULL');
   $pDao->insertDevis($p);
}
//Mise à jour d'une police
if(isset($_POST['update_data'])){
   extract($_POST);
   $pDao = new PoliceDao();
   $pDao->updatePolice($categorie,$date_effet,$duree_contrat,$date_echeance,$nom_assure,$prenom_assure,$adresse_assure,$telephone_assure,$immatriculation,$immatriculation,$marque,1,1,$energie,$nombreDePlaces,$cylindre,$valeurNeuve,$valeurVenale,$puissance,$charge_utile,$nette,$acc,$taxe,$fga,$totale);
}


