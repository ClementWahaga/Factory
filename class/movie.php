<?php 

    // factory pattern ///
    //-------------------------------------------------------creation de la class movie------------------------------------------------------------//
        /*
        *ici on cree le pattern  qui est  class book  
        */
    class movie {

        
        private $movieTitle;
        private $movieProducter;
        
    
        public function __construct($Title, $Producter) {
            $this->movieTitle = $Title;
            $this->movieProducter = $Producter;
        }
        public function getTitleAndProducter() {
            return $this->movieTitle . ' - ' . $this->movieProducter;
        }

    }
    //-------------------------------------------------------cretion de la class factory----------------------------------------------------------//
        /*
        *ici on passe  le pattern (class movie ) dans la methode factory 
        *la class movieFactory a pour principe de retouner une instance du pattern 
        *qui nous permettra d instancié cette class autant de fois qu on le souhaite 
        */
    class movieFactory {

        public static function create($Title, $Producter) {
            return new movie($Title, $Producter);
        }
    }

 
?>

