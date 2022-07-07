<?php
include __DIR__ . '/Movie.php';

$shrek = new Movie('Shrek', 'Viky', 10);


$titanic = new Movie('Titanic', 'James Cameron', 15 );

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h3>
        Titolo: <?= $shrek->titolo ?>
    </h3>
    <div>
        Regista: <?= $shrek->regista ?>
    </div>
    <div>
        prezzo: <?= $shrek->prezzo ?>
    </div>

    <h3>
        Titolo: <?= $titanic->titolo ?>
    </h3>
    <div>
        Regista: <?= $titanic->regista ?>
    </div>
    <div>
        prezzo: <?= $titanic->prezzo ?>
    </div>
    
</body>
</html>