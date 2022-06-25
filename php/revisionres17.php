<?php
    $permiso = $_POST['permiso'];

    $politica = "SELECT direccion FROM politica WHERE idCESH = '".$permiso."' GROUP BY idCESH";
    $p=0;
    $pt1res = mysqli_query($con, $politica);
    if($pt1res->num_rows > 0){
        while($filaPol = $pt1res->fetch_assoc()){
            $politicadir = $filaPol['direccion'];
            $dirpolitica [$p] = $politicadir;
            $p++;
        }
        $menorp=$p-1;
        $dirpolitica[$p]=$menorp;
    }else{
        $dirpolitica[0] = "-";
    }

    $ar = "SELECT direccion FROM ar WHERE idCESH = '".$permiso."' GROUP BY idCESH";
    $a=0;
    $pt2res = mysqli_query($con, $ar);
    if($pt2res->num_rows > 0){
        while($filaAR = $pt2res->fetch_assoc()){
            $ardireccion = $filaAR['direccion'];
            $dirar [$a] = $ardireccion;
            $a++;
        }
        $menora=$a-1;
        $dirar[$a]=$menora;
    }else{
        $dirar[0] = "-";
    }

    $control = "SELECT direccion FROM dzbitacora WHERE idCESH = '".$permiso."' GROUP BY idCESH";
    $b=0;
    $pt10 = mysqli_query($con, $control);
    if($pt10->num_rows > 0) {
        while($filabit = $pt10->fetch_assoc()){
            $bitdireccion = $filabit['direccion'];
            $dirbit[$b] = $bitdireccion;
            $b++;
        }
        $menorb = $b-1;
        $dirbit[$b]=$menorb;
    }else{
        $dirbit[0] = "-";
    }

    $bitacoras = "SELECT direccion FROM bitacoras WHERE idCESH = '".$permiso."' GROUP BY idCESH";
    $b11=0;
    $pt11 = mysqli_query($con, $bitacoras);
    if($pt11->num_rows > 3){
        while($filabit11 = $pt11->fetch_assoc()){
            $bit11direccion = $filabit11['direccion'];
            $dirbit11[$b11] = $bit11direccion;
            $b11++;
        }
        $menorb11 = $b11-1;
        $dirbit11[$b11]=$menorb11;
    }else{
        $dirbit11[0]="-";
    }

    $pres = "SELECT direccion FROM pre WHERE idCESH = '".$permiso."' GROUP BY idCESH";
    $pr=0;
    $pt13 = mysqli_query($con, $pres);
    if($pt13->num_rows > 0){
        while($filapre = $pt13->fetch_assoc()){
            $predireccion = $filapre['direccion'];
            $dirpre[$b11] = $predireccion;
            $pr++;
        }
        $menorpr = $pr-1;
        $dirbit[$pr]=$menorpr;
    }

    $j = 0;
    $queryrevision = "SELECT meta, observacion, fechaRevision, estatus FROM revision WHERE idCESH = '".$permiso."'";
    //echo $queryrevision;
    $resultadorevision = mysqli_query($con, $queryrevision);
    if($resultadorevision->num_rows > 0){
        while($resrev = $resultadorevision->fetch_assoc()){
            $meta = $resrev['meta'];
            $observacion = $resrev['observacion'];
            $fechaRevision = $resrev['fechaRevision'];
            $estatus = $resrev['estatus'];

            $datos1 [$j] = $meta;
            $datos1 [$j+18] = $estatus;
            $datos1 [$j+36] = $fechaRevision;
            $datos1 [$j+54] = $observacion;          
            
            $j++;
        }
        //$resultadoarr = array_merge($datos1,$dirpolitica,$dirar,$dirbit,$dirbit11,$dirpre); // union de todos las respuesta para mandar las direcciones de archivos pero no funciona dado que no solo tienen una sino varias.
        //$respuesta = implode(",", $datos1);
        //echo $respuesta;
        //echo var_dump($datos1);
        echo "OK";
    }else{
        echo "Vacio";
    }
