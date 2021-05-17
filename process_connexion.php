<?php
include_once("./class/authentification.php"); 
include_once("./class/database.php"); 

$login = $_GET["mail"];
$passwd = $_GET["mdp"];

$auth = new Authentification($login, $passwd); 

echo ($id_ses);
//$sess = new Session($id_ses, $login);
//$auth = new Authentification($login, $passwd);
?>