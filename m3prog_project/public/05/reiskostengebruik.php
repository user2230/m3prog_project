<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reiskosten Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            padding: 20px;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            margin: 0 auto;
        }
        h1 {
            color: #333;
        }
        .result {
            font-size: 18px;
            color: #007bff;
            font-weight: bold;
            margin: 10px 0;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Reiskosten Calculator</h1>

    <?php
    function berekenenRitKosten($afstand_km, $km_per_liter, $liter_prijs) {
        // Berekening van de reiskosten
        $kosten_euro = ($afstand_km / $km_per_liter) * $liter_prijs;
        return $kosten_euro;
    }

    // Berekeningen voor de ritten
    $kosten_berlijn = berekenenRitKosten(663, 15, 1.90);
    $kosten_stockholm = berekenenRitKosten(1438, 20, 1.46);
    $kosten_kiev = berekenenRitKosten(1991, 18.47, 2.23);

    // Resultaten weergeven met number_format() voor 2 decimalen
    echo "<p class='result'>Kosten naar Berlijn: €" . number_format($kosten_berlijn, 2, ',', '.') . "</p>";
    echo "<p class='result'>Kosten naar Stockholm: €" . number_format($kosten_stockholm, 2, ',', '.') . "</p>";
    echo "<p class='result'>Kosten naar Kiev: €" . number_format($kosten_kiev, 2, ',', '.') . "</p>";
    ?>

</div>

</body>
</html>
