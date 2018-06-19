<?php
require_once $_SERVER['DOCUMENT_ROOT']."/Matrix/WebMatrix/app/models/Database.php";

class Sesion
{
    public function __construct( $user, $pass){
        $usuarioRegistrado = $this-> isActiveUser($user, $pass);
        if ( is_array( $usuarioRegistrado) ) throw new Exception("Error 403");
        
         {
            session_start();
            $_SESSION['usuario'] = $usuarioRegistrado->USU_PILOTUSER ;
            $_SESSION['id'] = $usuarioRegistrado->USU_STATUS;
             echo json_encode( array( "user"=> $usuarioRegistrado->USU_PILOTUSER ) );
        } 
    }

    public function isActiveUser( $user, $pass)
    {
        $dataBase = new Database;
        $dataBase->conexionFirebird();
        $prepareQueryUser = ibase_prepare( "SELECT * FROM  CFG_USUARIOS WHERE USU_PILOTUSER = ? AND USU_STATUS = ? ");
        $executeuser = ibase_execute( $prepareQueryUser, $user, $pass);
        
        $userInfo = ibase_fetch_object ( $executeuser );
    
        return $userInfo;
    }
}
