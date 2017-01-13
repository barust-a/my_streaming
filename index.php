<?php  include 'header.php'; ?>
<link rel="stylesheet" href="css/acceuil.css">


<div class="meilleur_film">

  <div class="titre">
      <h1>Nouveautées</h1><br>
  </div>
<?php


  $bdd = new PDO('mysql:host=localhost;dbname=my_streaming', 'root', 'oui');



  $film = $bdd->prepare("SELECT * FROM films ORDER BY id_film DESC");
  $film->execute();
  $f = $film->fetchAll();


$i = 0;
while (isset($f[$i]['titre']) && $i < 6) {
  echo '<a href="info.php?id=' .$f[$i]['id_film']. '"><img class="affiche" src="'.$f[$i]['affiche'].'">' ;
  $i++;
}

?>
</div>


<div class="new">

<div class="titre">
    <h1>meilleurs films</h1><br>
</div>
<img class="affiche" src="http://fr.web.img6.acsta.net/newsv7/16/10/12/23/34/474271.jpg" alt="">

  </body>
</html>
