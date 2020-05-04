<?php
	function Conectarse() {
		$host="localhost";
		$user="energas2_root"; 
		$pass="gC),e}FZnEpP";
		$database="energas2_implement";

		$link = new mysqli($host, $user, $pass, $database);
		$acentos= $link->query("SET NAMES 'utf8'");

		if($link->connect_errno > 0){
			echo "ERROR AL CONECTARSE A LA BASE DE DATOS";
		}else{
			return $link;
			
		}
	}

?>