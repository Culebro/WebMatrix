<?php
require_once $_SERVER['DOCUMENT_ROOR']."/Matrix/WebMatrix/Database.php";

class Sesion
{
    public function __construct( $user, $pass){
        $usuarioRegistrado =  isActiveUser($user, $pass);
        if ( $usuarioRegistrado ) throw new Exception("Error  403" );
         {
            session_start();
            $_SESSION['usuario'] = $usuarioRegistrado['USU_PILOTOUSER'] ;
            $_SESSION['id'] = $usuarioRegistrado['USU_STATUS'];
        } 
    }

    protected function isActiveUser( $user, $pass)
    {
        $dataBase = new Database;
        $queryuser =  "SELECT * FROM  CFG_USUARIOS WHERE USU_PILOTOUSER = '$user' AND USU_STATUS ='$pass' ";
        $exeQueryUser = ibase_query($dataBase->conexionFirebird(), $queryuser);

        $userInfo = ibase_fetch_object( $exeQueryUser );
        return $userInfo;
    }
}
