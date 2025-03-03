<?php

$loggedIn = false;

if(isset($_GET['loggedIn'])){
    $loggedIn =true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if( $loggedIn==false){
            echo "Je bent niet ingelogd";
            include "views/home.html";
        }
        else{
            echo "Je bent ingelogd";
            include "views/myDashboard.html";
        }
    ?>
    
</body>
</html>