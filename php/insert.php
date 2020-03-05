<?php
include 'conex.php';
$con = Conectarse();

$opcion=$_POST['opc'];

if($opcion=="addSt"){
	$nost = $_POST['idCESH'];
	$cre = $_POST['PL'];
	$RS = $_POST['razonSocial'];
	$fra = $_POST['franquicia'];
	$dfis = $_POST['direccionFiscal'];
	$rfcst = $_POST['rfc'];
	$ust = $_POST['ubicacion'];
	$tst = $_POST['telefono'];
	$cst = $_POST['correo'];
	$rl = $_POST['rl'];
	$rfcrl = $_POST['rfcRl'];
	$curprl = $_POST['curpRl'];
	$estst = $_POST['idEstado'];
	/*
	
	
	$estst = $_POST['idEstado'];*/


	$sql = "INSERT INTO cesh (idCESH,PL,razonSocial,franquicia,direccionFiscal,rfc,ubicacion,telefono,correo,rl,rfcRl,curpRl,idEstado) VALUES ('".$nost."','".$cre."','".$RS."','".$fra."','".$dfis."','".$rfcst."','".$ust."','".$tst."','".$cst."','".$rl."','".$rfcrl."','".$curprl."',".$estst.")";

	if(mysqli_query($con,$sql)){
		echo "1";
	}else{
		echo "Error:".mysqli_error($con);
	}

	/*echo $sql;*/
}if($opcion == "usuario"){
	$user = $_POST['u'];
	$passw = $_POST['pw'];
	$noSta = $_POST['idC'];

	$sqluser = "INSERT INTO usuario (nUsuario, contrasena, tipo) VALUES ('".$user."','".$passw."','estacion')";
	if(mysqli_query($con, $sqluser)){
		$succs = 1;
	}else{
		$succs = "Error: ".mysqli_error($con);
	}

	if($succs == 1){
		$sqlbuser = "SELECT idUsuario FROM usuario WHERE nUsuario = '".$user."' AND contrasena = '".$passw."'";
		$resultado =mysqli_query($con, $sqlbuser);
		if($resultado->num_rows > 0){
			//echo "entro a IF de resultado";
			while($fila=$resultado->fetch_assoc()){
				//$salida = $fila['PrecioIgu'];
				$idU = $fila['idUsuario'];
			}				
		}

		$sqlcompleto = "INSERT INTO completocesh (idCESH, idUsuario) VALUES ('".$noSta."',".$idU.")";
		if(mysqli_query($con, $sqlcompleto)){
			echo "Inserción Completa.";
		}else{
			echo "Error: ".mysqli_error($con);
		}
	}else{ echo $succs;}
}

?>
