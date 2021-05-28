<?php 
// début phpMailer
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

// require 'path/to/PHPMailer/src/Exception.php';
// require 'path/to/PHPMailer/src/PHPMailer.php';
// require 'path/to/PHPMailer/src/SMTP.php';
// include_once("./class/register.class.php"); 
// include_once("./class/database.class.php");


// if (!$mail->send()) {
//     echo $mail->ErrorInfo;
// } else{
//     echo 'Message bien envoyé';
// }




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