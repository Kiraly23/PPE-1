<?php

session_start();
require_once("PDO.php");
require __DIR__ . "/../Libs/fonctionmodele.php";


if (isset($_SESSION["iduser"]) == false)
{
    header('Location: viewlogin.php');  
}

$iduser = $_SESSION["iduser"];
$nomres = $_GET["nomjeu"];

$sql = "insert into panier values(null, " . $iduser . ",'" . $nomres . "')";

$bdd = bdd();

$requete = $bdd->query($sql);

header('Location: showpanier.php');  

    ?>