<?php 
  include 'header.php';
  include 'menu.php';
?>

<!-- contenu -->

  <?php 

        if ($_POST['suiteArticle']){
          $_SESSION['recupId']=$_POST['recupId'];
          header('Location: suiteArticle.php');
        }


  			$sql = $pdo->prepare('SELECT * FROM article;');
              $sql->execute();
              $result=$sql->fetchAll();


  			foreach($result as $article){
                $titre = $article["titre"];
                $id = $article["id"];
                $date =$article["date"];


        foreach ($pdo->query('SELECT SUBSTR(contenu, 1, 400) FROM article WHERE titre = "'.$titre.'"')as $row){
              	
        echo "<div class='plPageActu'>";
  			echo "<h2>".$titre."</h2>";
				echo $row['SUBSTR(contenu, 1, 400)']."

                      <form method='post' action='#'>
                                
                                <input type='hidden' name='recupId' value='$id' class='input-hidden' />
                                <input type='submit' id='' name='suiteArticle' value='...Lire la suite' />
                                <p>Publié le : $date</p>
                          
                      </form>

				        </div>";
			}

		}
             
              

            
              ?>

<?php
  include 'footer.php';
?>