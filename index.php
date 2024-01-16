<?php
require_once __DIR__ . '/models/Movie.php';
require_once __DIR__ . '/database/db.php';

var_dump($movies);


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
        <?php foreach ($movies as $movie) : ?>
            <li>
                <div>
                    <h2>Titolo: <?php echo $movie->title ?></h2>
                    <h3>Genere: <?php foreach ($movie->type as $type) {
                                    echo $type . " ";
                                } ?></h3>
                    <h4>Durata: <?php echo $movie->duration ?> min</h4>
                    <p>Voto: <?php echo $movie->vote ?></p>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>