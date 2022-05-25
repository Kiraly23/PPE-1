<?php
require __DIR__ . "/../Libs/fonctionmodele.php";

 

class User
{
  
  public $username;
  public $password;
  public $email;
  public $prenom;
  public $nom;
  public $datenaissance;
  public $confirmpassword;

  public function inscription($username , $password , $email , $prenom , $nom , $datenaissance)
  {
    $bdd = bdd();
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $requete = $bdd->query("INSERT INTO users(username,password,email,prenom,nom,datenaissance) VALUES ('".$username."','".$hash."','".$email."','".$prenom."','".$nom."','".$datenaissance."')");
    $result = $requete->fetchAll();

    return $result;
  }

  public function connexion($username)
  {
    $bdd = bdd();
    $requete = $bdd->query("SELECT * FROM users WHERE username='".$username."' limit 1" );
    $result = $requete->fetch();
    

    return $result;
  }

  public function verif($username , $email)
  {
    $bdd = bdd();
    $requete = $bdd->query("SELECT * FROM users WHERE username='$username' and email='$email'");
    $result = $requete->fetchAll();
    

    return $result;
  }
}