<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Admin</title>
    <link rel="stylesheet" href="Css/style_admin.css">
</head>
<body>
    <div class="container">
        <!-- Header -->
      <header class="header">
            <div class="search_i">
                <input type="search" name="search" id="search">
                <i class='bx bx-search'></i>
            </div>

           <div class="date">
           <input type="datetime-local" name="" id="">
           </div>

           <div class="profile">
             <i class='bx bx-bell' ></i>
             <i class='bx bx-envelope' ></i>
           </div>
      </header>

      <!-- Sidebar -->
      <aside class="sidebar">
        
             <nav>
                <ul class="tabs">
                    <li class="logo">
                        <h1>Teyou<span>Shop</span></h1>
                        <img src="Images/shopping-bag-regular-24.png" alt="" width="30px" height="35px">
                     </li>

                    <li class="tab is-active" id="link">
                        <a data-switcher data-tab="1"><i class='bx bxs bxs-dashboard' >
                          </i> <span class="nav-item">Tableau bord</span>
                        </a>
                    </li>

                    <li>
                        <a href="index.php"><i class='bx bxs bx-shopping-bag' >
                          </i> <span class="nav-item">TeyouShop</span>
                        </a>
                    </li>

                    <li class="tab" id="link">
                        <a data-switcher data-tab="3"><i class='bx bxs bx-add-to-queue' >
                          </i> <span class="nav-item">Ajout Produit</span>
                        </a>
                    </li>

                    <li class="tab" id="link">
                        <a data-switcher data-tab="4"><i class='bx bxs bx-command' >
                          </i> <span class="nav-item">Commande</span>
                        </a>
                    </li>

                    <li class="tab" id="link">
                        <a data-switcher data-tab="5"><i class='bx bxs bx-user' >
                          </i> <span class="nav-item">Profil user</span>
                        </a>
                    </li>

                    <li class="log tab">
                        <a data-switcher data-tab="6"><i class='bx bxs bx-log-out' >
                          </i> <span class="nav-item">Log out</span>
                        </a>
                    </li>
                </ul>
             </nav>
      </aside>

      <!-- main -->
      <main class="main">
        <section class="pages">
            <div class="page is-active" data-page="1">
               <div id="tableauBord"></div>
            </div>

            <div class="page is-active" data-page="3">
               <div id="AjoutProduit"></div>
            </div>

            <div class="page is-active" data-page="4">
               <div id="Commande"></div>
            </div>

            <div class="page is-active" data-page="5">
               <div id="Profiluser"></div>
            </div>

            <div class="page is-active" data-page="6">
                <!-- <h2>Log out</h2>
                <p>Thanks you</p> -->
            </div>
        </section>
      </main>
    </div>

    <!-- lien js -->
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script>
        $(function(){
            $("#tableauBord").load("TableauBord.php");
            $("#AjoutProduit").load("Ajoutproduit.php");
            $("#Commande").load("Commande.php");
            $("#Profiluser").load("ProfilUser.php");
        });
    </script>
    <script src="Javascript/sidebare.js"></script>
    <script src="Javascript/realod.js"></script>
</body>
</html>