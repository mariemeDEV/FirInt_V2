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
        case 'updateDevis':
            $verteData=getVertes();
            $jauneData=getJaunes();
            $cedeaoData=getCedeao();
            $pDao = new PoliceDao();
            $id=$_GET['id'];
            $data = $pDao->getPoliceById($id);
            require_once('../view/intermediaires/devisUpdate.php');
        break;
        case 'contrats':
            $pdao = new PoliceDao();
            $contrats = $pdao->getPolicesValides();
            require_once('../view/intermediaires/contrats.php');
        break;
        case 'annul':
            $pdao = new PoliceDao();
            $contrats = $pdao->getPolicesValides();
            $pdao->annulePolice($_GET['idPolice']);
            require_once('../view/intermediaires/contrats.php');
        break;
        case 'print' :
            require_once('../view/intermediaires/cp.php');
            //require_once('../view/intermediaires/jaune.php');
        break;
        case 'printDevis' :
            require_once('../view/intermediaires/cp.php');
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
        case 'consult_attestations':
            $attDao = new AttestationsDao();
            $att = $attDao->getAttestationsInt(40);
            require_once('../view/intermediaires/attestations.php');
        break;
        case 'supprimer':
            $pdao = new PoliceDao();
            print_r($pdao->deleteDevis($_GET['idPr']));
            $devis = $pdao->getDevis();
            require_once('../view/intermediaires/devis.php');
        break;
      /*  case 'commande_attestations':
            $pdao = new PoliceDao();
            $contrats = $pdao->getPolicesValides();
            require_once('../view/intermediaires/attestations.php');
        break;*/
        case 'deconnect':
            require_once('../view/connexion.php');
        break;
        default :
            require_once('../view/pages_404.php');
        break;
       
    }
}