<?php 
class Authentification
{
    private string $mail; 
    private string $password; 
    private array $session;

    public function __construct(string $mailr, string $passwordr)
    {
        $ndb = new Database("localhost", "projet5", "root", "");
        $this->mail = $mailr; 
        $this->password = $passwordr; 

        $sql_id = "SELECT id_users FROM users WHERE mail_users =". $this->mail ; 
        $sql_password = "SELECT pwd_users FROM users WHERE mail_users =". $this->mail ; 
        
        $ndb->connexion(); 
        $id_user = $ndb->selectquery($sql_id);
        $true_password_user = $ndb->selectquery($sql_password);

        if($this_password == $true_password_user)
        {
            header('Location: ./members/member.php?id_user=' . $id_user); 
        }
        $session = new Session($id_user); 
    }
}
?>