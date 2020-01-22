<?php

class Police{
    private $numeroPolice;
    private $codeFormule;
    private $intermediaire;
    private $codeCategorie;
    private $natureContrat;
    private $codeZone;
    private $dateEffet;
    private $duree;
    private $dateEcheance;
    private $qualiteAssure;
    private $nomAssure;
    private $prenomAssure;
    private $adresse;
    private $codeProfession;
    private $codeVilleAssure;
    private $codeActivite;
    private $typePiece;
    private $numPiece;
    private $telephone;
    private $typePermis;
    private $numPermis;
    private $dateDeLivPermis;
    private $lieuDeLivPermis;
    private $immatriculation;
    private $numChassis;
    private $codeMarque;
    private $codeSerie;
    private $codeGenre;
    private $codeUsage;
    private $codeEnergie;
    private $nombreDePlace;
    private $cylindre;
    private $valeurNeuve;
    private $valeurVenale;
    private $puissanceFiscale;
    private $codeCarosserie;
    private $dateMiseEnCirculation;
    private $montantPrime;
    private $montantAccessoires;
    private $montantTaxes;
    private $montantFGA;
    private $montantTTC;
    private $dateValidation;
    private $dateSouscription;
    private $dateSais;
    private $flagtrans;


    function __construct($numeroPolice='', $codeFormule='',$intermediaire='', $codeCategorie='', $natureContrat='', $codeZone='', $dateEffet='', $duree='', $dateEcheance='', $qualiteAssure='',$nomAssure='',$prenomAssure='',$adresse='',$codeProfession='',$codeVilleAssure='',$codeActivite='',$typePiece='',$numPiece='',$telephone='',$typePermis='',$numPermis='',$dateDeLivPermis='',$lieuDeLivPermis='',$immatriculation='',$numChassis='',$codeMarque='',$codeSerie='',$codeGenre='',$codeUsage='',$codeEnergie='',$nombreDePlace='',$cylindre='',$valeurNeuve='',$valeurVenale='',$puissanceFiscale='',$codeCarosserie='',$dateMiseEnCirculation='',$montantPrime='',$montantAccessoires='',$montantTaxes='',$montantFGA='',$montantTTC='',$dateValidation='',$dateSouscription='',$dateSais='',$flagtrans='')
    {
        $this->numeroPolice=$numeroPolice;
        $this->codeFormule=$codeFormule;
        $this->intermediaire=$intermediaire;
        $this->codeCategorie=$codeCategorie;
        $this->natureContrat=$natureContrat;
        $this->codeZone=$codeZone;
        $this->dateEffet=$dateEffet;
        $this->duree=$duree;
        $this->dateEcheance=$dateEcheance;
        $this->qualiteAssure=$qualiteAssure;
        $this->nomAssure=$nomAssure;
        $this->prenomAssure=$prenomAssure;
        $this->adresse=$adresse;
        $this->codeProfession=$codeProfession;
        $this->codeVilleAssure=$codeVilleAssure;
        $this->codeActivite=$codeActivite;
        $this->typePiece=$typePiece;
        $this->numPiece=$numPiece;
        $this->telephone=$telephone;
        $this->typePermis=$typePermis;
        $this->numPermis=$numPermis;
        $this->dateDeLivPermis=$dateDeLivPermis;
        $this->lieuDeLivPermis=$lieuDeLivPermis;
        $this->immatriculation=$immatriculation;
        $this->numChassis=$numChassis;
        $this->codeMarque=$codeMarque;
        $this->codeSerie=$codeSerie;
        $this->codeGenre=$codeGenre;
        $this->codeUsage=$codeUsage;
        $this->codeEnergie=$codeEnergie;
        $this->nombreDePlace=$nombreDePlace;
        $this->cylindre=$cylindre;
        $this->valeurNeuve=$valeurNeuve;
        $this->valeurVenale=$valeurVenale;
        $this->puissanceFiscale=$puissanceFiscale;
        $this->codeCarosserie=$codeCarosserie;
        $this->dateMiseEnCirculation=$dateMiseEnCirculation;
        $this->montantPrime=$montantPrime;
        $this->montantAccessoires=$montantAccessoires;
        $this->montantTaxes=$montantTaxes;
        $this->montantFGA=$montantFGA;
        $this->montantTTC=$montantTTC;
        $this->dateValidation=$dateValidation;
        $this->dateSouscription=$dateSouscription;
        $this->dateSais=$dateSais;
        $this->flagtrans=$flagtrans;
    }

