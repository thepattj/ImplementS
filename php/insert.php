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
	$numAu = $_POST['nAut'];
	$fecAu = $_POST['fAut'];
	
	/*$estst = $_POST['idEstado'];*/


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
	$cre = $_POST['idC'];

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
			//echo "Inserción Completa. DE: ".$sqlcompleto;
			echo "Inserción Completa.";
		}else{
			echo "Error: ".mysqli_error($con);
		}
	}else{ echo $succs; }
/*}if($opcion == "insUser"){
	/*inserción de usuario
	$userG = $_POST[];
	$passG = $_POST[];
	$razonSocs = $_POST[];

	//CONTABILIZAR LAS RAZON SOCIALES

	//SE DEBE REALIZAR UN

	$sqlbus = "SELECT idCESH FROM cesh WHERE razonSocial LIKE '%".$razonSocs."%'";

	$sqladdUser = "";
	/*if(mysqli_query($con, $sqladdUser)){

	}else{

	}*/
}/*DATOS DE REQUISITOS DE PROFECO*/ if($opcion == "add3pr"){
	$uno = $_POST['unoprofeco'];
	$suno = $_POST['unoprofecos'];
	$euno = $_POST['unoprofecoe'];

	$dos = $_POST['dosprofeco'];
	$sdos = $_POST['dosprofecos'];
	$edos = $_POST['dosprofecoe'];

	$tres = $_POST['tresprofeco'];
	$stres = $_POST['tresprofecos'];
	$etres = $_POST['tresprofecoe'];

	$cuatro = $_POST['cuatroprofeco'];
	$scuatro = $_POST['cuatroprofecos'];
	$ecuatro = $_POST['cuatroprofecoe'];

	$cre = $_POST['cre'];

	$sqlcompleto = "INSERT INTO documento (tipo, num, idCESH, cumplimiento, evidencia, status) VALUES ('PROFECO',1,'".$cre."','".$uno."','".$euno."','".$suno."'), ('PROFECO',2,'".$cre."','".$dos."','".$edos."','".$sdos."'), ('PROFECO',3,'".$cre."','".$tres."','".$etres."','".$stres."'), ('PROFECO',4,'".$cre."','".$cuatro."','".$ecuatro."','".$scuatro."')";
	if(mysqli_query($con, $sqlcompleto)){
		echo "Carga Completa.";
	}else{
		echo "Error: ".mysqli_error($con);
	}
	//echo $sqlcompleto;
}/*DATOS DE REQUISITOS DE PROTECCIONCIVIL*/ if($opcion == "add3pc"){
	$uno = $_POST['unopc'];
	$unoS = $_POST['unopcs'];
	$unoE = $_POST['unopce'];
	//$unoP = $_POST['unopcp'];
	$dos = $_POST['dospc'];
	$dosS = $_POST['dospcs'];
	$dosE = $_POST['dospce'];
	//$dosP = $_POST['dospcp'];
	$cre = $_POST['cre'];

	$sqlcompleto = "INSERT INTO documento (tipo, num, idCESH, cumplimiento, evidencia, status) VALUES ('Protección Civil',1,'".$cre."','".$uno."','".$unoE."','".$unoS."'), ('Protección Civil',2,'".$cre."','".$dos."','".$dosE."','".$dosS."')";
	if(mysqli_query($con, $sqlcompleto)){
		echo "Carga Complete.";
	}else{
		echo "Error: ".mysqli_error($con);
	}
	//echo $sqlcompleto;
}/*DATOS DE REQUISITOS DE SEC DE ECONOMIA*/ if($opcion == "add3se"){
	$solo = $_POST['unose'];
	$soloS = $_POST['unoseS'];
	$soloE = $_POST['unoseE'];
	//$soloP = $_POST['unoseP'];

	$cre = $_POST['cre'];
	$sqlcompleto = "INSERT INTO documento (tipo,num,idCESH,cumplimiento,evidencia,status) VALUES ('Sec. Economia',1,'".$cre."','".$solo."','".$soloE."','".$soloS."')";
	if(mysqli_query($con, $sqlcompleto)){
		echo "Carga Completa.";
	}else{
		echo "Error: ".mysqli_error($con);
	}
	//echo $sqlcompleto;
}/*DATOS DE REQUISITOS DE ASEA*/ if($opcion == "add3a"){
	$n005 = $_POST['n005'];
	$sn005 = $_POST['sn005'];
	$en005 = $_POST['en005'];

	$mia = $_POST['mia'];
	$smia = $_POST['smia'];
	$emia = $_POST['emia'];

	$ip = $_POST['ip'];
	$sip = $_POST['sip'];
	$eip = $_POST['eip'];

	$lf = $_POST['lf'];
	$slf = $_POST['slf'];
	$elf = $_POST['elf'];

	$grp = $_POST['grp'];
	$sgrp = $_POST['sgrp'];
	$egrp = $_POST['egrp'];

	$coa = $_POST['coa'];
	$scoa = $_POST['scoa'];
	$ecoa = $_POST['ecoa'];

	$poliza = $_POST['poliza'];
	$spol = $_POST['spoliza'];
	$epol = $_POST['epoliza'];

	$cre = $_POST['cre'];

	$sqlcompleto = "INSERT INTO documento (tipo, num, idCESH, cumplimiento, evidencia, status) VALUES ('ASEA',1,'".$cre."','".$n005."','".$en005."','".$sn005."'), ('ASEA',2,'".$cre."','".$mia."','".$emia."','".$smia."'), ('ASEA',3,'".$cre."','".$ip."','".$eip."','".$sip."'), ('ASEA',4,'".$cre."','".$lf."','".$elf."','".$slf."'), ('ASEA',5,'".$cre."','".$grp."','".$egrp."','".$sgrp."'), ('ASEA',6,'".$cre."','".$coa."','".$ecoa."','".$scoa."'), ('ASEA',7,'".$cre."','".$poliza."','".$epol."','".$spol."')";
	//echo $sqlcompleto;
	if(mysqli_query($con, $sqlcompleto)){
		echo "Carga Completa.";
	}else{
		echo "Error: ".mysqli_error($con);
	}
	
}/*DATOS DE REQUISITOS DE CRE*/ if($opcion == "add3c"){
	$rdv = $_POST['rdv'];
	$srdv = $_POST['srdv'];
	$erdv = $_POST['erdv'];

	$rdp = $_POST['rdp'];
	$srdp = $_POST['srdp'];
	$erdp = $_POST['erdp'];

	$dcpet = $_POST['dcpet'];
	$sdcpet = $_POST['sdcpet'];
	$edcpet = $_POST['edcpet'];

	$panual = $_POST['panual'];
	$spanual = $_POST['spanual'];
	$epanual = $_POST['epanual'];
	
	$repq = $_POST['repq'];
	$srepq = $_POST['srepq'];
	$erepq = $_POST['erepq'];
	
	$proc = $_POST['proc'];
	$sproc = $_POST['sproc'];
	$eproc = $_POST['eproc'];
	
	$reme = $_POST['reme'];
	$sreme = $_POST['sreme'];
	$ereme = $_POST['ereme'];
	
	$anuncio = $_POST['anuncio'];
	$sanuncio = $_POST['sanuncio'];
	$eanuncio = $_POST['eanuncio'];
	//$panunci = $_POST['panuncio'];
	$sup = $_POST['sup'];
	$ssup = $_POST['ssup'];
	$esup = $_POST['esup'];

	$sgm = $_POST['sistgm'];
	$ssgm = $_POST['stgm'];
	$esgm = $_POST['estgm'];
	//$psup = $_POST['psup'];
	$cre = $_POST['cre'];

	$sqlcompleto = "INSERT INTO documento (tipo, num, idCESH, cumplimiento, evidencia, status) VALUES ('CRE',1,'".$cre."','".$rdv."','".$erdv."','".$srdv."'), ('CRE',2,'".$cre."','".$rdp."','".$erdp."','".$srdp."'), ('CRE',3,'".$cre."','".$dcpet."','".$edcpet."','".$sdcpet."'), ('CRE',4,'".$cre."','".$sup."','".$esup."','".$ssup."'), ('CRE',5,'".$cre."','".$panual."','".$epanual."','".$spanual."'), ('CRE',6,'".$cre."','".$repq."','".$erepq."','".$srepq."'), ('CRE',7,'".$cre."','".$proc."','".$eproc."','".$sproc."'), ('CRE',8,'".$cre."','".$reme."','".$ereme."','".$sreme."'), ('CRE',9,'".$cre."','".$anuncio."','".$eanuncio."','".$sanuncio."'), ('CRE',10,'".$cre."','".$sgm."','".$esgm."','".$ssgm."')";
	//echo $sqlcompleto;
	if(mysqli_query($con, $sqlcompleto)){
		echo "Carga Completa.";
	}else{
		echo "Error: ".mysqli_error($con);
	}
}/*DATOS DE REQUISITOS DE STPS*/if($opcion == "add3s"){
	$cump001s = $_POST['unos'];
	$scump001s = $_POST['unosS'];
	$ecump001s = $_POST['unosE'];
	
	$cump002s = $_POST['doss'];
	$scump002s = $_POST['dossS'];
	$ecump002s = $_POST['dossE'];
	
	$cump004s = $_POST['tress'];
	$scump004s = $_POST['tressS'];
	$ecump004s = $_POST['tressE'];

	$cump005s = $_POST['cuatros'];
	$scump005s = $_POST['cuatrosS'];
	$ecump005s = $_POST['cuatrosE'];

	$cump006s = $_POST['cincos'];
	$scump006s = $_POST['cincosS'];
	$ecump006s = $_POST['cincosE'];

	$cump009s = $_POST['seiss'];
	$scump009s = $_POST['seissS'];
	$ecump009s = $_POST['seissE'];
	
	$cump011s = $_POST['sietes'];
	$scump011s = $_POST['sietesS'];
	$ecump011s = $_POST['sietesE'];
	
	$cump017s = $_POST['ochos'];
	$scump017s = $_POST['ochosS'];
	$ecump017s = $_POST['ochosE'];
	
	$cump018s = $_POST['nueves'];
	$scump018s = $_POST['nuevesS'];
	$ecump018s = $_POST['nuevesE'];
	
	$cump019s = $_POST['diezs'];
	$scump019s = $_POST['diezsS'];
	$ecump019s = $_POST['diezsE'];
	
	$cump020s = $_POST['onces'];
	$scump020s = $_POST['oncesS'];
	$ecump020s = $_POST['oncesE'];

	$cump022s = $_POST['doces'];
	$scump022s = $_POST['docesS'];
	$ecump022s = $_POST['docesE'];
	
	$cump025s = $_POST['treces'];
	$scump025s = $_POST['trecesS'];
	$ecump025s = $_POST['trecesE'];
	
	$cump026s = $_POST['cators'];
	$scump026s = $_POST['catorsS'];
	$ecump026s = $_POST['catorsE'];
	
	$cump029s = $_POST['quins'];
	$scump029s = $_POST['quinsS'];
	$ecump029s = $_POST['quinsE'];
	
	$cump030s = $_POST['diecss'];
	$scump030s = $_POST['diecssS'];
	$ecump030s = $_POST['diecssE'];

	$cump033s = $_POST['diecs'];
	$scump033s = $_POST['diecsS'];
	$ecump033s = $_POST['diecsE'];
	//$pcump033s = $_POST['quinsP'];

	$cump035s = $_POST['dieo'];
	$scump035s = $_POST['dieoS'];
	$ecump035s = $_POST['dieoE'];
	$cre = $_POST['cre'];

	$sqlcompleto = "INSERT INTO documento (tipo, num, idCESH, cumplimiento, evidencia, status) VALUES ('STPS',1,'".$cre."','".$cump001s."','".$ecump001s."','".$scump001s."'), ('STPS',2,'".$cre."','".$cump002s."','".$ecump002s."','".$scump002s."'), ('STPS',3,'".$cre."','".$cump004s."','".$ecump004s."','".$scump004s."'), ('STPS',4,'".$cre."','".$cump005s."','".$ecump005s."','".$scump005s."'), ('STPS',5,'".$cre."','".$cump006s."','".$ecump006s."','".$scump006s."'), ('STPS',6,'".$cre."','".$cump009s."','".$ecump009s."','".$scump009s."'), ('STPS',7,'".$cre."','".$cump011s."','".$ecump011s."','".$scump011s."'), ('STPS',8,'".$cre."','".$cump017s."','".$ecump017s."','".$scump017s."'), ('STPS',9,'".$cre."','".$cump018s."','".$ecump018s."','".$scump018s."'), ('STPS',10,'".$cre."','".$cump019s."','".$ecump019s."','".$scump019s."'), ('STPS',11,'".$cre."','".$cump020s."','".$ecump020s."','".$scump020s."'), ('STPS',12,'".$cre."','".$cump022s."','".$ecump022s."','".$scump022s."'), ('STPS',13,'".$cre."','".$cump025s."','".$ecump025s."','".$scump025s."'), ('STPS',14,'".$cre."','".$cump026s."','".$ecump026s."','".$scump026s."'), ('STPS',15,'".$cre."','".$cump029s."','".$ecump029s."','".$scump029s."'), ('STPS',16,'".$cre."','".$cump030s."','".$ecump030s."','".$scump030s."'), ('STPS',17,'".$cre."','".$cump033s."','".$ecump033s."','".$scump033s."'), ('STPS',18,'".$cre."','".$cump035s."','".$ecump035s."','".$scump035s."')";
	//echo $sqlcompleto;
	if(mysqli_query($con, $sqlcompleto)){
		echo "Carga Completa.";
	}else{
		echo "Error: ".mysqli_error($con);
	}
}/*DATOS DE REQUISITOS DOCUMENTALES*/if($opcion == "add3d"){
	
	$act = $_POST['acta'];
	$sact = $_POST['staacta'];
	//$pact = $_POST['poracta'];
	$eact = $_POST['eviacta'];
	$pNot = $_POST['poder'];
	$spNot = $_POST['stapoder'];
	//$ppNot = $_POST['porpoder'];
	$epNot = $_POST['evipoder'];
	$aShcp = $_POST['alta'];
	$saShcp = $_POST['staalta'];
	//$paShcp = $_POST['poralta'];
	$eaShcp = $_POST['evialta'];
	$rfcEst = $_POST['rfc'];
	$srfcE = $_POST['starfc'];
	//$prfcE = $_POST['porrfc'];
	$erfcE = $_POST['evirfc'];
	$pCre = $_POST['pl'];
	$spCre = $_POST['stapl'];
	//$ppCre = $_POST['porpl'];
	$epCre = $_POST['evipl'];
	$licf = $_POST['lfm'];
	$slicf = $_POST['stalfm'];
	//$plicf = $_POST['porlfm'];
	$elicf = $_POST['evilfm'];
	$dicS = $_POST['ds'];
	$sdicS = $_POST['stads'];
	//$pdicS = $_POST['pords'];
	$edicS = $_POST['evids'];
	$imss = $_POST['timss'];
	$simss = $_POST['statim'];
	//$pimss = $_POST['portim'];
	$eimss = $_POST['evitim'];
	$Plano = $_POST['pA'];
	$sPlano = $_POST['stapA'];
	//$pPlano = $_POST['porpA'];
	$ePlano = $_POST['evipA'];
	$siem = $_POST['aS'];
	$ssiem = $_POST['staaS'];
	//$psiem = $_POST['poraS'];
	$esiem = $_POST['eviaS'];
	$elct = $_POST['de'];
	$slect = $_POST['stade'];
	//$plect = $_POST['porde'];
	$eelect = $_POST['evide'];
	$tierra = $_POST['dtf'];
	$stierra = $_POST['stadtf'];
	//$ptierra = $_POST['pordtf'];
	$etierra = $_POST['evidtf'];
	$caldis = $_POST['cld'];
	$scaldis = $_POST['stacld'];
	//$pcaldis = $_POST['porcld'];
	$ecaldis = $_POST['evicld'];
	$herme = $_POST['phm'];
	$sherme = $_POST['staphm'];
	//$pherme = $_POST['porphm'];
	$eherme = $_POST['eviphm'];
	$hermeT = $_POST['phmt'];
	$shermeT = $_POST['staphmt'];
	//$phermeT = $_POST['porphmt'];
	$ehermeT = $_POST['eviphmt'];
	$tanque = $_POST['tqA'];
	$stanque = $_POST['statqA'];
	//$ptanque = $_POST['portqA'];
	$etanque = $_POST['evitqA'];
	$fdis = $_POST['dis'];
	$sfdis = $_POST['stadis'];
	//$pfdis = $_POST['pordis'];
	$efdis = $_POST['evidis'];
	$inv = $_POST['cIn'];
	$sinv = $_POST['stacIn'];
	//$pinv = $_POST['porcIn'];
	$einv = $_POST['evicIn'];
	$cre = $_POST['cre'];

	$sqlcompleto = "INSERT INTO documento (tipo, num, idCESH, cumplimiento, evidencia, status) VALUES ('Documentación',1,'".$cre."','".$act."','".$eact."','".$sact."'), ('Documentación',2,'".$cre."','".$pNot."','".$epNot."','".$spNot."'), ('Documentación',3,'".$cre."','".$aShcp."','".$eaShcp."','".$saShcp."'), ('Documentación',4,'".$cre."','".$rfcEst."','".$erfcE."','".$srfcE."'), ('Documentación',5,'".$cre."','".$pCre."','".$epCre."','".$spCre."'), ('Documentación',6,'".$cre."','".$licf."','".$elicf."','".$slicf."'), ('Documentación',7,'".$cre."','".$dicS."','".$edicS."','".$sdicS."'), ('Documentación',8,'".$cre."','".$imss."','".$eimss."','".$simss."'), ('Documentación',9,'".$cre."','".$Plano."','".$ePlano."','".$sPlano."'), ('Documentación',10,'".$cre."','".$siem."','".$esiem."','".$ssiem."'), ('Documentación',11,'".$cre."','".$elct."','".$eelect."','".$slect."'), ('Documentación',12,'".$cre."','".$tierra."','".$etierra."','".$stierra."'), ('Documentación',13,'".$cre."','".$caldis."','".$ecaldis."','".$scaldis."'), ('Documentación',14,'".$cre."','".$herme."','".$eherme."','".$sherme."'), ('Documentación',15,'".$cre."','".$hermeT."','".$ehermeT."','".$shermeT."'), ('Documentación',16,'".$cre."','".$tanque."','".$etanque."','".$stanque."'), ('Documentación',17,'".$cre."','".$fdis."','".$efdis."','".$sfdis."'), ('Documentación',18,'".$cre."','".$inv."','".$einv."','".$sinv."')";
	if(mysqli_query($con, $sqlcompleto)){
		echo "Carga Completa.";
	}else{
		echo "Error: ".mysqli_error($con);
	}
	//echo $sqlcompleto;	
}if($opcion == "add4"){
	$objetivo = $_POST['o'];
	$fecha4 = $_POST['f'];
	$responsable = $_POST['r'];
	$pruebacump = $_POST['c'];
	$id = $_POST['cre'];
	
	
	$sql = "INSERT INTO objetivo (obj,cumplimiento,rutaCumObj,fechaCump,responsable,idCESH) VALUES ('".$objetivo."','".$pruebacump."','NULL','".$fecha4."','".$responsable."','".$id."')";

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
		//echo "Carga Correcta";
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
}if($opcion == "add10Np"){
	//echo "ENTRO";
	$aNueva = $_POST['areaNP'];
	$trab = $_POST['ntrab'];
	$apePaterN = $_POST['aptrab'];
	$apeMaterN = $_POST['amtrab'];
		
	$id = $_POST['cre'];
	$sqlNp = "INSERT INTO organigrama (nombre,apellidoP,apellidoM,puesto,status,idCESH) VALUES ('".$trab."','".$apePaterN."','".$apeMaterN."','".$aNueva."','ACTIVO','".$id."')";
	if(mysqli_query($con,$sqlNp)){
		echo "Carga Correcta";
	}else{
		echo "Error:".mysqli_error($con);
	}
	//echo $sqlNp;
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
	$Responsablemto = $_POST['rm'];
	$fechaT = $_POST['feCT'];
	$descripCT = $_POST['descrp'];	
	$id = $_POST['cre'];
		
	$sql = "INSERT INTO dzcambiot (equipo,descripcionC,fechaC,idCESH,idTrab) VALUES ('".$equipoCam."','".$descripCT."','".$fechaT."','".$id."',".$Responsablemto.")";
	
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
		
	$sql = "INSERT INTO dzordentr (fecha,ubicacion,detallesT,tipo,tipoT,horariof,horario,peligro,precaucion,areaT,nombreT,numOrdenT,idCESH) VALUES ('".$fechaOrTra."','".$ubiTrab."','".$deTrab."','".$tpTb."','".$tipo."','".$horF."','".$horI."','".$upeligros."','".$uprecaucion."','".$areaTra."','".$perCom."',".$noPermiso.",'".$id."')";
	
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
	$actividad = $_POST['ac'];
	$super = $_POST['n'];
	$trab = $_POST['t'];
	$acti = $_POST['d'];	
	$crit = $_POST['c'];
	$inAc = $_POST['ia'];
	$causas = $_POST['u'];
	$obser = $_POST['o'];
	$id = $_POST['i'];
		
	$sql = "INSERT INTO rbpo (actividad, area, nombreSupervisor,nombreTrabajador,descripcion,critica,incAcc,causa,obser,idCESH) VALUES ('".$actividad."','".$areaR."','".$super."','".$trab."','".$acti."','".$crit."','".$inAc."','".$causas."','".$obser."','".$id."')";
	
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
	$direccionrs = $_POST['d'];
	$telefonors = $_POST['t'];
	$correo12rs = $_POST['c'];
	$meteva = $_POST['metodo'];
	
	$sql = "INSERT INTO dcproveedor (razonSocial,deServicio,direccionServicio,telefonoServicio,correoServicio,evaluacion,idCESH) VALUES ('".$nombreRS."','".$servicioP."','".$direccionrs."','".$telefonors."','".$correo12rs."','".$meteva."','".$PLid."')";

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
	$calif = $_POST['cT'];
	
	
	$sql = "INSERT INTO dctraex (nombre,calificacion,idProvedor,idCESH) VALUES ('".$trabaj."','".$calif."',".$idRS.",'".$PLid."')";

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
	$categoriaE = $_POST['catPH'];
	$statusHE = $_POST['estH'];
	$nombreH = $_POST['nombH'];
	$idTj = $_POST['numT'];

	if($categoriaE == "EPP"){
		$sql = "INSERT INTO dcherramienta (estadoH,EPP,idTra) VALUES ('".$statusHE."','".$nombreH."',".$idTj.")";
	}if($categoriaE == "Herramienta"){
		$sql = "INSERT INTO dcherramienta (herramienta,estadoH,idTra) VALUES ('".$nombreH."','".$statusHE."',".$idTj.")";
	}	

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
	$i = $_POST['cre'];
	$per = $_POST['periodo'];
	$criterios = $_POST['crit'];
	$t = $_POST['tip'];
	$ob = $_POST['obje'];
	$auditor = $_POST['ali'];
	$aud1 = $_POST['au1'];
	$aud2 = $_POST['au2'];	
	
	$sql = "INSERT INTO auditoria (alcance,criterioAud,tipoA,objetivos,auditorLider,auditor1,auditor2,periodo,idCESH) VALUES ('".$alcance."','".$criterios."','".$t."','".$ob."','".$auditor."','".$aud1."','".$aud2."','".$per."','".$i."')";

	if(mysqli_query($con,$sql)){
		//echo "Carga Correcta";
		$sqlselect = "SELECT idAuditoria as u, alcance as alcance FROM auditoria WHERE idCESH = '".$i."' ORDER BY idAuditoria DESC LIMIT 1";
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
	$id = $_POST['noaud'];
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
		//echo $sql;
	}
	//echo $sql;
}if($opcion == "add16"){
	$rpt = $_POST['r'];
	$cre = $_POST['cesh'];
	//$fecha = "2015-03-19";
	//echo "la fecha actual es " . date("d") . " del " . date("m") . "
	//$fecha = "2016-06-29";
	$fecha = date("Y")."-".date("m")."-".date("d");
	
	//select para poder realizar un update
	$sqldecision = "SELECT fechaInicio FROM incidentes WHERE idCESH = '".$cre."'";
	$resultadodec = mysqli_query($con, $sqldecision);
	//ESTE IF FUNCIONA PARA SABER SI VA A AGREGAR PRIMERO O VA ACTUALIZAR ALGO QUE YA SE TIENEN INGRESADO
	if($resultadodec->num_rows > 0){
		if($rpt == "SI"){
			$sqlUs = "UPDATE incidentes SET fechaActualizada = '".$fecha."', fechaInicio = '".$fecha."', resp = '".$rpt."', diasT = 0 WHERE idCESH = '".$cre."'";
			//echo $sqlU;
			if(mysqli_query($con,$sqlUs)){
				echo "Actualización Correcta";
			}else{
				echo "Error:".mysqli_error($con);
			}
		}if($rpt == "NO"){
			$sqlresta = "SELECT fechaInicio as fechaAnt FROM incidentes WHERE idCESH = '".$cre."'";
			$resultadores = mysqli_query($con, $sqlresta);
			if($resultadores->num_rows > 0){
				while ( $fila = $resultadores->fetch_assoc()) {
					$fechaant = $fila['fechaAnt'];
				}
			}
			$fechac = new DateTime('now');
			$fechat = new DateTime($fechaant);
			//echo "1er Fecha: ".$fechaant." - 2da Fecha: ".$fecha;
			$dif = $fechac->diff($fechat);
			//echo $dif->days.' dias';
			$diff = $dif->days;
			$sqlU = "UPDATE incidentes SET fechaActualizada = '".$fecha."', diasT = ".$diff." WHERE idCESH = '".$cre."'";
			//echo $sqlU;
			if(mysqli_query($con,$sqlU)){
				echo "Actualización Correcta";
			}else{
				echo "Error:".mysqli_error($con);
			}
		}
	}else{
		//echo "entro a insertar";
		$sqlAdd = "INSERT INTO incidentes (resp,fechaInicio,fechaActualizada,diasT,idCESH) VALUES ('".$rpt."','".$fecha."','".$fecha."',0,'".$cre."')";
		if(mysqli_query($con,$sqlAdd)){
			echo "Carga de primer reporte de incidente completa";
		}else{
			echo "Error:".mysqli_error($con);
		}		
	}
	

	/*if(mysqli_query($con,$sql)){
		echo "Carga Correcta";
	}else{
		echo "Error:".mysqli_error($con);
	}*/
	//echo $sql;
}

?>
