<?php include 'header.php' ?>
<link rel="stylesheet" href="css/cat.css">

<div class="genre">

<?php

$type = $_GET[cat];
$genre = $_GET['genre'];

$bdd = new PDO('mysql:host=localhost;dbname=my_streaming', 'root', 'oui');


$film = $bdd->prepare("SELECT * FROM films WHERE type=:type AND genre=:genre");
$film->bindValue(':type', $type);
$film->bindValue(':genre', $genre );
$film->execute();
$f = $film->fetchAll();


$i = 0;
while (isset($f[$i]['titre'])) {
echo '<a href="info.php?id=' .$f[$i]['id_film']. '"><img class="affiche" src="'.$f[$i]['affiche'].'">' ;
$i++;
}


 ?>

</div>
