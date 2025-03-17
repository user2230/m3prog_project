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

 "<h2>Optellen</h2>";
 "100 + 100 = " . add(100, 100) . "<br>";
 "4 + 9 = " . add(4, 9) . "<br>";
 "33 + 33 = " . add(33, 33) . "<br>";
 "<h2>Aftrekken</h2>";
 "100 - 50 = " . subtract(100, 50) . "<br>";
 "20 - 5 = " . subtract(20, 5) . "<br>";
 "10 - 30 = " . subtract(10, 30) . "<br>";
 "<h2>Delen</h2>";
 "100 / 5 = " . divide(100, 5) . "<br>";
 "25 / 2 = " . divide(25, 2) . "<br>";
 "10 / 0 = " . divide(10, 0) . "<br>";
 "<h2>Vermenigvuldigen</h2>";
 "10 * 10 = " . multiply(10, 10) . "<br>";
 "3 * 7 = " . multiply(3, 7) . "<br>";
 "6 * 6 = " . multiply(6, 6) . "<br>";
?>
