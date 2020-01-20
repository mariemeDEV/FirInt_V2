<?php

class Attestation{
    private $id;
    private $numeroAttestation;
    private $typeAttestation;
    private $intermediaire;
    private $etat;

    public function __construct($id='',$numeroAttestation='',$typeAttestation='',$intermediaire='', $etat=''){
        $this->id = $id;
        $this->numeroAttestation=$numeroAttestation;
        $this->typeAttestation=$typeAttestation;
        $this->intermediaire=$intermediaire;
        $this->etat =  $etat;
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
     * Get the value of numeroAttestation
     */ 
    public function getNumeroAttestation()
    {
        return $this->numeroAttestation;
    }

    /**
     * Get the value of typeAttestation
     */ 
    public function getTypeAttestation()
    {
        return $this->typeAttestation;
    }

    /**
     * Set the value of typeAttestation
     *
     * @return  self
     */ 
    public function setTypeAttestation($typeAttestation)
    {
        $this->typeAttestation = $typeAttestation;

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
     * Get the value of etat
     */ 
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set the value of etat
     *
     * @return  self
     */ 
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }
}