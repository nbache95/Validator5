<?php 
include_once("database.php");
class Register
{
	private $name; 
	private $surname; 
	private $email; 
	private $society; 
	private $pass1; 
	private $pass2; 
	
	public function __construct($n, $s, $m, $so, $p1, $p2)
	{
		$this->name = $n;
		$this->surname = $s;
		$this->email = $m;
		$this->society = $so;
		$this->pass1 = $p1;
		$this->pass2 = $p2;
	}
	/**	
	* Insert an user table in db
	*/
	public function add_user()
	{
		$DB = new Database(); 
		$DB->connexion(); 
		if ($this->pass1 == $this->pass2) 
		{
			$pass = password_hash($pass1, PASSWORD_DEFAULT);
			$query = "INSERT INTO users (nom_users, prenom_users, pwd, mail_users, societe) VALUES ('$this->name', '$this->surname', '$this->pass', '$this->email', '$this->society')"; 
			$DB->insertquery($query);
		}
		else
		{
			echo ("Les mots de passes ne sont pas identiques"); 
		}
	}
}
?>