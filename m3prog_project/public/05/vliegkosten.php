<?php
// vliegkosten.php
include_once 'vliegkostenfunctions.php'; // Laad de functies uit het andere bestand

// Vliegreis gegevens
$vliegreis1 = berekenVliegkosten(3722, 2.05, 20, 'economy');
$vliegreis2 = berekenVliegkosten(9276, 3.11, 10, 'economy');
$vliegreis3 = berekenVliegkosten(803, 2.83, 0, 'business');

// Resultaten tonen
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vliegkosten Berekening</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
        }
        h1 {
            color: #4CAF50;
            text-align: center;
        }
        .resultaat {
            background-color: #e0f7fa;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            font-size: 18px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .resultaat span {
            font-weight: bold;
        }
      
    </style>
</head>
<body>
    <div class="container">
        <h1>Vliegkosten Berekening</h1>
        <div class="resultaat economy">
            <span>Vliegreis 1 (3722 km, Economy):</span>
            €<?php echo number_format($vliegreis1, 2, ',', '.'); ?>
        </div>
        <div class="resultaat economy">
            <span>Vliegreis 2 (9276 km, Economy):</span>
            €<?php echo number_format($vliegreis2, 2, ',', '.'); ?>
        </div>
        <div class="resultaat business">
            <span>Vliegreis 3 (803 km, Business):</span>
            €<?php echo number_format($vliegreis3, 2, ',', '.'); ?>
        </div>
    </div>
</body>
</html>
