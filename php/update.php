<?php
include 'conex.php';
$con = Conectarse();

$opcion=$_POST['opc'];

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
if($opcion == "upd3a"){
	$n005 = $_POST['n005'];
	$mia = $_POST['mia'];
	$ip = $_POST['ip'];
	$lf = $_POST['lf'];
	$grp = $_POST['grp'];
	$coa = $_POST['coa'];
	$cre = $_POST['cre'];

	if($n005 == "Si"){ $n005 = 1; } if ($n005 == "No") { $n005 =0; }
	if($mia == "Si"){ $mia = 1; } if ($mia == "No") { $mia =0; }
	if($ip == "Si"){ $ip = 1; } if ($ip == "No") { $ip =0; }
	if($lf == "Si"){ $lf = 1; } if ($lf == "No") { $lf =0; }
	if($grp == "Si"){ $grp = 1; } if ($grp == "No") { $grp =0; }
	if($coa == "Si"){ $coa = 1; } if ($coa == "No") { $coa =0; }

	$sql005 = "UPDATE documento SET status=".$n005." WHERE tipo = 'ASEA' AND num = 1";
	$sqlmia = "UPDATE documento SET status=".$mia." WHERE tipo = 'ASEA' AND num = 2";
	$sqlip = "UPDATE documento SET status=".$ip." WHERE tipo = 'ASEA' AND num = 3";
	$sqllf = "UPDATE documento SET status=".$lf." WHERE tipo = 'ASEA' AND num = 4";
	$sqlgrp = "UPDATE documento SET status=".$grp." WHERE tipo = 'ASEA' AND num = 5";
	$sqlcoa = "UPDATE documento SET status=".$coa." WHERE tipo = 'ASEA' AND num = 6";
	
	mysqli_query($con,$sql005);
	mysqli_query($con,$sqlmia);
	mysqli_query($con,$sqlip);
	mysqli_query($con,$sqllf);
	mysqli_query($con,$sqlgrp);
	mysqli_query($con,$sqlcoa);

	echo "Actualización Correcta";
}
if($opcion == "upd3pc"){
	$uno = $_POST['unopc'];
	$dos = $_POST['dospc'];
	$cre = $_POST['cre'];

	if($uno == "Si"){ $uno = 1; } if ($uno == "No") { $uno =0; }
	if($dos == "Si"){ $dos = 1; } if ($dos == "No") { $dos =0; }

	$sqluno = "UPDATE documento SET status=".$uno." WHERE tipo = 'Protección Civi' AND num = 1";
	$sqldos = "UPDATE documento SET status=".$dos." WHERE tipo = 'Protección Civi' AND num = 2";
	
	mysqli_query($con,$sqluno);
	mysqli_query($con,$sqldos);
	
	echo "Actualización Correcta";
	//echo $sqluno.$sqldos;
}if($opcion == "upd3se"){
	$solo = $_POST['unose'];
	$cre = $_POST['cre'];

	if($solo == "Si"){ $solo = 1; } if ($solo == "No") { $solo = 0; }

	$sqlsolo = "UPDATE documento SET status=".$solo." WHERE tipo = 'Sec. Economia' AND num = 1";
	
	mysqli_query($con,$sqlsolo);
	
	echo "Actualización Correcta";
	//echo $sqluno.$sqldos;
}
if($opcion == "upd3c"){
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

	if($rdv == "Si"){ $rdv = 1; } if ($rdv == "No") { $rdv =0; }
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
	if($sup == "Si"){ $sup = 1; } if ($sup == "No") { $sup =0; }

	$sqlrdv = "UPDATE documento SET status=".$rdv." WHERE tipo = 'CRE' AND num = 1";
	$sqlrdp = "UPDATE documento SET status=".$rdp." WHERE tipo = 'CRE' AND num = 2";
	$sqlsta = "UPDATE documento SET status=".$sta." WHERE tipo = 'CRE' AND num = 3";
	$sqlcpet = "UPDATE documento SET status=".$cpet." WHERE tipo = 'CRE' AND num = 4";
	$sqldcpet = "UPDATE documento SET status=".$dcpet." WHERE tipo = 'CRE' AND num = 5";
	$sqlsup = "UPDATE documento SET status=".$sup." WHERE tipo = 'CRE' AND num = 6";
	$sqlpanual = "UPDATE documento SET status=".$panual." WHERE tipo = 'CRE' AND num = 7";
	$sqlpseg = "UPDATE documento SET status=".$pseg." WHERE tipo = 'CRE' AND num = 8";
	$sqlrepq = "UPDATE documento SET status=".$repq." WHERE tipo = 'CRE' AND num = 9";
	$sqlproc = "UPDATE documento SET status=".$proc." WHERE tipo = 'CRE' AND num = 10";
	$sqlreme = "UPDATE documento SET status=".$reme." WHERE tipo = 'CRE' AND num = 11";
	$sqlanun = "UPDATE documento SET status=".$anuncio." WHERE tipo = 'CRE' AND num = 12";
	
	
	mysqli_query($con,$sqlrdv);
	mysqli_query($con,$sqlrdp);
	mysqli_query($con,$sqlsta);
	mysqli_query($con,$sqlcpet);
	mysqli_query($con,$sqldcpet);
	mysqli_query($con,$sqlpanual);
	mysqli_query($con,$sqlpseg);
	mysqli_query($con,$sqlrepq);
	mysqli_query($con,$sqlproc);
	mysqli_query($con,$sqlreme);
	mysqli_query($con,$sqlsup);
	mysqli_query($con,$sqlanun);
	
	echo "Actualización Correcta";
	//echo $sqlrdv.$sqlrdp.$sqlsta.$sqlcpet.$sqldcpet.$sqlsup.$sqlpanual.$sqlpseg.$sqlrepq.$sqlproc.$sqlreme.$sqlanun;
}
if($opcion == "upd3s"){
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

	if($cump001s == "Si"){ $cump001s = 1; } if ($cump001s == "No") { $cump001s =0; }
	if($cump002s == "Si"){ $cump002s = 1; } if ($cump002s == "No") { $cump002s =0; }
	if($cump009s == "Si"){ $cump009s = 1; } if ($cump009s == "No") { $cump009s =0; }
	if($cump010s == "Si"){ $cump010s = 1; } if ($cump010s == "No") { $cump010s =0; }
	if($cump011s == "Si"){ $cump011s = 1; } if ($cump011s == "No") { $cump011s =0; }
	if($cump017s == "Si"){ $cump017s = 1; } if ($cump017s == "No") { $cump017s =0; }
	if($cump018s == "Si"){ $cump018s = 1; } if ($cump018s == "No") { $cump018s =0; }
	if($cump019s == "Si"){ $cump019s = 1; } if ($cump019s == "No") { $cump019s =0; }
	if($cump022s == "Si"){ $cump022s = 1; } if ($cump022s == "No") { $cump022s =0; }
	if($cump024s == "Si"){ $cump024s = 1; } if ($cump024s == "No") { $cump024s =0; }
	if($cump025s == "Si"){ $cump025s = 1; } if ($cump025s == "No") { $cump025s =0; }
	if($cump026s == "Si"){ $cump026s = 1; } if ($cump026s == "No") { $cump026s =0; }
	if($cump027s == "Si"){ $cump027s = 1; } if ($cump027s == "No") { $cump027s =0; }
	if($cump029s == "Si"){ $cump029s = 1; } if ($cump029s == "No") { $cump029s =0; }
	if($cump033s == "Si"){ $cump033s = 1; } if ($cump033s == "No") { $cump033s =0; }

	$sql001 = "UPDATE documento SET status=".$cump001s." WHERE tipo = 'STPS' AND num = 1";
	$sql002 = "UPDATE documento SET status=".$cump002s." WHERE tipo = 'STPS' AND num = 2";
	$sql009 = "UPDATE documento SET status=".$cump009s." WHERE tipo = 'STPS' AND num = 3";
	$sql010 = "UPDATE documento SET status=".$cump010s." WHERE tipo = 'STPS' AND num = 4";
	$sql011 = "UPDATE documento SET status=".$cump011s." WHERE tipo = 'STPS' AND num = 5";
	$sql017 = "UPDATE documento SET status=".$cump017s." WHERE tipo = 'STPS' AND num = 6";
	$sql018 = "UPDATE documento SET status=".$cump018s." WHERE tipo = 'STPS' AND num = 7";
	$sql019 = "UPDATE documento SET status=".$cump019s." WHERE tipo = 'STPS' AND num = 8";
	$sql022 = "UPDATE documento SET status=".$cump022s." WHERE tipo = 'STPS' AND num = 9";
	$sql024 = "UPDATE documento SET status=".$cump024s." WHERE tipo = 'STPS' AND num = 10";
	$sql025 = "UPDATE documento SET status=".$cump025s." WHERE tipo = 'STPS' AND num = 11";
	$sql026 = "UPDATE documento SET status=".$cump026s." WHERE tipo = 'STPS' AND num = 12";
	$sql027 = "UPDATE documento SET status=".$cump027s." WHERE tipo = 'STPS' AND num = 13";
	$sql029 = "UPDATE documento SET status=".$cump029s." WHERE tipo = 'STPS' AND num = 14";
	$sql033 = "UPDATE documento SET status=".$cump033s." WHERE tipo = 'STPS' AND num = 15";
	
	
	mysqli_query($con,$sql001);
	mysqli_query($con,$sql002);
	mysqli_query($con,$sql009);
	mysqli_query($con,$sql010);
	mysqli_query($con,$sql011);
	mysqli_query($con,$sql017);
	mysqli_query($con,$sql018);
	mysqli_query($con,$sql019);
	mysqli_query($con,$sql022);
	mysqli_query($con,$sql024);
	mysqli_query($con,$sql025);
	mysqli_query($con,$sql026);
	mysqli_query($con,$sql027);
	mysqli_query($con,$sql029);
	mysqli_query($con,$sql033);
	
	echo "Actualización Correcta";
	//echo $sql001.$sql002.$sql009.$sql010.$sql011.$sql017.$sql018.$sql019.$sql022.$sql024.$sql025.$sql026.$sql027.$sql029.$sql033;
}
if($opcion == "upd3d"){
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

	if($act == "Si"){ $act = 1; } if ($act == "No") { $act =0; }
	if($pNot == "Si"){ $pNot = 1; } if ($pNot == "No") { $pNot =0; }
	if($aShcp == "Si"){ $aShcp = 1; } if ($aShcp == "No") { $aShcp =0; }
	if($rfcEst == "Si"){ $rfcEst = 1; } if ($rfcEst == "No") { $rfcEst =0; }
	if($pCre == "Si"){ $pCre = 1; } if ($pCre == "No") { $pCre =0; }
	if($licf == "Si"){ $licf = 1; } if ($licf == "No") { $licf =0; }
	if($dicS == "Si"){ $dicS = 1; } if ($dicS == "No") { $dicS =0; }
	if($imss == "Si"){ $imss = 1; } if ($imss == "No") { $imss =0; }
	if($Plano == "Si"){ $Plano = 1; } if ($Plano == "No") { $Plano =0; }
	if($siem == "Si"){ $siem = 1; } if ($siem == "No") { $siem =0; }
	if($elect == "Si"){ $elect = 1; } if ($elect == "No") { $elect =0; }
	if($tierra == "Si"){ $tierra = 1; } if ($tierra == "No") { $tierra =0; }
	if($caldis == "Si"){ $caldis = 1; } if ($caldis == "No") { $caldis =0; }
	if($herme == "Si"){ $herme = 1; } if ($herme == "No") { $herme =0; }
	if($hermeT == "Si"){ $hermeT = 1; } if ($hermeT == "No") { $hermeT =0; }
	if($tanque == "Si"){ $tanque = 1; } if ($tanque == "No") { $tanque =0; }
	if($fdis == "Si"){ $fdis = 1; } if ($fdis == "No") { $fdis =0; }
	if($inv == "Si"){ $inv = 1; } if ($inv == "No") { $inv =0; }

	$sqlact = "UPDATE documento SET status=".$act." WHERE tipo = 'Documentacion' AND num = 1";
	$sqlpNo = "UPDATE documento SET status=".$pNot." WHERE tipo = 'Documentacion' AND num = 2";
	$sqlaSh = "UPDATE documento SET status=".$aShcp." WHERE tipo = 'Documentacion' AND num = 3";
	$sqlrfcE = "UPDATE documento SET status=".$rfcEst." WHERE tipo = 'Documentacion' AND num = 4";
	$sqlpCr = "UPDATE documento SET status=".$pCre." WHERE tipo = 'Documentacion' AND num = 5";
	$sqllic = "UPDATE documento SET status=".$licf." WHERE tipo = 'Documentacion' AND num = 6";
	$sqldic = "UPDATE documento SET status=".$dicS." WHERE tipo = 'Documentacion' AND num = 7";
	$sqlims = "UPDATE documento SET status=".$imss." WHERE tipo = 'Documentacion' AND num = 8";
	$sqlpla = "UPDATE documento SET status=".$Plano." WHERE tipo = 'Documentacion' AND num = 9";
	$sqlsie = "UPDATE documento SET status=".$siem." WHERE tipo = 'Documentacion' AND num = 10";
	$sqlele = "UPDATE documento SET status=".$elect." WHERE tipo = 'Documentacion' AND num = 11";
	$sqltie = "UPDATE documento SET status=".$tierra." WHERE tipo = 'Documentacion' AND num = 12";
	$sqlcal = "UPDATE documento SET status=".$caldis." WHERE tipo = 'Documentacion' AND num = 13";
	$sqlher = "UPDATE documento SET status=".$herme." WHERE tipo = 'Documentacion' AND num = 14";
	$sqlhet = "UPDATE documento SET status=".$hermeT." WHERE tipo = 'Documentacion' AND num = 15";
	$sqltan = "UPDATE documento SET status=".$tanque." WHERE tipo = 'Documentacion' AND num = 16";
	$sqlfdi = "UPDATE documento SET status=".$fdis." WHERE tipo = 'Documentacion' AND num = 17";
	$sqlinv = "UPDATE documento SET status=".$inv." WHERE tipo = 'Documentacion' AND num = 18";
	
	
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
?>