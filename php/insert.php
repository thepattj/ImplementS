<?php
include 'conex.php';
$con = Conectarse();

$opcion=$_POST['opc'];

if($opcion=="addStation"){
	//echo "esta dentro de user";
	$user = $_POST["user"];
	$contra = $_POST["pass"];

	$sql = "INSERT  FROM usuario WHERE nUsuario = '".$user."' AND contrasena = '".$contra."'";

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