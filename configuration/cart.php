<?php
require("commande.php");
function addToCart($idProd, $qte, $userId){
    if(verifyItem($userId, $idProd) > 0){
        echo "This item already exists in cart!";
    }else{
         if(require("connexion_config.php")){
        $stmt = $acess->prepare("INSERT INTO cart_items (idProduit, user_id, quantite) VALUES(:idProduit, :userId, :quantite)");
        $stmt->bindParam(':idProduit',$idProd);
        $stmt->bindParam(':userId',$userId);
        $stmt->bindParam(':quantite',$qte);

            if($stmt->execute()){
                echo "Added to cart successfully!";
            }

    }
}
}
?>