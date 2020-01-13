<?php
//namespace mapping;
require_once '../controllers/ConnexionDB.php';
require_once '../entities/Attestation.php';


class IntermediaireDao{
    private static $connector;
public function getConnector(){
    self::$connector= ConnexionDB::getInstance();
    return  self::$connector;
}

function getIntermediaire(){
    $connector = $this->getConnector();
    $intRequest = $connector->prepare("SELECT * FROM `utilisateur` as u join intermediaire as i on u.id_user=i.id_user where u.matricule='4209'");
    $intRequest->execute();
}

}