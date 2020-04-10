<?php
	include 'conex.php';
	//require '../documents/';
	$con = Conectarse();

	$id=$_GET['c'];
	//echo $id;
	list($l,$num) = split('[/]',$id);
	$fold = $l.$num; //creacion de nombre de carpeta
	//echo $fold;
	$files = array("C:\\xampp\\htdocs\\ImplementS\\documents\\Punto8\\$fold\\08-FM-01.pdf","C:\\xampp\\htdocs\\ImplementS\\documents\\Punto8\\$fold\\08-FM-02.pdf","C:\\xampp\\htdocs\\ImplementS\\documents\\Punto8\\$fold\\08-PR-01.pdf");
	$archivos =  $fold.'-08SASISOPA.zip'; //nombre de ZIP salida
	/* 1 */$zip = new ZipArchive;
	/* 2 */$zipname = "C:\\xampp\\htdocs\\ImplementS\\documents\\Punto8\\$fold\\$archivo";
	/* 2 */$zip->open($zipname, ZipArchive::CREATE);
	foreach ($files as $file){
		$localfile = basename($file);
		/* 3 */$zip->addFile($file, $localfile);
	}
	if(is_file($zipname)){
		$sql = "INSERT INTO control (estatus, idCESH) VALUES ('SI','".$id."')";
		if(mysqli_query($con,$sql)){
			header('Content-Type: application/zip');
			header("Content-Disposition: attachment; filename=$archivos");
			header('Content-Transfer-Encoding: binary');
			header('Content-Length: '.filesize($zipname));
			unlink($archivos)
		}else{
			echo "Error:".mysqli_error($con);
		}		
		//echo $sql;
	}	
?>