<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$stoplichtKleur = 'R';

if($stoplichtKleur == "G"){
echo  "<button style='background-color:#228B22;height:25px;width:25px;'/>";
}
elseif ($stoplichtKleur == "O"){
echo "<button style='background-color:#FFAC1C;height:25px;width:25px;'/>";
}
elseif ($stoplichtKleur == "R"){
echo "<button style='background-color:#6E260E;height:25px;width:25px;'/>"; 
}

?>


</body>
</html>