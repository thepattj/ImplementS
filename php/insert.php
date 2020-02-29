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

	/*
	
	$ust = $_POST['ubicacion'];
	$tst = $_POST['telefono'];
	$cst = $_POST['correo'];
	$rl = $_POST['rl'];
	$rfcrl = $_POST['rfcRl'];
	$curprl = $_POST['curpRl'];
	$estst = $_POST['idEstado'];*/


	$sql = "INSERT INTO cesh (idCESH,PL,razonSocial,franquicia,direccionFiscal,rfc,ubicacion,telefono,correo,rl,rfcRl,curpRl,idEstado) VALUES (".$nost.",'".$cre."','".$RS."','".$fra."','".$dfis."','".$rfcst.");";

	echo $sql;
}

?>
<!-- HAY QUE CAMBIAR EL IDCESH PORQUE VIENE COMO UN ELEMENTO INT Y NO COMO UN ELEMENTO DE TIPO VARCHAR. CAMBIARLO EN TOAD CARGAR EL CAMBIO Y VOLER HA HACER EL INSERT DE ESTADOS Y DE MUNICIPIOS, ASI MISMO HACER LOS CAMBIOS QUE SE TIENE EN ESTAS TABLAS -->
<!-- RS = razonSocial
	 PL = PL
	 idStation = idCESH
	 franq = franquicia
	 dirFis = direccionFiscal
	 rfcStation = rfc
	 ubiStation = ubicacion
	 telStation = telefono
	 correoASEA = correo
	 nameRL = rl
	 rfcRL = rfcRl
	 curpRL = curpRl
	 estadoStation = idEstado -->

	 <!-- ."','".$ust."','".$tst."','".$cst."','".$rl."','".$rfcrl."','".$curprl."',".$estst -->