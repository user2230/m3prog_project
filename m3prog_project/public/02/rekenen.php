<?php

$getal = 184205.66294;
$afgerond = ceil($getal);

echo $afgerond;

$getal2 = 39846.62749;
$afgerond2 = floor($getal2);
echo "<br>";
echo $afgerond2;

$random1 = rand(1, 100);
$random2 = rand(1, 100);
$random3 = rand(1, 100);

$uitkomst = $random1 + $random2;
$uitkomst2 = $uitkomst / $random3;
echo $uitkomst;
echo "<br>";
echo $uitkomst2;


?>
