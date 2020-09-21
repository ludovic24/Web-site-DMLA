<?php
include 'header.php';
include 'menu.php';
?>



          <?php
            
            if(isset($_POST["titreA"]) || isset($_POST['suppAr'])){

            $_SESSION['titreM'] = $_POST["titreA"];
            $sql = $pdo->query('SELECT * FROM article WHERE titre ="'.$_SESSION['titreM'].'"');


                while ($donnees = $sql->fetch()){

                  $contenu = $donnees['contenu'];
                  $titreR =  $donnees['titre'];
                  $_SESSION['id']=$donnees['id'];

                }
            }
         
            // modification article

            if($_SESSION['valid']==1 && isset($_POST['envoyer'])){

            $titre = addslashes($_POST['titre']);
            
            $editeur = addslashes($_POST['editeur']);

            $modifArticle = 'UPDATE article SET titre = "'.$titre.'", contenu = "'.$editeur.'" WHERE id = "'.$_SESSION['id'].'" ';
            $pdo->exec($modifArticle);
            $_SESSION['valid']="";
            }
            elseif (isset($_POST['titre'])&&isset($_POST['editeur'])&&isset($_POST["envoyer"])&&$_SESSION['valid'] == ""){

            $titre = addslashes($_POST['titre']);
            $editeur = addslashes($_POST['editeur']);
            

            $insertArticle = 'INSERT INTO article(titre,contenu,date) VALUES ("'.$titre.'","'.$editeur.'","'.$datefr.'")';


            $pdo->exec($insertArticle);
          }

          //suprimer un article

            if($_POST['suppAr']){
              $sup = $_POST['evenementId'];
              $suppArticle ="DELETE FROM `article` WHERE `id` = $sup";
                           

              $pdo->exec($suppArticle);
            }
        

          ?>

            
         <script src="ckeditor-3/ckeditor.js"></script>

        <div id="formulaireArticle"><!-- ok -->
          <form method='post' action='#'><!-- ok -->

          <?php if(isset($_POST["titreA"])){
                
                $_SESSION['valid'] = 1;


                echo "<h2>Modifier l'Article</h2>";
                
                echo "<input type='submit' name='retour' class='' value='Nouvel article' />";
                echo "<div class='placementForm'>";
                echo "<input type='text' name='titre' class='input' value='".$titreR."' required />
                      </div>";

              }
              else{
                $_SESSION['valid']="";
                echo "<h2>Nouvel article</h2>";
                echo "<form method='post' action='#'>";
                echo "<div class='placementForm'>";
                echo '<input type="text" name="titre" class="input" placeholder="Entrez le titre de l\'article" required />

                </div>
                </form>

                ';
              }
              ?>

            

            <textarea cols="80" class="ckeditor" id="editeur" name="editeur" rows="10">

                <?php
                if(isset($_POST["titreA"])){
                  echo  $contenu;
                }
              ?>

            </textarea>

            <input type="submit" name="envoyer" value="ok" />

          </form><!-- ok -->
        </div><!-- ok -->

   
        <div id="dernierArticle"><!-- ok -->
          <h2> Modifier un article </h2>
        

              <!-- Validation de l'article -->

           
              <?php

              $sql = $pdo->prepare('SELECT * FROM article;');
              $sql->execute();
              $result=$sql->fetchAll();


              foreach($result as $article){
                $titre = $article["titre"];
                $id = $article["id"];
                $date = $article["date"];
                


               
                       echo "

                       <div class='plArRecent'><!-- ok -->
                            <form method='post' action='#'><!-- ok -->

                              <div class='titreArtRecent'><!-- ok -->

                                <input type='submit' id='titreA' name='titreA' value='$titre' />
                                <input type='hidden' name='evenementId' value='$id' class='input-hidden' />
                                <input type='submit' id='boutonSupprimer' name='suppAr' value='Supprimer' />

                                </div><!-- ok -->
                              <br/> 
                           </form><!-- ok -->
                        </div> <!-- ok -->
                      
                    ";

              }
           ?>
        </div><!-- ok -->


       

        <?php
        include 'footer.php';
        ?>
