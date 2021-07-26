<?php
    // factory pattern ///
    /**
     * creation de la class Transport 
     */
    class transportAvion {
        protected $type;
        
    
        public function __construct($type) {
            $this->$type;
        }
        public function getType($type) {
            return $this->$type ;
        }

    }

    class transportBateau {
        protected $type;

    }

     /**
     * creation de methode factory  
     */
    class transportFactory {

        public static function create($type) {
        $type = ucfirst($className);

            return new transport.$type;
        }
    }


$fedex = transportFactory::create(avion);

var_dump ($car);