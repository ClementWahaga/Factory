<!DOCTYPE html>
<html>

<?php include('templates/header.php');



$book1 = BookFactory::create('The Redbreast', 'Jo Nesbo');
$book2 = BookFactory::create('The Seventh Scroll', 'Wilbur Smith');
$book3 = BookFactory::create('Birdsong', 'Sebastian Faulks');
$book4 = BookFactory::create('harry potter', 'J.K Rowling');
$book5 = BookFactory::create('Lord of ring','J.R.R Tolkien');

$book1Info = $book1->getNameAndAuthor();
$book2Info = $book2->getNameAndAuthor();
$book3Info = $book3->getNameAndAuthor();
$book4Info = $book4->getNameAndAuthor();
$book5Info = $book5->getNameAndAuthor();

$books = array();

array_push($books, $book1Info, $book2Info, $book3Info, $book4Info,$book5Info);





?>

<h4 class="center grey-text">Mes Livres préferer</h4>

<div class="container">
    <div class="row">
        <?php foreach($books as $book): ?>
        <div class="col s6 md3">
            <div class="card z-depth-0">
                <img src="public/img/books.png" class="pizza" alt="">
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