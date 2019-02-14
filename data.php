<?php

$link = mysql_connect( 'localhost', 'name', 'password');

if (!$link) die('Erreur de connexion');

mysql_select_db( 'nbaweb' , $link );
?>