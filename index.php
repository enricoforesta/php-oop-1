<?php
class Movie
{
    /**
     * Variabili d'istanza
     *
     * @var mixed
     */
    public $title;
    public $type;
    public $duration;
    public $vote;

    /**
     * __construct
     *
     * @param  mixed $_title
     * @param  mixed $_type
     * @param  mixed $_duration
     * @param  mixed $_vote
     */
    function __construct($_title, $_type, $_duration, $_vote = '')
    {
        $this->title = $_title;
        $this->type = $_type;
        $this->duration = $_duration;
        $this->vote = $this->randomVote();
    }
    /**
     * randomVote
     *
     * @return int
     */
    function randomVote()
    {
        return rand(1, 5);
    }
}

$chuck = new Movie("chuck", ["azione", "comico"], "120");
$heidi = new Movie("heidi", ["fantasy", "horror"], "80");
var_dump($chuck);
var_dump($heidi);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP MOVIE</title>
</head>

<body>
    <ul>
        <li>
            <div>
                <h2>Titolo: <?php echo $chuck->title ?></h2>
                <h3>Genere: <?php foreach ($chuck->type as $type) {
                                echo $type . " ";
                            } ?></h3>
                <h4>Durata: <?php echo $chuck->duration ?> min</h4>
                <p>Voto: <?php echo $chuck->vote ?></p>
            </div>
        </li>
        <li>
            <div>
                <h2>Titolo: <?php echo $heidi->title ?></h2>
                <h3>Genere: <?php foreach ($heidi->type as $type) {
                                echo $type . " ";
                            } ?></h3>
                <h4>Durata: <?php echo $heidi->duration ?> min</h4>
                <p>Voto: <?php echo $heidi->vote ?></p>
            </div>
        </li>
    </ul>
</body>

</html>