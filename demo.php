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
 $book1 = new book('saw','thriller');
 $book2 = new book('mobidick','roman');
 $book3 = new book('tom sawyer','mark twin');
 $book4 = new book('50 nuances degres','romance');
 
 $books = array();

    array_push($books, $book1, $book2, $book3, $book4);
 
 ?>



<pre>
<?= var_export ($book1) ?>
<?= var_export ($book2) ?>
<?= var_export ($book3) ?>
<?= var_export ($book4) ?>

</pre>


                
<h4 class="center grey-text">My Favorite Books!</h4>

<div class="container">
    <div class="row">
        <?php foreach($books as $book): ?>
        <div class="col s6 md3">
            <div class="card z-depth-0">
                <div class="card-content center">
                    <h6><?php echo $book; ?></h6>
                    <ul class="grey-text">

                    </ul>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<?php include('templates/footer.php'); ?>

</html>