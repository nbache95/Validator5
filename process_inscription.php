<?php 
include_once("./class/register.php"); 
include_once("./class/database.php");
$name = $_GET["nom"];
$surname = $_GET["prenom"];
$mail = $_GET["email"];
$soc = $_GET["societe"];
$pass1 = $_GET["mdp"];
$pass2 = $_GET["mdpCheck"];

//echo "---".$pass1; 

$reg = new Register($name, $surname, $mail, $soc, $pass1, $pass2); 
//echo $reg; 

$reg->add_user(); 
?>