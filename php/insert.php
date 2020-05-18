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


	$sql = "INSERT INTO cesh (idCESH,NoEst,razonSocial,franquicia,direccionFiscal,rfc,ubicacion,telefono,correo,rl,rfcRl,curpRl,estatus,idEstado) VALUES ('".$cre."','".$nost."','".$RS."','".$fra."','".$dfis."','".$rfcst."','".$ust."','".$tst."','".$cst."','".$rl."','".$rfcrl."','".$curprl."','ACTIVADO',".$estst.")";

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

		$sqlcompleto = "INSERT INTO completocesh (idCESH, idUsuario) VALUES ('".$cre."',".$idU.")";
		if(mysqli_query($con, $sqlcompleto)){
			echo "Inserción Completa.";
		}else{
			echo "Error: ".mysqli_error($con);
		}
	}else{ echo $succs;}
}if($opcion == "add3pr"){
	$uno = $_POST['unoprofeco'];
	$dos = $_POST['dosprofeco'];
	$cre = $_POST['cre'];

	$sqlcompleto = "INSERT INTO documento (tipo, num, idCESH, status) VALUES ('PROFECO',1,'".$cre."',".$uno."), ('PROFECO',2,'".$cre."',".$dos.")";
	if(mysqli_query($con, $sqlcompleto)){
		echo "Carga Complete.";
	}else{
		echo "Error: ".mysqli_error($con);
	}
	//echo $sqlcompleto;
}if($opcion == "add3pc"){
	$uno = $_POST['unopc'];
	$dos = $_POST['dospc'];
	$cre = $_POST['cre'];

	$sqlcompleto = "INSERT INTO documento (tipo, num, idCESH, status) VALUES ('Protección Civil',1,'".$cre."',".$uno."), ('Protección Civil',2,'".$cre."',".$dos.")";
	/*if(mysqli_query($con, $sqlcompleto)){
		echo "Carga Complete.";
	}else{
		echo "Error: ".mysqli_error($con);
	}*/
	echo $sqlcompleto;
}if($opcion == "add3a"){
	$n005 = $_POST['n005'];
	$mia = $_POST['mia'];
	$ip = $_POST['ip'];
	$lf = $_POST['lf'];
	$grp = $_POST['grp'];
	$coa = $_POST['coa'];
	$cre = $_POST['cre'];

	$sqlcompleto = "INSERT INTO documento (tipo, num, idCESH, status) VALUES ('ASEA',1,'".$cre."',".$n005."), ('ASEA',2,'".$cre."',".$mia."), ('ASEA',3,'".$cre."',".$ip."), ('ASEA',4,'".$cre."',".$lf."), ('ASEA',5,'".$cre."',".$grp."), ('ASEA',6,'".$cre."',".$coa.")";
	if(mysqli_query($con, $sqlcompleto)){
		echo "Carga Complete.";
	}else{
		echo "Error: ".mysqli_error($con);
	}
	//echo $sqlcompleto;
}if($opcion == "add3c"){
	$rdv = $_POST['rdv'];
	$rdp = $_POST['rdp'];
	$sta = $_POST['sta'];
	$cpet = $_POST['cpet'];
	$dcpet = $_POST['dcpet'];
	$panual = $_POST['panual'];
	$pseg = $_POST['pseg'];
	$repq = $_POST['repq'];
	$proc = $_POST['proc'];
	$reme = $_POST['reme'];
	$anuncio = $_POST['anuncio'];
	$sup = $_POST['sup'];
	$cre = $_POST['cre'];

	$sqlcompleto = "INSERT INTO documento (tipo, num, idCESH, status) VALUES ('CRE',1,'".$cre."',".$rdv."), ('CRE',2,'".$cre."',".$rdp."), ('CRE',3,'".$cre."',".$sta."), ('CRE',4,'".$cre."',".$cpet."), ('CRE',5,'".$cre."',".$dcpet."), ('CRE',6,'".$cre."',".$sup."), ('CRE',7,'".$cre."',".$panual."), ('CRE',8,'".$cre."',".$pseg."), ('CRE',9,'".$cre."',".$repq."), ('CRE',10,'".$cre."',".$proc."), ('CRE',11,'".$cre."',".$reme."), ('CRE',12,'".$cre."',".$anuncio.")";
	if(mysqli_query($con, $sqlcompleto)){
		echo "Carga Complete.";
	}else{
		echo "Error: ".mysqli_error($con);
	}
	//echo $sqlcompleto;	
}if($opcion == "add3s"){
	$cump001s = $_POST['unos'];
	$cump002s = $_POST['doss'];
	$cump009s = $_POST['tress'];
	$cump010s = $_POST['cuatros'];
	$cump011s = $_POST['cincos'];
	$cump017s = $_POST['seiss'];
	$cump018s = $_POST['sietes'];
	$cump019s = $_POST['ochos'];
	$cump022s = $_POST['nueves'];
	$cump024s = $_POST['diezs'];
	$cump025s = $_POST['onces'];
	$cump026s = $_POST['doces'];
	$cump027s = $_POST['treces'];
	$cump029s = $_POST['cators'];
	$cump033s = $_POST['quins'];
	$cre = $_POST['cre'];

	$sqlcompleto = "INSERT INTO documento (tipo, num, idCESH, status) VALUES ('STPS',1,'".$cre."',".$cump001s."), ('STPS',2,'".$cre."',".$cump002s."), ('STPS',3,'".$cre."',".$cump009s."), ('STPS',4,'".$cre."',".$cump010s."), ('STPS',5,'".$cre."',".$cump011s."), ('STPS',6,'".$cre."',".$cump017s."), ('STPS',7,'".$cre."',".$cump018s."), ('STPS',8,'".$cre."',".$cump019s."), ('STPS',9,'".$cre."',".$cump022s."), ('STPS',10,'".$cre."',".$cump024s."), ('STPS',11,'".$cre."',".$cump025s."), ('STPS',12,'".$cre."',".$cump026s."), ('STPS',13,'".$cre."',".$cump027s."), ('STPS',14,'".$cre."',".$cump029s."), ('STPS',15,'".$cre."',".$cump033s.")";
	if(mysqli_query($con, $sqlcompleto)){
		echo "Carga Complete.";
	}else{
		echo "Error: ".mysqli_error($con);
	}
	//echo $sqlcompleto;	
}if($opcion == "add3d"){
	$act = $_POST['acta'];
	$pNot = $_POST['poder'];
	$aShcp = $_POST['alta'];
	$rfcEst = $_POST['rfc'];
	$pCre = $_POST['pl'];
	$licf = $_POST['lfm'];
	$dicS = $_POST['ds'];
	$imss = $_POST['timss'];
	$Plano = $_POST['pA'];
	$siem = $_POST['aS'];
	$elect = $_POST['de'];
	$tierra = $_POST['dtf'];
	$caldis = $_POST['cld'];
	$herme = $_POST['phm'];
	$hermeT = $_POST['phmt'];
	$tanque = $_POST['tqA'];
	$fdis = $_POST['dis'];
	$inv = $_POST['cIn'];
	$cre = $_POST['cre'];

	$sqlcompleto = "INSERT INTO documento (tipo, num, idCESH, status) VALUES ('Documentación',1,'".$cre."',".$act."), ('Documentación',2,'".$cre."',".$pNot."), ('Documentación',3,'".$cre."',".$aShcp."), ('Documentación',4,'".$cre."',".$rfcEst."), ('Documentación',5,'".$cre."',".$pCre."), ('Documentación',6,'".$cre."',".$licf."), ('Documentación',7,'".$cre."',".$dicS."), ('Documentación',8,'".$cre."',".$imss."), ('Documentación',9,'".$cre."',".$Plano."), ('Documentación',10,'".$cre."',".$siem."), ('Documentación',11,'".$cre."',".$elect."), ('Documentación',12,'".$cre."',".$tierra."), ('Documentación',13,'".$cre."',".$caldis."), ('Documentación',14,'".$cre."',".$herme."), ('Documentación',15,'".$cre."',".$hermeT."), ('Documentación',16,'".$cre."',".$tanque."), ('Documentación',17,'".$cre."',".$fdis."), ('Documentación',18,'".$cre."',".$inv.")";
	if(mysqli_query($con, $sqlcompleto)){
		echo "Carga Complete.";
	}else{
		echo "Error: ".mysqli_error($con);
	}
	//echo $sqlcompleto;	
}if($opcion == "add4"){
	$meta4 = $_POST['m'];
	$fecha4 = $_POST['f'];
	$nombreT4 = $_POST['n'];
	$id = $_POST['cre'];
	
	
	$sql = "INSERT INTO calendario (descripcion,fechainicio,fechaFinal,responsable,status,idCESH) VALUES ('".$meta4."','0000-00-00','".$fecha4."','".$nombreT4."','Iniciada','".$id."')";

	if(mysqli_query($con,$sql)){
		echo "Carga Correcta";
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
	
	$sql = "INSERT INTO organigrama (nombre,apellidoP,apellidoM,puesto,status,idCESH) VALUES ('".$nombrES."','".$aPES."','".$aMES."','".$puesto."','ACTIVO','".$id."')";

	if(mysqli_query($con,$sql)){
		echo "Carga Correcta";
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
		echo "Carga Correcta";
		/* $sqlselec = "SELECT idCurso as n FROM curso WHERE idCESH ='".$id."' ORDER BY idCurso DESC LIMIT 1";
		$result =mysqli_query($con, $sqlselec);
		if($result->num_rows > 0){
			while($il=$result->fetch_assoc()){
				$idCso = $il['n'];
			}
		}
		echo $idCso; */
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
		echo "Carga Correcta";
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
	if($aNueva == "FinLaboral"){
		$sql = "UPDATE organigrama SET status = 'PASIVO' WHERE idTrab = ".$trab." AND idCESH = '".$id."'";
		mysqli_query($con,$sql);
		$sql2 = "INSERT INTO dzcambiop (area,motivo,idTrab,idCESH) VALUES ('".$aNueva."','".$motivo."',".$trab.",'".$id."')";
		if(mysqli_query($con,$sql2)){
			echo "Cambio Correcto";
		}else{
			echo "Error:".mysqli_error($con);
		}
	}else{
		//echo $aNueva;
		$sql = "UPDATE organigrama SET puesto = '".$aNueva."' WHERE idTrab = ".$trab." AND idCESH = '".$id."'";
		mysqli_query($con,$sql);
		$sql2 = "INSERT INTO dzcambiop (area,motivo,idTrab,idCESH) VALUES ('".$aNueva."','".$motivo."',".$trab.",'".$id."')";
		if(mysqli_query($con,$sql2)){
			echo "Cambio Correcto";
		}else{
			echo "Error:".mysqli_error($con);
		}
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
		echo "Carga Correcta";
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
	
	/*10*/$peligros = $_POST['Pl'];
	/*11*/$precaucio = $_POST['Pr'];
	/*12*/$areaTra = $_POST['ATr'];
	/*13*/$id = $_POST['cre'];

	$upeligros = implode(",", $peligros);
	$uprecaucion = implode(",", $precaucio);
	//echo "esto sale de peligros: ".$peligros[0];
	//echo "esto lo pega: ".$upeligros;
		
	$sql = "INSERT INTO dzordentr (fecha,ubicacion,detallesT,tipo,tipoT,horariof,horario,peligro,precaucion,areaT,nombreT,idCESH) VALUES ('".$fechaOrTra."','".$ubiTrab."','".$deTrab."','".$tpTb."','".$tipo."','".$horF."','".$horI."','".$upeligros."','".$uprecaucion."','".$areaTra."','".$perCom."','".$id."')";
	
	if(mysqli_query($con,$sql)){
		echo "Carga Correcta";
	}else{
		echo "Error:".mysqli_error($con);
	}
	//echo $sql;
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
		echo "Carga Correcta";
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
		echo "Carga Correcta";
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
		echo "Carga Correcta";
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
		//echo "Carga Correcta";
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
		echo "Carga Correcta";
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
	
	$sql = "INSERT INTO monverif (solicitud,proHall,nConformidad,responP,responV,accion,responsableA,fechaA,estatus,idCESH) VALUES ('".$soli."','".$areaT."','".$confor."','".$resAp."','".$respVe."','".$accion."','".$trabres."','".$fechap."','INICIADA','".$i."')";

	if(mysqli_query($con,$sql)){
		echo "Carga Correcta";
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
		//echo "Carga Correcta";
		$sqlselect = "SELECT idAuditoria as u, alcance as alcance FROM auditoria ORDER BY idAuditoria DESC LIMIT 1";
		$resu = mysqli_query($con, $sqlselect);
		if($resu->num_rows > 0){
			while ($f = $resu -> fetch_assoc()) {
				$ult = $f['u'];
				$tult = $f['alcance'];
			}
		}
		echo $ult."-".$tult;
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
		echo "Carga Correcta";
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
		echo "Carga Correcta";
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
		echo "Carga Correcta";
	}else{
		echo "Error:".mysqli_error($con);
	}
	//echo $sql;
}

?>
