<?php
session_start();





?>
<!doctype html>
<html>

<head>
    <title>All Games</title>
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/5f8f51e8b4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../CSS/bootstrap.min.css">
    <link rel="stylesheet" href="../CSS/monstyle.css">
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
<?php require __DIR__ . "/header.php"; ?>


    <?php if($_GET["id"] != 6):?>
    <div class="Jeu"><?php echo $_SESSION["console1"]; ?></div>
    <?php foreach ($_SESSION["requete1"] as $resultat) : ?>
    <div class="Produit bottom-50">

        <div class="Nom"> <?php echo $resultat['nom']; ?></div>
        <div class="Cadre_Produit">
            <a href="produit.php?idjeu=<?= $resultat["id"] ?>&id=<?= $_SESSION["id"] ?>">
                <img class="Image" src='<?php echo $resultat['image']; ?>'>
            </a>
            <div class="Editeur"><?php echo $resultat['editeur']; ?></div>
        </div>
        <div class="Genre"><?php echo $resultat['genre']; ?></div>
        <div class="Prix"><?php echo $resultat['prix']; ?>€</div>
        <a href="panier.php?nomjeu=<?php echo $resultat['nom']?>" class="Achat">Acheter </a>
       
    </div>

    <?php endforeach;
    else: ?>

    <div class="Jeu"><?php echo $_SESSION["console2"]; ?></div>
    <?php foreach ($_SESSION["requeteall"] as $resultat) : ?>

    <div class="Produit bottom-50">
        <div class="Nom"> <?php echo $resultat['nom']; ?></div>
        <div class="Cadre_Produit">
            <a href="produit.php?idjeu=<?= $resultat["id"] ?>">
                <img class="Image" src='<?php echo $resultat['image']; ?>'>
            </a>
            <div class="Editeur"><?php echo $resultat['editeur']; ?></div>
        </div>
        <div class="Genre"><?php echo $resultat['genre']; ?></div>
        <div class="Prix"><?php echo $resultat['prix']; ?>€</div>
        <a href="panier.php?nomjeu = $resultat['nom']" class="Achat">Acheter </a>
    </div>
    <?php endforeach;
    endif;




    if ($_GET["id"] == 1 or $_GET["id"] == 3): ?>
    <div class="Jeu2"><?php echo $_SESSION["console2"]; ?></div>
    <?php foreach ($_SESSION["requete2"] as $resultat) : ?>
    <div class="Produit bottom-50">
        <div class="Nom"> <?php echo $resultat['nom']; ?></div>
        <div class="Cadre_Produit">
            <a href="produit.php?idjeu=<?= $resultat["id"] ?>&id=<?= $_SESSION["id"] ?>">
                <img class="Image" src='<?php echo $resultat['image']; ?>'>
            </a>
            <div class="Editeur"><?php echo $resultat['editeur']; ?></div>
        </div>
        <div class="Genre"><?php echo $resultat['genre']; ?></div>
        <div class="Prix"><?php echo $resultat['prix']; ?>€</div>
        <a href="panier.php?nomjeu=<?php echo $resultat['nom']?>" class="Achat">Acheter </a>
    </div>

    <?php endforeach;

endif; 

    
require __DIR__ . "/footer.php";
?>
</body>

</html>