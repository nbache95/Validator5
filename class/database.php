<?php 
class Database 
{
	private $datab ; 
    private $login; 
    private $pass;
    private $conn; 
	private $result; 
    
    public function __construct($host, $datab, $login, $pass)
    {
		$this->host = $host; 
		$this->datab = $datab; 
        $this->login = $login; 
        $this->pass = $pass; 
        $this->conn ; 
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
            'mysql:host='.$this->host.'; dbname='.$this->datab.';charset=utf8mb4',
             $this->login, 
            $this->pass
            );
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); 
            $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ); 
            $this->conn = $db;
			echo "connexion reussie" ; 
        }
        catch (PDOException $e)
        {
            $msg = 'ERREUR PDO dans ' . $e->getFile() . 'L' . $e->getLine() . ' : ' . $e->getMessage(); 
            die($msg); 
        }
    }

    /**
     * execute 'intert into' query 
     * @param string $sql sql query string to execute 
     */
    public function insertquery($sql)
    {
        if (str_contains($sql, "INSERT")){
            $stmt = $this->conn->prepare($sql);
        }
    }

    /**
     * execute 'select from' query 
     * @param string $sql sql query string to execute 
     */
	public function selectquery($sql)
    {
        if(str_contains($sql, "SELECT"))
        {
            $elts = split(" ", $sql); 
            $elt = $elts[1]; 
            $stmt = $this->conn->query($sql);
            foreach ($stmt as $row)
            {
                $ret = $row[$elt] . "t"; 
            }
        }
        return $ret; 
    }
    /**
     * execute 'update' query
     * @param string $sql sql query string to execute 
     */
    public function updatequery($sql)
    {
        if (str_contains($sql, "UPDATE")){
            $stmt = $this->conn->prepare($sql);
        }
    } 
}
?>