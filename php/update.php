<?php
include 'conex.php';
$con = Conectarse();

$opcion=$_POST['opc'];

//actualizacion de la estacion
if($opcion=="upSt"){
	$cre = $_POST['pl'];
	$nost = $_POST['nosta'];
	$RS = $_POST['rzs'];
	$fra = $_POST['fq'];
	$dfis = $_POST['dst'];
	$rfcst = $_POST['rsta'];
	$ust = $_POST['usta'];
	$tst = $_POST['tsta'];
	$cst = $_POST['mail'];
	$rl = $_POST['nrls'];
	$rfcrl = $_POST['rrls'];
	$curprl = $_POST['crls'];
	/*$estst = $_POST['idEstado'];*/


	$sql = "UPDATE cesh SET idCESH = '".$cre."', NoEst = '".$nost."', razonSocial = '".$RS."', franquicia = '".$fra."', direccionFiscal = '".$dfis."', rfc = '".$rfcst."', ubicacion ='".$ust."', telefono = '".$tst."', correo = '".$cst."', rl = '".$rl."', rfcRl = '".$rfcrl."', curpRl = '".$curprl."' WHERE idCESH = '".$cre."'";

	if(mysqli_query($con,$sql)){
		echo "Update Correct";
	}else{
		echo "Error:".mysqli_error($con);
	}

	//echo $sql;
}
if($opcion == "upd3a"){ #UPDATE PARA DOCUMENTACION DE LA ASEA
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

	$poliz = $_POST['poliza'];
	$spoliz = $_POST['spoliza'];
	$epoliz = $_POST['epoliza'];

	$cre = $_POST['cre'];



	$sql005 = "UPDATE documento SET cumplimiento='".$n005."', evidencia='".$en005."', status='".$sn005."' WHERE tipo = 'ASEA' AND num = 1";
	$sqlmia = "UPDATE documento SET cumplimiento='".$mia."', evidencia='".$emia."', status='".$smia."' WHERE tipo = 'ASEA' AND num = 2";
	$sqlip = "UPDATE documento SET cumplimiento='".$ip."', evidencia='".$eip."', status='".$sip."' WHERE tipo = 'ASEA' AND num = 3";
	$sqllf = "UPDATE documento SET cumplimiento='".$lf."', evidencia='".$elf."', status='".$slf."' WHERE tipo = 'ASEA' AND num = 4";
	$sqlgrp = "UPDATE documento SET cumplimiento='".$grp."', evidencia='".$egrp."', status='".$sgrp."' WHERE tipo = 'ASEA' AND num = 5";
	$sqlcoa = "UPDATE documento SET cumplimiento='".$coa."', evidencia='".$ecoa."', status='".$scoa."' WHERE tipo = 'ASEA' AND num = 6";
	$sqlpoliza = "UPDATE documento SET cumplimiento='".$poliz."', evidencia='".$epoliz."', status='".$spoliz."' WHERE tipo = 'ASEA' AND num = 7";
		
	mysqli_query($con,$sql005);
	mysqli_query($con,$sqlmia);
	mysqli_query($con,$sqlip);
	mysqli_query($con,$sqllf);
	mysqli_query($con,$sqlgrp);
	mysqli_query($con,$sqlcoa);
	mysqli_query($con,$sqlpoliza);

	//echo $sqlpoliza;
	echo "Actualización Correcta";
}
if($opcion == "upd3pfc"){ #UPDATE PARA DOCUMENTACION DE PROFECO
	$cpD = $_POST['unopfc'];
	$spD = $_POST['supfc'];
	$epD = $_POST['eupfc'];

	$ccD = $_POST['dospfc'];
	$scD = $_POST['sdpfc'];
	$ecD = $_POST['edpfc'];

	$cpT = $_POST['trespfc'];
	$spT = $_POST['sppfc'];
	$epT = $_POST['eppfc'];

	$ciC = $_POST['cuatropfc'];
	$siC = $_POST['sipfc'];
	$eiC = $_POST['evI'];

	$sqlpD = "UPDATE documento SET cumplimiento='".$cpD."', evidencia='".$epD."', status='".$spD."' WHERE tipo = 'PROFECO' AND num = 1";
	$sqlcD = "UPDATE documento SET cumplimiento='".$ccD."', evidencia='".$ecD."', status='".$scD."' WHERE tipo = 'PROFECO' AND num = 2";
	$sqlpT = "UPDATE documento SET cumplimiento='".$cpT."', evidencia='".$epT."', status='".$spT."' WHERE tipo = 'PROFECO' AND num = 3";
	$sqliC = "UPDATE documento SET cumplimiento='".$ciC."', evidencia='".$eiC."', status='".$siC."' WHERE tipo = 'PROFECO' AND num = 4";

	mysqli_query($con,$sqlpD);
	mysqli_query($con,$sqlcD);
	mysqli_query($con,$sqlpT);
	mysqli_query($con,$sqliC);
	
	echo "Actualización Correcta";
	//echo $sqlcD;
}
if($opcion == "upd3pc"){ #UPDATE PARA DOCUMENTACION DE PROTECCION CIVIL
	$uno = $_POST['unopc'];
	$suno = $_POST['supc'];
	$euno = $_POST['eupc'];
	//$puno = $_POST['pupc'];

	$dos = $_POST['dospc'];
	$sdos = $_POST['sdpc'];
	$edos = $_POST['edpc'];
	//$pdos = $_POST['pdpc'];

	$cre = $_POST['cre'];

	/*if($uno == "Si"){ $uno = 1; } if ($uno == "No") { $uno =0; }
	if($dos == "Si"){ $dos = 1; } if ($dos == "No") { $dos =0; }*/

	$sqluno = "UPDATE documento SET cumplimiento='".$uno."', evidencia='".$euno."', status='".$suno."' WHERE tipo = 'Protección Civil' AND num = 1";
	$sqldos = "UPDATE documento SET cumplimiento='".$dos."', evidencia='".$edos."', status='".$sdos."' WHERE tipo = 'Protección Civil' AND num = 2";
	
	mysqli_query($con,$sqluno);
	mysqli_query($con,$sqldos);
	
	echo "Actualización Correcta";
	//echo $sqldos;
}
if($opcion == "upd3se"){ #UPDATE PARA DOCUMENTO UNICO DE SEC. ECONOMIA
	$solo = $_POST['unose'];
	$ssolo = $_POST['suse'];
	$esolo = $_POST['euse'];
	//$psolo = $_POST['puse'];
	$cre = $_POST['cre'];

	//if($solo == "Si"){ $solo = 1; } if ($solo == "No") { $solo = 0; }

	$sqlsolo = "UPDATE documento SET cumplimiento='".$solo."', evidencia='".$esolo."', status='".$ssolo."' WHERE tipo = 'Sec. Economia' AND num = 1";
	
	mysqli_query($con,$sqlsolo);
	
	echo "Actualización Correcta";
	//echo $sqluno.$sqldos;
}
if($opcion == "upd3c"){ #UPDATE PARA DOCUMENTACION DE CRE
	$rdv = $_POST['rdv'];
	$srdv = $_POST['srdv'];
	$erdv = $_POST['erdv'];
	//$prdv = $_POST['prdv'];

	$rdp = $_POST['rdp'];
	$srdp = $_POST['srdp'];
	$erdp = $_POST['erdp'];
	//$prdp = $_POST['prdp'];

	/*$sta = $_POST['sta'];
	$ssta = $_POST['ssta'];
	$esta = $_POST['esta'];*/
	//$psta = $_POST['psta'];

	$cpet = $_POST['cpet'];
	$scpet = $_POST['scpet'];
	$ecpet = $_POST['ecpet'];
	//$pcpet = $_POST['pcept'];

	/*$dcpet = $_POST['dcpet'];
	$sdcpet = $_POST['sdcpet'];
	$edcpet = $_POST['edcpet'];*/
	//$pdcpet = $_POST['pdcpet'];

	$panual = $_POST['panual'];
	$spanual = $_POST['spanual'];
	$epanual = $_POST['epanual'];
	//$ppanual = $_POST['ppanual'];

	/*$pseg = $_POST['pseg'];
	$spseg = $_POST['spseg'];
	$epseg = $_POST['epseg'];*/
	//$ppseg = $_POST['ppseg'];

	$repq = $_POST['repq'];
	$srepq = $_POST['srepq'];
	$erepq = $_POST['erepq'];
	//$prepq = $_POST['prepq'];

	$proc = $_POST['proc'];
	$sproc = $_POST['sproc'];
	$eproc = $_POST['eproc'];
	//$pproc = $_POST['pproc'];

	$reme = $_POST['reme'];
	$sreme = $_POST['sreme'];
	$ereme = $_POST['ereme'];
	//$preme = $_POST['preme'];

	$anuncio = $_POST['anuncio'];
	$sanuncio = $_POST['sanuncio'];
	$eanuncio = $_POST['eanuncio'];
	//$panuncio = $_POST['panuncio'];

	$sup = $_POST['sup'];
	$ssup = $_POST['ssup'];
	$esup = $_POST['esup'];

	$sgm = $_POST['sistgm'];
	$ssgm = $_POST['stgm'];
	$esgm = $_POST['estgm'];
	//$psup = $_POST['psup'];

	$cre = $_POST['cre'];

	/*if($rdv == "Si"){ $rdv = 1; } if ($rdv == "No") { $rdv =0; }
	if($rdp == "Si"){ $rdp = 1; } if ($rdp == "No") { $rdp =0; }
	if($sta == "Si"){ $sta = 1; } if ($sta == "No") { $sta =0; }
	if($cpet == "Si"){ $cpet = 1; } if ($cpet == "No") { $cpet =0; }
	if($dcpet == "Si"){ $dcpet = 1; } if ($dcpet == "No") { $dcpet =0; }
	if($panual == "Si"){ $panual = 1; } if ($panual == "No") { $panual =0; }
	if($pseg == "Si"){ $pseg = 1; } if ($pseg == "No") { $pseg =0; }
	if($repq == "Si"){ $repq = 1; } if ($repq == "No") { $repq =0; }
	if($proc == "Si"){ $proc = 1; } if ($proc == "No") { $proc =0; }
	if($reme == "Si"){ $reme = 1; } if ($reme == "No") { $reme =0; }
	if($anuncio == "Si"){ $anuncio = 1; } if ($anuncio == "No") { $anuncio =0; }
	if($sup == "Si"){ $sup = 1; } if ($sup == "No") { $sup =0; }*/

	$sqlrdv = "UPDATE documento SET cumplimiento='".$rdv."', evidencia='".$erdv."', status='".$srdv."' WHERE tipo = 'CRE' AND num = 1";
	$sqlrdp = "UPDATE documento SET cumplimiento='".$rdp."', evidencia='".$erdp."', status='".$srdp."' WHERE tipo = 'CRE' AND num = 2";
	/*$sqlsta = "UPDATE documento SET cumplimiento='".$sta."', evidencia='".$esta."', status='".$ssta."' WHERE tipo = 'CRE' AND num = 3";*/
	$sqlcpet = "UPDATE documento SET cumplimiento='".$cpet."', evidencia='".$ecpet."', status='".$scpet."' WHERE tipo = 'CRE' AND num = 3";
	/*$sqldcpet = "UPDATE documento SET cumplimiento='".$dcpet."', evidencia='".$edcpet."', status='".$sdcpet."' WHERE tipo = 'CRE' AND num = 5";*/
	$sqlsup = "UPDATE documento SET cumplimiento='".$sup."', evidencia='".$esup."', status='".$ssup."' WHERE tipo = 'CRE' AND num = 4";
	$sqlpanual = "UPDATE documento SET cumplimiento='".$panual."', evidencia='".$epanual."', status='".$spanual."' WHERE tipo = 'CRE' AND num = 5";
	/*$sqlpseg = "UPDATE documento SET cumplimiento='".$pseg."', evidencia='".$epseg."', status='".$spseg."' WHERE tipo = 'CRE' AND num = 6";*/
	$sqlrepq = "UPDATE documento SET cumplimiento='".$repq."', evidencia='".$erepq."', status='".$srepq."' WHERE tipo = 'CRE' AND num = 6";
	$sqlproc = "UPDATE documento SET cumplimiento='".$proc."', evidencia='".$eproc."', status='".$sproc."' WHERE tipo = 'CRE' AND num = 7";
	$sqlreme = "UPDATE documento SET cumplimiento='".$reme."', evidencia='".$ereme."', status='".$sreme."' WHERE tipo = 'CRE' AND num = 8";
	$sqlanun = "UPDATE documento SET cumplimiento='".$anuncio."', evidencia='".$eanuncio."', status='".$sanuncio."' WHERE tipo = 'CRE' AND num = 9";
	$sqlsgm = "UPDATE documento SET cumplimiento='".$sgm."', evidencia='".$esgm."', status='".$ssgm."' WHERE tipo = 'CRE' AND num = 10";
	
	
	mysqli_query($con,$sqlrdv);
	mysqli_query($con,$sqlrdp);
	/*mysqli_query($con,$sqlsta);*/
	mysqli_query($con,$sqlcpet);
	/*mysqli_query($con,$sqldcpet);*/
	mysqli_query($con,$sqlpanual);
	/*mysqli_query($con,$sqlpseg);*/
	mysqli_query($con,$sqlrepq);
	mysqli_query($con,$sqlproc);
	mysqli_query($con,$sqlreme);
	mysqli_query($con,$sqlsup);
	mysqli_query($con,$sqlanun);
	mysqli_query($con,$sqlsgm);
	
	echo "Actualización Correcta";
	//echo $sqlrdv.$sqlrdp.$sqlsta.$sqlcpet.$sqldcpet.$sqlsup.$sqlpanual.$sqlpseg.$sqlrepq.$sqlproc.$sqlreme.$sqlanun;
}
if($opcion == "upd3s"){ #UPDATE PARA DOCUMENTACION DE STPS
	$cump001s = $_POST['unos'];
	$scump001s = $_POST['sunos'];
	$ecump001s = $_POST['eunos'];
	
	$cump002s = $_POST['doss'];
	$scump002s = $_POST['sdoss'];
	$ecump002s = $_POST['edoss'];
	
	$cump004s = $_POST['tress'];
	$scump004s = $_POST['stress'];
	$ecump004s = $_POST['etress'];
	
	$cump005s = $_POST['cuatros'];
	$scump005s = $_POST['scuatros'];
	$ecump005s = $_POST['ecuatros'];
	
	$cump006s = $_POST['cincos'];
	$scump006s = $_POST['scincos'];
	$ecump006s = $_POST['ecincos'];
	
	$cump009s = $_POST['seiss'];
	$scump009s = $_POST['sseiss'];
	$ecump009s = $_POST['eseiss'];
	
	$cump011s = $_POST['sietes'];
	$scump011s = $_POST['ssietes'];
	$ecump011s = $_POST['esietes'];
	
	$cump017s = $_POST['ochos'];
	$scump017s = $_POST['sochos'];
	$ecump017s = $_POST['eochos'];
	
	$cump018s = $_POST['nueves'];
	$scump018s = $_POST['snueves'];
	$ecump018s = $_POST['enueves'];
	
	$cump019s = $_POST['diezs'];
	$scump019s = $_POST['sdiezs'];
	$ecump019s = $_POST['ediezs'];
	
	$cump020s = $_POST['onces'];
	$scump020s = $_POST['sonces'];
	$ecump020s = $_POST['eonces'];
	
	$cump022s = $_POST['doces'];
	$scump022s = $_POST['sdoces'];
	$ecump022s = $_POST['edoces'];
	
	$cump025s = $_POST['treces'];
	$scump025s = $_POST['streces'];
	$ecump025s = $_POST['etreces'];
	
	$cump026s = $_POST['cators'];
	$scump026s = $_POST['scators'];
	$ecump026s = $_POST['ecators'];
	
	$cump029s = $_POST['quins'];
	$scump029s = $_POST['squins'];
	$ecump029s = $_POST['equins'];
	
	$cump030s = $_POST['disc'];
	$scump030s = $_POST['sdisc'];
	$ecump030s = $_POST['edisc'];

	$cump033s = $_POST['diec'];
	$scump033s = $_POST['sdiec'];
	$ecump033s = $_POST['ediec'];

	$cump035s = $_POST['dio'];
	$scump035s = $_POST['sdio'];
	$ecump035s = $_POST['edio'];
	
	$cre = $_POST['cre'];

	$sql001 = "UPDATE documento SET cumplimiento='".$cump001s."', evidencia='".$ecump001s."', status='".$scump001s."' WHERE tipo = 'STPS' AND num = 1";
	$sql002 = "UPDATE documento SET cumplimiento='".$cump002s."', evidencia='".$ecump002s."', status='".$scump002s."' WHERE tipo = 'STPS' AND num = 2";
	$sql004 = "UPDATE documento SET cumplimiento='".$cump004s."', evidencia='".$ecump004s."', status='".$scump004s."' WHERE tipo = 'STPS' AND num = 3";
	$sql005 = "UPDATE documento SET cumplimiento='".$cump005s."', evidencia='".$ecump005s."', status='".$scump005s."' WHERE tipo = 'STPS' AND num = 4";
	$sql006 = "UPDATE documento SET cumplimiento='".$cump006s."', evidencia='".$ecump006s."', status='".$scump006s."' WHERE tipo = 'STPS' AND num = 5";
	$sql009 = "UPDATE documento SET cumplimiento='".$cump009s."', evidencia='".$ecump009s."', status='".$scump009s."' WHERE tipo = 'STPS' AND num = 6";
	$sql011 = "UPDATE documento SET cumplimiento='".$cump011s."', evidencia='".$ecump011s."', status='".$scump011s."' WHERE tipo = 'STPS' AND num = 7";
	$sql017 = "UPDATE documento SET cumplimiento='".$cump017s."', evidencia='".$ecump017s."', status='".$scump017s."' WHERE tipo = 'STPS' AND num = 8";
	$sql018 = "UPDATE documento SET cumplimiento='".$cump018s."', evidencia='".$ecump018s."', status='".$scump018s."' WHERE tipo = 'STPS' AND num = 9";
	$sql019 = "UPDATE documento SET cumplimiento='".$cump019s."', evidencia='".$ecump019s."', status='".$scump019s."' WHERE tipo = 'STPS' AND num = 10";
	$sql020 = "UPDATE documento SET cumplimiento='".$cump020s."', evidencia='".$ecump020s."', status='".$scump020s."' WHERE tipo = 'STPS' AND num = 11";
	$sql022 = "UPDATE documento SET cumplimiento='".$cump022s."', evidencia='".$ecump022s."', status='".$scump022s."' WHERE tipo = 'STPS' AND num = 12";
	$sql025 = "UPDATE documento SET cumplimiento='".$cump025s."', evidencia='".$ecump025s."', status='".$scump025s."' WHERE tipo = 'STPS' AND num = 13";
	$sql026 = "UPDATE documento SET cumplimiento='".$cump026s."', evidencia='".$ecump026s."', status='".$scump026s."' WHERE tipo = 'STPS' AND num = 14";
	$sql029 = "UPDATE documento SET cumplimiento='".$cump029s."', evidencia='".$ecump029s."', status='".$scump029s."' WHERE tipo = 'STPS' AND num = 15";
	$sql030 = "UPDATE documento SET cumplimiento='".$cump030s."', evidencia='".$ecump030s."', status='".$scump030s."' WHERE tipo = 'STPS' AND num = 16";
	$sql033 = "UPDATE documento SET cumplimiento='".$cump033s."', evidencia='".$ecump033s."', status='".$scump033s."' WHERE tipo = 'STPS' AND num = 17";
	$sql035 = "UPDATE documento SET cumplimiento='".$cump035s."', evidencia='".$ecump035s."', status='".$scump035s."' WHERE tipo = 'STPS' AND num = 18";
	
	
	mysqli_query($con,$sql001);
	mysqli_query($con,$sql002);
	mysqli_query($con,$sql004);
	mysqli_query($con,$sql005);
	mysqli_query($con,$sql006);
	mysqli_query($con,$sql009);
	mysqli_query($con,$sql011);
	mysqli_query($con,$sql017);
	mysqli_query($con,$sql018);
	mysqli_query($con,$sql019);
	mysqli_query($con,$sql020);
	mysqli_query($con,$sql022);
	mysqli_query($con,$sql025);
	mysqli_query($con,$sql026);
	mysqli_query($con,$sql029);
	mysqli_query($con,$sql030);
	mysqli_query($con,$sql033);
	mysqli_query($con,$sql035);
	
	echo "Actualización Correcta";
	//echo $sql001.$sql002.$sql009.$sql010.$sql011.$sql017.$sql018.$sql019.$sql022.$sql024.$sql025.$sql026.$sql027.$sql029.$sql033;
}
if($opcion == "upd3d"){ #UPDATE DE DOCUMENTACION LEGAL DE LA ESTACION
	$act = $_POST['acta'];
	$sact = $_POST['sacta'];
	//$pact = $_POST['pacta'];
	$eact = $_POST['eacta'];

	$pNot = $_POST['poder'];
	$spNot = $_POST['spoder'];
	//$ppNot = $_POST['ppoder'];
	$epNot = $_POST['epoder'];

	$aShcp = $_POST['alta'];
	$saShcp = $_POST['salta'];
	//$paShcp = $_POST['palta'];
	$eaShcp = $_POST['ealta'];

	$rfcEst = $_POST['rfc'];
	$srfcEst = $_POST['srfc'];
	//$prfcEst = $_POST['prfc'];
	$erfcEst = $_POST['erfc'];

	$pCre = $_POST['pl'];
	$spCre = $_POST['spl'];
	$epCre = $_POST['epl'];
	//$ppCre = $_POST['ppl'];

	$licf = $_POST['lfm'];
	$slicf = $_POST['slfm'];
	$elicf = $_POST['elfm'];
	//$plicf = $_POST['plfm'];

	$dicS = $_POST['ds'];
	$sdicS = $_POST['sds'];
	$edicS = $_POST['eds'];
	//$pdicS = $_POST['pds'];

	$imss = $_POST['timss'];
	$simss = $_POST['stimss'];
	$eimss = $_POST['etimss'];
	//$pimss = $_POST['ptimss'];

	$Plano = $_POST['pA'];
	$sPlano = $_POST['spA'];
	$ePlano = $_POST['epA'];
	//$pPlano = $_POST['ppA'];

	$siem = $_POST['aS'];
	$ssiem = $_POST['saS'];
	//$psiem = $_POST['paS'];
	$esiem = $_POST['eaS'];

	$elect = $_POST['de'];
	$select = $_POST['sde'];
	//$pelect = $_POST['pde'];
	$eelect = $_POST['ede'];

	$tierra = $_POST['dtf'];
	$stierra = $_POST['sdtf'];
	//$ptierra = $_POST['pdtf'];
	$etierra = $_POST['edtf'];

	$caldis = $_POST['cld'];
	$scaldis = $_POST['scld'];
	//$pcaldis = $_POST['pcld'];
	$ecaldis = $_POST['ecld'];

	$herme = $_POST['phm'];
	$sherme = $_POST['sphm'];
	$eherme = $_POST['ephm'];
	//$pherme = $_POST['pphm'];

	$hermeT = $_POST['phmt'];
	$shermeT = $_POST['sphmt'];
	$ehermeT = $_POST['ephmt'];
	//$phermeT = $_POST['pphmt'];

	$tanque = $_POST['tqA'];
	$stanque = $_POST['stqA'];
	//$ptanque = $_POST['ptqA'];
	$etanque = $_POST['etqA'];

	$fdis = $_POST['dis'];
	$sfdis = $_POST['sdis'];
	$efdis = $_POST['edis'];
	//$pfdis = $_POST['pdis'];

	$inv = $_POST['cIn'];
	$sinv = $_POST['scIn'];
	$einv = $_POST['ecIn'];
	//$pinv = $_POST['pcIn'];

	$cre = $_POST['cre'];


	$sqlact = "UPDATE documento SET cumplimiento='".$act."', evidencia='".$eact."', status='".$sact."' WHERE tipo = 'Documentacion' AND num = 1";
	$sqlpNo = "UPDATE documento SET cumplimiento='".$pNot."', evidencia='".$epNot."', status='".$spNot."' WHERE tipo = 'Documentacion' AND num = 2";
	$sqlaSh = "UPDATE documento SET cumplimiento='".$aShcp."', evidencia='".$eaShcp."', status='".$saShcp."' WHERE tipo = 'Documentacion' AND num = 3";
	$sqlrfcE = "UPDATE documento SET cumplimiento='".$rfcEst."', evidencia='".$erfcEst."', status='".$srfcEst."' WHERE tipo = 'Documentacion' AND num = 4";
	$sqlpCr = "UPDATE documento SET cumplimiento='".$pCre."', evidencia='".$epCre."', status='".$spCre."' WHERE tipo = 'Documentacion' AND num = 5";
	$sqllic = "UPDATE documento SET scumplimiento='".$licf."', evidencia='".$elicf."', status='".$slicf."' WHERE tipo = 'Documentacion' AND num = 6";
	$sqldic = "UPDATE documento SET cumplimiento='".$dicS."', evidencia='".$edicS."', status='".$sdicS."' WHERE tipo = 'Documentacion' AND num = 7";
	$sqlims = "UPDATE documento SET cumplimiento='".$imss."', evidencia='".$eimss."', status='".$simss."' WHERE tipo = 'Documentacion' AND num = 8";
	$sqlpla = "UPDATE documento SET cumplimiento='".$Plano."', evidencia='".$ePlano."', status='".$sPlano."' WHERE tipo = 'Documentacion' AND num = 9";
	$sqlsie = "UPDATE documento SET cumplimiento='".$siem."', evidencia='".$esiem."', status='".$ssiem."' WHERE tipo = 'Documentacion' AND num = 10";
	$sqlele = "UPDATE documento SET cumplimiento='".$elect."', evidencia='".$eelect."', status='".$select."' WHERE tipo = 'Documentacion' AND num = 11";
	$sqltie = "UPDATE documento SET cumplimiento='".$tierra."', evidencia='".$etierra."', status='".$stierra."' WHERE tipo = 'Documentacion' AND num = 12";
	$sqlcal = "UPDATE documento SET cumplimiento='".$caldis."', evidencia='".$ecaldis."', status='".$scaldis."' WHERE tipo = 'Documentacion' AND num = 13";
	$sqlher = "UPDATE documento SET cumplimiento='".$herme."', evidencia='".$eherme."', status='".$sherme."' WHERE tipo = 'Documentacion' AND num = 14";
	$sqlhet = "UPDATE documento SET cumplimiento='".$hermeT."', evidencia='".$ehermeT."', status='".$shermeT."' WHERE tipo = 'Documentacion' AND num = 15";
	$sqltan = "UPDATE documento SET cumplimiento='".$tanque."', evidencia='".$etanque."', status='".$stanque."' WHERE tipo = 'Documentacion' AND num = 16";
	$sqlfdi = "UPDATE documento SET cumplimiento='".$fdis."', evidencia='".$efdis."', status='".$sfdis."' WHERE tipo = 'Documentacion' AND num = 17";
	$sqlinv = "UPDATE documento SET cumplimiento='".$inv."', evidencia='".$einv."', status='".$sinv."' WHERE tipo = 'Documentacion' AND num = 18";
	
	
	mysqli_query($con,$sqlact);
	mysqli_query($con,$sqlpNo);
	mysqli_query($con,$sqlaSh);
	mysqli_query($con,$sqlrfcE);
	mysqli_query($con,$sqlpCr);
	mysqli_query($con,$sqllic);
	mysqli_query($con,$sqldic);
	mysqli_query($con,$sqlims);
	mysqli_query($con,$sqlpla);
	mysqli_query($con,$sqlsie);
	mysqli_query($con,$sqlele);
	mysqli_query($con,$sqltie);
	mysqli_query($con,$sqlcal);
	mysqli_query($con,$sqlher);
	mysqli_query($con,$sqlhet);
	mysqli_query($con,$sqltan);
	mysqli_query($con,$sqlfdi);
	mysqli_query($con,$sqlinv);

	
	echo "Actualización Correcta";
	//echo $sqlact.$sqlpNo.$sqlaSh.$sqlrfcE.$sqlpCr.$sqllic.$sqldic.$sqlims.$sqlpla.$sqlsie.$sqlele.$sqltie.$sqlcal.$sqlher.$sqlhet.$sqltan.$sqlfdi.$sqlinv;
}
if($opcion == "up17"){
	$id = $_POST['cre'];

	$compt1 = $_POST['cpt1'];
	$compt2 = $_POST['cpt2'];
	$compt3 = $_POST['cpt3'];
	$compt4 = $_POST['cpt4'];
	$compt5 = $_POST['cpt5'];
	$compt6 = $_POST['cpt6'];
	$compt7 = $_POST['cpt7'];
	$compt8 = $_POST['cpt8'];
	$compt9 = $_POST['cpt9'];
	$compt10 = $_POST['cpt10'];
	$compt11 = $_POST['cpt11'];
	$compt12 = $_POST['cpt12'];
	$compt13 = $_POST['cpt13'];
	$compt14 = $_POST['cpt14'];
	$compt15 = $_POST['cpt15'];
	$compt16 = $_POST['cpt16'];
	$compt17 = $_POST['cpt17'];
	$compt18 = $_POST['cpt18'];


	$sqlpt1 = "UPDATE revision SET feedback='".$compt1."' WHERE idCESH = '".$id."' AND meta = 1";
	$sqlpt2 = "UPDATE revision SET feedback='".$compt2."' WHERE idCESH = '".$id."' AND meta = 2";
	$sqlpt3 = "UPDATE revision SET feedback='".$compt3."' WHERE idCESH = '".$id."' AND meta = 3";
	$sqlpt4 = "UPDATE revision SET feedback='".$compt4."' WHERE idCESH = '".$id."' AND meta = 4";
	$sqlpt5 = "UPDATE revision SET feedback='".$compt5."' WHERE idCESH = '".$id."' AND meta = 5";
	$sqlpt6 = "UPDATE revision SET feedback='".$compt6."' WHERE idCESH = '".$id."' AND meta = 6";
	$sqlpt7 = "UPDATE revision SET feedback='".$compt7."' WHERE idCESH = '".$id."' AND meta = 7";
	$sqlpt8 = "UPDATE revision SET feedback='".$compt8."' WHERE idCESH = '".$id."' AND meta = 8";
	$sqlpt9 = "UPDATE revision SET feedback='".$compt9."' WHERE idCESH = '".$id."' AND meta = 9";
	$sqlpt10 = "UPDATE revision SET feedback='".$compt10."' WHERE idCESH = '".$id."' AND meta = 10";
	$sqlpt11 = "UPDATE revision SET feedback='".$compt11."' WHERE idCESH = '".$id."' AND meta = 11";
	$sqlpt12 = "UPDATE revision SET feedback='".$compt12."' WHERE idCESH = '".$id."' AND meta = 12";
	$sqlpt13 = "UPDATE revision SET feedback='".$compt13."' WHERE idCESH = '".$id."' AND meta = 13";
	$sqlpt14 = "UPDATE revision SET feedback='".$compt14."' WHERE idCESH = '".$id."' AND meta = 14";
	$sqlpt15 = "UPDATE revision SET feedback='".$compt15."' WHERE idCESH = '".$id."' AND meta = 15";
	$sqlpt16 = "UPDATE revision SET feedback='".$compt16."' WHERE idCESH = '".$id."' AND meta = 16";
	$sqlpt17 = "UPDATE revision SET feedback='".$compt17."' WHERE idCESH = '".$id."' AND meta = 17";
	$sqlpt18 = "UPDATE revision SET feedback='".$compt18."' WHERE idCESH = '".$id."' AND meta = 18";


	mysqli_query($con,$sqlpt1);
	mysqli_query($con,$sqlpt2);
	mysqli_query($con,$sqlpt3);
	mysqli_query($con,$sqlpt4);
	mysqli_query($con,$sqlpt5);
	mysqli_query($con,$sqlpt6);
	mysqli_query($con,$sqlpt7);
	mysqli_query($con,$sqlpt8);
	mysqli_query($con,$sqlpt9);
	mysqli_query($con,$sqlpt10);
	mysqli_query($con,$sqlpt11);
	mysqli_query($con,$sqlpt12);
	mysqli_query($con,$sqlpt13);
	mysqli_query($con,$sqlpt14);
	mysqli_query($con,$sqlpt15);
	mysqli_query($con,$sqlpt16);
	mysqli_query($con,$sqlpt17);
	mysqli_query($con,$sqlpt18);

	echo "Comentarios Actualizados";
}
?>