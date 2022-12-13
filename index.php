<!-- php -->
<?php

// "import" Movie class
require_once __DIR__ .  "/Models/Movie.php";

// movie 1
$matrix = new Movie("Matrix", "Andy Wachowski and Larry Wachowsky", "Aleksandar Hemon, David Mitchell e Lana Wachowski", 120, 1999, "Action", "Example of movie description");

// movie 2
$nope = new Movie("Nope", "Jordan Peele", "Jordan Peele", 120, 2022, "Fantasy", "Example of movie desciption 2");

// movie 3
$emantipation = new Movie("Emantipation", "Antoine Fuqua", "Antoine Fuqua", 120, 2022, "Thriller", "Example of movie desciption 3");

// movie 4
$nostalgia = new Movie("Nostalgia", "Mario Martone", "Mario Martone", 120, 2022, "Drama", "Example of movie desciption 4");

// movies list
$movies= [$matrix, $nope, $emantipation, $nostalgia];

// movies data output
// foreach($movies as $movie) {
//     echo $movie->getData();
// }

?>
<!-- /php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- title -->
    <title>Movies</title>
    <!-- /title -->

    <!-- import bootstrap cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <!-- /import bootstrap cdn -->

    <!-- css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- /css -->

</head>

<body>
    <!-- container -->
    <div class="container">
        <h1 class="text-center pb-4">Movies</h1>
        <div class="row d-flex justify-content-around ">

            <!-- show movie data -->
            <?php foreach ($movies as $key => $movie) { ?>
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <!-- data -->
                            <h6 class="card-title"><?php echo $movie->getData() ?></h6>
                            <p class="card-text"><?php echo $movie->description ?></p>
                            <!-- /data -->
                        </div>
                    </div>
                </div>
            <?php } ?>
            <!-- /show movie data -->
        </div>
    </div>
    <!-- /container -->
</body>

</html>