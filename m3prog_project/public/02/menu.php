<?php
$typeGerecht = "Voor";
$ingegredientenLijstp = "

    8 plakjes bladerdeeg
    450 gr bladspinazie
    8 plakken geitenkaas
    25 gr boter
    2 uien
    1 citroen
    1 ei";
    $prijs = 10.50;
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    <?= "<p> Gerecht type: $typeGerecht <br>
  <br>
  <NAAMGERECHT> € $prijs    <br>
  <br>
  <BESCHRIJVING><br>
  Ingegredientenlijst: $ingegredientenLijstp<br>
  <INGREDIENTENLIJST><br>
  <br>
  Bent u allergisch? bekijk dan hieronder de allergenen:<br>
  <ALLERGENENLIJST><br></p>";?>
  
    </body>
    </html>

  