<?php
 	include 'conex.php';
	$con = Conectarse();

	$opcion=$_POST['opc'];

	if($opcion=="pt8"){
		//echo "funciona el boton";
		$id = $_POST['cre'];
		$sql = "INSERT INTO control (estatus,idCESH) VALUES ('COR','".$id."')";
	
		if(mysqli_query($con,$sql)){
			echo "Carga Correcta";
		}else{
			echo "Error:".mysqli_error($con);
		}
	}
?>