    /**
     * Get the value of numeroPolice
     */ 
    public function getNumeroPolice()
    {
        return $this->numeroPolice;
    }

    /**
     * Set the value of numeroPolice
     *
     * @return  self
     */ 
    public function setNumeroPolice($numeroPolice)
    {
        $this->numeroPolice = $numeroPolice;

        return $this;
    }

    /**
     * Get the value of codeFormule
     */ 
    public function getCodeFormule()
    {
        return $this->codeFormule;
    }

    /**
     * Set the value of codeFormule
     *
     * @return  self
     */ 
    public function setCodeFormule($codeFormule)
    {
        $this->codeFormule = $codeFormule;

        return $this;
    }

    /**
     * Get the value of intermediaire
     */ 
    public function getIntermediaire()
    {
        return $this->intermediaire;
    }

    /**
     * Set the value of intermediaire
     *
     * @return  self
     */ 
    public function setIntermediaire($intermediaire)
    {
        $this->intermediaire = $intermediaire;

        return $this;
    }

    /**
     * Get the value of codeCategorie
     */ 
    public function getCodeCategorie()
    {
        return $this->codeCategorie;
    }

    /**
     * Set the value of codeCategorie
     *
     * @return  self
     */ 
    public function setCodeCategorie($codeCategorie)
    {
        $this->codeCategorie = $codeCategorie;

        return $this;
    }

    /**
     * Get the value of natureContrat
     */ 
    public function getNatureContrat()
    {
        return $this->natureContrat;
    }

    /**
     * Set the value of natureContrat
     *
     * @return  self
     */ 
    public function setNatureContrat($natureContrat)
    {
        $this->natureContrat = $natureContrat;

        return $this;
    }

    /**
     * Get the value of codeZone
     */ 
    public function getCodeZone()
    {
        return $this->codeZone;
    }

    /**
     * Set the value of codeZone
     *
     * @return  self
     */ 
    public function setCodeZone($codeZone)
    {
        $this->codeZone = $codeZone;

        return $this;
    }

    /**
     * Get the value of dateEffet
     */ 
    public function getDateEffet()
    {
        return $this->dateEffet;
    }

    /**
     * Set the value of dateEffet
     *
     * @return  self
     */ 
    public function setDateEffet($dateEffet)
    {
        $this->dateEffet = $dateEffet;

        return $this;
    }

    /**
     * Get the value of dateEcheance
     */ 
    public function getDateEcheance()
    {
        return $this->dateEcheance;
    }

    /**
     * Set the value of dateEcheance
     *
     * @return  self
     */ 
    public function setDateEcheance($dateEcheance)
    {
        $this->dateEcheance = $dateEcheance;

        return $this;
    }

    /**
     * Get the value of qualiteAssure
     */ 
    public function getQualiteAssure()
    {
        return $this->qualiteAssure;
    }

    /**
     * Set the value of qualiteAssure
     *
     * @return  self
     */ 
    public function setQualiteAssure($qualiteAssure)
    {
        $this->qualiteAssure = $qualiteAssure;

        return $this;
    }

    /**
     * Get the value of nomAssure
     */ 
    public function getNomAssure()
    {
        return $this->nomAssure;
    }

    /**
     * Set the value of nomAssure
     *
     * @return  self
     */ 
    public function setNomAssure($nomAssure)
    {
        $this->nomAssure = $nomAssure;

        return $this;
    }

