<?php 
class Session
{
    private int $seid; 
	private int $semail; 
	
	/**
     * execute 'intert into' query 
     * @param string $sql sql query string to execute 
     */
	 
    public function __construct($id, $mail)
    {
        $this->seid = $id;
		$this->semail = $mail;
    }

    public function start()
    {
        session_start();
        array_push($_SESSION, ); 
        $_SESSION['id'] = $id_session;
		$_SESSION['status'] = "open";
    }
	
	public function stop()
	{
		session_destroy(); 
		$_SESSION['status'] = "close"; 
	}
}
?>