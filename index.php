<!-- php -->
<?php

// "import" Movie class
require_once __DIR__ .  "/Models/Movie.php";

$matrix = new Movie("Matrix", "Andy Wachowski and Larry Wachowsky", "Aleksandar Hemon, David Mitchell e Lana Wachowski", 120, 1999, "Action", "Example of movie description");

echo $matrix->getData();

?>
<!-- /php -->