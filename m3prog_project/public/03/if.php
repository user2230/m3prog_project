<?php
$aantalOpVoorraad = 10;
$opvoorraad = $aantalOpVoorraad > 0;



//if ($opvoorraad == false){
if ($aantalOpVoorraad > 0) {
    echo "Artiekel is op voorraad";
}
else {
    echo "niet op voorraad";
}