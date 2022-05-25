<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="pragma" content="no-cache" />
    <link rel="stylesheet" href="../CSS/bootstrap.min.css">
    <link rel="stylesheet" href="../CSS/monstyle.css">
</head>

<body>
    <h1 class="pt-5 text-center mb-5">Vos Informations de profil</h1>

    <div class="pt-5 mx-auto w-25  ">

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




        <div class="row ps-5 ">
            <div class="col-sm-5 me-5  fw-bold">Username : </div>
            <div class="col-sm-5  "> <?php echo $_SESSION["username"]; ?> </div>

            <div class="col-sm-5 me-5 mt-5 fw-bold">Email : </div>
            <div class="col-sm-5  mt-5"> <?php echo $_SESSION["email"]; ?> </div>

            <div class="col-sm-5 me-5 mt-5 fw-bold">Nom : </div>
            <div class="col-sm-5  mt-5"> <?php echo $_SESSION["nom"]; ?></div>

            <div class="col-sm-5 me-5 mt-5 fw-bold">Prenom : </div>
            <div class="col-sm-5  mt-5"> <?php echo $_SESSION["prenom"]; ?></div>

            <div class="col-sm-5 me-5 mt-5 fw-bold">Date de Naissance : </div>
            <div class="col-sm-5  mt-5"> <?php echo $_SESSION["datenaissance"]; ?></div>

        <div class=""> 
        <a class="btn btn-primary align" href="/../PPE plus/Controller/controllerindex.php?id=6">Retour</a> 
        </div>
        </div>

        </div>





</body>