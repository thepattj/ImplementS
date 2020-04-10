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
}if($opcion == "add4"){
	$meta4 = $_POST['m'];
	$fecha4 = $_POST['f'];
	$nombreT4 = $_POST['n'];
	$id = $_POST['cre'];
	
	
	$sql = "INSERT INTO calendario (descripcion,fechainicio,fechaFinal,responsable,status,idCESH) VALUES ('".$meta4."','0000-00-00','".$fecha4."','".$nombreT4."','Iniciada','".$id."')";

	if(mysqli_query($con,$sql)){
		echo "Insert Correct";
	}else{
		echo "Error:".mysqli_error($con);
	}
	//echo $sql;
}if($opcion == "add5"){
	//echo "ENTRO";
	$nombrES = $_POST['n'];
	$aPES = $_POST['aPN'];
	$aMES = $_POST['aMN'];
	$puesto = $_POST['p'];
	$id = $_POST['cre'];
	
	$sql = "INSERT INTO organigrama (nombre,apellidoP,apellidoM,puesto,idCESH) VALUES ('".$nombrES."','".$aPES."','".$aMES."','".$puesto."','".$id."')";

	if(mysqli_query($con,$sql)){
		echo "Insert Correct";
	}else{
		echo "Error:".mysqli_error($con);
	}
	//echo $sql;
}if($opcion == "add6"){
	//echo "ENTRO";
	$nombreCur = $_POST['Nom'];
	$instru = $_POST['ins'];
	$feCur = $_POST['fec'];
	$certi = $_POST['cer'];	
	$id = $_POST['i'];
		
	$sql = "INSERT INTO curso (nombreCurso,nombreIns,fecha,certificado,idCESH) VALUES ('".$nombreCur."','".$instru."','".$feCur."','".$certi."','".$id."')";
	
	if(mysqli_query($con,$sql)){
		//echo "Insert Correct";
		$sqlselec = "SELECT idCurso as n FROM curso WHERE idCESH ='".$id."' ORDER BY idCurso DESC LIMIT 1";
		$result =mysqli_query($con, $sqlselec);
		if($result->num_rows > 0){
			while($il=$result->fetch_assoc()){
				$idCso = $il['n'];
			}
		}
		echo $idCso;
	}else{
		echo "Error:".mysqli_error($con);
	}
	//echo $sql;
}if($opcion == "addct6"){
	$idt = $_POST['tid'];
	$idCs = $_POST['cid'];
	$id = $_POST['ic'];

	$sql = "INSERT INTO trabcurso (idTrab,idCurso,idCESH) VALUES ('".$idt."','".$idCs."','".$id."')";
	if(mysqli_query($con,$sql)){
		echo "Insert Correct";
	}else{
		echo "Error:".mysqli_error($con);
	}
	//echo $sql;
}if($opcion == "add10"){
	//echo "ENTRO";
	$aNueva = $_POST['area'];
	$trab = $_POST['n'];
	$responsa = $_POST['r'];
	$motivo = $_POST['m'];	
	$id = $_POST['cre'];
		
	$sql = "INSERT INTO dzcambiop (area,motivo,idTrab,idCESH) VALUES ('".$aNueva."','".$motivo."',".$trab.",'".$id."')";
	
	if(mysqli_query($con,$sql)){
		echo "Insert Correct";
	}else{
		echo "Error:".mysqli_error($con);
	}
	//echo $sql;
}if($opcion == "add10T"){
	//echo "ENTRO";
	$equipoCam = $_POST['ecam'];
	$ResponsableT = $_POST['rm'];
	$fechaT = $_POST['feCT'];
	$descripCT = $_POST['descrp'];	
	$id = $_POST['cre'];
		
	$sql = "INSERT INTO dzcambiot (equipo,descripcionC,fechaC,idCESH) VALUES ('".$equipoCam."','".$descripCT."','".$fechaT."','".$id."')";
	
	if(mysqli_query($con,$sql)){
		echo "Insert Correct";
	}else{
		echo "Error:".mysqli_error($con);
	}
	//echo $sql;
}if($opcion == "add10oT"){
	//echo "ENTRO";
	/*1*/$fechaOrTra = $_POST['fOT'];
	/*2*/$noPermiso = $_POST['NP'];
	/*3*/$ubiTrab = $_POST['UT'];
	/*4*/$deTrab = $_POST['DT'];
	/*5*/$perCom = $_POST['PC'];
	/*6*/$tipo = $_POST['TT'];
	/*7*/$tpTb = $_POST['TTb'];
	/*8*/$horI = $_POST['HI'];
	
	/*9*/$horF = $_POST['HF'];
	
	/*10*/$peligros = unserialize($_POST['Pl']);
	/*11*/$precaucio = unserialize($_POST['Pr']);
	/*12*/$areaTra = $_POST['ATr'];
	/*13*/$id = $_POST['cre'];
		
	$sql = "INSERT INTO dzordentr (fecha,idUbicacion,detallesT,tipo,tipoT,ocacion,horario,peligro,precaucion,areaT,idTrab,idCESH) VALUES ('".$fechaOrTra."','".$ubiTrab."','".$deTrab."','".$perCom."','".$tipo."','".$tpTb."','".$horI."','".$horF."','".$peligros."','".$precaucio."','".$areaTra."','".$id."')";
	
	/*if(mysqli_query($con,$sql)){
		echo "Insert Correct";
	}else{
		echo "Error:".mysqli_error($con);
	}*/
	echo $sql;
}if($opcion == "add9"){
	//echo "ENTRO";
	$procedi = $_POST['p'];
	$sug = $_POST['s'];
	$mesp = $_POST['m'];
	$stat = $_POST['e'];	
	$repsp = $_POST['r'];
	$id = $_POST['i'];
		
	$sql = "INSERT INTO controlrbpo (procedimiento, sugerencia,mes,estado,responsable,idCESH) VALUES ('".$procedi."','".$sug."','".$mesp."','".$stat."','".$repsp."','".$id."')";
	
	if(mysqli_query($con,$sql)){
		echo "Insert Correct";
	}else{
		echo "Error:".mysqli_error($con);
	}
	//echo $sql;
}if($opcion == "addrbpo9"){
	//echo "ENTRO";
	$areaR = $_POST['a'];
	$super = $_POST['n'];
	$trab = $_POST['t'];
	$acti = $_POST['d'];	
	$crit = $_POST['c'];
	$inAc = $_POST['ia'];
	$causas = $_POST['u'];
	$obser = $_POST['o'];
	$id = $_POST['i'];
		
	$sql = "INSERT INTO rbpo (area, nombreSupervisor,nombreTrabajador,descripcion,critica,incAcc,causa,obser,idCESH) VALUES ('".$areaR."','".$super."','".$trab."','".$acti."','".$crit."','".$inAc."','".$causas."','".$obser."','".$id."')";
	
	if(mysqli_query($con,$sql)){
		echo "Insert Correct";
	}else{
		echo "Error:".mysqli_error($con);
	}
	//echo $sql;
}if($opcion == "add12"){
	//echo "ENTRO";
	$PLid = $_POST['cre'];
	$nombreRS = $_POST['rs'];
	$servicioP = $_POST['s'];
	$meteva = $_POST['metodo'];
	
	$sql = "INSERT INTO dcproveedor (razonSocial,deServicio,evaluacion,idCESH) VALUES ('".$nombreRS."','".$servicioP."','".$meteva."','".$PLid."')";

	if(mysqli_query($con,$sql)){
		echo "Insert Correct";
	}else{
		echo "Error:".mysqli_error($con);
	}
	//echo $sql;
}if($opcion == "addt12"){
	//echo "ENTRO";
	$PLid = $_POST['cre'];
	$idRS = $_POST['nomE'];
	$trabaj = $_POST['nomb'];
	
	
	$sql = "INSERT INTO dctraex (nombre,idProvedor,idCESH) VALUES ('".$trabaj."',".$idRS.",'".$PLid."')";

	if(mysqli_query($con,$sql)){
		//echo "Insert Correct";
		$sqlselec = "SELECT idTra as T FROM dctraex ORDER BY idTra DESC LIMIT 1";
		$res = mysqli_query($con, $sqlselec);
		if ($res->num_rows > 0) {
			while ($z = $res -> fetch_assoc()){
				$Traba = $z['T'];
			}
			# code...
		}
		echo $Traba;
	}else{
		echo "Error:".mysqli_error($con);
	}
	//echo $sql;
}if($opcion == "addh12"){
	//echo "ENTRO";
	$nHrr = $_POST['nombH'];
	$sHrr = $_POST['estH'];
	$EPP = $_POST['PP'];
	$idTj = $_POST['nuT'];	
	
	$sql = "INSERT INTO dcherramienta (herramienta,estadoH,EPP,idTra) VALUES ('".$nHrr."','".$sHrr."','".$EPP."',".$idTj.")";

	if(mysqli_query($con,$sql)){
		echo "Insert Correct";
	}else{
		echo "Error:".mysqli_error($con);
	}
	//echo $sql;
}if($opcion == "add14"){
	//echo "ENTRO";
	$soli = $_POST['sol'];
	$areaT = $_POST['area'];
	$confor = $_POST['conf'];
	$resAp = $_POST['prev'];	
	$respVe = $_POST['verf'];
	$accion = $_POST['acion'];
	$trabres = $_POST['responj'];
	$fechap = $_POST['fchap'];
	$i = $_POST['cre'];
	
	$sql = "INSERT INTO monverif (solicitud,proHall,nConformidad,responP,responV,accion,responsableA,fechaA,idCESH) VALUES ('".$soli."','".$areaT."','".$confor."','".$resAp."','".$respVe."','".$accion."','".$trabres."','".$fechap."','".$i."')";

	if(mysqli_query($con,$sql)){
		echo "Insert Correct";
	}else{
		echo "Error:".mysqli_error($con);
	}
	//echo $sql;
}if($opcion == "add15"){
	//echo "ENTRO";
	$alcance = $_POST['alca'];
	$criterios = $_POST['crit'];
	$t = $_POST['tip'];
	$ob = $_POST['obje'];
	$auditor = $_POST['ali'];
	$aud1 = $_POST['au1'];
	$aud2 = $_POST['au2'];	
	
	$sql = "INSERT INTO auditoria (alcance,criterioAud,tipoA,objetivos,auditorLider,auditor1,auditor2) VALUES ('".$alcance."','".$criterios."','".$t."','".$ob."','".$auditor."','".$aud1."','".$aud2."')";

	if(mysqli_query($con,$sql)){
		//echo "Insert Correct";
		$sqlselect = "SELECT idAuditoria as u FROM auditoria ORDER BY idAuditoria DESC LIMIT 1";
		$resu = mysqli_query($con, $sqlselect);
		if($resu->num_rows > 0){
			while ($f = $resu -> fetch_assoc()) {
				$ult = $f['u'];
			}
		}
		echo $ult;
	}else{
		echo "Error:".mysqli_error($con);
	}
	//echo $sql;
}if($opcion == "addact15"){
	//echo "ENTRO";
	$proc = $_POST['procesos'];
	$aud = $_POST['auditor'];
	$id = $_POST['aud'];

	date_default_timezone_set('America/Mexico_City');
	$today = date("Y-m-d");
	$hour = date("H:i:s");
	$date = $today." ".$hour;
	//$date = $date->getTimestamp;

	$sql = "INSERT INTO actauditoria (fecha,proceso,auditor,idAuditoria) VALUES ('".$date."','".$proc."','".$aud."','".$id."')";
	if(mysqli_query($con, $sql)){
		echo "Insert Correct";
	}else{
		echo "Error:".mysqli_error($con);
	}
	
	//echo $sql;
}if($opcion == "addrep15"){
	//echo "ENTRO";
	$id = $_POST['id'];
	$pl = $_POST['cre'];
	$ela = $_POST['elaborado'];
	$hll = $_POST['hallazgo'];
	$conc = $_POST['conclusion'];
	$rec = $_POST['recomendacion'];

	date_default_timezone_set('America/Mexico_City');
	$today = date("Y-m-d");
	$hour = date("H:i:s");
	$date = $today." ".$hour;
	//$date = $date->getTimestamp;

	$sql = "INSERT INTO reportea (fechaR,elaborado,comentario,conclusion,recomendacion,idAuditoria,idCESH) VALUES ('".$date."','".$ela."','".$hll."','".$conc."','".$rec."',".$id.",'".$pl."')";
	if(mysqli_query($con, $sql)){
		echo "Insert Correct";
	}else{
		echo "Error:".mysqli_error($con);
	}
	//echo $sql;
}if($opcion == "add16"){
	$rpt = $_POST['r'];
	$cre = $_POST['cesh'];
	//select para poder realizar un update
	$sql = "INSERT INTO incidentes (resp,idCESH) VALUES ('".$rpt."','".$cre."')";

	if(mysqli_query($con,$sql)){
		echo "1";
	}else{
		echo "Error:".mysqli_error($con);
	}
	//echo $sql;
}

?>
