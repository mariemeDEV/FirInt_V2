<?php
require_once '../entities/Police.php';
require_once '../entities/AvenantPolice.php';


//namespace mapping;
require_once '../controllers/ConnexionDB.php';
require_once '../mapping/PoliceDao.php';

class AvenantPoliceDao{
    private static $connector;
    public function getConnector(){
        self::$connector= ConnexionDB::getInstance();
        return  self::$connector;
    }
    public function getNumAvenant($police){
        $pDao = new PoliceDao();
        $connector = $this->getConnector();
        $numRequest = $connector->prepare('select max(num_avenant)+1 from avenant where numpolice="'.$police.' "ORDER by num_avenant DESC limit 1');
              try{
                $numRequest->execute();
                $avenantNumber=$numRequest->fetchAll(PDO::FETCH_ASSOC);
                return $avenantNumber;
              }catch(Exception $e){
                return $e->getMessage();
            }
    }
    public function insertAvenant(AvenantPolice $avenant){
        $connector = $this->getConnector();
        $insertAvenantRequest = $connector->prepare(
            "insert into avenant values(
            '".$avenant->getNumAvenant()."',
            '".$avenant->getTypeAvenant()."',
            '".$avenant->getPolice()."'
            )"
        );
        try{
            $insertAvenantRequest->execute(); 
        }catch(Exception $e){
            $e->getMessage();
        }
    }
    //Créer l'avenant d'une police
    public function setAvenantPolice($immat,$typeAvenant){
        $pDao          = new PoliceDao();
        $pAvenant      = $pDao->getPoliceByImmat($immat);
        $numPolice    = $pAvenant[0]['numpolice'];
        $avenantNumber = $this->getNumAvenant($numPolice);
        $avenant=0;
        echo($numPolice.' '.$avenantNumber[0]['max(num_avenant)+1'].' '.count($pAvenant));
    //Insertion premiére avenant(Avenant 0 d'une police)
        if($avenantNumber[0]['max(num_avenant)+1']=='NULL'){
            $avenant=0;
        }else{
            $avenant=$avenantNumber[0]['max(num_avenant)+1'];  
        }
        try{
            $avenantPolice  = new AvenantPolice($avenant,$typeAvenant,$numPolice);
            $this->insertAvenant($avenantPolice);
            return $avenantPolice;
        }catch(Exception $e){
            $e->getMessage();
        }
    }

}