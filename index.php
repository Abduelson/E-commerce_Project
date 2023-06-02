<?php
session_start();
if(isset($_SESSION['initiale_nom']) && isset($_SESSION['user']))
{
    $initiale_nom = $_SESSION['initiale_nom'];
    $intial_user= $_SESSION['user'];
    $avatarUrl = "https://ui-avatars.com/api/?name=" . urlencode($initiale_nom) . "&background=random";
}

require("configuration/commande.php");
$produits= Afficher_4();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Miao&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
     <!-- Lien popups -->
     <link rel="stylesheet" href="path/to/magnific-popup.css">
    <script src="path/to/jquery.min.js"></script>
    <script src="path/to/jquery.magnific-popup.min.js"></script>
    
    <link rel="stylesheet" href="Css/style.css">

    <title>Acceuil</title>
    
        <style>
        .avatar {
        border-radius: 50%;
        }
        </style>
</head>
<body>
    <section class="section_2">
    <header>
              <div class="logo">
                  <h1>Teyou<span>Shop</span></h1>
              </div>
              <div class="humberger">
                  <div class="line"></div>
                  <div class="line"></div>
                  <div class="line"></div>
              </div>

              <nav class="nav-bar">
                  <ul>
                      <li><a href="" class="active">Acceuil</a></li>
                      <li><a href="Boutique.php">Boutique</a></li>
                      <li><a href="About.php">About</a></li>
                      <li><a href="Service_client.php">Service client</a></li>
                      <li><a href="#" style="color:black;">

                      <?php 
                      if(isset($_SESSION['initiale_nom']) && isset($_SESSION['user'])){
                        echo "<a href=\"deconexion.php\" ><img src=\"$avatarUrl\" alt=\"$initiale_nom\" class=\"avatar\" style=\"height: 30px; width: 30px;\"></a>";
                      }
                      else{
                        ?>
                        <li><a href="login.php">login</a></li>
                        <?php
                      }
                       
                      ?>
                    
                    </a></li>
                      <li><a href="Card.php"><img src="Images/offer.png" alt=""></a></li>
                  </ul>
              </nav>
    </header>
     <div class="Relative">
        <div class="Absolute">
        <h1>Bienvenue chez Teyou<span>Shop</span>!<br>
            Jusqu'a <span>80% de reduction</span><br>
            sur nos offres de la semaine</h1>
        <button style="cursor: pointer;"><a href="Boutique.php"></a>Acheter Maintenant</button>
        </div>
     </div>
    </section>
     <div class="livrason">
         <h1>LIVRAISON GRATUITE</h1>
    </div>

    <section>
        <div class="Les_titre">
            <h1>INTEMPORELS</h1>
            <div class="line"></div>
            <p>Les indispensables</p>
        </div>

        <div class="contanaire">
            <?php foreach($produits as $prod): ?>
                <div class="card">
                        <div class="Card_image">
                            <a href="Images/<?=$prod->Image?>" class="image">
                                <img src="Images/<?=$prod->Image?>" alt="">
                            </a>
                        </div>
            
                        <div class="Card_body">
                            <div class="title">
                                <h3>NOM: <?=$prod->Nom?></h3>
                            </div>
                            <div class="Price">
                                <h4>PRICE: $<?=$prod->Prix?></h4>
                            </div>
                            <div class="etoile">
                                    <img src="Images/star-solid-24.png" alt="">
                                    <img src="Images/star-solid-24.png" alt="">
                                    <img src="Images/star-solid-24.png" alt="">
                                    <img src="Images/star-solid-24.png" alt="">
                                    <img src="Images/star-half-solid-24.png" alt="">
                            </div>
                            <div class="Buttom">
                               <form action="Acheter.php" method="GET">
                                <input type="hidden" name="id" value="<?=$prod->Id_prod?>">
                               <button style="cursor: pointer;" type="submit">Voir</button>
                               </form>
                            </div>
                        </div>
                </div>

        <?php endforeach ?>

        </div>
    </section>

    <footer>
        <div class="footer_1">

             <div class="footer_left">
                <p>RESTEZ CONNECTEE</p>
                 <div class="footer_logo">
                    <a href=""><i class="bi bi-whatsapp"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-twitter"></i></a>
                 </div>
             </div>

             <div class="footer_center">
                <h1>Adresse</h1>
                 <p>Carradeux rue Anbroise</p>
                 <p>Croix des bouquet</p>
             </div>
             <div class="footer_right">
                <h1>Baision d'aide??</h1>
                <p>+509 3437 6724</p>
                <p>Teyou@gmail.com</p>
             </div>
        </div>

        <div class="footer_2">
            <div class="footer_2_title">
            <a href=""><p>Mention legale</p></a>
            <a href=""><p>Politique de confidentialite</p></a>
            <a href=""><p>Polotique de cookies</p></a>
            </div>
            <p>© 2035 par Abduelson Lyvert. Droit reserver</p>
        </div>
    </footer> 

    <script>
            $(document).ready(function() {
        $('.image').magnificPopup({
            type: 'image',
            gallery: {
            enabled: true
            }
        });
        });

    </script>

<script>
        humberger=document.querySelector(".humberger");
        humberger.onclick= function(){
        navbar=document.querySelector(".nav-bar");
        navbar.classList.toggle("active");
        }
    </script> 
</body>
</html>