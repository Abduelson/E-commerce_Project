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


function commander($user_id){
    $cart_array = getCartItems($user_id);


    // Now send the email to the administrators
    $to = 'sterlinesagesse@gmail.com';  // Email address of the recipient
    $subject = 'Nouvelle Commande';        // Subject of the email
    $message = 'Hello TeyouShop, Vous avez une nouvelle commande.'. "\r\n"; // Body of the email
    $message .= 'Infos sur la commande: ' . "\r\n";
    $total = 0;
    foreach ($cart_array as $product) {
        $message .= $product['Nom'] . "-------->" . $product['quantite'] . "\r\n";
        $total += $product['quantite'] * $product['Prix'];
    }
    $message .= "Total: $". $total;
    echo "Merci d'avoir choisi TeyouShop";

    $headers = 'From: sender@example.com' . "\r\n" .
    'Reply-To: sender@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

// Send the email
// if (mail($to, $subject, $message, $headers)) {
//     echo 'Email sent successfully.';
// } else {
//     echo 'Failed to send the email.';
// }
deleteAllItem($user_id);

}

function deleteItem($itemId){
    if(require("connexion_config.php")){
        $stmt = $acess->prepare("DELETE FROM cart_items WHERE id =:id");
        $stmt->bindParam(":id", $itemId);
        if($stmt->execute()){
            echo "Deleted successfully!";
        }
    }
}

function deleteAllItem($user_id){
    if(require("connexion_config.php")){
        $stmt = $acess->prepare("DELETE FROM cart_items WHERE user_id =:user_id");
        $stmt->bindParam(":user_id", $user_id);
        $stmt->execute();
    }
}
?>