<?php

//vraag 1: wat is het type het argument van strlen?
//antwoord 1: string

//vraag 2: wat is het type van wat strlen returned?
//antwoord 1: integer

//vraag 3: het getal wat strlen returned, wat is dat?
//antwoord 3: het aantal karakters in de string

// vraag 4 : hoevaak heb je nu de function strlen aangeroepen?
//antwoord 4: 2 keer




$hoeLangIsDitWoord = "scrabbleWoord";
$woordLengte = strlen($hoeLangIsDitWoord);
print $woordLengte;

$test = "hoelang";
$woordLang = strlen($test);
print $woordLang;


pow (2, 2);
"<br>";
$tweeMacht2 = pow(2, 10); 
print "<br>";
print $tweeMacht2;

$graden = pow(3, 4);
"<br>";
print "<br>";
print $graden;


// vraag 1: hoe geven we het resultaat door? 
// vraag 1 antwoord: met return
// https://www.php.net/manual/en/function.strtoupper.php

"<br>";
print "<br>";

$naam = "Wario";
$str = strtoupper($naam);
$naamGroot = print $str;
print $naamGroot;
?>