    /**
     * Get the value of prenomAssure
     */ 
    public function getPrenomAssure()
    {
        return $this->prenomAssure;
    }

    /**
     * Set the value of prenomAssure
     *
     * @return  self
     */ 
    public function setPrenomAssure($prenomAssure)
    {
        $this->prenomAssure = $prenomAssure;

        return $this;
    }

    /**
     * Get the value of codeProfession
     */ 
    public function getCodeProfession()
    {
        return $this->codeProfession;
    }

    /**
     * Set the value of codeProfession
     *
     * @return  self
     */ 
    public function setCodeProfession($codeProfession)
    {
        $this->codeProfession = $codeProfession;

        return $this;
    }

    /**
     * Get the value of codeVilleAssure
     */ 
    public function getCodeVilleAssure()
    {
        return $this->codeVilleAssure;
    }

    /**
     * Set the value of codeVilleAssure
     *
     * @return  self
     */ 
    public function setCodeVilleAssure($codeVilleAssure)
    {
        $this->codeVilleAssure = $codeVilleAssure;

        return $this;
    }

    /**
     * Get the value of codeActivite
     */ 
    public function getCodeActivite()
    {
        return $this->codeActivite;
    }

    /**
     * Set the value of codeActivite
     *
     * @return  self
     */ 
    public function setCodeActivite($codeActivite)
    {
        $this->codeActivite = $codeActivite;

        return $this;
    }

    /**
     * Get the value of typePiece
     */ 
    public function getTypePiece()
    {
        return $this->typePiece;
    }

    /**
     * Set the value of typePiece
     *
     * @return  self
     */ 
    public function setTypePiece($typePiece)
    {
        $this->typePiece = $typePiece;

        return $this;
    }

    /**
     * Get the value of numPiece
     */ 
    public function getNumPiece()
    {
        return $this->numPiece;
    }

    /**
     * Set the value of numPiece
     *
     * @return  self
     */ 
    public function setNumPiece($numPiece)
    {
        $this->numPiece = $numPiece;

        return $this;
    }

    /**
     * Get the value of telephone
     */ 
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set the value of telephone
     *
     * @return  self
     */ 
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get the value of typePermis
     */ 
    public function getTypePermis()
    {
        return $this->typePermis;
    }

    /**
     * Set the value of typePermis
     *
     * @return  self
     */ 
    public function setTypePermis($typePermis)
    {
        $this->typePermis = $typePermis;

        return $this;
    }

    /**
     * Get the value of numPermis
     */ 
    public function getNumPermis()
    {
        return $this->numPermis;
    }

    /**
     * Set the value of numPermis
     *
     * @return  self
     */ 
    public function setNumPermis($numPermis)
    {
        $this->numPermis = $numPermis;

        return $this;
    }

    /**
     * Get the value of dateDeLivPermis
     */ 
    public function getDateDeLivPermis()
    {
        return $this->dateDeLivPermis;
    }

    /**
     * Set the value of dateDeLivPermis
     *
     * @return  self
     */ 
    public function setDateDeLivPermis($dateDeLivPermis)
    {
        $this->dateDeLivPermis = $dateDeLivPermis;

        return $this;
    }

    /**
     * Get the value of lieuDeLivPermis
     */ 
    public function getLieuDeLivPermis()
    {
        return $this->lieuDeLivPermis;
    }

    /**
     * Set the value of lieuDeLivPermis
     *
     * @return  self
     */ 
    public function setLieuDeLivPermis($lieuDeLivPermis)
    {
        $this->lieuDeLivPermis = $lieuDeLivPermis;

        return $this;
    }

    /**
     * Get the value of immatriculation
     */ 
    public function getImmatriculation()
    {
        return $this->immatriculation;
    }

    /**
     * Set the value of immatriculation
     *
     * @return  self
     */ 
    public function setImmatriculation($immatriculation)
    {
        $this->immatriculation = $immatriculation;

        return $this;
    }

