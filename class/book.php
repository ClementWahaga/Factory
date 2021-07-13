<?php 

    // factory pattern ///
    //-------------------------------------------------------creation de la class book------------------------------------------------------------//
        /*
        *ici on cree le pattern  qui est  class book  
        *le meme pattern qui passera dans la methode factory 
        *
        */
    class Book {

        
        private $bookName;
        private $bookAuthor;
        const BR = '<br />';
    
        public function __construct($name, $author) {
            $this->bookName = $name;
            $this->bookAuthor = $author;
        }
        public function getNameAndAuthor() {
            return $this->bookName . ' - ' . $this->bookAuthor.self::BR;
        }

    }
    //-------------------------------------------------------cretion de la class factory----------------------------------------------------------//
        /*
        *ici on passe  le pattern (class book ) dans la methode factory 
        *la class bookFactory a pour principe de retouner une instance du pattern 
        *qui nous permettra d instancié cette class autant de fois qu on le souhaite 
        */
    class BookFactory {

        public static function create($name, $author) {
            return new Book($name, $author);
        }
    }

 
?>

