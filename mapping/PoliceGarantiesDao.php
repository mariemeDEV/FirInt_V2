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
    public function insertGaranties(array $garanties,$police,$avenant){
        foreach($garanties as $garantie=>$value) { 
            try{
            $pg=new PoliceGaranties('NULL',$police,$garantie,$value,$avenant);
            $cnx =  $this->getConnector();
            $insertGarantie=$cnx->prepare(
                "insert into police_valide_garantie values(
                    '".$pg->getId()."',
                    '".$pg->getNumeroPolice()."',
                    '".$pg->getCodeGarantie()."',
                    '".$pg->getMontantGarantie()."',
                    '".$pg->getAvenantPolice()."'
                )"
            );
            $insertGarantie->execute();
            }catch(Exception $e){
                $e->getMessage();
            }
        } 
        
    }
}