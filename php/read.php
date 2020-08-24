<?php
include 'conex.php';
$con = Conectarse();

$opcion=$_POST['opc'];
/*ENTRA DESDE LA PAGINA DE LOGIN*/
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


		$sql3 = "SELECT NoEst as no, razonSocial as RS FROM cesh WHERE idCESH = '".$idSta."' AND estatus = 'ACTIVADO'";
		$resu =mysqli_query($con, $sql3);
		if($resu->num_rows > 0){
			//echo "entro a IF de resultado";
			while($fi=$resu->fetch_assoc()){
				//$salida = $fila['PrecioIgu'];
				$NES = $fi['no'];
				$rs = $fi['RS'];
			}
			echo $tipo.",".$idU.",".$NES.",".$idSta.",".$rs;
		}else{ echo "Hablar con un Asesor de Energas.";}

		
	}else{ echo $tipo; }
}
/*PARA SELECCIONAR LA INFORMACION QUE SE VA A ACTUALIZAR DESDE USUARIO SASISOPA*/
if($opcion=="sel"){
	//echo "esta dentro de user";
	$cre = $_POST["i"];

	$sql = "SELECT * FROM cesh WHERE idCESH = '".$cre."'";
	//echo $sql;
	$resultado =mysqli_query($con, $sql);
	if($resultado->num_rows > 0){
		//echo "entro a IF de resultado";
		while($fila=$resultado->fetch_assoc()){
			//$salida = $fila['PrecioIgu'];
			$cre = $fila['idCESH'];
			$no = $fila['NoEst'];
			$rs = $fila['razonSocial'];
			$fr = $fila['franquicia'];
			$dirF = $fila['direccionFiscal'];
			$rfc = $fila['rfc'];
			$ub = $fila['ubicacion'];
			$te = $fila['telefono'];
			$em = $fila['correo'];
			$nrl = $fila['rl'];
			$rfcrl = $fila['rfcRl'];
			$curprl = $fila['curpRl'];
			$idS = $fila['idEstado'];
		}				
	echo $cre."*".$no."*".$rs."*".$fr."*".$dirF."*".$rfc."*".$ub."*".$te."*".$em."*".$nrl."*".$rfcrl."*".$curprl."*".$idS;
	}else{
		echo "Error:".mysqli_error($con);
	}
}
/*PARA CARGAR LOS PUNTOS DE LA PAGINA DE INICIO*/
if($opcion == "inicioPt"){
	$id = $_POST['cre'];

	//PUNTO 1
	$sql = "SELECT idCESH FROM politica WHERE idCESH = '".$id."' GROUP BY idCESH";
	//PUNTO 2
	$sql1 = "SELECT idCESH FROM ar WHERE idCESH = '".$id."' GROUP BY idCESH";
	//PUNTO 3
	$sql2 = "SELECT idCESH FROM documento WHERE idCESH = '".$id."' GROUP BY idCESH";
	//PUNTO 4
	$sql3 = "SELECT idCESH FROM objetivo WHERE idCESH = '".$id."' GROUP BY idCESH";
	//PUNTO 5
	$sql4 = "SELECT idCESH FROM organigrama WHERE idCESH = '".$id."' GROUP BY idCESH";
	//PUNTO 6
	$sql5 = "SELECT idCESH FROM curso WHERE idCESH = '".$id."' GROUP BY idCESH";
	//PUNTO 7
	$sql6 = "SELECT idCESH FROM sugque WHERE idCESH = '".$id."' GROUP BY idCESH";
	//PUNTO 8
	$sql7 = "SELECT idCESH FROM control WHERE idCESH = '".$id."' GROUP BY idCESH";
	//PUNTO 9
	$sql8 = "SELECT idCESH FROM rbpo WHERE idCESH = '".$id."' GROUP BY idCESH";
	$sql08 = "SELECT idCESH FROM controlrbpo WHERE idCESH = '".$id."' GROUP BY idCESH";
	//PUNTO 10
	$sql9 = "SELECT idCESH FROM dzbitacora WHERE idCESH = '".$id."' GROUP BY idCESH";
	$sql10 = "SELECT idCESH FROM dzcambiop WHERE idCESH = '".$id."' GROUP BY idCESH";
	$sql11 = "SELECT idCESH FROM dzcambiot WHERE idCESH = '".$id."' GROUP BY idCESH";
	$sql12 = "SELECT idCESH FROM dzordentr WHERE idCESH = '".$id."' GROUP BY idCESH";
	//PUNTO 11
	$sql13 = "SELECT idCESH FROM bitacoras WHERE idCESH = '".$id."' GROUP BY idCESH";
	//PUNTO 12
	$sql14 = "SELECT idCESH FROM dcproveedor WHERE idCESH = '".$id."' GROUP BY idCESH";
	$sql15 = "SELECT idCESH FROM dctraex WHERE idCESH = '".$id."' GROUP BY idCESH";
	//PUNTO 13
	$sql16 = "SELECT idCESH FROM pre WHERE idCESH = '".$id."' GROUP BY idCESH";
	//PUNTO 14
	$sql17 = "SELECT idCESH FROM monverif WHERE idCESH = '".$id."' GROUP BY idCESH";
	//PUNTO 15
	$sql18 = "SELECT idCESH FROM reportea WHERE idCESH = '".$id."' GROUP BY idCESH";
	//PUNTO 16
	$sql19 ="SELECT idCESH FROM incidentes WHERE idCESH = '".$id."' GROUP BY idCESH";

	$resultado = mysqli_query($con, $sql);
	$resultado1 = mysqli_query($con, $sql1);
	$resultado2 = mysqli_query($con, $sql2);
	$resultado3 = mysqli_query($con, $sql3);
	$resultado4 = mysqli_query($con, $sql4);
	$resultado5 = mysqli_query($con, $sql5);
	$resultado6 = mysqli_query($con, $sql6);
	$resultado7 = mysqli_query($con, $sql7);
	$resultado8 = mysqli_query($con, $sql8);
	$resultado9 = mysqli_query($con, $sql08);
	$resultado10 = mysqli_query($con, $sql9);
	$resultado010 = mysqli_query($con, $sql10);
	$resultado11 = mysqli_query($con, $sql11);
	$resultado011 = mysqli_query($con, $sql12);
	$resultado12 = mysqli_query($con, $sql13);
	$resultado012 = mysqli_query($con, $sql14);
	$resultado13 = mysqli_query($con, $sql15);
	$resultado014 = mysqli_query($con, $sql16);
	$resultado15 = mysqli_query($con, $sql17);
	$resultado015 = mysqli_query($con, $sql18);
	$resultado16 = mysqli_query($con, $sql19);
	//PUNTO 1
	if($resultado->num_rows > 0){
		//echo "200";
		$fila1 = $resultado->fetch_assoc();
		$datos1 = implode("", $fila1);
	}else{ $datos1 = ""; }
	//PUNTO 2
	if($resultado1->num_rows > 0){
		//echo "200";
		$fila2 = $resultado1->fetch_assoc();
		$datos2 = implode("", $fila2);
	}else{ $datos2 = ""; }
	//PUNTO 3
	if($resultado2->num_rows > 0){
		//echo "200";
		$fila3 = $resultado2->fetch_assoc();
		$datos3 = implode("", $fila3);
	}else{ $datos3 = ""; }
	//PUNTO 4
	if($resultado3->num_rows > 0){
		//echo "200";
		$fila4 = $resultado3->fetch_assoc();
		$datos4 = implode("", $fila4);
	}else{ $datos4 = ""; }
	//PUNTO 5
	if($resultado4->num_rows > 0){
		//echo "200";
		$fila5 = $resultado4->fetch_assoc();
		$datos5 = implode("", $fila5);
	}else{ $datos5 = ""; }
	//PUNTO 6
	if($resultado5->num_rows > 0){
		//echo "200";
		$fila6 = $resultado5->fetch_assoc();
		$datos6 = implode("", $fila6);
	}else{ $datos6 = ""; }
	//PUNTO 7
	if($resultado6->num_rows > 0){
		//echo "200";
		$fila7 = $resultado6->fetch_assoc();
		$datos7 = implode("", $fila7);
	}else{ $datos7 = ""; }
	//PUNTO 8
	if($resultado7->num_rows > 0){
		//echo "200";
		$fila8 = $resultado7->fetch_assoc();
		$datos8 = implode("", $fila8);
	}else{ $datos8 = ""; }
	//PUNTO 9
	if($resultado8->num_rows > 0){
		//echo "200";
		$fila9 = $resultado8->fetch_assoc();
		$datos9 = implode("", $fila9);
	}else{ $datos9 = ""; }
	if($resultado9->num_rows > 0){
		//echo "200";
		$fila91 = $resultado9->fetch_assoc();
		$datos91 = implode("", $fila91);
	}else{ $datos91 = ""; }
	//PUNTO 10
	if($resultado10->num_rows > 0){
		//echo "200";
		$fila10 = $resultado10->fetch_assoc();
		$datos10 = implode("", $fila10);
	}else{ $datos10 = ""; }
	if($resultado010->num_rows > 0){
		//echo "200";
		$fila101 = $resultado010->fetch_assoc();
		$datos101 = implode("", $fila101);
	}else{ $datos101 = ""; }
	if($resultado11->num_rows > 0){
		//echo "200";
		$fila102 = $resultado11->fetch_assoc();
		$datos102 = implode("", $fila102);
	}else{ $datos102 = ""; }
	if($resultado011->num_rows > 0){
		//echo "200";
		$fila103 = $resultado011->fetch_assoc();
		$datos103 = implode("", $fila103);
	}else{ $datos103 = ""; }
	//PUNTO 11
	if($resultado12->num_rows > 0){
		//echo "200";
		$fila11 = $resultado12->fetch_assoc();
		$datos11 = implode("", $fila11);
	}else{ $datos11 = ""; }
	//PUNTO 12
	if($resultado012->num_rows > 0){
		//echo "200";
		$fila12 = $resultado012->fetch_assoc();
		$datos12 = implode("", $fila12);
	}else{ $datos12 = ""; }
	if($resultado13->num_rows > 0){
		//echo "200";
		$fila121 = $resultado13->fetch_assoc();
		$datos121 = implode("", $fila121);
	}else{ $datos121 = ""; }
	//PUNTO 13
	if($resultado014->num_rows > 0){
		//echo "200";
		$fila13 = $resultado014->fetch_assoc();
		$datos13 = implode("", $fila13);
	}else{ $datos13 = ""; }
	//PUNTO 14
	if($resultado15->num_rows > 0){
		//echo "200";
		$fila14 = $resultado15->fetch_assoc();
		$datos14 = implode("", $fila14);
	}else{ $datos14 = ""; }
	//PUNTO 15
	if($resultado015->num_rows > 0){
		//echo "200";
		$fila15 = $resultado015->fetch_assoc();
		$datos15 = implode("", $fila15);
	}else{ $datos15 = ""; }
	//PUNTO 16
	if($resultado16->num_rows > 0){
		//echo "200";
		$fila16 = $resultado16->fetch_assoc();
		$datos16 = implode("", $fila16);
	}else{ $datos16 = ""; }

	echo $datos1.",".$datos2.",".$datos3.",".$datos4.",".$datos5.",".$datos6.",".$datos7.",".$datos8.",".$datos9.",".$datos91.",".$datos10.",".$datos101.",".$datos102.",".$datos103.",".$datos11.",".$datos12.",".$datos121.",".$datos13.",".$datos14.",".$datos15.",".$datos16;
}

