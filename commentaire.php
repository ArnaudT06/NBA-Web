<!DOCTYPE html>
<?php session_start();
?>

<html>
    <head>
        <meta charset="utf-8" />
        <title>Mon blog</title>
	<link href="indexim.css" rel="stylesheet" /> 
    </head>
        
    <body>
        <h1>ARTICLE</h1>
        <p><a href="main.php">Retour</a></p>

                    

<?php
// Connexion à la base de données
try
{
    $name = 'root';
    $password='';
    $bdd = new PDO('mysql:host=127.0.0.1;dbname=nbaweb;charset=utf8', $name,$password); 
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}


$req = $bdd->prepare('SELECT blog.titre as titre, blog.sujet as sujet, blog.contenu as contenu FROM blog WHERE idarticle = ?');
$req->execute(array($_GET['com']));
$donnees = $req->fetch();

?>
       
         <br />

         <?php
        $reponse = $bdd->query('SELECT * FROM blog');
        while ($donnees = $reponse->fetch())

            {
                ?>
                <div class=article>
                    <?php
                 if( ($donnees['idarticle'] ==  $_GET['com']))
                    {
        ?>

                        <strong><?php echo $donnees['type']; ?></strong>
                        <br />
                        <a> <?php echo $donnees['titre'];?>
                        </a>

                        <br />
                        <?php
                        if($donnees['image'] != ''){
                            ?>
                            <img src="<?php echo $donnees['image']?>"/>
                            <?php
                        }
                        ?>
                        <?php
                        if($donnees['video'] != ''){
                            ?>
                            <img src=""/>
                            <iframe width="640" height="360" src=<?php echo $donnees['video']?> frameborder="0"></iframe>
                            <?php
                        }
                        ?> 	 	
                        
                        <br />
                        <br />
                        <em><?php echo $donnees['contenu']; ?></em>
                        <br />
                        <em>Ecrit par <?php echo $donnees['createur']; ?></em>
                        <?php
            }
            ?>
            </div>
            <?php
        }
        ?>

                <h2>Commentaires</h2>

<?php

$req->closeCursor();
?>    


<label for="titre">Entrez votre commentaire :</label>
        <form method="POST" action="">
            <br />
            <textarea id="commentaire" name="commentaire" rows="30" cols="100"required></textarea>
            <br />
            <br />
            <label for="imagecom">Pour ajouter une image, copiez son URL</label> :<input type = "text" name = "imagecom" />
            <br />
            <label for="videocom">Pour ajouter une video, copiez son URL</label> :<input type = "text" name = "videocom" />
            <br />
            <br />
                <input type="submit" name="valider" value="OK"/>
            
        </form>
   
<?php

  try
  {
      $bdd = new PDO('mysql:host=127.0.0.1;dbname=nbaweb;charset=utf8', 'root', ''); 
  }
  catch (Exception $e)
  {
      die('Erreur : '.$e ->getMessage());
  }
  if (isset ($_POST['commentaire'] ))
    {
        if( ($_POST['commentaire'] != ''))
        {
            $idarticle=$_GET['com'];
            $auteur=$_SESSION['name'];
            $commentaire=$_POST['commentaire'];
            $imagecom=$_POST['imagecom'];
            $videocom=$_POST['videocom'];
        }
    }

    

         $sql = "SELECT name FROM commentaire WHERE name='".$idarticle."'";
        $reponse = $bdd->query($sql);
        //if($reponse ->rowCount() == 0)
        //{
            $req  = "INSERT INTO commentaire  VALUES (NULL, '".$idarticle."', '".$auteur."', '".$commentaire."', '".$imagecom."', '".$videocom."')"; 
            $bdd -> exec($req);
           // $req->closeCursor();
        //}

?> 


<?php
// Connexion à la base de données
try
{
    $name = 'root';
    $password='';
    $bdd = new PDO('mysql:host=127.0.0.1;dbname=nbaweb;charset=utf8', $name,$password); 
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}


$req = $bdd->prepare('SELECT commentaire.auteur as auteur, commentaire.commentaire as commentaire, FROM commentaire WHERE idarticle = ? ORDER BY commentaire.idcom DESC');
$req->execute(array($_GET['com']));
$donnees = $req->fetch();

?>
        <?php  echo $donnees['commentaire'];?>
        <br />
        <?php        echo $donnees['auteur']; ?>
         <br />

         <?php
        $reponse = $bdd->query('SELECT * FROM commentaire');
        while ($donnees = $reponse->fetch())

            {
                ?>
                <div class=comment>
                    
                    <?php
                    
                 if( ($donnees['idarticle'] ==  $_GET['com']))
                    {
        ?>
                        <br />
                        <br />
                        <br />
                        <br />
                        <strong>Commentaire de <?php echo $donnees['auteur']; ?> :   </strong>
                        <br />
                        <a> <?php echo $donnees['commentaire'];?> </a>

                        <br />
                        <?php
                        if($donnees['imagecom'] != ''){
                            ?>
                            <img src="<?php echo $donnees['imagecom']?>"/>
                            <?php
                        }
                        ?>
                        <?php
                        if($donnees['videocom'] != ''){
                            ?>
                            <img src=""/>
                            <iframe width="640" height="360" src=<?php echo $donnees['videocom']?> frameborder="0"></iframe>
                            <?php
                        }
                        

            }
            ?>
            </div>
            <?php
        }
        ?>
        
    </body>
</html>
