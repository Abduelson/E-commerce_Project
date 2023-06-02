<?php 
  
  session_start();
  
  if(isset($_POST['valider']))
  {
    if(isset($_POST['email']) && isset($_POST['password'])){
       $erreur="";
        if(!empty($_POST['email']) && !empty($_POST['password']) ){
          $email= $_POST['email'];
          $mode_pass= $_POST['password'];
          
          $nom_serveur= "localhost";
          $user= "root";
          $pass_word= "";
          $database_name= "Ecommerce_Tey";
          $con= mysqli_connect($nom_serveur, $user, $pass_word, $database_name);
          
          $req= mysqli_query($con, "SELECT SUBSTR(Nom, 1, 1) AS initiale_nom, Id_user FROM utilisateurs WHERE Email='$email' AND Mode_passe='$mode_pass'");
          $numbre_ligne=mysqli_num_rows($req);
      
          if($numbre_ligne>0){
            // Récupérer la première lettre du nom d'utilisateur à partir de la requête
            $result = mysqli_fetch_assoc($req);
            $initiale_nom = $result['initiale_nom'];
            $user=$result['Id_user'];

            // Stocker la première lettre du nom d'utilisateur dans une variable de session
            $_SESSION['initiale_nom'] = $initiale_nom;
            $_SESSION['user'] = $user;
            header("Location: index.php");
          }
          else{
            $erreur="Email ou adresse incorrect";
          }
        }else{
          $erreur="vous devez remplir les champs";
        }
        
       }
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/Sign_Style.css">
    <title>Login</title>
</head>
<body style="background-color: #e5dfd3;">
       <div class="forme">
                <form action="" method="post">
                <h1>LOGIN</h1>
                    <input type="email" name="email" id="email" placeholder="Email">
                    <input type="password" name="password" id="password" placeholder="Password" >
                    <button type="submit" name="valider">Valider</button>
                    <a href="sign.php">Creer un compte</a>
                    <?php if(isset($erreur)){
                       echo "<p class='para'>" .$erreur. "<p>";
                   }
                    ?>
                </form>
       </div>
</body>
</html>