<?php
include 'conex.php';
$con = Conectarse();

$opcion=$_POST['opc'];

if($opcion=="addStation"){
	//echo "esta dentro de user";
	$user = $_POST["user"];
	$contra = $_POST["pass"];

	$sql = "INSERT INTO cesh (idCESH,franquicia,direccionFiscal,rfc,ubicacion,telefono,correo,rl,rfcRl,curpRl,idEstado) VALUES ();"
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