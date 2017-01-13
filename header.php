<?php session_start(); ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/header.css">

    <link href="https://fonts.googleapis.com/css?family=Bungee+Shade|Indie+Flower" rel="stylesheet">
    <title>Streamove</title>
  </head>
  <body>
    <div class="head">



<div>
      <div class="navbar">
      <ul class="navbar">
        <li><a href="cat.php?cat=1">Films</a></li>
        <li><a href="cat.php?cat=2">Série</a></li>

<?php
if (!isset($_SESSION['login']))
{
  echo '
        <li><a id="reg" href="register.php">inscription</a></li>
        <li><a id="conn" href="connect.php">Connexion</a></li>';

}
else {
  echo '
        <li><a id="reg" href="#">'.$_SESSION['login'].'</a></li>
        <li><a id="conn" href="logout.php">Deconnexion</a></li>';
        if ($_SESSION['role'] == 1) {
          echo '<li><a href="add_movie.php">Ajout films</a></li>';
        }
}
?>

      </ul>

      </div>
<a href="index.php"><img id="logo" src="img/logo.png" alt="logo"></a>
</div>
    </div>
