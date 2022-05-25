<?php
session_start();
require __DIR__ . "/../Modele/User.php";
require __DIR__ . "/../Libs/fonctioncontroller.php";


$user = new User;

if ($_POST["insert"] == "sign") {
    if (!preg_match_all('/^[a-zA-Z0-9]{5,}$/', $_POST["username"])) {
        $_SESSION["alert"] = "Username incorrect";
        header('location:/PPE plus/View/viewsign.php');
    } elseif (!preg_match_all('/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/', $_POST["email"])) {
        $_SESSION["alert"] = "Email incorrect";
        header('location:/PPE plus/View/viewsign.php');
    } elseif (!preg_match_all('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/', $_POST["password"])) {
        $_SESSION["alert"] = "MDP incorrect";
        header('location:/PPE plus/View/viewsign.php');
    } else {
        $result = $user->verif($_POST["username"], $_POST["email"]);
        if (sizeof($result) != 0) {
            $_SESSION["alert"] = "Nom utilisateur ou E-mail déjà utilisé.";
            header('location:/PPE plus/View/viewsign.php');
        } elseif ($_POST["password"] != $_POST["confirmpassword"]) {
            $_SESSION["alert"] = "Les mots de passe ne correspondent pas.";
            header('location:/PPE plus/View/viewsign.php');
        } else {
            $user->inscription($_POST["username"], $_POST['password'], $_POST["email"],$_POST["prenom"],$_POST["nom"],$_POST["datenaissance"]);
            header('location:/PPE plus/View/viewlogin.php');
            $_SESSION["verif"] = "Vous êtes inscrit ! Veuillez vous connecter.";
        }
    }
}else{

}


if ($_POST["insert"] == "login") {
    $result = $user->connexion($_POST["username"]);
    if (sizeof($result) != 0) {
        if (password_verify($_POST['password'], $result["password"]) == true) {
            $_SESSION["valid"] = "Vous êtes connecté !";
            header('location:/PPE plus/View/viewinformation.php');
            $_SESSION["iduser"] = $result["id"];
            $_SESSION["username"] = $result["username"];
            $_SESSION["email"] = $result["email"];
            $_SESSION["nom"] = $result["nom"];
            $_SESSION["prenom"] = $result["prenom"];
            $_SESSION["datenaissance"] = $result["datenaissance"];
        } else {
            $_SESSION["alert"] = "Mot de passe incorrect !";
            header('location:/PPE plus/View/viewlogin.php');
        }
    }else{
        $_SESSION["alert"] = "Username incorrect";
        header('location:/PPE plus/View/viewlogin.php');
    }
}else{

}
