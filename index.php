<?php session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title> LOGIN </title>
        <link rel='stylesheet' type='text/css' href='indeximlog.css' >   
    </head>

    <body>
        
        <h1>LOGIN</h1>
        <form method="post" action="index.php">
        <label for="name">Nom d'utilisateur</label> :<input type = "text" name = "name" required/>
        <br />
        <label for="password">Password</label> :<input type = "password" name = "password" required/>
        <br />
        <input type = "submit"  value ="LOGIN"/>
    </form>
    <ul>
        <p>
                <a href="./SignIn.php">Cliquer ici si vous n'êtes pas encore inscrit</a>
        </p>
    </ul>

    <?php 
    try
    {
        $bdd = new PDO('mysql:host=127.0.0.1;dbname=nbaweb;charset=utf8', 'root', ''); 
    }
    catch (Exception $e)
    {
        die('Erreur : '.$e ->getMessage());
    }
    if (isset ($_POST['name']) AND $_POST['name'] != '')
    {
        $sql = "SELECT * FROM user WHERE name='". $_POST["name"]."' AND password='".$_POST['password']."';";
        echo $sql;
        $reponse = $bdd->query($sql);
        if($reponse->rowCount() != 0) {
            header('Location: ./main.php'); 
            $_SESSION['idarticle']= '';
            $_SESSION['name']=  $_POST["name"];
            $_SESSION['id']= $row['id'];
            $_SESSION['LoggedIn']=true;
        } else {
            echo 'Wrong password'; 
        }
    }
    ?>
    </body>
</html>
