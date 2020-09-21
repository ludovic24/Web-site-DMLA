 </div> <!-- div contenu -->
 <?php
  $sql = $pdo->prepare('SELECT * FROM article');
              $sql->execute();
              $result=$sql->fetchAll();
  ?>

 <footer> <!-- ok -->
 <div id="footer"><!-- ok -->

 		<div class="footerBlock">
      <a href="pageMention.php"><p>Mentions légales</p></a>
      <a href="https://www.facebook.com/AssociationDMLA/"><p>Facebook</p></a>
      <a href="https://twitter.com/associationdmla"><p>Twitter</p></a>



    </div><!-- ok -->

 		<div class="footerBlock"><!-- ok -->

			<a href="index.php"><p>Accueil</p></a>
			<a href="pageDmla.php"><p>La DMLA</p></a>
 			<a href="pageAssociation.php"><p>L'association</p></a>
			<a href="pageContact.php"><p>Contactez-nous</p></a>
			<a href="pageActu.php"><p>Actualités</p></a>

			 <?php
				if($_SESSION["connectez"] == "1" && $_SESSION["fonctionbdd"] == 'admin'){
					echo '<a href="testajout.php"><p>Gestion</p></a>';
					}
			?>

 		</div><!-- ok -->

 		<div class="footerBlock"><!-- ok -->
 			<h2>Dernières Actualités</h2>
 			<div id="dernierArticle"><!-- ok -->
         
          <!-- ok -->

              <!-- Validation de l'article -->

           
              <?php


             

              foreach($result as $article){
                $titre = $article["titre"];
                $id = $article["id"];
  
               
            echo "

            <form method='post' action='#'><!-- ok -->
            <div class='titreArtRecent'>

              <div class='plArRecent'>

                    <input type='submit' id='titreA' name='titreA' value='$titre'>
         
                  </div>
                    
              <br/> 

              </div><!-- ok -->
          </form>";

              }            
              ?>


            <!-- ok -->
        </div><!-- ok -->
 		</div><!-- ok -->


 </div><!-- ok -->

   </footer> <!-- ok -->
  </body>
</html>