    /**
     * Get the value of numChassis
     */ 
    public function getNumChassis()
    {
        return $this->numChassis;
    }

    /**
     * Set the value of numChassis
     *
     * @return  self
     */ 
    public function setNumChassis($numChassis)
    {
        $this->numChassis = $numChassis;

        return $this;
    }

    /**
     * Get the value of codeMarque
     */ 
    public function getCodeMarque()
    {
        return $this->codeMarque;
    }

    /**
     * Set the value of codeMarque
     *
     * @return  self
     */ 
    public function setCodeMarque($codeMarque)
    {
        $this->codeMarque = $codeMarque;

        return $this;
    }

    /**
     * Get the value of codeSerie
     */ 
    public function getCodeSerie()
    {
        return $this->codeSerie;
    }

    /**
     * Set the value of codeSerie
     *
     * @return  self
     */ 
    public function setCodeSerie($codeSerie)
    {
        $this->codeSerie = $codeSerie;

        return $this;
    }

    /**
     * Get the value of codeGenre
     */ 
    public function getCodeGenre()
    {
        return $this->codeGenre;
    }

    /**
     * Set the value of codeGenre
     *
     * @return  self
     */ 
    public function setCodeGenre($codeGenre)
    {
        $this->codeGenre = $codeGenre;

        return $this;
    }

    /**
     * Get the value of codeUsage
     */ 
    public function getCodeUsage()
    {
        return $this->codeUsage;
    }

    /**
     * Set the value of codeUsage
     *
     * @return  self
     */ 
    public function setCodeUsage($codeUsage)
    {
        $this->codeUsage = $codeUsage;

        return $this;
    }

    /**
     * Get the value of codeEnergie
     */ 
    public function getCodeEnergie()
    {
        return $this->codeEnergie;
    }

    /**
     * Set the value of codeEnergie
     *
     * @return  self
     */ 
    public function setCodeEnergie($codeEnergie)
    {
        $this->codeEnergie = $codeEnergie;

        return $this;
    }

    /**
     * Get the value of nombreDePlace
     */ 
    public function getNombreDePlace()
    {
        return $this->nombreDePlace;
    }

    /**
     * Set the value of nombreDePlace
     *
     * @return  self
     */ 
    public function setNombreDePlace($nombreDePlace)
    {
        $this->nombreDePlace = $nombreDePlace;

        return $this;
    }

    /**
     * Get the value of cylindre
     */ 
    public function getCylindre()
    {
        return $this->cylindre;
    }

    /**
     * Set the value of cylindre
     *
     * @return  self
     */ 
    public function setCylindre($cylindre)
    {
        $this->cylindre = $cylindre;

        return $this;
    }

    /**
     * Get the value of valeurNeuve
     */ 
    public function getValeurNeuve()
    {
        return $this->valeurNeuve;
    }

    /**
     * Set the value of valeurNeuve
     *
     * @return  self
     */ 
    public function setValeurNeuve($valeurNeuve)
    {
        $this->valeurNeuve = $valeurNeuve;

        return $this;
    }

    /**
     * Get the value of valeurVenale
     */ 
    public function getValeurVenale()
    {
        return $this->valeurVenale;
    }

    /**
     * Set the value of valeurVenale
     *
     * @return  self
     */ 
    public function setValeurVenale($valeurVenale)
    {
        $this->valeurVenale = $valeurVenale;

        return $this;
    }

    /**
     * Get the value of puissanceFiscale
     */ 
    public function getPuissanceFiscale()
    {
        return $this->puissanceFiscale;
    }

    /**
     * Set the value of puissanceFiscale
     *
     * @return  self
     */ 
    public function setPuissanceFiscale($puissanceFiscale)
    {
        $this->puissanceFiscale = $puissanceFiscale;

        return $this;
    }

    /**
     * Get the value of codeCarosserie
     */ 
    public function getCodeCarosserie()
    {
        return $this->codeCarosserie;
    }

