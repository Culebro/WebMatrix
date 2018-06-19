<?php

class Database 
{
    protected $conexionIbase;

    public function conexionFirebird()
	{
		$host = "172.16.0.70:C:\\Prediction\\BDs\\Prediction.fdb";
		$user="SYSDBA";
		$pass="masterkey";
		$this->conexionIbase = @ibase_pconnect($host,$user,$pass) or die("Error al conectarse a la base de datos: ".ibase_errmsg());
		return $this->conexionIbase;
	}

}