?>
    <table class='table table-cl'>+
	    <thead style='background: rgb(198,198,198);'>+
			<tr>
                <th>#</th>
                <th>Estatus</th>
                <th>Fecha</th>
                <th>Comentarios</th>
            </tr>
        </thead>
		<!-- 									<tbody>+
													<tr>+
														<td>+revi17[0]+</td> <td>+revi17[1]+</td>+<td>+revi17[2]+</td> <td> <input value='+revi17[3]+'>+</td>+
													</tr>+
													<tr>+
														<td>+revi17[4]+</td> <td>+revi17[5]+</td>+<td>+revi17[6]+</td> <td><input value='+revi17[7]+'>+</td>+
													</tr>+
													<tr>+
														<td>+revi17[8]+</td> <td>+revi17[9]+</td>+<td>+revi17[10]+</td> <td> <input value='+revi17[11]+'>+</td>+
													</tr>+
													<tr>+
														<td>+revi17[12]+</td> <td>+revi17[13]+</td>+<td>+revi17[14]+</td> <td> <input value='+revi17[15]+'>+</td>+
													</tr>+
													<tr>+
														<td>+revi17[16]+</td> <td>+revi17[17]+</td>+<td>+revi17[18]+</td> <td><input value='+revi17[19]+'>+</td>+
													</tr>+
													<tr>+
														<td>+revi17[20]+</td> <td>+revi17[21]+</td>+<td>+revi17[22]+</td> <td><input value='+revi17[23]+'>+</td>+
													</tr>+
													<tr>+
														<td>+revi17[24]+</td> <td>+revi17[25]+</td>+<td>+revi17[26]+</td> <td><input value='+revi17[27]+'>+</td>+
													</tr>+
													<tr>+
														<td>+revi17[28]+</td> <td>+revi17[29]+</td>+<td>+revi17[30]+</td> <td><input value='+revi17[31]+'>+</td>+
													</tr>+
													<tr>+
														<td>+revi17[32]+</td> <td>+revi17[33]+</td>+<td>+revi17[34]+</td> <td><input value='+revi17[35]+'>+</td>+
													</tr>+
													<tr>+
														<td>+revi17[36]+</td> <td>+revi17[37]+</td>+<td>+revi17[38]+</td> <td><input value='+revi17[39]+'>+</td>+
													</tr>+
													<tr>+
														<td>+revi17[40]+</td> <td>+revi17[41]+</td>+<td>+revi17[42]+</td> <td><input value='+revi17[43]+'>+</td>+
													</tr>+
													<tr>+
														<td>+revi17[44]+</td> <td>+revi17[45]+</td>+<td>+revi17[46]+</td> <td><input value='+revi17[47]+'>+</td>+
													</tr>+
													<tr>+
														<td>+revi17[48]+</td> <td>+revi17[49]+</td>+<td>+revi17[50]+</td> <td><input value='+revi17[51]+'>+</td>+
													</tr>+
													<tr>+
														<td>+revi17[52]+</td> <td>+revi17[53]+</td>+<td>+revi17[54]+</td> <td><input value='+revi17[55]+'>+</td>+
													</tr>+
													<tr>+
														<td>+revi17[56]+</td> <td>+revi17[57]+</td>+<td>+revi17[58]+</td> <td><input value='+revi17[59]+'>+</td>+
													</tr>+
													<tr>+
														<td>+revi17[60]+</td> <td>+revi17[61]+</td>+<td>+revi17[62]+</td> <td><input value='+revi17[63]+'>+</td>+
													</tr>+
													<tr>+
														<td>+revi17[64]+</td> <td>+revi17[65]+</td>+<td>+revi17[66]+</td> <td><input value='+revi17[67]+'>+</td>+
													</tr>+
													<tr>+
														<td>+revi17[68]+</td> <td>+revi17[69]+</td>+<td>+revi17[70]+</td> <td><input value='+revi17[71]+'>+</td>+
													</tr>+
												</tbody>+-->
	</table> 