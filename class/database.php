<?php 
class Database 
{
	private $host; 
	private $datab ; 
    private $login; 
    private $pass;
    public $conn; 
    
    public function __construct()
    {
		$this->host = "mysql-validator5.alwaysdata.net"; 
		$this->datab = "validator5_db"; 
        $this->login = "232541"; 
        $this->pass = "mdpProjet5*"; 
    }
    

    /**
     * Make connection to db
     */
    public function connexion()
    {
        try
        {
            $db = new PDO
            (
            'mysql:host='.$this->host.'; dbname='.$this->datab.';charset=utf8mb4',$this->login, $this->pass
            );
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); 
            $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ); 
            $this->conn = $db;
			echo "connexion reussie" ;
        }
        catch (PDOException $e)
        {
            $msg = 'ERREUR PDO dans ' . $e->getFile() . 'L' . $e->getLine() . ' : ' . $e->getMessage(); 
            echo($msg);
			die($msg);			
        }
    }

    /**
     * execute 'intert into' query 
     * @param string $sql sql query string to execute 
     */
    public function insertquery($sql)
    {
		try
        {
			$this->conn->exec($sql);
		}
		catch(PDOException $e)
		{
			echo "Erreur : " . $e->getMessage();
		}
    }
//ligne 57
    /**
     * execute 'select from' query 
     * @param string $sql sql query string to execute 
     */
	public function selectquery($sql)
    {
            $elts = explode(" ", $sql);
            $elt = $elts[1]; 
			//echo $elt; 
            $stmt = $this->conn->query($sql);
            foreach ($stmt as $row)
            {
                $ret = $row[$elt]; 
				//echo "ret = " . $ret; 
            }
        return $ret; 
    }
	
	/**
     * execute 'select from' query for gettng id_user to make authentification
     * @param string $sql sql query string to execute 
     */
	public function selectqueryauthid($sql)
    {
		try
        {
			$stmt = $this->conn->query($sql);
            foreach ($stmt as $row)
            {
                $ret = $row['id_users']; 
				//echo "ret = " . $ret; 
            }
			return $ret;
		}
		catch(PDOException $e)
		{
			echo "Erreur : " . $e->getMessage();
		}
    }
	
	/**
     * execute 'select from' query for getting hashed password to make authentification
     * @param string $sql sql query string to execute 
     */
	public function selectqueryauthpas($sql)
    {
		try
        {
			$stmt = $this->conn->query($sql);
            foreach ($stmt as $row)
            {
                $ret = $row['pwd']; 
				//echo "ret = " . $ret; 
            }
			return $ret; 
		}
		catch(PDOException $e)
		{
			echo "Erreur : " . $e->getMessage();
		}
    }
	
    /**
     * execute 'update' query
     * @param string $sql sql query string to execute 
     */
    public function updatequery($sql)
    {
        if (str_contains($sql, "UPDATE"))
		{
            $stmt = $this->conn->prepare($sql);
        }
    } 
}
?>