<!-- create un file index.php in cui:
- è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

<?php
class Movie{
    public $title;
    public $genre;
    public $year;
    public $time;

    public function __construct($_title, $_year, $_genre ,$_time)
    {
        $this->title = $_title;
        $this->year = $_year;
        $this->genre = $_genre;
        $this->time = $_time;
    }

    public function joinInfoMovie(){
        return 'Titolo: '.$this->title .' /Anno: '.$this->year .' /Genere: '.$this->genre .' /Durata: '.$this->time;
    }
}

$film1 = new Movie('La Stangata', '1973', 'Giallo/Commedia', '2h 9m');
$film2 = new Movie('Pulp Fiction', '1994', 'Giallo/Drammatico', '2h 34m');
?>

<div><?php echo $film1->joinInfoMovie()?></div>

<div><?php echo $film2->joinInfoMovie()?></div>