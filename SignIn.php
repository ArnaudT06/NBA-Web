<?php session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title> SIGNIN </title>
        <link rel='stylesheet' type='text/css' href='indeximlog.css' >   
    </head>

    <body>
        
        <h1>SIGNIN</h1>
        <form method="POST" action="">
        <div>
        <label for="sexe">Homme</label> :<input type = "radio" name = "sexe" value="Homme" required/>
        <label for="sexe">Femme</label> :<input type = "radio" name = "sexe" value="Femme" required/>
        </div>
        </br>
        <label for="name">Entrez un nom d'utilisateur</label> :<input type = "text" name = "name" required/>
        </br>
        <label for="email">Entre ton email</label> :<input type = "email" name = "email" required/>
        </br>
        <label for="password">Entre un Password</label> :<input type = "password" name = "password" required/>
        </br>
        <label for="tel">Entre numéro de tel</label> :<input type = "tel" name = "tel" required/>
        </br>
        <label for="birth">Date de naissance</label> :<input type = "date" name = "birth" required/>
        </br>
        <label for="joueur">Joueur à suivre</label> :<input type = "joueur" name = "joueur" required/>
        </br>
        
        <ul>
                <br> Sélectionnez votre équipe <br/>
                <br><input type = "radio" name = "equipe" value="HAWKS" required/>       : <label for="Equipe">ATLANTA HAWKS</label>           
                <br><input type = "radio" name = "equipe" value="CELTICS" required/>       : <label for="Equipe">BOSTON CELTICS</label>          
                <br><input type = "radio" name = "equipe" value="NETS" required/>       : <label for="Equipe">BROOKLYN NETS</label>           
                <br><input type = "radio" name = "equipe" value="MAVERIKS" required/>       : <label for="Equipe">DALLAS MAVERIKS</label>         
                <br><input type = "radio" name = "equipe" value="NUGETS" required/>       : <label for="Equipe">DENVER NUGETS</label>           
                <br><input type = "radio" name = "equipe" value="WARRIORS" required/>       : <label for="Equipe">GOLDEN STATES WARRIORS</label>  
                <br><input type = "radio" name = "equipe" value="HORNETS" required/>       : <label for="Equipe">CHARLOTTE HORNETS</label>       
                <br><input type = "radio" name = "equipe" value="BULLS" required/>       : <label for="Equipe">CHICAGO BULLS</label>           
                <br><input type = "radio" name = "equipe" value="CAVALIERS" required/>       : <label for="Equipe">CLEVELAND CAVALIERS</label>     
                <br><input type = "radio" name = "equipe" value="ROCKETS" required/>       : <label for="Equipe">HOUSTON ROCKETS</label>         
                <br><input type = "radio" name = "equipe" value="CLIPPERS" required/>       : <label for="Equipe">LA CLIPPERS</label>             
                <br><input type = "radio" name = "equipe" value="LAKERS" required/>       : <label for="Equipe">LOS ANGELES LAKERS</label>      
                <br><input type = "radio" name = "equipe" value="PISTONS" required/>       : <label for="Equipe">DETROIT PISTONS</label>         
                <br><input type = "radio" name = "equipe" value="PACERS" required/>       : <label for="Equipe">INDIANA PACERS</label>          
                <br><input type = "radio" name = "equipe" value="HEAT" required/>       : <label for="Equipe">MIAMI HEAT</label>              
                <br><input type = "radio" name = "equipe" value="GRIZZLIES" required/>       : <label for="Equipe">MEMPHIS GRIZZLIES</label>       
                <br><input type = "radio" name = "equipe" value="TIMBERWOLVES" required/>       : <label for="Equipe">MINNESOTA TIMBERWOLVES</label>  
                <br><input type = "radio" name = "equipe" value="PELICANS" required/>       : <label for="Equipe">NEW ORLEANS PELICANS</label>    
                <br><input type = "radio" name = "equipe" value="BUCKS" required/>       : <label for="Equipe">MILWAUKEE BUCKS</label>         
                <br><input type = "radio" name = "equipe" value="KNIKS" required/>       : <label for="Equipe">NEW YORK KNIKS</label>          
                <br><input type = "radio" name = "equipe" value="MAGIC" required/>       : <label for="Equipe">ORLANDO MAGIC</label>           
                <br><input type = "radio" name = "equipe" value="THUNDER" required/>       : <label for="Equipe">OKLAHOMA CITY THUNDER</label>   
                <br><input type = "radio" name = "equipe" value="SUNS" required/>       : <label for="Equipe">PHOENIX SUNS</label>            
                <br><input type = "radio" name = "equipe" value="BLAZERS" required/>       : <label for="Equipe">PORTLANS TRAIL BLAZERS</label>  
                <br><input type = "radio" name = "equipe" value="76ERS" required/>       : <label for="Equipe">PHILADELPHIA 76ERS</label>      
                <br><input type = "radio" name = "equipe" value="RAPTORS" required/>       : <label for="Equipe">TORONTO RAPTORS</label>         
                <br><input type = "radio" name = "equipe" value="WIZARDS" required/>       : <label for="Equipe">WASHINGTON WIZARDS</label>      
                <br><input type = "radio" name = "equipe" value="KINGS" required/>       : <label for="Equipe">SACRAMENTO KINGS</label>        
                <br><input type = "radio" name = "equipe" value="SPURS" required/>       : <label for="Equipe">SAN ANTONIO SPURS</label>       
                <br><input type = "radio" name = "equipe" value="JAZZ" required/>       : <label for="Equipe">UTAH JAZZ</label>               
            </ul>
            <input type="submit" name="valider" value="OK"/>
            <ul>
        <p>
        <a href="./index.php">Cliquer ici pour retourner à la page d'acceuil</a>
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
  if (isset ($_POST['name'] )AND isset ( $_POST['birth'])AND isset( $_POST['sexe'])AND isset( $_POST['email']) AND isset( $_POST['tel']) AND isset($_POST['password']) AND isset( $_POST['joueur']) AND isset( $_POST['equipe']))
    {
        if( ($_POST['name'] != '') AND  ( $_POST['birth'] != '') AND ($_POST['sexe'] != '') AND ($_POST['email'] != '') AND ( $_POST['tel'] != '') AND ($_POST['password'] != '') AND ( $_POST['joueur'] != '') AND ($_POST['equipe'] != ''))
        {
            $name=$_POST['name'];
            $birth=$_POST['birth'];
            $sexe=$_POST['sexe'];
            $email=$_POST['email'];
            $tel=$_POST['tel'];
            $password=$_POST['password'];
            $joueur=$_POST['joueur'];
            $equipe=$_POST['equipe'];
        }
    }

  $sql = "SELECT name FROM user WHERE name='".$name."'";
  $reponse = $bdd->query($sql);
  if($reponse ->rowCount() == 0)
    {
        $req  = "INSERT INTO user  VALUES (NULL, '".$name."','".$password."','".$birth."', '".$sexe."', '".$email."','".$tel."', '".$joueur."', '".$equipe."')"; 
        //echo $req;
        $bdd -> exec($req);
        header('Location: index.php');
    }
    else{
        echo("Utilisateur existant");
    }
?>        