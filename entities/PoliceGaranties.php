<?php

class PoliceGaranties{
    private $id;
    private $numeroPolice;
    private $avenantPolice;
    private $codeGarantie;
    private $montantGarantie;

    function __construct($id='',$numeroPolice='', $codeGarantie='',$montantGarantie='',$avenantPolice='')
    {
        $this->id=$id;
        $this->numeroPolice=$numeroPolice;
        $this->codeGarantie=$codeGarantie;
        $this->montantGarantie=$montantGarantie;
        $this->avenantPolice=$avenantPolice;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
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
     * Get the value of codeGarantie
     */ 
    public function getCodeGarantie()
    {
        return $this->codeGarantie;
    }

    /**
     * Set the value of codeGarantie
     *
     * @return  self
     */ 
    public function setCodeGarantie($codeGarantie)
    {
        $this->codeGarantie = $codeGarantie;

        return $this;
    }

    /**
     * Get the value of montantGarantie
     */ 
    public function getMontantGarantie()
    {
        return $this->montantGarantie;
    }

    /**
     * Set the value of montantGarantie
     *
     * @return  self
     */ 
    public function setMontantGarantie($montantGarantie)
    {
        $this->montantGarantie = $montantGarantie;

        return $this;
    }

    /**
     * Get the value of avenantPolice
     */ 
    public function getAvenantPolice()
    {
        return $this->avenantPolice;
    }

    /**
     * Set the value of avenantPolice
     *
     * @return  self
     */ 
    public function setAvenantPolice($avenantPolice)
    {
        $this->avenantPolice = $avenantPolice;

        return $this;
    }
}