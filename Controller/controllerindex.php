<?php
session_start();
require __DIR__ . "/../Modele/Jeu.php";
require __DIR__ . "/../View/header.php";

$jeu = new Jeu();




if ($_GET["id"] == 1) {
    $_SESSION["console1"] = "Xbox One";
    $_SESSION["console2"] = "Xbox Series X";
    $_SESSION["id"] = $_GET["id"];
    $_SESSION["requete1"] = $jeu->toutrecupjeu($_SESSION["id"]);
    $_SESSION["requete2"] = $jeu->toutrecupjeu(2);
    header("location:/PPE plus/View/jeu.php?id=1");
} elseif ($_GET["id"] == 3) {
    $_SESSION["console1"] = "Playstation 4";
    $_SESSION["console2"] = "Playstation 5";
    $_SESSION["id"] = $_GET["id"];
    $_SESSION["requete1"] = $jeu->toutrecupjeu($_SESSION["id"]);
    $_SESSION["requete2"] = $jeu->toutrecupjeu(4);
    header("location:/PPE plus/View/jeu.php?id=3");
} elseif($_GET["id"] == 5) {
    $_SESSION["console2"] = null;
    $_SESSION["requete"] = null;
    $_SESSION["id"] = $_GET["id"];
    $_SESSION["requete1"] = $jeu->toutrecupjeu($_SESSION["id"]);
    $_SESSION["console1"] = "Switch";
    header("location:/PPE plus/View/jeu.php?id=5");
}
elseif($_GET["id"] == 6){
    $_SESSION["id"] = 6;
    $_SESSION["requeteall"] = $jeu->toutrecupjeu("id_console");
    header("location:/PPE plus/View/jeu.php?id=6");
    $_SESSION["console2"] = "Tous les Jeux";
}



if($_GET["id"] == ""){
    header("location:/PPE plus/View/jeu.php?id=6");
    $_SESSION["console2"] = "Tous les Jeux";
}
elseif(preg_match_all('/^[a-zA-Z]{1,}$/', $_GET["id"])){ 
    $_SESSION["recherche"] = $jeu->recherchejeu($_GET["id"]);
    $_SESSION["nomrecherche"] = $_GET["id"];
    header("location:/PPE plus/View/recherche.php");
}
