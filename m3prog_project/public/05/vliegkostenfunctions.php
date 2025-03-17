<?php
// vliegkostenfunctions.php
function berekenVliegkosten($afstand, $prijsPerLiterKerosine, $bagageKilo, $classType) {
    // Stap 1: Bereken de kosten voor de kerosine
    $kerosineKosten = ($prijsPerLiterKerosine * $afstand) / 30;
    
    // Stap 2: Voeg kosten toe voor de bagage
    $bagageKosten = $bagageKilo * 5;
    
    // Stap 3: Bereken de totaalprijs voor de heenreis
    $totaalKosten = $kerosineKosten + $bagageKosten;
    
    // Stap 4: Vermenigvuldig met 1.5 als het een business class is
    if ($classType == 'business') {
        $totaalKosten *= 1.5;
    }
    
    // De prijs is voor een enkele reis, dus vermenigvuldig met 2 voor de retourreis
    $totaalKostenRetour = $totaalKosten * 2;
    
    return $totaalKostenRetour;
}
?>

