<?php

$leeftijd = 2 +2 ;
$auto = 5 * 5;//25
$cookies = 100 / 10;//10
$kilo = 60 - 25;//35

echo $leeftijd;
echo "<br>";   
echo $auto; 
echo "<br>";
echo $cookies;
echo "<br>";
echo $kilo;


$varsom1 = $leeftijd * $auto;//100

$varsom2 = $kilo / $cookies;//3.5

echo "<br>";
echo $varsom1;
echo "<br>";
echo $varsom2;
echo "<br>";
//3500 / -28.5
$varsom3 = $varsom1 * $kilo / $varsom2 - $auto;
echo $varsom3;