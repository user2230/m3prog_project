<?php

function MijnPrint($prinText)
{
    print ($prinText);
    print ("<br>");
}

MijnPrint("regel 1");
MijnPrint("regel 2");
MijnPrint("regel 3");

$dezeGaatMee = "deze waarde wordt meegenomen";
MijnPrint($dezeGaatMee);

// vraag 1) lees de fout en bedenk je WAAROM het fout gaat?
// antwoord 1) omdat er geen argument is meegegeven aan de functie MijnPrint

?>
