<?php
function add($getal1, $getal2) {
    $som = $getal1 + $getal2;
    return $som;
}

function subtract($getal1, $getal2) {
    return $getal1 - $getal2;
}

function divide($getal1, $getal2) {
    if ($getal2 == 0) {
        return "Kan niet delen door 0!";
    }
    return $getal1 / $getal2;
}

function multiply($getal1, $getal2) {
    return $getal1 * $getal2;
}

echo "<h2>Optellen</h2>";
echo "100 + 100 = " . add(100, 100) . "<br>";
echo "4 + 9 = " . add(4, 9) . "<br>";
echo "33 + 33 = " . add(33, 33) . "<br>";

echo "<h2>Aftrekken</h2>";
echo "100 - 50 = " . subtract(100, 50) . "<br>";
echo "20 - 5 = " . subtract(20, 5) . "<br>";
echo "10 - 30 = " . subtract(10, 30) . "<br>";

echo "<h2>Delen</h2>";
echo "100 / 5 = " . divide(100, 5) . "<br>";
echo "25 / 2 = " . divide(25, 2) . "<br>";
echo "10 / 0 = " . divide(10, 0) . "<br>";

echo "<h2>Vermenigvuldigen</h2>";
echo "10 * 10 = " . multiply(10, 10) . "<br>";
echo "3 * 7 = " . multiply(3, 7) . "<br>";
echo "6 * 6 = " . multiply(6, 6) . "<br>";
?>
