<?php
require_once '../mapping/UserDao.php';
require_once '../mapping/AttestationsDao.php';
require_once '../mapping/PoliceDao.php';

/*Differentes actions intermédiaires*/
if(isset($_GET['action'])){
    switch($_GET['action']){
        case 'accueil':
            require_once('../view/intermediaires/accueil.php');
        break;
        case 'souscript':
            $udao = new AttestationsDao();
            $jauneData  = json_encode($udao->getAttestationsRestantes(1,40)) ;
            $verteData  = json_encode($udao->getAttestationsRestantes(2,40)) ;
            $cedeaoData = json_encode($udao->getAttestationsRestantes(3,40)) ;
            require_once('../view/intermediaires/souscription.php');
        break;
        case 'simul':
            require_once('../view/intermediaires/simulation.php');
        break;
        case 'devis':
            $udao = new AttestationsDao();
            require_once('../view/intermediaires/devis.php');
        break;
      /*  case 'avenant':
            $udao = new AttestationsDao();
            $pDao = new PoliceDao();
            $data = $pDao->getPoliceByMat('DK9999BB',30);
            $jauneData  = json_encode($udao->getAttestationsRestantes(1,40)) ;
            $verteData  = json_encode($udao->getAttestationsRestantes(2,40)) ;
            $cedeaoData = json_encode($udao->getAttestationsRestantes(3,40)) ;
            require_once('../view/intermediaires/avenant.php');
        break;*/
        case 'contrats':
            $pdao = new PoliceDao();
            $contrats = $pdao->getPolicesValides();
            require_once('../view/intermediaires/contrats.php');
        break;
        case 'garanties':
            require_once('../view/intermediaires/garanties.php');
        break;
        case 'tarifs':
            require_once('../view/intermediaires/tarifs.php');
        break;
       

    }
}