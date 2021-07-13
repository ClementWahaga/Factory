<?php 

    // factory pattern ///
    //-------------------------------------------------------creation de la class movie------------------------------------------------------------//
        /*
        *ici on cree le pattern  qui est  class book  
        */
    class movie {

        
        private $movieName;
        private $movieAuthor;
        
    
        public function __construct($name, $author) {
            $this->movieName = $name;
            $this->movieAuthor = $author;
        }
        public function getNameAndAuthor() {
            return $this->movieName . ' - ' . $this->movieAuthor;
        }

    }
    //-------------------------------------------------------cretion de la class factory----------------------------------------------------------//
        /*
        *ici on passe  le pattern (class movie ) dans la methode factory 
        *la class movieFactory a pour principe de retouner une instance du pattern 
        *qui nous permettra d instancié cette class autant de fois qu on le souhaite 
        */
    class movieFactory {

        public static function create($name, $author) {
            return new movie($name, $author);
        }
    }

 
?>

