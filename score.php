<?php session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Créer votre article </title>
        <link rel='stylesheet' type='text/css' href='indexim.css' >   
    </head>

    <body>
        
        <h1>Entrer les résultat du jour</h1>
        <form method="POST" action="">

        <br />
        <label for="nom_gagnant">Entrez l'equipe gagnante</label> :<input type = "text" name = "nom_gagnant" required/>
        <br />
        <br />
        <label for="nom_perdant">Entrez l'equipe perdante</label> :<input type = "text" name = "nom_perdant" required/>
        <br />
        <br />
        <label for="score_gagnant">Entrez le score de l'equipe gagnante</label> :<input type = "text" name = "score_gagnant" required/>
        <br />
        <br />
        <label for="score_perdant">Entrez le score de l'equipe gagnante</label> :<input type = "text" name = "score_perdant" required/>
        <br />
        <br />
        <label for="date">Date du match</label> :<input type = "date" name = "date" required/>
        <br />
            <input type="submit" name="valider" value="OK"/>
            <ul>
        <p>
        <a href="main.php">Cliquer ici pour retourner à la page d'acceuil</a>
        </p>
    </ul>
            
        </form>
    </body>
</html>

<?php

  try
  {
      $bdd = new PDO('mysql:host=127.0.0.1;dbname=nbaweb;charset=utf8', 'root', ''); 
  }
  catch (Exception $e)
  {
      die('Erreur : '.$e ->getMessage());
  }
  if (isset ($_POST['nom_gagnant'] )AND isset( $_POST['nom_perdant']) AND isset( $_POST['score_gagnant']) AND isset( $_POST['score_perdant'])AND isset( $_POST['date']))
    {
        if( ($_POST['nom_gagnant'] != '')AND ($_POST['nom_perdant'] != '')AND ( $_POST['score_gagnant'] != '')AND ( $_POST['score_perdant'] != '')AND ( $_POST['date'] != ''))
        {
            $nom_gagnant=$_POST['nom_gagnant'];
            $nom_perdant=$_POST['nom_perdant'];
            $score_gagnant=$_POST['score_gagnant'];
            $score_perdant=$_POST['score_perdant'];
            $date=$_POST['date'];
        }
    }

    

         $sql = "SELECT name FROM score WHERE name='".$nom_gagnant."'";
        $reponse = $bdd->query($sql);
        $req  = "INSERT INTO score  VALUES (NULL, '".$date."', '".$nom_gagnant."', '".$nom_perdant."', '".$score_gagnant."', '".$score_perdant."')"; 
        $bdd -> exec($req);
?>        