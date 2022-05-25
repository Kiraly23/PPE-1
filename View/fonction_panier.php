 <?php



   /*
   function creationPanier(){
    if (!isset($_SESSION['panier'])){
      $_SESSION['panier']=array();
      $_SESSION['panier']['libelleProduit'] = array();
      $_SESSION['panier']['nom'] = array();
      $_SESSION['panier']['prix'] = array();
      $_SESSION['panier']['qteProduit'] = array();
      $_SESSION['panier']['image'] = array();
      $_SESSION['panier']['verrou'] = false;
    
      }
      return true;
   }


   function ajouterArticle($libelleProduit,$qteProduit,$prix,$nom,$image){

    //Si le panier existe
    if (creationPanier() && !isVerrouille())
    {
       //Si le produit existe déjà on ajoute seulement la quantité
       $positionProduit = array_search($libelleProduit,  $_SESSION['panier']['libelleProduit']);
 
       if ($positionProduit !== false)
       {
         $_SESSION['panier']['qteProduit'][$positionProduit] += $qteProduit ;
       }
       else
       {
          //Sinon on ajoute le produit
          array_push( $_SESSION['panier']['libelleProduit'],$libelleProduit);
          array_push( $_SESSION['panier']['qteProduit'],$qteProduit);
          array_push( $_SESSION['panier']['nom'],$nom);
          array_push( $_SESSION['panier']['prix'],$prix);
          array_push( $_SESSION['panier']['image'],$image);
       }
    }
    else
    echo "Un problème est survenu veuillez contacter l'administrateur du site.";
 }


 function supprimerArticle($libelleProduit){
   //Si le panier existe
   if (creationPanier() && !isVerrouille())
   {
      //Nous allons passer par un panier temporaire
      $tmp=array();
      $tmp['libelleProduit'] = array();
      $tmp['qteProduit'] = array();
      $tmp['prix'] = array();
      $tmp['verrou'] = $_SESSION['panier']['verrou'];

      for($i = 0; $i < count($_SESSION['panier']['libelleProduit']); $i++)
      {
         if ($_SESSION['panier']['libelleProduit'][$i] !== $libelleProduit)
         {
            array_push( $tmp['qteProduit'],$_SESSION['panier']['qteProduit'][$i]);
            array_push( $tmp['libelleProduit'],$_SESSION['panier']['libelleProduit'][$i]);
            array_push( $tmp['prix'],$_SESSION['panier']['prix'][$i]);
            array_push( $tmp['nom'],$_SESSION['panier']['nom'][$i]);
         }

      }
      //On remplace le panier en session par notre panier temporaire à jour
      $_SESSION['panier'] =  $tmp;
      //On efface notre panier temporaire
      unset($tmp);
   }
   else
   echo "Un problème est survenu veuillez contacter l'administrateur du site.";
   }


   function MontantGlobal(){
       $total=0;
       for($i = 0; $i < count($_SESSION['panier']['prix']); $i++)
       {
         $total += $_SESSION['panier']['prix'][$i];
       }
      return $total;
   }

   function isVerrouille(){
     if (isset($_SESSION['panier']) && $_SESSION['panier']['verrou'])
       return true;
       else
       return false;
    }

   function compterArticles()
   {
      if (isset($_SESSION['panier']))
      return count($_SESSION['panier']['libelleProduit']);
      else
      return 0;
   }
   function supprimePanier(){
      unset($_SESSION['panier']);
   }
   function modifierQTeArticle($libelleProduit,$qteProduit){
      //Si le panier existe
      if (creationPanier() && !isVerrouille())
      {
         //Si la quantité est positive on modifie sinon on supprime l'article
         if ($qteProduit > 0)
         {
            //Recherche du produit dans le panier
            $positionProduit = array_search($libelleProduit,  $_SESSION['panier']['libelleProduit']);
   
            if ($positionProduit !== false)
            {
               $_SESSION['panier']['qteProduit'][$positionProduit] = $qteProduit ;
            }
         }
         else
         supprimerArticle($libelleProduit);
      }
      else
      echo "Un problème est survenu veuillez contacter l'administrateur du site.";
   } */
?>