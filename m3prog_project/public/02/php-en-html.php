<?php
$title = "Een php html voorbeeld pagina";
$image = "https://www.nintendo.com/eu/media/images/10_share_images/portals_3/2x1_SuperMarioHub_image1600w.jpg";
$auteur = "user2230";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?= "<h1> $title</h1> ";?>
</head>
<body>
    <section>
    <img src="<?php echo $image;?>" alt="Mario">
    </section>

    <section>
        <?= "<h1>Auteur</h1> $auteur";?>
    </section>
</body> 
</html>