<?php
require_once '../entities/Police.php';
//namespace mapping;
require_once '../controllers/ConnexionDB.php';
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
    //Creation de police
    public function insertPolice(Police $p){
        $connector = $this->getConnector();
        $insertPoliceRequest = $connector->prepare(
            "insert into police_valide values(
            '".$p->getNumeroPolice()."',
            '".$p->getCodeFormule()."',
            '".$p->getIntermediaire()."',
            '".$p->getCodeCategorie()."',
            '".$p->getNatureContrat()."',
            '".$p->getCodeZone()."',
            '".$p->getDateEffet()."',
            '".$p->getDuree()."',
            '".$p->getDateEcheance()."',
            '".$p->getQualiteAssure()."',
            '".$p->getNomAssure()."',
            '".$p->getPrenomAssure()."',
            '".$p->getAdresse()."',
            '".$p->getCodeVilleAssure()."',
            '".$p->getCodeProfession()."',
            '".$p->getCodeActivite()."',
            '".$p->getTypePiece()."',
            '".$p->getNumPiece()."',
            '".$p->getTelephone()."',
            '".$p->getTypePermis()."',
            '".$p->getNumPermis()."',
            '".$p->getDateDeLivPermis()."',
            '".$p->getLieuDeLivPermis()."',
            '".$p->getImmatriculation()."',
            '".$p->getNumChassis()."',
            '".$p->getCodeMarque()."',
            '".$p->getCodeSerie()."',
            '".$p->getCodeGenre()."',
            '".$p->getCodeUsage()."',
            '".$p->getCodeEnergie()."',
            '".$p->getNombreDePlace()."',
            '".$p->getCylindre()."',
            '".$p->getValeurNeuve()."',
            '".$p->getValeurVenale()."',
            '".$p->getPuissanceFiscale()."',
            '".$p->getCodeCarosserie()."',
            '".$p->getDateMiseEnCirculation()."',
            '".$p->getMontantPrime()."',
            '".$p->getMontantAccessoires()."',
            '".$p->getMontantTaxes()."',
            '".$p->getMontantFGA()."',
            '".$p->getMontantTTC()."',
            '".$p->getDateValidation()."',
            '".$p->getDateSouscription()."',
            '".$p->getDateSais()."',
            '".$p->getFlagtrans()."'
            )"
        );
        try{
            $insertPoliceRequest->execute();
            return true;
        }catch(Exception $e){
           return $e->getMessage();
        }

    }

}