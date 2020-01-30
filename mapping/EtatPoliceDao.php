<?php
require_once '../entities/EtatPolice.php';

//namespace mapping;
require_once '../controllers/ConnexionDB.php';


class EtatPoliceDao{
    private static $connector;
    public function getConnector(){
        self::$connector= ConnexionDB::getInstance();
        return  self::$connector;
    }
    public function setDefaultEtat(EtatPolice $ep){
        try{
            $cnx =  $this->getConnector();
            $insertGarantie=$cnx->prepare(
                "insert into etat_police values(
                    1,
                    '".$ep->getPolice()."'
                )"
            );
            $insertGarantie->execute();
        }catch(Exception $e){
            $e->getMessage();
        }
     
    }

}