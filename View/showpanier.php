<?php
session_start();
require __DIR__ . "/../Libs/fonctionmodele.php";


?>
<!doctype html>
<html>

<head>
    <title>Panier</title>
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
    <?php
    require __DIR__ . "/header.php";

    if (isset($_SESSION["iduser"]) == false) {
        header('Location: viewlogin.php');
    }
    ?>

    <?php

    $iduser = $_SESSION["iduser"];

    $sql = "select * from panier where id_user = " . $iduser;

    $bdd = bdd();
    $requete = $bdd->query($sql);

    while ($row = $requete->fetch())
    {
        $a = $row["id_pan"];
        ?>
        <?php
        $naja = $row['Nomjeu'];
        $sqlline = "select * from jeu where nom = '" . $naja . "'";
        $reqpan = $bdd->query($sqlline);
        $rowgame = $reqpan->fetch();
        echo $rowgame['nom'] . "    " . $rowgame['prix'] . "€    ";
        echo "<br/>";
    ?>
        <img class="Image" src='<?php echo $rowgame['image']; ?>'>
        <button type="button" onclick="window.location.assign('/PPE%20plus/View/supprimerarticle.php?idart=<?php echo $a ?>')">Supprimer l'article</button>

    <?php
        echo "<hr/>";
    }

    ?>

    <a href="showpanier.php" onclick=$ClosePanier><button type="button">Vider panier</button></a>
    <a href="confirmpanier.php" onclick=$ClosePanier><button type="button"> Confirmer votre panier</button></a>
    <?php
    require __DIR__ . "/footer.php";
    ?>
</body>

</html>