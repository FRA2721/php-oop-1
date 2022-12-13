<!-- php -->
<?php

// define Movie class 

/**
 * class Movie
 * define Movie class
 * @author FRANCESCO CIMINO
 */

class Movie{

    // common main characteristics
    // attributes

    // construct
    public function __construct(public String $title, public String $movie_director, public String $production, public int $duration, public int $release_date, public String $genre, public String $description) {

        $this->title = $title;
        $this->movie_director = $movie_director;
        $this->production = $production;
        $this->duration = $duration;
        $this->release_date = $release_date;
        $this->genre = $genre;
        $this->description = $description;
        
    }
}

?>
<!-- /php -->