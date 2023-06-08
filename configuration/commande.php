<?php 
  function Afficher(){
    if(require("connexion_config.php")){
         $reqette= $acess->prepare("SELECT * FROM Produits ORDER BY Date DESC");
         $reqette->execute();

         $data= $reqette->fetchAll(PDO::FETCH_OBJ);
         return $data;

         $reqette->closeCursor();
    }
  }

  function Afficher_4(){
    if(require("connexion_config.php")){
         $reqette= $acess->prepare("SELECT * FROM Produits ORDER BY Date DESC LIMIT 4");
         $reqette->execute();

         $data= $reqette->fetchAll(PDO::FETCH_OBJ);
         return $data;

         $reqette->closeCursor();
    }
  }

  function Rechercher($id) {
    if(require("connexion_config.php")){
    $stmt = $acess->prepare("SELECT * FROM Produits WHERE Id_prod = ?");
    $params = array($id);
    $stmt->execute($params);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $result;
    }
}

function filter($Nom){
    if(require("connexion_config.php")){
    $stmt = $acess->prepare("SELECT * FROM Produits WHERE Nom LIKE ?");
    $params = array('%'.$Nom.'%');
    $stmt->execute($params);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $result;
    }
}

function countItems($user_id){
  if(require("connexion_config.php")){
        $stmt = $acess->prepare("SELECT COUNT(*) AS total FROM cart_items WHERE user_id = :user_id");
        $stmt->bindParam("user_id",$user_id);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['total'];

  }
}

function getCartItems($user_id) {
  require("connexion_config.php");

  if ($acess) {
      $stmt = $acess->prepare("SELECT p.* ,ci.id, ci.quantite FROM cart_items ci
                              JOIN produits p ON ci.idProduit = p.Id_prod
                              WHERE ci.user_id = :user_id");
      $stmt->bindParam(":user_id", $user_id);
      $stmt->execute();
      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
      return $result;
  }
}


function verifyItem($user_id, $ProductId){

  if(require("connexion_config.php")){
    $stmt = $acess->prepare("SELECT COUNT(*) AS total FROM cart_items WHERE user_id = :user_id AND idProduit = :idProduit");
    $stmt->bindParam("user_id",$user_id);
    $stmt->bindParam("idProduit",$ProductId);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result['total'];

}
}

?> 