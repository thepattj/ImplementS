<?php
	include 'conex.php';
	$con = Conectarse();

	/*INSERT Y UPLOAD DE POLITICA*/
	if(isset($_POST['opc'])){
		//echo "entra a politica";
		$id = $_POST['cre'];
		$cesh = $_POST['ic'];
		$fechad = $_POST["fechadiv"];
		$pfecha = explode("/", $fechad);
		$fechad = $pfecha[2]."-".$pfecha[0]."-".$pfecha[1];
		$divulga = $_POST["dvlpolitica"];
		//echo "entro - paraCarpeta: ".$id. " - PL: ".$cesh. " - Fecha: ".$fechad. " - Fordiv: ".$divulga;
		$politica = $_FILES["archviopol"];
		/*foreach ($politica as $key => $value) {
			echo $key.' '.$value.'->';
		}*/

		$micarpeta = '../documents/Punto1/'.$id;
		//echo $micarpeta;
		if(!file_exists($micarpeta)){
			mkdir($micarpeta, 0777, true);
		}
		
		if($politica["type"] == "application/pdf" or $politica["type"] == "application/x-zip-compressed"){
			

			if($politica["type"] == "application/x-zip-compressed"){
				$nom_encriptado = md5($politica["tmp_name"]).".zip";
			}if($politica["type"] == "application/pdf"){
				$nom_encriptado = md5($politica["tmp_name"]).".pdf";
			}
			$ruta = "../documents/Punto1/".$id."/".$nom_encriptado;
			//echo $ruta;
			move_uploaded_file($politica["tmp_name"], $ruta);

			$sql = "INSERT INTO politica (direccion,fechaD,tipoD,idCESH) VALUES ('".$ruta."','".$fechad."','".$divulga."','".$cesh."')";
			//echo $sql;
			if(mysqli_query($con,$sql)){
				echo "Carga Correcta";
			}else{
				echo "Error:".mysqli_error($con);
			}
		}else{
			echo "Verifica el formato a cargar.";
		}
	}

	/*INSERT Y UPLOAD DE AR*/
	if(isset($_POST['opcar'])){
		$cesh = $_POST['icar'];
		$id = $_POST['crear'];
		$fechard = $_POST["fechardiv"];
		$pfecha = explode("/", $fechard);
		$fechard = $pfecha[2]."-".$pfecha[0]."-".$pfecha[1];
		$divulgar = $_POST["dvlar"];
		//echo "entro - paraCarpeta: ".$id. " - PL: ".$cesh. " - Fecha: ".$fechard. " - Fordiv: ".$divulgar;
		$ar = $_FILES["archivoAR"];
		/*foreach ($ar as $key => $value) {
			echo $key.' '.$value.'->';
		}*/

		$micarpeta = '../documents/Punto2/'.$id;
		//echo $micarpeta;
		if(!file_exists($micarpeta)){
			mkdir($micarpeta, 0777, true);
		}
		
		if($ar["type"] == "application/pdf" or $ar["type"] == "application/x-zip-compressed"){
			if($ar["type"] == "application/x-zip-compressed"){
				$nom_encriptado = md5($ar["tmp_name"]).".zip";
			}if($ar["type"] == "application/pdf"){
				$nom_encriptado = md5($ar["tmp_name"]).".pdf";
			}
			$ruta = "../documents/Punto2/".$id."/".$nom_encriptado;
			//echo $ruta;
			move_uploaded_file($ar["tmp_name"], $ruta);

			$sql = "INSERT INTO ar (direccion,fechaD,tipoD,idCESH) VALUES ('".$ruta."','".$fechard."','".$divulgar."','".$cesh."')";
			//echo $sql;
			if(mysqli_query($con,$sql)){
				echo "Carga Correcta";
			}else{
				echo "Error:".mysqli_error($con);
			}
		}else{
			echo "Revisa el formato de tu archivo";
		}
	}

	/*INSERT Y UPLOAD DE PUNTO 7*/
	if(isset($_POST['opcsq'])){
		$cesh = $_POST['icsq'];
		$id = $_POST['cresq'];
		$fecsq = date("Y")."-".date("m")."-".date("d");
		$repsq = $_POST['qsugque'];
		//$mesup = $_POST['mesconcentrado'];
		//echo "entro - ".$id. " - ".$cesh." - ".$fecsq." - ".$repsq.":";
		if($repsq == 1){
			$sq = $_FILES["archivosq"];
			/*foreach ($sq as $key => $value) {
				echo $key.' '.$value.'->';
			}*/

			$micarpeta = '../documents/Punto7/'.$id;
			//echo $micarpeta;
			if(!file_exists($micarpeta)){
				mkdir($micarpeta, 0777, true);
			}
			
			if($sq["type"] == "application/pdf" or $sq["type"] == "application/x-zip-compressed"){
				
				if($sq["type"] == "application/x-zip-compressed"){
					$nom_encriptado = md5($sq["tmp_name"]).".zip";
				}if($sq["type"] == "application/pdf"){
					$nom_encriptado = md5($sq["tmp_name"]).".pdf";
				}

				$ruta = "../documents/Punto7/".$id."/".$nom_encriptado;
				//echo $ruta;
				move_uploaded_file($sq["tmp_name"], $ruta);

				$sql = "INSERT INTO sugque (respSugQ,fecha,direccion,idCESH) VALUES ('".$repsq."','".$fecsq."','".$ruta."','".$cesh."')";
				//echo $sql;
				if(mysqli_query($con,$sql)){
					echo "Carga de Siguimiento Correcta";
				}else{
					echo "Error:".mysqli_error($con);
				}
			}else{
				echo "Revisa el formato de tu archivo";
			}
		}else{
			$sqlN = "INSERT INTO sugque (respSugQ,fecha,direccion,idCESH) VALUES ('".$repsq."','".$fecsq."','NULL','".$cesh."')";
			//echo $sql;
			if(mysqli_query($con,$sqlN)){
				echo "Carga Correcta";
			}else{
				echo "Error:".mysqli_error($con);
			}
		}		
	}

	/*INSERT Y UPLOAD DE PRE*/
	if(isset($_POST['oppre'])){
		$cesh = $_POST['icpre'];
		$id = $_POST['crepre'];
		//echo "entro - ".$id. " - ".$cesh;
		$pre = $_FILES["archivopre"];
		/*foreach ($pre as $key => $value) {
			echo $key.' '.$value.'->';
		}*/

		$micarpeta = '../documents/Punto13/'.$id;
		//echo $micarpeta;
		if(!file_exists($micarpeta)){
			mkdir($micarpeta, 0777, true);
		}
		if($pre["type"] == "application/pdf"){
			$nom_encriptado = md5($pre["tmp_name"]).".pdf";

			$ruta = "../documents/Punto13/".$id."/".$nom_encriptado;
			//echo $ruta;
			move_uploaded_file($pre["tmp_name"], $ruta);

			$sql = "INSERT INTO pre (direccion,idCESH) VALUES ('".$ruta."','".$cesh."')";
			//echo $sql;
			if(mysqli_query($con,$sql)){
				echo "Carga Correcta";
			}else{
				echo "Error:".mysqli_error($con);
			}
		}else{
			echo "Revisa el formato de tu archivo";
		}
	}
	/*INSERT Y UPLOAD DE simulacrospre*/
	if(isset($_POST['opcspre'])){
		$cesh = $_POST['icspre'];
		$id = $_POST['crespre'];
		$tipoS = $_POST['qsimulacro'];
		$fechaS = $_POST['fechadivpre'];
		$pfechaS = explode("/", $fechaS);
		$fechaS = $pfechaS[2]."-".$pfechaS[0]."-".$pfechaS[1];
		//echo "entro - ".$id. " - ".$cesh;
		$infosimulacro = $_FILES["archivosimu"];
		/*foreach ($pre as $key => $value) {
			echo $key.' '.$value.'->';
		}*/

		$micarpeta = '../documents/Punto13/'.$id;
		//echo $micarpeta;
		if(!file_exists($micarpeta)){
			mkdir($micarpeta, 0777, true);
		}
		if($infosimulacro["type"] == "application/pdf"){
			$nom_encriptado = md5($infosimulacro["tmp_name"]).".pdf";

			$ruta = "../documents/Punto13/".$id."/".$nom_encriptado;
			//echo $ruta;
			move_uploaded_file($infosimulacro["tmp_name"], $ruta);

			$sql = "INSERT INTO pre (informeSimulacro, idCESH, tipoSimulacro, fechaSimulacro) VALUES ('".$ruta."','".$cesh."','".$tipoS."','".$fechaS."')";
			//echo $sql;
			if(mysqli_query($con,$sql)){
				echo "Carga Correcta de informe";
			}else{
				echo "Error:".mysqli_error($con);
			}
		}else{
			echo "Revisa el formato de tu archivo";
		}
	}

	/*INSERT Y UPLOAD DE PUNTO 10 BT-01*/
	if(isset($_POST['idbt01'])){
		//echo "va a guardar";
		$fecha = $_POST['datebt01'];
		$cre = $_POST['idbt01'];
		list($mes,$dia,$a) = split('[/.-]',$fecha);
		$nfecha = $a."-".$mes."-".$dia;
		//echo "entro - ".$nfecha." - ".$cre;
		$bt01 = $_FILES["archivobt01"];
		/* foreach ($bt01 as $key => $value) {
			echo $key.' '.$value.'->';
		} */
		$mesfin = $mes+1;
		$mesfin = "0".$mesfin;
		//echo "ultimo".$mesfin;
		$partes = explode("/", $cre);
		$id = $partes[0].$partes[1];
		$fFecha = $a."-".$mesfin."-".$dia;
		//echo $nfecha."-Nueva fecha: ".$fFecha;

		$micarpeta = '../documents/Punto10/'.$id;
		if(!file_exists($micarpeta)){
			mkdir($micarpeta, 0777, true);
		}
		if($bt01["type"] == "application/pdf"){
			$nom_encriptado = md5($bt01["tmp_name"]).".pdf";
			$ruta = "../documents/Punto10/".$id."/".$nom_encriptado;
			//echo $ruta;
			move_uploaded_file($bt01["tmp_name"], $ruta);

			$sql = "INSERT INTO dzbitacora (descripcion,direccion,fechaInicio,estatus,idCESH) VALUES ('bt-01','".$ruta."','".$nfecha."','P','".$cre."')";
				//echo $sql;
			if(mysqli_query($con,$sql)){
				echo "Carga Completa";
			}else{
				echo "Error:".mysqli_error($con);
			}
		}else{
			echo "Revisa el formato de tu archivo";
		}
	}
	/*INSERT Y UPLOAD DE PUNTO 10 BT-02*/
	if(isset($_POST['idbt02'])){
		
		$fecha = $_POST['datebt02'];
		$cre = $_POST['idbt02'];
		//echo "DATO-".$cre;
		$pfecha = explode("/", $fecha);
		$nfecha = $pfecha[2]."-".$pfecha[0]."-".$pfecha[1];
		$bt02 = $_FILES["archivobt02"];
		/*foreach ($bt02 as $key => $value) {
			echo $key.' '.$value.'->';
		}*/
		// se borro la parte de la fecha fin $mesfin = $mes+1; $mesfin = "0".$mesfin;  $fFecha = $a."-".$mesfin."-".$dia;
		$partes = explode("/", $cre);
		$id = $partes[0].$partes[1];
			
		$micarpeta = '../documents/Punto10/'.$id;
		if(!file_exists($micarpeta)){
			mkdir($micarpeta, 0777, true);
		}
		if($bt02["type"] == "application/pdf"){
			$nom_encriptado = md5($bt02["tmp_name"]).".pdf";
			$ruta = "../documents/Punto10/".$id."/".$nom_encriptado;
			//echo $ruta;
			move_uploaded_file($bt02["tmp_name"], $ruta);
			$sql = "INSERT INTO dzbitacora (descripcion,direccion,fechaInicio,estatus,idCESH) VALUES ('bt-02','".$ruta."','".$nfecha."','P','".$cre."')";
			//echo $sql;
			if(mysqli_query($con,$sql)){
				echo "Carga Completa";
			}else{
				echo "Error:".mysqli_error($con);
			}
		}else{
			echo "Revisa el formato de tu archivo";
		}
	}
	/*INSERT Y UPLOAD DE PUNTO 10 BT-03*/
	if(isset($_POST['datebt03'])){
		$fecha = $_POST['datebt03'];
		$cre = $_POST['idbt03'];

		$pfecha = explode("/", $fecha);
		$nfecha = $pfecha[2]."-".$pfecha[0]."-".$pfecha[1];
		//echo "entro - ".$nfecha." - ".$cre;
			
		$bt03 = $_FILES["archivobt03"];
		/*foreach ($bt03 as $key => $value) {
			echo $key.' '.$value.'->';
		}*/
		// se borro la parte de la fecha fin $mesfin = $mes+1; $mesfin = "0".$mesfin;  $fFecha = $a."-".$mesfin."-".$dia;
		$partes = explode("/", $cre);
		$id = $partes[0].$partes[1];
		//echo $nfecha."-Nueva fecha: ".$fFecha;
			
		$micarpeta = '../documents/Punto10/'.$id;
		if(!file_exists($micarpeta)){
			mkdir($micarpeta, 0777, true);
		}
		if($bt03["type"] == "application/pdf"){
			$nom_encriptado = md5($bt03["tmp_name"]).".pdf";

			$ruta = "../documents/Punto10/".$id."/".$nom_encriptado;
			//echo $ruta;
			move_uploaded_file($bt03["tmp_name"], $ruta);

			$sql = "INSERT INTO dzbitacora (descripcion,direccion,fechaInicio,estatus,idCESH) VALUES ('bt-03','".$ruta."','".$nfecha."','P','".$cre."')";
			//echo $sql;
			if(mysqli_query($con,$sql)){
				echo "Carga Completa";
			}else{
				echo "Error:".mysqli_error($con);
			}
		}else{
			echo "Revisa el formato de tu archivo";
		}
	}

	/*INSERT Y UPLOAD DE PUNTO 11 BT-01*/
	if(isset($_POST['id11bt01'])){
		//echo "guarda";
		$fecha = $_POST['date11bt01'];
		$cre = $_POST['id11bt01'];
		
		$pfecha = explode("/", $fecha);
		$nfecha = $pfecha[2]."-".$pfecha[0]."-".$pfecha[1];
		//echo "entro - ".$nfecha." - ".$cre;

		$bt = $_FILES["archivo11bt1"];
		//foreach ($bt as $key => $value) {
			//echo $key.' '.$value.'->';
		//}

		// se borro la parte de la fecha fin $mesfin = $mes+1; $mesfin = "0".$mesfin;  $fFecha = $a."-".$mesfin."-".$dia;
		$partes = explode("/", $cre);
		$id = $partes[0].$partes[1];
		
		$micarpeta = '../documents/Punto11/'.$id;
		if(!file_exists($micarpeta)){
			mkdir($micarpeta, 0777, true);
		}
		if($bt["type"] == "application/pdf"){
			$nom_encriptado = md5($bt["tmp_name"]).".pdf";
			$ruta = $micarpeta."/".$nom_encriptado;
			//echo $ruta;
			move_uploaded_file($bt["tmp_name"], $ruta);

			$sql = "INSERT INTO bitacoras (descripcion,direccion,fechaI,estatus,idCESH) VALUES ('bt-01','".$ruta."','".$nfecha."','P','".$cre."')";
			//echo $sql;
			if(mysqli_query($con,$sql)){
				echo "Carga Completa";
			}else{
				echo "Error:".mysqli_error($con);
			}
		}else{
			echo "Revisa el formato de tu archivo";
		}
	}
	/*INSERT Y UPLOAD DE PUNTO 11 BT-02 DIARIO*/
	if(isset($_POST['id11bt02'])){
		$fecha = $_POST['date11bt02'];
		$cre = $_POST['id11bt02'];
		
		$pfecha = explode("/", $fecha);
		$nfecha = $pfecha[2]."-".$pfecha[0]."-".$pfecha[1];
		//echo "entro - ".$nfecha." - ".$cre;

		$bt = $_FILES["archivo11bt2"];
		//foreach ($bt as $key => $value) {
			//echo $key.' '.$value.'->';
		//}
		
		// se borro la parte de la fecha fin $mesfin = $mes+1; $mesfin = "0".$mesfin;  $fFecha = $a."-".$mesfin."-".$dia;
		$partes = explode("/", $cre);
		$id = $partes[0].$partes[1];
		
		$micarpeta = '../documents/Punto11/'.$id;
		if(!file_exists($micarpeta)){
			mkdir($micarpeta, 0777, true);
		}
		if($bt["type"] == "application/pdf"){
			$nom_encriptado = md5($bt["tmp_name"]).".pdf";
			$ruta = $micarpeta."/".$nom_encriptado;
			//echo $ruta;
			move_uploaded_file($bt["tmp_name"], $ruta);

			$sql = "INSERT INTO bitacoras (descripcion,direccion,fechaI,estatus,idCESH) VALUES ('bt-02 Diario','".$ruta."','".$nfecha."','P','".$cre."')";
			//echo $sql;
			if(mysqli_query($con,$sql)){
				echo "Carga Completa";
			}else{
				echo "Error:".mysqli_error($con);
			}
		}else{
			echo "Revisa el formato de tu archivo";
		}		
	}
	/*INSERT Y UPLOAD DE PUNTO 11 BT-02 MENSUAL*/
	if(isset($_POST['id11bt02m'])){
		$fecha = $_POST['date11bt02m'];
		$cre = $_POST['id11bt02m'];
		
		$pfecha = explode("/", $fecha);
		$nfecha = $pfecha[2]."-".$pfecha[0]."-".$pfecha[1];
		//echo "entro - ".$nfecha." - ".$cre;

		$bt = $_FILES["archivo11bt2m"];
		//foreach ($bt as $key => $value) {
			//echo $key.' '.$value.'->';
		//}
		
		// se borro la parte de la fecha fin $mesfin = $mes+1; $mesfin = "0".$mesfin;  $fFecha = $a."-".$mesfin."-".$dia;
		$partes = explode("/", $cre);
		$id = $partes[0].$partes[1];
		
		$micarpeta = '../documents/Punto11/'.$id;
		if(!file_exists($micarpeta)){
			mkdir($micarpeta, 0777, true);
		}
		if($bt["type"] == "application/pdf"){
			$nom_encriptado = md5($bt["tmp_name"]).".pdf";
			$ruta = $micarpeta."/".$nom_encriptado;
			//echo $ruta;
			move_uploaded_file($bt["tmp_name"], $ruta);

			$sql = "INSERT INTO bitacoras (descripcion,direccion,fechaI,estatus,idCESH) VALUES ('bt-02 Mensual','".$ruta."','".$nfecha."','P','".$cre."')";
			//echo $sql;
			if(mysqli_query($con,$sql)){
				echo "Carga Completa";
			}else{
				echo "Error:".mysqli_error($con);
			}
		}else{
			echo "Revisa el formato de tu archivo";
		}
	}
	/*INSERT Y UPLOAD DE PUNTO 11 BT-02 TRIMESTRAL*/
	if(isset($_POST['id11bt02t'])){
		$fecha = $_POST['date11bt02t'];
		$cre = $_POST['id11bt02t'];
		
		$pfecha = explode("/", $fecha);
		$nfecha = $pfecha[2]."-".$pfecha[0]."-".$pfecha[1];
		//echo "entro - ".$nfecha." - ".$cre;
		
		$bt = $_FILES["archivo11bt2t"];
		//foreach ($bt as $key => $value) {
			//echo $key.' '.$value.'->';
		//}
		
		// se borro la parte de la fecha fin $mesfin = $mes+1; $mesfin = "0".$mesfin;  $fFecha = $a."-".$mesfin."-".$dia;
		$partes = explode("/", $cre);
		$id = $partes[0].$partes[1];
		
		$micarpeta = '../documents/Punto11/'.$id;
		if(!file_exists($micarpeta)){
			mkdir($micarpeta, 0777, true);
		}
		if($bt["type"] == "application/pdf"){
			$nom_encriptado = md5($bt["tmp_name"]).".pdf";
			$ruta = $micarpeta."/".$nom_encriptado;
			//echo $ruta;
			move_uploaded_file($bt["tmp_name"], $ruta);

			$sql = "INSERT INTO bitacoras (descripcion,direccion,fechaI,estatus,idCESH) VALUES ('bt-02 Trimestral','".$ruta."','".$nfecha."','P','".$cre."')";
			//echo $sql;
			if(mysqli_query($con,$sql)){
				echo "Carga Completa";
			}else{
				echo "Error:".mysqli_error($con);
			}
		}else{
			echo "Revisa el formato de tu archivo";
		}
	}
	/*INSERT Y UPLOAD DE PUNTO 11 BT-02 CUATRIMESTRAL*/
	if(isset($_POST['id11bt02c'])){
		$fecha = $_POST['date11bt02c'];
		$cre = $_POST['id11bt02c'];
		
		$pfecha = explode("/", $fecha);
		$nfecha = $pfecha[2]."-".$pfecha[0]."-".$pfecha[1];
		//echo "entro - ".$nfecha." - ".$cre;

		$bt = $_FILES["archivo11bt2c"];
		//foreach ($bt as $key => $value) {
			//echo $key.' '.$value.'->';
		//}
		
		$partes = explode("/", $cre);
		$id = $partes[0].$partes[1];
		
		$micarpeta = '../documents/Punto11/'.$id;
		if(!file_exists($micarpeta)){
			mkdir($micarpeta, 0777, true);
		}
		if($bt["type"] == "application/pdf"){
			$nom_encriptado = md5($bt["tmp_name"]).".pdf";
        	$ruta = $micarpeta."/".$nom_encriptado;
			//echo $ruta;
			move_uploaded_file($bt["tmp_name"], $ruta);

			$sql = "INSERT INTO bitacoras (descripcion,direccion,fechaI,estatus,idCESH) VALUES ('bt-02 Cuatrimestral','".$ruta."','".$nfecha."','P','".$cre."')";
			//echo $sql;
			if(mysqli_query($con,$sql)){
				echo "Carga Correcta";
			}else{
				echo "Error:".mysqli_error($con);
			}
		}else{
			echo "Revisa el formato de tu archivo";
		}
	}
	/*INSERT Y UPLOAD DE PUNTO 11 BT-02 SEMESTRAL*/
	if(isset($_POST['id11bt02s'])){
		$fecha = $_POST['date11bt02s'];
		$cre = $_POST['id11bt02s'];
		
		$pfecha = explode("/", $fecha);
		$nfecha = $pfecha[2]."-".$pfecha[0]."-".$pfecha[1];
		//echo "entro - ".$nfecha." - ".$cre;

		$bt = $_FILES["archivo11bt02s"];
		//foreach ($bt as $key => $value) {
			//echo $key.' '.$value.'->';
		//}
		
		// se borro la parte de la fecha fin $mesfin = $mes+1; $mesfin = "0".$mesfin;  $fFecha = $a."-".$mesfin."-".$dia;
		$partes = explode("/", $cre);
		$id = $partes[0].$partes[1];
		
		$micarpeta = '../documents/Punto11/'.$id;
		if(!file_exists($micarpeta)){
			mkdir($micarpeta, 0777, true);
		}
		if($bt["type"] == "application/pdf"){
			$nom_encriptado = md5($bt["tmp_name"]).".pdf";
			$ruta = $micarpeta."/".$nom_encriptado;
			move_uploaded_file($bt["tmp_name"], $ruta);

			$sql = "INSERT INTO bitacoras (descripcion,direccion,fechaI,estatus,idCESH) VALUES ('bt-02 Semestral','".$ruta."','".$nfecha."','P','".$cre."')";
			//echo $sql;
			if(mysqli_query($con,$sql)){
				echo "Carga Completa";
			}else{
				echo "Error:".mysqli_error($con);
			}
		}else{
			echo "Revisa el formato de tu archivo";
		}
	}
	/*INSERT Y UPLOAD DE PUNTO 11 BT-02 ANUAL*/
	if(isset($_POST['id11bt02a'])){
		$fecha = $_POST['date11bt02a'];
		$cre = $_POST['id11bt02a'];
		
		$pfecha = explode("/", $fecha);
		$nfecha = $pfecha[2]."-".$pfecha[0]."-".$pfecha[1];
		//echo "entro - ".$nfecha." - ".$cre;

		$bt = $_FILES["archivo11bt02a"];
		//foreach ($bt as $key => $value) {
			//echo $key.' '.$value.'->';
		//}
		
		// se borro la parte de la fecha fin $mesfin = $mes+1; $mesfin = "0".$mesfin;  $fFecha = $a."-".$mesfin."-".$dia;
		$partes = explode("/", $cre);
		$id = $partes[0].$partes[1];
			
		$micarpeta = '../documents/Punto11/'.$id;
		if(!file_exists($micarpeta)){
			mkdir($micarpeta, 0777, true);
		}
		if($bt["type"] == "application/pdf"){
			$nom_encriptado = md5($bt["tmp_name"]).".pdf";
			$ruta = $micarpeta."/".$nom_encriptado;
			//echo $ruta;
			move_uploaded_file($bt["tmp_name"], $ruta);

			$sql = "INSERT INTO bitacoras (descripcion,direccion,fechaI,estatus,idCESH) VALUES ('bt-02 Anual','".$ruta."','".$nfecha."','P','".$cre."')";
			//echo $sql;
			if(mysqli_query($con,$sql)){
				echo "Carga Completa";
			}else{
				echo "Error:".mysqli_error($con);
			}
		}else{
			echo "Revisa el formato de tu archivo";
		}
	}
	/*INSERT Y UPLOAD DE PUNTO 11 BT-02 QUIN*/
	if(isset($_POST['id11bt02q'])){
		$fecha = $_POST['date11bt02q'];
		$cre = $_POST['id11bt02q'];
		
		$pfecha = explode("/", $fecha);
		$nfecha = $pfecha[2]."-".$pfecha[0]."-".$pfecha[1];
		//echo "entro - ".$nfecha." - ".$cre;
			
		$bt = $_FILES["archivo11bt02q"];
		//foreach ($bt as $key => $value) {
			//echo $key.' '.$value.'->';
		//}
		
		// se borro la parte de la fecha fin $mesfin = $mes+1; $mesfin = "0".$mesfin;  $fFecha = $a."-".$mesfin."-".$dia;
		$partes = explode("/", $cre);
		$id = $partes[0].$partes[1];
		
		$micarpeta = '../documents/Punto11/'.$id;
		if(!file_exists($micarpeta)){
			mkdir($micarpeta, 0777, true);
		}
		if($bt["type"] == "application/pdf"){
			$nom_encriptado = md5($bt["tmp_name"]).".pdf";
			$ruta = $micarpeta."/".$nom_encriptado;
			//echo $ruta;
			move_uploaded_file($bt["tmp_name"], $ruta);

			$sql = "INSERT INTO bitacoras (descripcion,direccion,fechaI,estatus,idCESH) VALUES ('bt-02 Quinquenal','".$ruta."','".$nfecha."','P','".$cre."')";
			//echo $sql;
			if(mysqli_query($con,$sql)){
				echo "Carga Completa";
			}else{
				echo "Error:".mysqli_error($con);
			}
		}else{
			echo "Revisa el formato de tu archivo";
		}
	}
	/*INSERT Y UPLOAD DE PUNTO 11 BT-03*/
	if(isset($_POST['id11bt03'])){
		$fecha = $_POST['date11bt03'];
		$cre = $_POST['id11bt03'];
		
		$pfecha = explode("/", $fecha);
		$nfecha = $pfecha[2]."-".$pfecha[0]."-".$pfecha[1];
		//echo "entro - ".$nfecha." - ".$cre;

		$bt = $_FILES["archivo11bt03"];
		//foreach ($bt as $key => $value) {
			//echo $key.' '.$value.'->';
		//}
		
		// se borro la parte de la fecha fin $mesfin = $mes+1; $mesfin = "0".$mesfin;  $fFecha = $a."-".$mesfin."-".$dia;
		$partes = explode("/", $cre);
		$id = $partes[0].$partes[1];
			
		$micarpeta = '../documents/Punto11/'.$id;
		if(!file_exists($micarpeta)){
			mkdir($micarpeta, 0777, true);
		}
		if($bt["type"] == "application/pdf"){
			$nom_encriptado = md5($bt["tmp_name"]).".pdf";
			$ruta = $micarpeta."/".$nom_encriptado;
			//echo $ruta;
			move_uploaded_file($bt["tmp_name"], $ruta);

			$sql = "INSERT INTO bitacoras (descripcion,direccion,fechaI,estatus,idCESH) VALUES ('bt-03','".$ruta."','".$nfecha."','P','".$cre."')";
			//echo $sql;
			if(mysqli_query($con,$sql)){
				echo "Carga Completa";
			}else{
				echo "Error:".mysqli_error($con);
			}
		}else{
			echo "Revisa el formato de tu archivo";
		}
	}
?>