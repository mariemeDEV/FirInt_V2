<?php
//namespace entities;

class VenteAttestation{
        private $id;
        private $idVente;
        private $idAttestation;
        private $policeValide;
        private $avenantPolice;

    function __construct($id='',$idVente='',$idAttestation='',$policeValide='',$avenantPolice='')
    {
        $this->id=$id;
        $this->idVente=$idVente;
        $this->idAttestation=$idAttestation;
        $this->policeValide=$policeValide;
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
         * Get the value of idVente
         */ 
        public function getIdVente()
        {
                return $this->idVente;
        }

        /**
         * Set the value of idVente
         *
         * @return  self
         */ 
        public function setIdVente($idVente)
        {
                $this->idVente = $idVente;

                return $this;
        }

        /**
         * Get the value of idAttestation
         */ 
        public function getIdAttestation()
        {
                return $this->idAttestation;
        }

        /**
         * Set the value of idAttestation
         *
         * @return  self
         */ 
        public function setIdAttestation($idAttestation)
        {
                $this->idAttestation = $idAttestation;

                return $this;
        }

        /**
         * Get the value of policeValide
         */ 
        public function getPoliceValide()
        {
                return $this->policeValide;
        }

        /**
         * Set the value of policeValide
         *
         * @return  self
         */ 
        public function setPoliceValide($policeValide)
        {
                $this->policeValide = $policeValide;

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