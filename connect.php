<?php include 'header.php'; ?>


<link rel="stylesheet" href="css/register.css">

<div id="formulaire">
    <form action="" method="post">

      Login :<br><input id="login" type="text" name="login" required=""><br>
      Password :<br><input id="password" type="password" name="password" required=""><br>
      <br><input id="submit" type="submit"  value="connection">
    </form>



    <?php
        try
        {
          $bdd = new PDO('mysql:host=localhost;dbname=my_streaming', 'root', 'oui');
          array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION );
          if(!empty($_POST['login']) && !empty($_POST['password']))
      {
        $login = htmlspecialchars($_POST['login'], ENT_QUOTES);
        $password = htmlspecialchars($_POST['password'], ENT_QUOTES);
        $password = sha1($password);

        $sql = "SELECT password FROM utilisateurs WHERE login= '".$login."'";
        $sql = $bdd->prepare($sql);
        $sql->execute();
        $sql=$sql->fetch(PDO::FETCH_ASSOC);
        if($sql['password'] != $password)
         {
      echo '<div class="alert alert-dismissable alert-danger">
      <button type="button" class="close" data-dismiss="alert">x</button>
      <p> <strong>Oh Non !</strong> Mauvais login / password. Merci de recommencer !</p>
      </div>';
         }

        else
       {
         session_start();

       $_SESSION['login'] = $_POST['login'];

            $role = $bdd->prepare("SELECT admin FROM utilisateurs WHERE login=:login");
            $role->bindValue(':login', $_SESSION['login']);
            $role->execute();
            $f = $role->fetch();
            $role = $f[0];


    $_SESSION['role'] = $role;


      echo '<div class="alert alert-dismissable alert-success">
      <p> <strong>Bravo !</strong> Vous etes bien log, Redirection dans 3 secondes !</p>
      </div>';

      header("refresh:3;url=index.php");
         }

      }
      else
      {
       $champs = '<p>(Remplissez tous les champs pour vous connectez !)</p>';
      }
      }
        catch (Exception $e) {
          echo $e->getMessage();
          die();
        }

    ?>




  </div>


  </body>
  </html>
