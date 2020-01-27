<?php
require_once '../mapping/UserDao.php';
require_once '../mapping/AttestationsDao.php';
/*Differentes actions intermédiaires*/
if(isset($_GET['action'])){
    switch($_GET['action']){
        case 'souscript':
            $udao = new AttestationsDao();
            $jauneData  = json_encode($udao->getAttestationsByType(1,40)) ;
            $verteData  = json_encode($udao->getAttestationsByType(2,40)) ;
            $cedeaoData = json_encode($udao->getAttestationsByType(3,40)) ;
            require_once('../view/intermediaires/souscription.php');
        break;
    }
}