<!-- php -->
<?php

// "import" Movie class
require_once __DIR__ .  "/Models/Movie.php";

$matrix = new Movie("Matrix", "Andy Wachowski and Larry Wachowsky", "Aleksandar Hemon, David Mitchell e Lana Wachowski", 120, 1999, "Action", "Example of movie description");

$nope = new Movie("Nope", "Jordan Peele", "Jordan Peele", 120, 2022, "Fantasy", "Example of movie desciption 2");

echo $matrix->getData();
echo $nope->getData();

?>
<!-- /php -->