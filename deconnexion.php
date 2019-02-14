<?php
header('Location: ./index.php'); 
$_SESSION['id']= $row['id'];
$_SESSION['LoggedIn']=true;
?>
