<?php
session_start();
require __DIR__ . "/../Modele/paniermodele.php";


$idar = $_GET["idart"];;

delarticle($idar);

header('Location: /PPE%20plus/View/showpanier.php');   






