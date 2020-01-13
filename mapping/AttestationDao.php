<?php
//namespace mapping;
require_once '../controllers/ConnexionDB.php';
require_once '../entities/Attestation.php';


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
        '".$attestation->getIntermediaire()."'
        )"
    );
    $insertAttestationsRequest->execute();
}

//Attribution des attestations à l'intermediaire
    function setDotation(){
        $serie = $this->getAttestations();
        try{
            for($a=0;$a<count($serie);$a++){
               $attestation = new Attestation('NULL',$serie[$a],$_POST['type_attestations'],$_POST['id_intermediaire']);
                $this->insertAttestation($attestation);
            }
        }catch(Exception $e){
            $e->getMessage();
        }
    }

function getType(){
    $connector = $this->getConnector();
    if($_POST['type_attestations']=='jaune'){
        $typeRequest = $connector->prepare('select id_type from type_attestation where libelle="jaune"');
        $type = $typeRequest->execute();
    }else if($_POST['type_attestations']=='verte'){
        $typeRequest = $connector->prepare('select id_type from type_attestation where libelle="verte"');
        $type = $typeRequest->execute();
    }else if(($_POST['type_attestations']=='cedeao')){
        $typeRequest = $connector->prepare('select id_type from type_attestation where libelle="cedeao"');
        $type = $typeRequest->execute();
    }
return $type;
}
            

}