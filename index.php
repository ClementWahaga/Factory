<!DOCTYPE html>
<html>

<?php include('templates/header.php');

$movie1 = movieFactory::create('Matrix trilogie', 'Lana Wachowski & Lilly Wachowski');
$movie2 = movieFactory::create('StarWars Saga', 'Lucas film');
$movie3 = movieFactory::create('Ghost in the shell(anime)', 'Mamoru Oshi');
$movie4 = movieFactory::create('Daredevil', 'Marvel studio');
$movie5 = movieFactory::create('Conjuring','Warner studio');

$movie1Info = $movie1->getTitleAndProducter();
$movie2Info = $movie2->getTitleAndProducter();
$movie3Info = $movie3->getTitleAndProducter();
$movie4Info = $movie4->getTitleAndProducter();
$movie5Info = $movie5->getTitleAndProducter();

$movies = array();

array_push($movies, $movie1Info, $movie2Info, $movie3Info, $movie4Info,$movie5Info);

?>

<h4 class="center grey-text">Mes films favorits</h4>

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