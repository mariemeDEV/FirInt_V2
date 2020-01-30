<?php
require_once '../entities/Police.php';

//namespace mapping;
require_once '../controllers/ConnexionDB.php';
require_once '../mapping/PoliceDao.php';


class AvenantPoliceDao{
    private static $connector;
    public function getConnector(){
        self::$connector= ConnexionDB::getInstance();
        return  self::$connector;
    }
    public function setAvenantPolice($numP){
        if($numP!=''){
            echo('exists!');
        }else{
            echo('does not!');
        }
        /*$pDao = new PoliceDao();
        $lastNum=$pDao->getLastPolice();
        echo($lastNum);*/
       /* try{
            $cnx =  $this->getConnector();
            $insertGarantie=$cnx->prepare(
                "insert into etat_police values(
                    '".$p->getNumeroPolice()."'
                )"
            );
            $insertGarantie->execute();
        }catch(Exception $e){
            $e->getMessage();
        }*/
     
    }

}