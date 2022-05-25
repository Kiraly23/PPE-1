
<?php
require __DIR__."/../Modele/Jeu.php";

$jeu = new Jeu();

 $jeudonne = $jeu->recupun($_GET["idjeu"]);

?>
<!doctype html>
<html>
<head>
    <title>All Games</title>
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/5f8f51e8b4.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/../PPE plus/CSS/base.css">
    <link rel="stylesheet" type="text/css" href="/../PPE plus/CSS/header.css">
    <link rel="stylesheet" type="text/css" href="/../PPE plus/CSS/Fiche_Produit.css">
    <link rel="icon" href="/../PPE plus/IMG/ALL.png">
    <link rel="stylesheet" type="text/css" href="/../PPE plus/CSS/index.css">
    <link rel="stylesheet" href="/../PPE plus/CSS/Footer.css">
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="pragma" content="no-cache" />
    <link type="text/html" href="index.php">


</head>

<body>
<?php require __DIR__. '/../View/header.php' ; ?>

    <div class="Fiche_Produit_Titre">
        <h1><div class="Nom2">Fiche Produit : <?php echo $jeudonne["nom"]; ?></div></h1>
    </div>
    <h2><div class="Editeur2">Editeur : <?php echo $jeudonne["editeur"] ; ?></div></h2>
    <h2><div class="Genre2">Genre : <?php echo $jeudonne["genre"] ; ?></div></h2>
    <h2><div class="Prix2">Prix : <?php echo $jeudonne["prix"]; ?>€</div></h2>
    <div class="Produit2">
        <div class="Cadre_Produit2">
            <img  class="Image2" src="<?php echo $jeudonne["image"]?>">
        </div>
    </div>
    <?php

require __DIR__. '/../View/footer.php' ;
?>
</body>
