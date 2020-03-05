<?php
include 'conex.php';
$con = Conectarse();

$opcion=$_POST['opc'];

if($opcion=="user"){
	//echo "esta dentro de user";
	$user = $_POST["user"];
	$contra = $_POST["pass"];

	$sql = "SELECT tipo as t, idUsuario as id FROM usuario WHERE nUsuario = '".$user."' AND contrasena = '".$contra."'";
	//echo $sql;
	$resultado =mysqli_query($con, $sql);
	if($resultado->num_rows > 0){
		//echo "entro a IF de resultado";
		while($fila=$resultado->fetch_assoc()){
			//$salida = $fila['PrecioIgu'];
			$tipo = $fila['t'];
			$idU = $fila['id'];
		}				
	}

	if ($tipo == "estacion"){

		$sql2 = "SELECT idCESH FROM completocesh WHERE idUsuario = ".$idU;
		$resul =mysqli_query($con, $sql2);
		if($resul->num_rows > 0){
			//echo "entro a IF de resultado";
			while($fil=$resul->fetch_assoc()){
				//$salida = $fila['PrecioIgu'];
				$idSta = $fil['idCESH'];
			}				
		}


		$sql3 = "SELECT PL as pl, razonSOcial as RS FROM cesh WHERE idCESH = '".$idSta."'";
		$resu =mysqli_query($con, $sql3);
		if($resu->num_rows > 0){
			//echo "entro a IF de resultado";
			while($fi=$resu->fetch_assoc()){
				//$salida = $fila['PrecioIgu'];
				$cre = $fi['pl'];
				$rs = $fi['RS'];
			}				
		}

		echo $tipo.",".$idU.",".$idSta.",".$cre.",".$rs;
	}else{ echo $tipo; }
}
/*RFCSTA0522 PL0000*/
?>