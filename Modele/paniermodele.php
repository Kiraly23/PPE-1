<?php
require __DIR__ . "/../Libs/fonctionmodele.php";

 



function delarticle($idarticle)
{
  $bdd = bdd();
  $sql = "delete from panier where id_pan = ?";

  $stmt= $bdd->prepare($sql);
  $stmt->execute([$idarticle]);
}