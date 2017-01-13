<?php include 'header.php' ?>
<link rel="stylesheet" href="css/info.css">
<div class="info">
<?php
  $bdd = new PDO('mysql:host=localhost;dbname=my_streaming', 'root', 'oui');

$id = $_GET[id];

  $film = $bdd->prepare("SELECT * FROM films WHERE id_film=$id");
  $film->execute();
  $f = $film->fetch();
echo '
  <div class="titre">
      <h1>'.$f['titre'].'</h1><br>
  </div>
  <img id="affiche" src="'.$f['affiche'].'">


      <ul>
      <li class="liste">Réalisateur : '.$f['realisateur'].'</li>
      <li class="liste">Horreur : '.$f['genre'].'</li>
      <li class="liste">Origine : '.$f['nationalite'].'</li>
      <li class="liste">Année sortie : '.$f['annee_sortie'].'</li>
      </ul>
<h2>Synopsys</h2>
      <p id="description">'.$f['description'].'</p>
'  ;

?>
</div>

</body>
</html>
