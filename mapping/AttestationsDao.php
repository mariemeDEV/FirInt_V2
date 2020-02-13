<?php
//namespace mapping;
require_once '../controllers/ConnexionDB.php';
require_once '../entities/Attestation.php';
require_once '../entities/VenteAttestation.php';

class AttestationsDao{
private static $connector;
public function getConnector(){
    self::$connector= ConnexionDB::getInstance();
    return  self::$connector;
}
//Récupération de l'ensemble des numéros d'attestations
function getAttestations(){
    $typeAttestations= $_POST['type_attestations'];
    if(isset($typeAttestations)){
        $serie  = array();
        for($t=($_POST['num_debut_serie']);$t<=($_POST['num_fin_serie']);$t++){
            array_push($serie,str_pad($t, 7, '0', STR_PAD_LEFT));
        }
        return $serie;
    }
}
function insertAttestation(Attestation $attestation){
    $connector = $this->getConnector();
    $insertAttestationsRequest = $connector->prepare(
        "insert into attestation values(
        '".$attestation->getId()."',
        '".$attestation->getNumeroAttestation()."',
        '".$attestation->getTypeAttestation()."',
        '".$attestation->getIntermediaire()."',
        '".$attestation->getEtat()."'
        )"
    );
    $insertAttestationsRequest->execute();
}
//Attribution des attestations à l'intermediaire
    function setDotation(){
        $serie = $this->getAttestations();
        try{
            for($a=0;$a<count($serie);$a++){
               $attestation = new Attestation('NULL',$serie[$a],$_POST['type_attestations'],$_POST['id_intermediaire'],"attribuee,restante");
                $this->insertAttestation($attestation);
            }
        }catch(Exception $e){
            $e->getMessage();
        }
    }
    function getAttestationsByType(int $t,int $intermediaire){
        $connector = $this->getConnector();
        $attRequest = "SELECT numero_attestation FROM `attestation` WHERE id_type='$t' AND intermediaire='$intermediaire'";
        $preparedAtt = $connector->prepare($attRequest);
        try{
            $preparedAtt->execute();
            $attestationsData = $preparedAtt->fetchAll(PDO::FETCH_ASSOC);
            return $attestationsData;
        }catch(Exception $e){
            return $e->getMessage();
        }

    }
      function getAttestationsRestantes(int $t,int $intermediaire){
        $connector = $this->getConnector();
        $attRequest = "SELECT numero_attestation FROM `attestation` WHERE id_type='$t' AND intermediaire='$intermediaire' AND etat_attestation='attribuee,restante'";
        $preparedAtt = $connector->prepare($attRequest);
        try{
            $preparedAtt->execute();
            $attestationsData = $preparedAtt->fetchAll(PDO::FETCH_ASSOC);
            return $attestationsData;
        }catch(Exception $e){
            return $e->getMessage();
        }

    }
    function getTypeAttestation(){
        $connector = $this->getConnector();
        if($_POST['type_attestations']=='jaune'){
            $typeRequest = $connector->prepare('select id_type from type_attestation where libelle="jaune"');
        }else if($_POST['type_attestations']=='verte'){
            $typeRequest = $connector->prepare('select id_type from type_attestation where libelle="verte"');
        }else if(($_POST['type_attestations']=='cedeao')){
            $typeRequest = $connector->prepare('select id_type from type_attestation where libelle="cedeao"');
        }
        $type = $typeRequest->execute();
        return $type;
    }
    function getIdAttestation($att){
        try {
            $connector = $this->getConnector();
            $getIdRequest = "SELECT id_attestation,id_type FROM `attestation` WHERE numero_attestation='$att' LIMIT 1";
            $prepared=$connector->prepare($getIdRequest);
            $prepared->execute();
            $data = $prepared->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
    //Vendre une attestation
    function inserteVente(VenteAttestation $vente1,$vente2){
        try{
          //  $this->getConnector()->beginTransaction();
            //Cas des catégories 5
            if($vente2==NULL){
                $insertVenteRequest1 = $this->getConnector()->prepare(
                    "insert into vente_attestation values(
                    '". $vente1->getId()."',
                    '". $vente1->getIdVente()."',
                    '". $vente1->getIdAttestation()."',
                    '". $vente1->getPoliceValide()."',
                    '". $vente1->getAvenantPolice()."'
                    )"
                );
                $update1 = $this->getConnector()->prepare("update attestation set etat_attestation = 'attribuee,vendue' where id_attestation=".$vente1->getIdAttestation());
                $insertVenteRequest1->execute();
                $update1->execute();
                //Cas des ctégories autres que 5
            }else{
                $insertVenteRequest1 = $this->getConnector()->prepare(
                    "insert into vente_attestation values(
                    '". $vente1->getId()."',
                    '". $vente1->getIdVente()."',
                    '". $vente1->getIdAttestation()."',
                    '". $vente1->getPoliceValide()."',
                    '". $vente1->getAvenantPolice()."'
                    )"
                );
                $insertVenteRequest2 = $this->getConnector()->prepare(
                    "insert into vente_attestation values(
                    '". $vente2->getId()."',
                    '". $vente2->getIdVente()."',
                    '". $vente2->getIdAttestation()."',
                    '". $vente2->getPoliceValide()."',
                    '". $vente1->getAvenantPolice()."'
                    )"
                );
                $update1 = $this->getConnector()->prepare("update attestation set etat_attestation = 'attribuee,vendue' where id_attestation=".$vente1->getIdAttestation());
                $update2 = $this->getConnector()->prepare("update attestation set etat_attestation = 'attribuee,vendue' where id_attestation=".$vente2->getIdAttestation());
                $insertVenteRequest1->execute();
                $insertVenteRequest2->execute();
                $update1->execute();
                $update2->execute();
            }
          //  $this->getConnector()->commit();
            return 'Attestations vendues';
        }catch(Exception $e){
            $this->getConnector()->rollBack();
            $e->getMessage();
        }
      

    }
            

}