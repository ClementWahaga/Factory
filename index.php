<!DOCTYPE html>
<html>

<?php include('templates/header.php');



$movie1 = movieFactory::create('The Redbreast', 'Jo Nesbo');
$movie2 = movieFactory::create('The Seventh Scroll', 'Wilbur Smith');
$movie3 = movieFactory::create('Birdsong', 'Sebastian Faulks');
$movie4 = movieFactory::create('harry potter', 'J.K Rowling');
$movie5 = movieFactory::create('Lord of ring','J.R.R Tolkien');

$movie1Info = $movie1->getNameAndAuthor();
$movie2Info = $movie2->getNameAndAuthor();
$movie3Info = $movie3->getNameAndAuthor();
$movie4Info = $movie4->getNameAndAuthor();
$movie5Info = $movie5->getNameAndAuthor();

$movies = array();

array_push($movies, $movie1Info, $movie2Info, $movie3Info, $movie4Info,$movie5Info);





?>

<h4 class="center grey-text">Mes Livres préferer</h4>

<div class="container">
    <div class="row">
        <?php foreach($movies as $movie): ?>
        <div class="col s6 md3">
            <div class="card z-depth-0">
                <img src="public/img/movies.png" class="pizza" alt="">
                <div class="card-content center">
                    <h6><?php echo $movie; ?></h6>
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