<?php

 require_once $_SERVER['DOCUMENT_ROOT']."/Matrix/WebMatrix/app/lib/sesion.php";

$action = isset( $_GET['act'] ) ? $_GET['act'] : json_decode(file_get_contents('php://input'), true);;

switch ($action['act']) {
    case 'signin':
        try{
            $sesion = new Sesion($action['user'], $action['pass']);
        }catch( Exception $e){
            echo json_encode( array() );
        }
        
        break;
    case 'signout':
        # code...
        break;
    default:
        # code...
        break;
}