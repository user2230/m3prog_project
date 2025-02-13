<?php
// hier komt de code
$title = "prachtig website";
$datum = date('13-02-2024');
$tijd = date("12-12");
$favorieteGame = "rainbow six siege";
$mooisteGetal = 420;
$favorieteShow = "the flash";
$leuksteStad = "Amsterdam";
?>
<!doctype html>
<html lang="en">
    <head>
        <title><?php echo $title     ?></title>
    </head>
    <body>
        <h2>De datum vandaag is: <?php echo $datum?>, en de tijd is <?php echo $tijd?> uur.
        <p><h2>mooisteGetal:</h2><?= $mooisteGetal ?></p>
        <p><h2>mooisteGetal:</h2><?= $favorieteGame ?></p>
        <p><h2>mooisteGetal:</h2><?= $favorieteShow ?></p>
        <p><h2>Mijn favoriete game</h2><?php echo $favorieteGame?></p>
    </body>
</html> 