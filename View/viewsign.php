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
    <h1 class="pt-5 text-center mb-5">Inscription</h1>
    <div class="pt-5 mx-auto w-25  ">

    
        <?php
        if (!empty($_SESSION["alert"])):
        ?>
            <div class="alert alert-danger d-flex align-items-center">
                <?php echo $_SESSION["alert"]; ?>
            </div>
        <?php
        $_SESSION["alert"] = null;
        elseif (!empty($_SESSION["verif"])):
        ?>
            <div class="alert alert-success d-flex align-items-center">
                <?php echo $_SESSION["verif"]; ?>
            </div>
        <?php
        $_SESSION["verif"] = null;
        endif;
        ?>

        <div class="pt-2">

            <form class="m-auto" name="formulaire" action="/../PPE plus/Controller/controllerlogin.php" sern method="post">
                <div class="d-flex flex-row bd-highlight ">
                    <label class="badge bg-dark mb-4 rounded-pill w-50" for="prenom">Prenom</label>
                    <label class="badge bg-dark mb-4 rounded-pill w-50 ms-3" for="nom">Nom</label>
                </div>
                <div class="d-flex flex-row bd-highlight mb-3">
                    <input class="form-control-sm mb-4 w-100" name="prenom" type="text" placeholder="Prénom" require>
                    <input class="form-control-sm mb-4 w-100 ms-3" name="nom" type="text" placeholder="Nom" require>
                </div>
                <div class="d-flex flex-row bd-highlight ">
                    <label class="badge bg-dark mb-4 rounded-pill w-50 " for="username">Nom d'utilisateur</label>
                    <label class="badge bg-dark mb-4 rounded-pill w-50 ms-3 " for="email">E-mail</label>
                </div>
                <div class="d-flex flex-row bd-highlight mb-3">
                    <input class="form-control-sm mb-4 w-100" name="username" type="text" placeholder="Nom d'Utilisateur" require>
                    <input class="form-control-sm mb-4 w-100 ms-3" name="email" type="email" placeholder="E-mail" require>
                </div>
                <div class="d-flex flex-row bd-highlight ">
                    <label class="badge bg-dark mb-4 rounded-pill w-50 " for="password">Mot de passe</label>
                    <label class="badge bg-dark mb-4 rounded-pill w-50 ms-3" for="confirmpassword">Confirmer Mot de passe</label>
                </div>
                <div class="d-flex flex-row bd-highlight mb-3">
                    <input class="form-control-sm mb-4 w-100" name="password" type="password" placeholder="Mot de passe" require>
                    <input class="form-control-sm mb-4 w-100 ms-3" name="confirmpassword" type="password" placeholder="Confirmer mot de passe" require>
                </div>
                <label class="badge bg-dark mb-4 rounded-pill w-50 left-25 " for="datenaissance">Date de naissance</label>
                <input class="form-control-sm mb-4 w-100" name="datenaissance" type="date" require>

                <div class="mb-5">
                <input class="btn btn-primary align me-3" type="submit" name="insert" value="sign" require>
                <a class="btn btn-primary align me-3" href="viewlogin.php">Se connecter</a>
                </div>
            </form>


        </div>
    </div>

    <?php require __DIR__ . "/footer.php"; ?>
</body>

</html>