<?php
require_once '../mapping/UserDao.php';
require_once '../mapping/AttestationsDao.php';
require_once '../mapping/PoliceDao.php';

function create_slug($string){
    $search = array('Ș', 'Ț', 'ş', 'ţ', 'Ş', 'Ţ', 'ș', 'ț', 'î', 'â', 'ă', 'Î', 'Â', 'Ă', 'ë', 'Ë');
    $replace = array('s', 't', 's', 't', 's', 't', 's', 't', 'i', 'a', 'a', 'i', 'a', 'a', 'e', 'E');
    $str = str_ireplace($search, $replace, strtolower(trim($str)));
    $str = preg_replace('/[^\w\d\-\ ]/', '', $str);
    $str = str_replace(' ', '-', $str);
    return preg_replace('/\-{2,}', '-', $str);
}

function getattDao(){
    $attDao = new AttestationsDao();
    return $attDao;
}
function getVertes(){
    $vDao = getattDao();
    return json_encode($vDao->getAttestationsRestantes(2,40)) ;
}
function getJaunes(){
    $jDao = getattDao();
    return json_encode($jDao->getAttestationsRestantes(1,40)) ;
}
function getCedeao(){
    $cDao = getattDao();
    return json_encode($cDao->getAttestationsRestantes(3,40)) ;
}
/*Differentes actions intermédiaires*/
if(isset($_GET['action'])){
    switch($_GET['action']){
        case 'accueil':
            require_once('../view/intermediaires/accueil.php');
        break;
        case 'souscript':
            $verteData=getVertes();
            $jauneData=getJaunes();
            $cedeaoData=getCedeao();
            require_once('../view/intermediaires/souscription.php');
        break;
        case 'simul':
            require_once('../view/intermediaires/simulation.php');
        break;
        case 'devis':
            $pdao = new PoliceDao();
            $devis = $pdao->getDevis();
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
        case 'supports':
            require_once('../view/intermediaires/supports.php');
        break;
        case 'edit':
            $verteData=getVertes();
            $jauneData=getJaunes();
            $cedeaoData=getCedeao();
            $pDao = new PoliceDao();
            $id=$_GET['id'];
            $data = $pDao->getPoliceById($id);
            require_once('../view/intermediaires/policeUpdate.php');
        break;
        case 'updateDevis':
            if(isset($_POST['update_data'])){
                print_r($_POST);
             }
        break;
        case 'consult_attestations':
            $slug = create_slug('view/intermediaires/attestations.php');
           /* $pdao = new PoliceDao();
            $contrats = $pdao->getPolicesValides();*/
            require_once('../view/intermediaires/attestations.php');
        break;
        case 'commande_attestations':
            $pdao = new PoliceDao();
            $contrats = $pdao->getPolicesValides();
            require_once('../view/intermediaires/attestations.php');
        break;
       
    }
}