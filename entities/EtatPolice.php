<?php

class EtatPolice{
    private $type;
    private $police;

    public function __construct($type='',$police){
        $this->type = $type;
        $this->police=$police;
    }

        /**
         * Get the value of type
         */ 
        public function getType()
        {
                return $this->type;
        }

        /**
         * Set the value of type
         *
         * @return  self
         */ 
        public function setType($type)
        {
                $this->type = $type;

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