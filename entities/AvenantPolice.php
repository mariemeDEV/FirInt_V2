<?php

class AvenantPolice{
    private $numAvenant;
    private $typeAvenant;
    private $police;

    public function __construct($numAvenant='',$typeAvenant='',$police=''){
        $this->numAvenant = $numAvenant;
        $this->typeAvenant = $typeAvenant;
        $this->police=$police;
    }
    /**
     * Get the value of numAvenant
     */ 
    public function getNumAvenant()
    {
            return $this->numAvenant;
    }

    /**
     * Set the value of numAvenant
     *
     * @return  self
     */ 
    public function setNumAvenant($numAvenant)
    {
            $this->numAvenant = $numAvenant;

            return $this;
    }

    /**
     * Get the value of typeAvenant
     */ 
    public function getTypeAvenant()
    {
            return $this->typeAvenant;
    }

    /**
     * Set the value of typeAvenant
     *
     * @return  self
     */ 
    public function setTypeAvenant($typeAvenant)
    {
            $this->typeAvenant = $typeAvenant;

            return $this;
    }

    /**
     * Get the value of police
     */ 
    public function getPolice()
    {
            return $this->police;
    }

    /**
     * Set the value of police
     *
     * @return  self
     */ 
    public function setPolice($police)
    {
            $this->police = $police;

            return $this;
    }
}