<?php
require __DIR__ . "/../Libs/fonctionmodele.php";

class Jeu
{
    public $nom;
    public $genre;
    public $console;
    public $prix;
    public $editeur;
    public $image;




public function toutrecupjeu($console)
{

        $access = bdd();
        $requet = $access->query(" SELECT * FROM jeu WHERE id_console = " . $console );
        $result = $requet->fetchAll();

        return $result;
    
}



    public function recupun(int $monid)
    {
        $access = bdd();
        $requet = $access->query("SELECT * FROM  jeu WHERE id = " . $monid );
        return $requet->fetch();

    }


    public function recherchejeu($recherche)
    {
        $access = bdd();
        $requete = $access->query("SELECT * FROM jeu WHERE nom LIKE '".$recherche."%'");
        return $requete->fetchAll();
    }
}
