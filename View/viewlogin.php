<?php session_start(); 
require __DIR__ . "/header.php";
?>

<!DOCTYPE html>
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
    <h1 class="pt-5 text-center mb-5">Connexion</h1>

    <div class="pt-5 mx-auto w-25  ">

        <?php
        if (!empty($_SESSION["alert"])) {
        ?>
            <div class="alert alert-danger d-flex align-items-center">
                <?php echo $_SESSION["alert"]; ?>
            </div>
        <?php
        }
        $_SESSION["alert"] = null;
        ?>

        <?php
        if (!empty($_SESSION["valid"])) {
        ?>
            <div class="alert alert-success d-flex align-items-center">
                <?php echo $_SESSION["valid"]; ?>
            </div>
        <?php
        }
        $_SESSION["valid"] = null;
        ?>

        <div class="pt-5">
            <form class="m-auto" name="formulaire" action="/../PPE plus/Controller/controllerlogin.php" method="post">
                <label class="badge bg-dark mb-4 rounded-pill w-50 left-25" for="username">Nom d'utilisateur</label>
                <input class="form-control-sm mb-4 w-100" name="username" type="text" required id="username" placeholder="Nom d'Utilisateur">
                <label class=" badge bg-dark mb-4 rounded-pill w-50 left-25" for="password">Mot de passe</label>
                <input class="form-control-sm mb-4 w-100" name="password" type="password" required id="password" placeholder="Mot de Passe">
                <div class="d-flex flex-row bd-highlight bottom-50">
                    <input class="btn btn-primary align me-3" type="submit" name="insert" value="login">
                    <a class="btn btn-primary align" href="viewsign.php">S'inscrire </a>
                </div>
            </form>
        </div>
    </div>
    <?php require __DIR__ . "/footer.php"; ?>
    <script src="../JS/bootstrap.min.js"></script>
</body>

</html>