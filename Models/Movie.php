<!-- php -->
<?php
/**
 * class Movie
 * define Movie class
 * @author FRANCESCO CIMINO
 */

class Movie{

    // common main characteristics
    // attributes

    // public $title;
    // public $movie_director;
    // public $production;
    // public $duration;
    // public $release_date;
    // public $genre;
    // public $description;

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

    /**
     * getData function
     * obtaine movie's data
     * @author FRANCESCO CIMINO
     */
    public function getData() {
        return "Title: $this->title, Movie Director: $this->movie_director, Production: $this->production, Duration: $this->duration,Release Date: $this->release_date,Genre: $this->genre, Description: $this->description";
    }
}

?>
<!-- /php -->