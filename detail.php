<?php 
    $id =  $_GET['id'];
    $movie = file_get_contents('http://www.omdbapi.com/?apikey=e4938462&i='.$id);
    $movie = json_decode($movie,true);

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Rekweb Movie</title>
  </head>
  <body>
      <div class="container">

        <div class="row">

            <div class="col">

                <h2>Movie Details</h2>

            </div>

        </div>
        <div class="row">
            <div class="col-3">
                    
                <img src="<?= $movie['Poster'] ?>" class="img-fluid">   
            
        </div>
        <div class="col-7">

        <ul class="list-group">
                <li class="list-group">
                    <h3><?= $movie['Title'] ?>(<?= $movie['Year'] ?>)</h3>
                </li>
                <li class="list-group-item">Direction : <strong><?= $movie['Director'] ?></strong></li>
                <li class="list-group-item">write : <strong><?= $movie['Writer'] ?></strong></li>
                <li class="list-group-item">Casts : <strong><?= $movie['Actors'] ?></strong></li>
                <li class="list-group-item"><?= $movie['Plot'] ?></li>
        </ul>

        </div>
    </div>

        
      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>