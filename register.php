<?php include 'header.php' ?>

<link rel="stylesheet" href="css/register.css">

<div id="formulaire">

    <form action="" method="post">

      Login :<br><input id="login" type="text" name="login" required=""><br>
      Password :<br><input id="password" type="password" name="password" required=""><br>
      Email :<br><input required="" id="password" type="email" name="email"><br>
      <br><input id="submit" type="submit"  value="Inscription">
    </form>
  </div>








  <?php
  if (!empty($_POST['email']))
  {
  $bdd = new PDO('mysql:host=localhost;dbname=my_streaming', 'root', 'oui');

  $login = $bdd->prepare("SELECT login FROM utiliateurs");
  $login->execute();

  if ($login->fetch()) {
    echo '<p style="color:white; font-size:30px;">Cet identifiant est déja  utilisé</p>';
  }
            else
            {
              $insert = $bdd->prepare("INSERT INTO utilisateurs(login, password, mail, admin)
               VALUES (:login, :password, :email, :admin)");


  $pass_hash = htmlspecialchars(sha1($_POST['password']), ENT_QUOTES);

               $insert->bindValue(':login', htmlspecialchars($_POST['login'], ENT_QUOTES));
               $insert->bindValue(':password', $pass_hash );
               $insert->bindValue(':email', htmlspecialchars($_POST['email'], ENT_QUOTES));
               $insert->bindValue(':admin', '0');


              $insert->execute();

              echo '<p style="color:white; font-size:30px;">votre compte a bien été créé veuillez vous connecter !</p>';
              header("refresh:3;url=index.php");
            }
        }

?>

</body>
</html>
