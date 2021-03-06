<?php

//crea classe Movies
class Movies
{
    public $title;
    public $genre;
    public $year;
    public $characters;
    public $musics;
    public $movie_director;
    public $imdb_rate;
    public $film_production_house;

    //crea una funzione che concatena titolo, anno e genere.
    public function getMovieDescription()
    {
        return $this->title . ', ' . $this->year . ', ' . $this->genre;
    }




    //crea un costruttore
    public function __construct($title, $year, $genre)
{
    $this->title = $title;
    $this->movie_director = $year;
    $this->film_production_house = $genre;
}
}

//crea 2 variabili d'istanza e gli passo i dati del costruttore che sono obbligatori
$films = new Movies('Matrix', '1999', 'scienze fiction');
$cartoons = new Movies('Wall-e', '2008', 'scienze fiction');

$films->title = 'Matrix';
$films->genre = 'scienze fiction';
$films->year = '1999';
$films->characters = 'Neo, Morpheus, Trinity';
$films->musics = 'Wake Up - Rage Against the Machine';
$films->movie_director = 'Lana Wachowski, Lilly Wachowski';
$films->imdb_rate = '8.7';
$films->film_production_house = 'Warner Bros. Pictures';

$cartoons->title = 'Wall-e';
$cartoons->genre = 'scienze fiction';
$cartoons->year = '2008';
$cartoons->characters = 'Wall-e';
$cartoons->musics = 'Michael Crawford – Put On Your Sunday Clothes';
$cartoons->movie_director = 'Disney Pixar';
$cartoons->imdb_rate = '8.4';
$cartoons->film_production_house = 'Warner Bros. Pictures';




//il var di film richiama la funzione che concatena titolo, anno e genere
// var_dump($films->getMovieDescription());
// var_dump($cartoons->getMovieDescription());

?>

<?php echo "<h1>Questi sono i dati del film:</h1> </br> <p> {$films->getMovieDescription()}</p>" ?>

<?php echo "<h1>Questi sono i dati del cartoon:</h1> </br> <p> {$cartoons->getMovieDescription()}</p>" ?>
