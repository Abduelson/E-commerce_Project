<?php
require("configuration/commande.php");
session_start();
if(isset($_SESSION['initiale_nom']) && isset($_SESSION['user']))
{
    $initiale_nom = $_SESSION['initiale_nom'];
    $intial_user= $_SESSION['user'];
    $avatarUrl = "https://ui-avatars.com/api/?name=" . urlencode($initiale_nom) . "&background=random";
    $cartNumber = countItems($_SESSION['user']);
}
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
    <link rel="stylesheet" href="Css/style.css">
    <style>
        .avatar {
        border-radius: 50%;
        }
        </style>
    <title>About</title>
</head>
<body>
    <section class="section_4">
    <header>
              <div class="logo">
                  <h1>Teyou<span>Shop</span></h1>
                  <img src="Images/shopping-bag-regular-24.png" alt="" width="30px" height="40px">
              </div>
              <div class="humberger">
                  <div class="line"></div>
                  <div class="line"></div>
                  <div class="line"></div>
              </div>

              <nav class="nav-bar">
                  <ul>
                      <li><a href="index.php" class="active">Acceuil</a></li>
                      <li><a href="Boutique.php">Boutique</a></li>
                      <li><a href="About.php">About</a></li>
                      <li><a href="Service_client.php">Service client</a></li>
                      <li>
                            <?php 
                            if(isset($_SESSION['initiale_nom']) && isset($_SESSION['user'])){
                                ?>
                                <div class="dropdown">
                                <button class="dropdown-btn">
                                  <img src="<?php echo $avatarUrl; ?>" alt="<?php echo $initiale_nom; ?>" class="avatar" style="height: 30px; width: 30px;">
                                </button>
                                <div class="dropdown-content" style="background-color: black;">
                                  <a href="deconexion.php" style="color: white;">Déconnexion</a>
                                </div>
                              </div>
                              <?php
                            }
                            else{
                                ?>
                                <li class="log"><a href="login.php">login</a></li>
                                <?php
                            }
                            
                            ?>
                            <?php if(isset($_SESSION['user'])){   ?>
                      </li>

                        <li class="imjcart">
                            <a href="myCart.php">
                                <span style="position: absolute; color: red;"><?php echo $cartNumber; ?></span>
                                <img src="Images/offer.png" alt="">
                            </a>
                       </li>
                  </ul>

                  <?php } ?>

              </nav>

    </header>
    </section>
  
    <div class="About">
        <div class="About_1">
            <div class="About_left">
                <h1>Qui je suis</h1>
                <div class="line"></div>
                </div>
                <p>
                Sterline Sagesse est une jeune femme dynamique et 
                ambitieuse qui a trouvé sa passion dans l'étude de l'anglais, l'informatique bureautique
                En plus de ses études universitaires, Sterline a entrepris une activité entrepreneuriale en créant sa 
                propre boutique en ligne de vêtements pour filles.
                </p>
            </div>
            <div class="About_right">
                <img src="Images/WhatsApp Image 2023-06-04 à 17.03.48.jpg" alt="">
            </div>
        </div>
    </div>

    <div class="About_flex">
        <div class="Our_team">
            <h1 style="margin-bottom: 10px;">Notre Equipe</h1>
            <p>Grâce à la présence de Clara et de Julien à ses côtés, Sterline bénéficie d'un soutien 
                solide et d'une expertise complémentaire pour mener à bien son entreprise. Ils forment une équipe dynamique, 
                s'entraident mutuellement et travaillent ensemble pour surmonter les défis et saisir les opportunités qui se présentent. 
                La combinaison de leurs compétences, de leur dévouement et de
                 leur vision commune garantit le succès et la croissance continue de leur entreprise.</p>
        </div>
         
        <div class="About_flex_1">
              <div class="About_card" style="background-color: #f4f6f9;">
                 <img src="Images/6.jpg" alt="">
                 <h1>Abduelson Lyvert</h1>
                 <p>Ingenier informatique</p>
              </div>
              
              <div class="About_card" style="background-color: #f4f6f9;">
                 <img src="Images/profile-2.jpg" alt="">
                 <h1>Robert Louis</h1>
                 <p>Ingenier Civil</p>
              </div>
              
              <div class="About_card" style="background-color: #f4f6f9;">
                 <img src="Images/WhatsApp Image 2023-06-04 à 17.03.48.jpg" alt="">
                 <h1>Sterline Sagesse</h1>
                 <p>Entrepreneure</p>
              </div>
              
        </div>
    </div>

    <div class="About_flex">
        <div class="Our_team">
            <h1 style="margin-bottom: 10px;">Notre But</h1>
            <p>Notre but est de bâtir et développer une entreprise prospère dans le domaine de la vente en ligne de vêtements pour filles.
                 Leur objectif principal est de fournir des produits de haute qualité, tendance et adaptés 
                 aux besoins des clientes. Ils souhaitent offrir une expérience d'achat agréable et personnalisée,
                 en mettant l'accent sur le service client et la satisfaction.</p>
        </div>
         
        <div class="About_flex_1">
              <div class="About_card">
                 <img src="Images/best_quality.png" alt="">
                 <h1>Meilleure qualité</h1>
                 <p>En ce qui concerne les produits de leur boutique en ligne de vêtements pour filles, 
                    ils sélectionnent avec soin chaque article en veillant à ce qu'il réponde aux normes les plus élevées 
                    en termes de qualité, de style et de durabilité.</p>
              </div>
              
              <div class="About_card">
                 <img src="Images/offer.png" alt="">
                 <h1>Meilleures offres</h1>
                 <p>Sterline Sagesse recherche des meilleures offres pour satisfaire leurs clients et leur offrir
                     des avantages compétitifs. elle comprend l'importance d'offrir
                     des prix attractifs et des promotions intéressantes pour fidéliser leur clientèle et attirer de nouveaux clients..</p>
              </div>

              <div class="About_card">
                 <img src="Images/lock-alt-solid-24.png" alt="">
                 <h1>Paiements sécurisés</h1>
                 <p>Sterline Sagesse accord une grande importance à la sécurité des paiements 
                    dans leur boutique en ligne. elle comprend que la confiance des clients est 
                    primordiale et s'efforcent de garantir des transactions sûres et protégées.</p>
              </div>
              
        </div>
    </div>

    <footer>
        <div class="footer_1">

             <div class="footer_left">
                 <p style="color: rgb(28, 26, 26);">RESTEZ CONNECTEE</p>
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
                <p>sterlinesagesse@gmail.com</p>
             </div>
        </div>

        <div class="footer_2">
            <div class="footer_2_title">
            <a href=""><p>Mention legale</p></a>
            <a href=""><p>Politique de confidentialite</p></a>
            <a href=""><p>Polotique de cookies</p></a>
            </div>
            <p>© 2035 par Abduelson Lyvert. Créé avec Wix.com</p>
        </div>
    </footer> 
<script>
        humberger=document.querySelector(".humberger");
        humberger.onclick= function(){
          navbar=document.querySelector(".nav-bar");
          navbar.classList.toggle("active");
        }
    </script> 
</body>
</html>