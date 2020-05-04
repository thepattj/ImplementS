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
	$sql = "SELECT p1.idCESH punto1 FROM CESH sta INNER JOIN politica p1 ON sta.idCESH = p1.idCESH  WHERE sta.idCESH = '".$id."' GROUP BY sta.idCESH";
	//PUNTO 2
	$sql1 = "SELECT p2.idCESH punto2 FROM CESH sta INNER JOIN ar p2 ON sta.idCESH = p2.idCESH WHERE sta.idCESH = '".$id."' GROUP BY sta.idCESH";
	//PUNTO 3
	$sql2 = "SELECT p3.idCESH punto3 FROM CESH sta INNER JOIN documento p3 ON sta.idCESH = p3.idCESH  WHERE sta.idCESH = '".$id."' GROUP BY sta.idCESH";
	//PUNTO 4
	$sql3 = "SELECT p4.idCESH punto4 FROM CESH sta INNER JOIN calendario p4 ON sta.idCESH = p4.idCESH  WHERE sta.idCESH = '".$id."' GROUP BY sta.idCESH";
	//PUNTO 5
	$sql4 = "SELECT p5.idCESH punto5 FROM CESH sta INNER JOIN organigrama p5 ON sta.idCESH = p5.idCESH WHERE sta.idCESH = '".$id."' GROUP BY sta.idCESH";
	//PUNTO 6
	$sql5 = "SELECT p6.idCESH punto6 FROM CESH sta INNER JOIN curso p6 ON sta.idCESH = p6.idCESH WHERE sta.idCESH = '".$id."' GROUP BY sta.idCESH";
	//PUNTO 7
	$sql6 = "SELECT p7.idCESH punto7 FROM CESH sta INNER JOIN sugque p7 ON sta.idCESH = p7.idCESH WHERE sta.idCESH = '".$id."' GROUP BY sta.idCESH";
	//PUNTO 8
	$sql7 = "SELECT p8.idCESH punto8 FROM CESH sta INNER JOIN control p8 ON sta.idCESH = p8.idCESH WHERE sta.idCESH = '".$id."' GROUP BY sta.idCESH";
	//PUNTO 9
	$sql8 = "SELECT p91.idCESH punto9_1 FROM CESH sta INNER JOIN rbpo p91 ON sta.idCESH = p91.idCESH WHERE sta.idCESH = '".$id."' GROUP BY sta.idCESH";
	$sql08 = "SELECT p92.idCESH punto9_2 FROM CESH sta INNER JOIN controlrbpo p92 ON sta.idCESH = p92.idCESH WHERE sta.idCESH = '".$id."' GROUP BY sta.idCESH";
	//PUNTO 10
	$sql9 = "SELECT p101.idCESH punto10_1 FROM CESH sta INNER JOIN dzbitacora p101 ON sta.idCESH = p101.idCESH WHERE sta.idCESH = '".$id."' GROUP BY sta.idCESH";
	$sql10 = "SELECT p102.idCESH punto10_2 FROM CESH sta INNER JOIN dzcambiop p102 ON sta.idCESH = p102.idCESH WHERE sta.idCESH = '".$id."' GROUP BY sta.idCESH";
	$sql11 = "SELECT p103.idCESH punto10_3 FROM CESH sta INNER JOIN dzcambiot p103 ON sta.idCESH = p103.idCESH WHERE sta.idCESH = '".$id."' GROUP BY sta.idCESH";
	$sql12 = "SELECT p104.idCESH punto10_4 FROM CESH sta INNER JOIN dzordentr p104 ON sta.idCESH = p104.idCESH WHERE sta.idCESH = '".$id."' GROUP BY sta.idCESH";
	//PUNTO 11
	$sql13 = "SELECT p11.idCESH punto11 FROM CESH sta INNER JOIN bitacoras p11 ON sta.idCESH = p11.idCESH WHERE sta.idCESH = '".$id."' GROUP BY sta.idCESH";
	//PUNTO 12
	$sql14 = "SELECT p122.idCESH punto12_2 FROM CESH sta INNER JOIN dcproveedor p122 ON sta.idCESH = p122.idCESH WHERE sta.idCESH = '".$id."' GROUP BY sta.idCESH";
	$sql15 = "SELECT p123.idCESH punto12_3 FROM CESH sta INNER JOIN dctraex p123 ON sta.idCESH = p123.idCESH WHERE sta.idCESH = '".$id."' GROUP BY sta.idCESH";
	//PUNTO 13
	$sql16 = "SELECT p13.idCESH punto13 FROM CESH sta INNER JOIN pre p13 ON sta.idCESH = p13.idCESH  WHERE sta.idCESH = '".$id."' GROUP BY sta.idCESH";
	//PUNTO 14
	$sql17 = "SELECT p14.idCESH punto14 FROM cesh sta INNER JOIN monverif p14 ON sta.idCESH = p14.idCESH  WHERE sta.idCESH = '".$id."' GROUP BY sta.idCESH";
	//PUNTO 15
	$sql18 = "SELECT p151.idCESH FROM cesh sta INNER JOIN reportea p151 ON sta.idCESH = p151.idCESH WHERE sta.idCESH = '".$id."' GROUP BY sta.idCESH";
	//PUNTO 16
	$sql19 ="SELECT p16.idCESH FROM cesh sta INNER JOIN incidentes p16 ON sta.idCESH = p16.idCESH WHERE sta.idCESH = '".$id."' GROUP BY sta.idCESH";

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


/*RFCSTA0522 PL0000*/
?>