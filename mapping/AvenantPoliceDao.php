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
    public function setAvenantPolice($immat){
        echo('Avenant created');
      /*  $pDao = new PoliceDao();
        $p = $pDao->getPoliceByImmat($immat);
        print_r($p);
        if($p!=[]){
            echo('Pas vide');
        }else{
            echo('vide');
        }*/
        //print_r($immat);
       /* if($immat==''){
            echo('exists!');
        }else if($immat!=''){
            echo('does not!');
        }*/
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