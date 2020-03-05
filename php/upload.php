<?php
include 'conex.php';
$con = Conectarse();

$nombre_temporal = $_FILES['archivo']['tmp_name'];
$nombre = $_FILES['archivo']['name'];
move_uploaded_file($nombre_temporal, 'archivos/'.$nombre);

/*$opcion=$_POST['opc'];

if($opcion=="user"){
	
}*/
/*RFCSTA0522 PL0000*/
?>