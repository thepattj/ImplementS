<?php
	include 'conex.php';
	$con = Conectarse();

	/*INSERT Y UPLOAD DE POLITICA*/
	if(isset($_POST['opc'])){
		//echo "entra a politica";
		$id = $_POST['cre'];
		$cesh = $_POST['ic'];
		//echo "entro - ".$id. " - ".$cesh;
		$politica = $_FILES["archviopol"];
		/*foreach ($politica as $key => $value) {
			echo $key.' '.$value.'->';
		}*/

		$micarpeta = '../documents/Punto1/'.$id;
		//echo $micarpeta;
		if(!file_exists($micarpeta)){
			mkdir($micarpeta, 0777, true);
		}
		
		if($politica["type"] == "image/jpg" or $politica["type"] == "image/jpeg"){
			$nom_encriptado = md5($politica["tmp_name"]).".jpg";
			$ruta = "../documents/Punto1/".$id."/".$nom_encriptado;
			//echo $ruta;
			move_uploaded_file($politica["tmp_name"], $ruta);

			$sql = "INSERT INTO politica (direccion,idCESH) VALUES ('".$ruta."','".$cesh."')";
			//echo $sql;
			if(mysqli_query($con,$sql)){
				echo "Insert Correct";
			}else{
				echo "Error:".mysqli_error($con);
			}
		}else{
			echo "Verifica tu formato de imagen";
		}
	}
	/*INSERT Y UPLOAD DE AR*/
	if(isset($_POST['opcar'])){
		$cesh = $_POST['icar'];
		$id = $_POST['crear'];
		//echo "entro - ".$id. " - ".$cesh;
		$ar = $_FILES["archivoAR"];
		/*foreach ($ar as $key => $value) {
			echo $key.' '.$value.'->';
		}*/

		$micarpeta = '../documents/Punto2/'.$id;
		//echo $micarpeta;
		if(!file_exists($micarpeta)){
			mkdir($micarpeta, 0777, true);
		}
		
		if($ar["type"] == "application/pdf"){
			$nom_encriptado = md5($ar["tmp_name"]).".pdf";
			$ruta = "../documents/Punto2/".$id."/".$nom_encriptado;
			//echo $ruta;
			move_uploaded_file($ar["tmp_name"], $ruta);

			$sql = "INSERT INTO ar (direccion,idCESH) VALUES ('".$ruta."','".$cesh."')";
			//echo $sql;
			if(mysqli_query($con,$sql)){
				echo "Insert Correct";
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
		$mesup = $_POST['mesconcentrado'];
		//echo "entro - ".$id. " - ".$cesh." - ".$mesup;
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

			$sql = "INSERT INTO sugque (fecha,direccion,idCESH) VALUES ('".$mesup."','".$ruta."','".$cesh."')";
			//echo $sql;
			if(mysqli_query($con,$sql)){
				echo "Insert Correct";
			}else{
				echo "Error:".mysqli_error($con);
			}
		}else{
			echo "Revisa el formato de tu archivo";
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
				echo "Insert Correct";
			}else{
				echo "Error:".mysqli_error($con);
			}
		}else{
			echo "Revisa el formato de tu archivo";
		}
	}

	

	
?>