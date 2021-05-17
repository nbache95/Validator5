<?php 
include_once("database.php");
include_once("session.php");

class Authentification
{
    private string $mail; 
    private string $password; 
    private array $session;

    public function __construct(string $mailr, string $passwordr)
    {
        $ndb = new Database();
        $this->mail = $mailr; 
        $this->password = $passwordr; 

        $sql_id = "SELECT id_users FROM users WHERE mail_users = '". $this->mail ."'" ; 
        $sql_password = "SELECT pwd FROM users WHERE mail_users = '". $this->mail ."'"; 
        
        $ndb->connexion();
        $id_user = $ndb->selectqueryauthid($sql_id);
		$pass_hash = $ndb->selectqueryauthpas($sql_password); 
        $true_password_user = $ndb->selectquery($sql_password);

        if($this_password == $true_password_user)
        {
            //header('Location: ./members/member.php?id_user=' . $id_user); 
			echo("conn reussie"); 
        }
		else
		{
			echo ("e-mail ou mot de passe incorrect"); 
		}
        $session = new Session($id_user); 
		echo("iduser = ".$id_user); 
    }
}
?>