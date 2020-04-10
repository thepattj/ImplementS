<?php
	include 'conex.php';
	$con = Conectarse();
		/* $archivos =  '16-FM.zip';

		$ruta = 'C:/xampp/htdocs/ImplementS/documents/Punto16/16-FM.zip';

		if(is_file($ruta)){
			header('Content-Type: application/force-download');
			header('Content-Disposition: attachment; filename='.$archivos);
			header('Content-Transfer-Encoding: binary');
			header('Content-Length: '.filesize($ruta));
		} */
	$archivos =  '16-FM.zip';

	$files = array('C:\\xampp\\htdocs\\ImplementS\\documents\\Punto16\\16-FM-01.pdf','C:\\xampp\\htdocs\\ImplementS\\documents\\Punto16\\16-FM-02.pdf','C:\\xampp\\htdocs\\ImplementS\\documents\\Punto16\\16-FM-03.pdf','C:\\xampp\\htdocs\\ImplementS\\documents\\Punto16\\16-FM-04.pdf','C:\\xampp\\htdocs\\ImplementS\\documents\\Punto16\\16-FM-05.pdf','C:\\xampp\\htdocs\\ImplementS\\documents\\Punto16\\16-FM-06.pdf');
	/* 2 */$zipname = 'C:\\xampp\\htdocs\\ImplementS\\documents\\Punto16\\16-FM.zip';
	/* 1 */$zip = new ZipArchive;
	/* 2 */$zip->open($zipname, ZipArchive::CREATE);
	foreach ($files as $file){
		$localfile = basename($file);
		/* 3 */$zip->addFile($file, $localfile);
	}
	$zip->close();

	header("Content-type: application/zip");
	header("Content-Disposition: attachment; filename=$archivos");
	header('Content-Transfer-Encoding: binary');
	header('Content-Length: '.filesize($zipname));

	unlink($archivos);
?>