if ($opcion == "fecha") {
	$id = $_POST['pl'];
	$sqlf = "SELECT fechaImp as imple FROM sasisopa WHERE idCESH = '".$id."'";
	$result = mysqli_query($con,$sqlf);
	if($result->num_rows > 0){
		while ($fila = $result->fetch_assoc()) {
			$divpol = $fila['imple'];
		}
	}
	//son 20 dias depues de la fecha, con 7 dias de accion
	$fecha2 = date("Y-m-d", strtotime($divpol."+ 20 days"));
	$fecha3 = date("Y-m-d", strtotime($fecha2."+ 7 days"));
	
	/*$divAR = son 20 dias despues de la fecha de POL o al finalizar sus 7 dias de pol
	$meta4 = son las fechas que juan coloco
	$cap6 = son las fechas de capacitación que se tienen con Energas
	$siete = no lo se!
	$div8 = capacitación energas de la lista maestra, 7 dias despues de su AREA
	$cal9 = no recuerdo
	$cal12 = responsabilidades y/o actividades que se deben realizar por los contratistas aunque no se tenga certeza que lo haga un contratistas
	$simulacros13
	$cal14 = puras inspecciones*/
	//$fechapol = [$divpol, $fecha2, $fecha3];
	echo $divpol.",Politica,".$fecha2.",".$fecha3;
	//echo "esta es la fecha: ".$divpol." ESTA ES LA FECHA 2: ".$fecha2;
}

/*RFCSTA0522 PL0000*/
?>