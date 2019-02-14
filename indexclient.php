<?php session_start();
?>
<?php 
if ($_POST["name"]=="admin"){
    if($_POST["password"]=="admin"){
        header('Location: ./indexim.php'); 
    }
    else{
    //header('Location: ./indeximlog.php');
    echo 'Wrong password'; 
    }
}
else{
    //header('Location: ./indeximlog.php');
    echo 'Wrong name'; 
}
?>