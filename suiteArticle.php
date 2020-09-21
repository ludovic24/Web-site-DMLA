<?php 
  include 'header.php';
  include 'menu.php';
?>

<!-- contenu -->
<?php

     $sql = $pdo->query('SELECT * FROM article WHERE id ="'.$_SESSION['recupId'].'"');
              $sql->execute();
              $result=$sql->fetchAll();

      foreach($result as $article){
                $titre = $article["titre"];
                $contenu = $article["contenu"];
                $id = $article["id"];
                $date = $article["date"];



	  echo "<div class='plPageActu'>";
  			echo "<h2>".$titre."</h2>";
				echo $contenu ;
				echo "</div>";
}

?>



<?php
  include 'footer.php';
?>