<?php 

function bdd()
{
$bdd = new PDO('mysql:host=localhost;port=3306;dbname=projetfinal', 'root', '');
return $bdd;
}

function toutrecup($id)
{
        $access = bdd(); 
        $requet = $access->query("SELECT * FROM jeu_console");
        return $requet->fetchAll();
}

