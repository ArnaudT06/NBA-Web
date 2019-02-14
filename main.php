<!DOCTYPE html>
<?php session_start();

                $name = 'root';
                $password='';
                $bdd = new PDO('mysql:host=127.0.0.1;dbname=nbaweb;charset=utf8', $name,$password); 
                $reponse = $bdd ->query('SELECT score.nom_gagnant as nom_gagnant, score.nom_perdant as nom_gagnant, score.score_gagnant as score_gagnant, score.score_gagnant as score_gagnant 
                FROM score ORDER BY score.date DESC');
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title> Accueil </title>
        <link rel='stylesheet' type='text/css' href='indexim.css' >   
    </head>

    <body>
        <div id="entete">
            <header>
            <a href="./deconnexion.php">DECONNEXION</a>
                    <h1> Bonjour <?php echo $_SESSION['name']; ?>
                    
                    <h2>NBA France<h2>
                    </h1>
  
            </header>

            
            
            <h3>
            <a href="./blog.php">FORUM</a>
            <?php if($_SESSION['name'] == 'admin')
            {
                ?>
                <a href="./score.php">SCORE</a>
                <?php
            }
            ?>
            </h3>

            <div class="score">
<?php
        $reponse = $bdd->query('SELECT * FROM score');
        while ($donnees = $reponse->fetch())
        {
?>
        
                <div class="match">
                    <div class="gagnant">
                        <span class="team"><?php echo $donnees['nom_gagnant'] ?></span> 
                        <span class="tscore"><?php echo $donnees['score_gagnant'] ?></span>   
                    </div>

                    <div class="perdant">
                        <span class="team"><?php echo $donnees['nom_perdant'] ?></span> 
                        <span class="tscore"><?php echo $donnees['score_perdant'] ?></span>   
                    </div>
                </div>
        
<?php
        }
?>  
</div>

        <?php 
                $name = 'root';
                $password='';
                $bdd = new PDO('mysql:host=127.0.0.1;dbname=nbaweb;charset=utf8', $name,$password); 
                $reponse = $bdd ->query('SELECT blog.idarticle as idarticle, blog.titre as titre, blog.sujet as sujet, blog.intro as intro, user.name as name 
                FROM blog INNER JOIN user 
                ON blog.id = user.id 
                ORDER BY blog.idarticle DESC'
                );
        
        $reponse = $bdd->query('SELECT * FROM blog');
        while ($donnees = $reponse->fetch())

            {   
                ?>
                <div class="article">

                <?php
                 if( ($donnees['titre'] != '')AND ($donnees['type'] != ''))
                    {
        ?>
                <br />
                <br />
                <p>
                <strong><?php echo $donnees['type']; ?></strong>
                <br />
                <a href="commentaire.php?com=<?php echo $donnees['idarticle']; ?>"><?php echo $donnees['titre'];?>
                </a>

                <br />
                <?php
                
                if($donnees['image'] != ''){
                    ?>
                    <img src="<?php echo $donnees['image']?>"/>
                    <?php
                }
                ?>	 	
                
                <br />
                <br />
                <em><?php echo $donnees['intro']; ?></em>
                <br />
                <em>Ecrit par <?php echo $donnees['createur']; ?></em>
                </p>
        <?php
                    }

                ?>
                </div>
                <?php           
            }   

$reponse->closeCursor(); // Termine le traitement de la requête

?>
        

       
                


        <ul>
                <h2>LIEN EXTERNE</h2>
                <a href="http://www.nbastore.eu/stores/nba/fr/c/equipes/ouest/golden-state-warriors" target="_blank"><img src="./nba store.png" alt="Photo nba" title="DUNK!!!" target="_blank"/></a>
        </ul>  
        <ul>
                <a href="https://www.basketsession.com/equipe/golden-state-warriors/" target="_blank"><img src="./basketsession.png" alt="Photo nba" title="DUNK!!!" /></a>
        </ul>
    </body>
</html>



