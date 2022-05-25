<?php
session_start();
require __DIR__ . "/../Modele/Jeu.php";
require __DIR__ . "/header.php";
?>



<!doctype html>
<html>

<head>
    <title>All Games</title>
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/5f8f51e8b4.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="/../PPE plus/CSS/Footer.css">
    <link rel="stylesheet" type="text/css" href="/../PPE plus/CSS/header.css">
    <link rel="stylesheet" type="text/css" href="/../PPE plus/CSS/index.css">
    <link rel="icon" href="/../PPE plus/IMG/ALL.png">
    <link rel="stylesheet" type="text/css" href="/../PPE plus/CSS/Fiche_Produit.css">
    <link rel="stylesheet" href="/../PPE plus/CSS/Article.css">
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="pragma" content="no-cache" />

</head>

<body>
    <div class="Jeu"><?php echo "recherche : " . $_SESSION["nomrecherche"]; ?></div>
    <?php foreach ($_SESSION["recherche"] as $resultat) : ?>
    <div class="Produit">

        <div class="Nom"> <?php echo $resultat['nom']; ?></div>
        <div class="Cadre_Produit">
            <a href="produit.php?idjeu=<?= $resultat["id"] ?>">
                <img class="Image" src='<?php echo $resultat['image']; ?>'>
            </a>
            <div class="Editeur"><?php echo $resultat['editeur']; ?></div>
        </div>
        <div class="Genre"><?php echo $resultat['genre']; ?></div>
        <div class="Prix"><?php echo $resultat['prix']; ?>€</div>
        <a href="" class="Achat">Acheter </a>
    </div>
    <?php endforeach;
    
    require __DIR__ . "/footer.php"; ?>


</body>