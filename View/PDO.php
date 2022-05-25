<?php

 function query($sql, $data = array()){
    $access=new pdo("mysql:host=localhost;dbname=projetfinal","root","");
    $req = $access->prepare($sql);
    $req->execute($data);
    return $req->fetchAll(PDO::FETCH_OBJ);
}


?>