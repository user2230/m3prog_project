<?php

$afstand = 1072.45; 
$literprijs = 1.89; 
$treinkosten = 60; 
$tankinhoud = 50; 
$verbruik_per_km = 1 / 15; 

$liter_gebruikt = $afstand * $verbruik_per_km;
$aantal_tanken = ceil($liter_gebruikt / $tankinhoud);
$kosten_auto = $liter_gebruikt * $literprijs;

$reisadvies = ($kosten_auto > $treinkosten) ? "Ik ga met de trein." : "Ik ga met de auto.";
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reiskosten Berekening</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            margin: 50px;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            display: inline-block;
        }
        h2 {
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Reiskosten Berekening</h2>
        <p><strong>Totale afstand:</strong> <?php echo $afstand; ?> km</p>
        <p><strong>Totale kosten met de auto:</strong> &euro;<?php echo number_format($kosten_auto, 2, ',', '.'); ?></p>
        <p><strong>Aantal liter benzine gebruikt:</strong> <?php echo number_format($liter_gebruikt, 2, ',', '.'); ?> L</p>
        <p><strong>Aantal keer tanken:</strong> <?php echo $aantal_tanken; ?></p>
        <h3><?php echo $reisadvies; ?></h3>
    </div>
</body>
</html>
