<?php

class PoliceGaranties{
    private $id;
    private $numeroPolice;
    private $codeGarantie;
    private $montantGarantie;

    function __construct($id='',$numeroPolice='', $codeGarantie='',$montantGarantie='')
    {
        $this->id=$id;
        $this->numeroPolice=$numeroPolice;
        $this->codeGarantie=$codeGarantie;
        $this->montantGarantie=$montantGarantie;
      
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
}