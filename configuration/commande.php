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

?> 