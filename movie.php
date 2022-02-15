<?php

//crea classe Movies
class Movies
{
    public $tile;
    public $year;
    public $actors;
    public $musics;
    public $movie_director;
    public $photography;
    public $imdb_rate;
    public $film_production_house;
    
    //crea un costruttore
    public function __construct($title, $movie_director, $film_production_house)
{
    $this->title = $title;
    $this->movie_director = $movie_director;
    $this->film_production_house = $film_production_house;
}
}

//crea 2 variabili d'istanza
$films = new Movies();
$cartoons = new Movies();