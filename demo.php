<?php 

    // factory pattern ///
    
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

    
?>

<!DOCTYPE html>
<html>

<?php include('templates/header.php');
 $book1 = new book('saw','thriller')
 
 
 ?>



<pre>
<?= var_export ($book1) ?>
</pre>

<h4 class="center grey-text">My Favorite Books!</h4>
                
<div class="container">
    <div class="row">
        <div class="col s6 md3">
            <div class="card z-depth-0">
                <div class="card-content center">
                    <h6><?=  serialize($book1); ?></h6>
                </div>
            </div>
        </div>
        
    </div>
</div>

<?php include('templates/footer.php'); ?>

</html>