<?php
//namespace mapping;
require_once '../controllers/ConnexionDB.php';
require_once '../entities/PoliceGaranties.php';


class PoliceGarantiesDao{
    private static $connector;
    public function getConnector(){
        self::$connector= ConnexionDB::getInstance();
        return  self::$connector;
    }

    public function insertGaranties(Array $garanties){
    
        print_r($garanties);

       // $insertGarantie =  $this->getConnector()->prepare(
           // ""
         /*   "insert into attestation values(
                '".$pg->getId()."',
                '".$pg->getNumeroPolice()."',
                '".$pg->getCodeGarantie()."',
                '".$pg->getMontantGarantie()."'
            )"*/
            //);
    }
}