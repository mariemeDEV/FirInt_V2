<?php
require_once '../entities/Police.php';
require_once '../entities/VenteAttestation.php';
require_once '../entities/PoliceGaranties.php';
require_once '../entities/EtatPolice.php';



//namespace mapping;
require_once '../controllers/ConnexionDB.php';
require_once '../mapping/AttestationsDao.php';
require_once '../mapping/PoliceGarantiesDao.php';
require_once '../mapping/EtatPoliceDao.php';
require_once '../mapping/AvenantPoliceDao.php';



class PoliceDao{
    
    private static $connector;
    public function getConnector(){
        self::$connector= ConnexionDB::getInstance();
        return  self::$connector;
    }
    public function getNumPolice(int $cat)
    {
        $connector = $this->getConnector();
        $numRequest = $connector->prepare("select max(numpolice)+1 from police_valide
              WHERE codeCategorie ='".$cat."' 
              ORDER by numpolice DESC limit 1");
              try{
                $numRequest->execute();
                $pNumber=$numRequest->fetchAll(PDO::FETCH_ASSOC);
                return $pNumber;
              }catch(Exception $e){
                return $e->getMessage();
            }
    }
    public function getPolice($nump)
    {
        $connector = $this->getConnector();
        $numRequest = $connector->prepare("select numpolice from police_valide  where numpolice='".$nump."'ORDER limit 1");
              try{
                $numRequest->execute();
                $lastNumber=$numRequest->fetchAll(PDO::FETCH_ASSOC);
                return $lastNumber;
              }catch(Exception $e){
                return $e->getMessage();
            }
    }
    //Générer Id vente d'attestation
    public function generateIdVente($length):string{
        $idGenerated      = '';
        $characters       = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@';
        $charactersLength = strlen($characters);
        for ($i = 0; $i < $length; $i++) {
            $idGenerated .= $characters[rand(0, $charactersLength - 1)];
        }
        return $idGenerated;
    }

    //Creation de police
    public function insertPolice(Police $p,Array $garanties){
   $this->getConnector()->beginTransaction();
    try{
    //Gérer avenant
    $avPolice = new AvenantPoliceDao();
    //$pnumber = $this->getPolice();
   // echo($pnumber[0]['max(numpolice)']);
    $response = $avPolice->setAvenantPolice('254478');
    echo($response);
    //Insertion dans la table police
    /*$insertPoliceRequest =  $this->getConnector()->prepare(
        "insert into police_valide values('".$p->getNumeroPolice()."','".$p->getCodeFormule()."','".$p->getIntermediaire()."','".$p->getCodeCategorie()."','".$p->getNatureContrat()."','".$p->getCodeZone()."','".$p->getDateEffet()."','".$p->getDuree()."','".$p->getDateEcheance()."','".$p->getQualiteAssure()."','".$p->getNomAssure()."','".$p->getPrenomAssure()."','".$p->getAdresse()."','".$p->getCodeVilleAssure()."','".$p->getCodeProfession()."','".$p->getCodeActivite()."','".$p->getTypePiece()."','".$p->getNumPiece()."','".$p->getTelephone()."','".$p->getTypePermis()."','".$p->getNumPermis()."','".$p->getDateDeLivPermis()."','".$p->getLieuDeLivPermis()."','".$p->getImmatriculation()."','".$p->getNumChassis()."','".$p->getCodeMarque()."','".$p->getCodeSerie()."','".$p->getCodeGenre()."','".$p->getCodeUsage()."','".$p->getCodeEnergie()."','".$p->getNombreDePlace()."','".$p->getCylindre()."','".$p->getValeurNeuve()."','".$p->getValeurVenale()."','".$p->getPuissanceFiscale()."','".$p->getCodeCarosserie()."','".$p->getDateMiseEnCirculation()."','".$p->getMontantPrime()."','".$p->getMontantAccessoires()."','".$p->getMontantTaxes()."','".$p->getMontantFGA()."','".$p->getMontantTTC()."','".$p->getDateValidation()."','".$p->getDateSouscription()."','".$p->getDateSais()."','".$p->getFlagtrans()."')"
    );
    $insertPoliceRequest->execute();*/
        
    //Insertion dans des garanties associées
    // $garantie = new PoliceGaranties('NULL',$p->getNumeroPolice());
    //$gantDa =  new PoliceGarantiesDao();
    //$gantDa->insertGaranties($garanties,'4010000001');

    //Insertion dans vente attestation et Update table attestation pour les attestations vendues
    //$attDao = new AttestationsDao();
    //Vente jaune et cedeao
     /* if(isset($_POST['att_jaunes']) && isset($_POST['att_cedeao']) ){
            $idVente = $this->generateIdVente(5);
            $vente_j = new VenteAttestation('NULL',$idVente,$attDao->getIdAttestation($_POST['att_jaunes'])[0]['id_attestation'],$p->getNumeroPolice());
            $vente_c= new VenteAttestation('NULL',$idVente,$attDao->getIdAttestation($_POST['att_cedeao'])[0]['id_attestation'],$p->getNumeroPolice());
            $attDao->inserteVente($vente_j,$vente_c);*/
    //Vente verte et cedeao
     /* }else if(isset($_POST['att_vertes']) && isset($_POST['att_cedeao']) ){
            $idVente = $this->generateIdVente(5);
            $vente_v = new VenteAttestation('NULL',$idVente,$attDao->getIdAttestation($_POST['att_vertes'])[0]['id_attestation'],$p->getNumeroPolice());
            $vente_c = new VenteAttestation('NULL',$idVente,$attDao->getIdAttestation($_POST['att_cedeao'])[0]['id_attestation'],$p->getNumeroPolice());
            $attDao->inserteVente($vente_v,$vente_c);*/
    //Vente jaune(cas catégorie5)
      /*}else{
            $idVente = $this->generateIdVente(5);
            $vente_j = new VenteAttestation('NULL',$idVente,$attDao->getIdAttestation($_POST['att_jaunes'])[0]['id_attestation'],$p->getNumeroPolice());
            $attDao->inserteVente($vente_j,NULL);
        }*/

    //Définition de l'etat de la police
          /*  $etat = new EtatPolice(1,'4010000001');
            $ep = new EtatPoliceDao();
            $ep->setDefaultEtat($etat);
            $this->getConnector()->commit();
            return true;*/
        }catch(Exception $e){
           return $e->getMessage();
        }

    }

}