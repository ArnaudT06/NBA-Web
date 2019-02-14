<?php session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Créer votre article </title>
        <link rel='stylesheet' type='text/css' href='indexim.css' >   
    </head>

    <body>
        
        <h1>Créer votre article</h1>
        <form method="POST" action="">
        <div>
        <br> Sélectionnez le type d'article <br/>
                <br><input type = "radio" name = "type" value="NEWS" required/>        : <label for="type">NEWS</label>           
                <br><input type = "radio" name = "type" value="PUNCHLINE" required/>   : <label for="type">PUNCHLINE</label>          
                <br><input type = "radio" name = "type" value="PORTRAIT" required/>    : <label for="type">PORTRAIT</label>           
                <br><input type = "radio" name = "type" value="DISCUSSION" required/>  : <label for="type">DISCUSSION</label>      
        </div>
        <br />
        <label for="titre">Entrez le titre de votre article</label> :<input type = "text" name = "titre" required/>
        <br />
        <br />
        <label for="titre">Entrez le contenu de votre article  :</label>
        <br />
        <textarea id="intro" name="intro" rows="20" cols="100"required></textarea>
        <br />
        <br />
        <textarea id="contenu" name="contenu" rows="30" cols="100"required></textarea>
        <br />
        <br />
        <label for="image">Pour ajouter une image, copiez son URL</label> :<input type = "text" name = "image" />
        <br />
        <label for="video">Pour ajouter une video, copiez son URL</label> :<input type = "text" name = "video" />
        <br />
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
  if (isset ($_POST['titre'] )AND isset( $_POST['type']) AND isset( $_POST['contenu'])AND isset( $_POST['intro']))
    {
        if( ($_POST['titre'] != '')AND ($_POST['type'] != '')AND ( $_POST['contenu'] != '')AND ( $_POST['intro'] != ''))
        {
            $createur=$_SESSION['name'];
            $titre=$_POST['titre'];
            $type=$_POST['type'];
            $intro=$_POST['intro'];
            $contenu=$_POST['contenu'];
            $image=$_POST['image'];
            $video=$_POST['video'];
        }
    }

    

         $sql = "SELECT name FROM blog WHERE name='".$titre."'";
        $reponse = $bdd->query($sql);
        $req  = "INSERT INTO blog  VALUES (NULL, '".$createur."', '".$titre."', '".$type."', '".$intro."', '".$contenu."', '".$image."', '".$video."')"; 
        $bdd -> exec($req);
        //header('Location: blog.php');
?>        