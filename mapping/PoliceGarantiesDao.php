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

    public function insertGaranties(Array $garanties,Array $values,$police){
        try{
            for($g=0;$g<sizeof(($garanties));$g++){
                echo($garanties[$g]);
              /*  for($v=0;$v<sizeof(($values));$v++){
                    if($garanties[$g]!=''){
                        $pg  = new PoliceGaranties('NULL',$police,$garanties[$g],$values[$v]);
                    }
                   // var_dump($pg->getCodeGarantie().'<br>');
                    $cnx =  $this->getConnector();
                    $insertGarantie=$cnx->prepare("insert into police_valide_garantie values('".$pg->getId()."','".$pg->getNumeroPolice()."','".$pg->getCodeGarantie()."','".$pg->getMontantGarantie()."')");
                    $insertGarantie->execute();
                }*/
            }
            return true;
        }catch(Exception $e){
            $e->getMessage();
        }
    }
}