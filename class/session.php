<?php 
class Session
{
    private int $id_session; 


    public function __constructeur($id_sess)
    {
        $this->id_session = $id_sess;
    }

    public function start()
    {
        session_start();
        array_push($_SESSION, ); 
        $_SESSION[] = $id_session; 
    }
}
?>