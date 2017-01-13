<?php include 'header.php' ?>
<link rel="stylesheet" href="css/cat.css">
<div class="genre">
  <?php
   $cat = $_GET[cat];

  echo '
  <a href="souscat.php?genre=comedie&cat='.$cat.'"><img class="miniature" src="https://dummyimage.com/220x290/fff/000000.jpg&text=Com%C3%A9die" alt=""></a>
  <a href="souscat.php?genre=action&cat='.$cat.'"><img class="miniature" src="https://dummyimage.com/220x290/fff/000000.jpg&text=action" alt=""></a>
  <a href="souscat.php?genre=drame&cat='.$cat.'"><img class="miniature" src="https://dummyimage.com/220x290/fff/000000.jpg&text=Drame" alt=""></a>
  <a href="souscat.php?genre=horreur&cat='.$cat.'"><img class="miniature" src="https://dummyimage.com/220x290/fff/000000.jpg&text=Horreur" alt=""></a>
  <a href="souscat.php?genre=SF&cat='.$cat.'"><img class="miniature" src="https://dummyimage.com/220x290/fff/000000.jpg&text=SF" alt=""></a>';
  ?>
</div>
</body>
</html>