    /**
     * Set the value of codeCarosserie
     *
     * @return  self
     */ 
    public function setCodeCarosserie($codeCarosserie)
    {
        $this->codeCarosserie = $codeCarosserie;

        return $this;
    }

    /**
     * Get the value of dateMiseEnCirculation
     */ 
    public function getDateMiseEnCirculation()
    {
        return $this->dateMiseEnCirculation;
    }

    /**
     * Set the value of dateMiseEnCirculation
     *
     * @return  self
     */ 
    public function setDateMiseEnCirculation($dateMiseEnCirculation)
    {
        $this->dateMiseEnCirculation = $dateMiseEnCirculation;

        return $this;
    }


    /**
     * Get the value of montantAccessoires
     */ 
    public function getMontantAccessoires()
    {
        return $this->montantAccessoires;
    }

    /**
     * Set the value of montantAccessoires
     *
     * @return  self
     */ 
    public function setMontantAccessoires($montantAccessoires)
    {
        $this->montantAccessoires = $montantAccessoires;

        return $this;
    }

    /**
     * Get the value of montantTaxes
     */ 
    public function getMontantTaxes()
    {
        return $this->montantTaxes;
    }

    /**
     * Set the value of montantTaxes
     *
     * @return  self
     */ 
    public function setMontantTaxes($montantTaxes)
    {
        $this->montantTaxes = $montantTaxes;

        return $this;
    }

    /**
     * Get the value of montantFGA
     */ 
    public function getMontantFGA()
    {
        return $this->montantFGA;
    }

    /**
     * Set the value of montantFGA
     *
     * @return  self
     */ 
    public function setMontantFGA($montantFGA)
    {
        $this->montantFGA = $montantFGA;

        return $this;
    }

    /**
     * Get the value of montantTTC
     */ 
    public function getMontantTTC()
    {
        return $this->montantTTC;
    }

    /**
     * Set the value of montantTTC
     *
     * @return  self
     */ 
    public function setMontantTTC($montantTTC)
    {
        $this->montantTTC = $montantTTC;

        return $this;
    }

    /**
     * Get the value of dateValidation
     */ 
    public function getDateValidation()
    {
        return $this->dateValidation;
    }

    /**
     * Set the value of dateValidation
     *
     * @return  self
     */ 
    public function setDateValidation($dateValidation)
    {
        $this->dateValidation = $dateValidation;

        return $this;
    }

    /**
     * Get the value of dateSouscription
     */ 
    public function getDateSouscription()
    {
        return $this->dateSouscription;
    }

    /**
     * Set the value of dateSouscription
     *
     * @return  self
     */ 
    public function setDateSouscription($dateSouscription)
    {
        $this->dateSouscription = $dateSouscription;

        return $this;
    }


    /**
     * Get the value of montantPrime
     */ 
    public function getMontantPrime()
    {
        return $this->montantPrime;
    }

    /**
     * Set the value of montantPrime
     *
     * @return  self
     */ 
    public function setMontantPrime($montantPrime)
    {
        $this->montantPrime = $montantPrime;

        return $this;
    }

    /**
     * Get the value of dateSais
     */ 
    public function getDateSais()
    {
        return $this->dateSais;
    }

    /**
     * Set the value of dateSais
     *
     * @return  self
     */ 
    public function setDateSais($dateSais)
    {
        $this->dateSais = $dateSais;

        return $this;
    }

    /**
     * Get the value of flagtrans
     */ 
    public function getFlagtrans()
    {
        return $this->flagtrans;
    }

    /**
     * Set the value of flagtrans
     *
     * @return  self
     */ 
    public function setFlagtrans($flagtrans)
    {
        $this->flagtrans = $flagtrans;

        return $this;
    }

    /**
     * Get the value of adresse
     */ 
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set the value of adresse
     *
     * @return  self
     */ 
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get the value of duree
     */ 
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * Set the value of duree
     *
     * @return  self
     */ 
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }
}