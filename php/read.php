<?php
include 'conex.php';
$con = Conectarse();

$opcion=$_POST['opc'];

if($opcion=="user"){
	//echo "esta dentro de user";
	$user = $_POST["user"];
	$contra = $_POST["pass"];

	$sql = "SELECT tipo FROM usuario WHERE nUsuario = '".$user."' AND contrasena = '".$contra."'";

			//echo $sql;
			$resultado =mysqli_query($con, $sql);
			if($resultado->num_rows > 0){
				//echo "entro a IF de resultado";
				while($fila=$resultado->fetch_assoc()){
					//$salida = $fila['PrecioIgu'];
					echo $fila['tipo'];
				}
			}
}

?>