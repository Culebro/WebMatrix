<?php

class Database 
{
    protected $conexionIbase;

    public function conexionFirebird()
	{
	
		$this->conexionIbase = @ibase_pconnect($host,$user,$pass) or die("Error al conectarse a la base de datos: ".ibase_errmsg());
		return $this->conexionIbase;
	}

}
