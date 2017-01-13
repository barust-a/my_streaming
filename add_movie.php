<?php include 'header.php' ?>


<link rel="stylesheet" href="css/add_movie.css">

<div id="formulaire">

    <form action="" method="post">

      Type :<br><input required="" id="password" type="radio" name="genre" value="1" >Film
      <input required="" id="password" type="radio" name="genre" value="2" >Série
      Titre :<br><input id="password" type="text" name="titre" required=""><br>
      Réalisateur :<br><input id="password" type="text" name="realisateur" required=""><br>
      Genre :<br><input required="" id="password" type="radio" name="genre" value="action" >action
      <input required="" id="password" type="radio" name="genre" value="comédie" >comédie
      <input required="" id="password" type="radio" name="genre" value="drame" >drame
      <input required="" id="password" type="radio" name="genre" value="horreur" >horreur
      <input required="" id="password" type="radio" name="genre" value="SF" >SF<br>
      Nationalité :<br><input required="" id="password" type="text" name="nationalite"><br>
      Affiche (url de l'affiche) :<br><input required="" id="password" type="text" name="affiche"><br>
      Description :<br><input required="" id="password" type="text" name="description"><br>
      Année sortie :<br><input required="" id="password" type="number" name="annee"><br>

      <br><input id="submit" type="submit"  value="envoyer">
    </form>




  <?php
  if (!empty($_POST['titre']))
  {
  $bdd = new PDO('mysql:host=localhost;dbname=my_streaming', 'root', 'oui');


              $insert = $bdd->prepare("INSERT INTO films(type, titre, realisateur, genre, nationalite, affiche, description, annee_sortie, date_ajout)
               VALUES (:type, :titre, :realisateur, :genre, :nationalite, :affiche, :description, :annee, :date_ajout)");


               $insert->bindValue(':type', $_POST['type']);
               $insert->bindValue(':titre', $_POST['titre']);
               $insert->bindValue(':realisateur', $_POST['realisateur']);
               $insert->bindValue(':genre', $_POST['genre']);
               $insert->bindValue(':nationalite', $_POST['natinalite']);
               $insert->bindValue(':affiche', $_POST['affiche']);
               $insert->bindValue(':description', $_POST['description']);
               $insert->bindValue(':annee', $_POST['annee']);
               $insert->bindValue(':date_ajout', time());


              $insert->execute();

              echo '<div><p style="color:white; font-size:30px;">Le film a bien été ajouter a la base de donnée</p></div>';
            }

?>
  </div>

</body>
</html>
