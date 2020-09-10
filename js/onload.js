$("#inicioc").ready(function() {	
	//alert("esta es la funcion");
	id = localStorage.getItem("PL");
	//$(".nounderline").css("text-decoration","none");
	$(".nounderline").css("color","white");


	$.ajax({
		url: 'php/read.php',
		method:'POST',
		dataType:'html',
		data:{opc:"inicioPt", cre:id },
	})
	.done(function(msg) {
		//alert(msg);
		if( msg == ",,,,,,,,,,,,,,,,,,,,"){
			//$("#pt1").addClass('success');
			$("#pt1").css("background","#fb9678");
			$("#pt1").css("cursor","pointer");

			$("#pt2").css("background","#fb9678");
			
			$("#pt2Title").css("color","#6D6E6A");
			$("#pt2Text").css("color","#6D6E6A");


			$("#pt3").css("background","#fb9678");
			
			$("#pt3Title").css("color","#6D6E6A");
			$("#pt3Text").css("color","#6D6E6A");

			$("#pt4").css("background","#fb9678");
			
			$("#pt4Title").css("color","#6D6E6A");
			$("#pt4Text").css("color","#6D6E6A");

			$("#pt5").css("background","#fb9678");
			
			$("#pt5Title").css("color","#6D6E6A");
			$("#pt5Text").css("color","#6D6E6A");

			$("#pt6").css("background","#fb9678");
			
			$("#pt6Title").css("color","#6D6E6A");
			$("#pt6Text").css("color","#6D6E6A");

			$("#pt7").css("background","#fb9678");
			
			$("#pt7Title").css("color","#6D6E6A");
			$("#pt7Text").css("color","#6D6E6A");

			$("#pt8").css("background","#fb9678");
			
			$("#pt8Title").css("color","#6D6E6A");
			$("#pt8Text").css("color","#6D6E6A");

			$("#pt9").css("background","#fb9678");
			
			$("#pt9Title").css("color","#6D6E6A");
			$("#pt9Text").css("color","#6D6E6A");

			$("#pt10").css("background","#fb9678");
			
			$("#pt10Title").css("color","#6D6E6A");
			$("#pt10Text").css("color","#6D6E6A");

			$("#pt11").css("background","#fb9678");
			
			$("#pt11Title").css("color","#6D6E6A");
			$("#pt11Text").css("color","#6D6E6A");

			$("#pt12").css("background","#fb9678");
			
			$("#pt12Title").css("color","#6D6E6A");
			$("#pt12Text").css("color","#6D6E6A");

			$("#pt13").css("background","#fb9678");
			
			$("#pt13Title").css("color","#6D6E6A");
			$("#pt13Text").css("color","#6D6E6A");

			$("#pt14").css("background","#fb9678");
			
			$("#pt14Title").css("color","#6D6E6A");
			$("#pt14Text").css("color","#6D6E6A");

			$("#pt15").css("background","#fb9678");
			
			$("#pt15Title").css("color","#6D6E6A");
			$("#pt15Text").css("color","#6D6E6A");

			$("#pt16").css("background","#fb9678");
			
			$("#pt16Title").css("color","#6D6E6A");
			$("#pt16Text").css("color","#6D6E6A");

			$("#pt17").css("background","#fb9678");
			
			$("#pt17Title").css("color","#6D6E6A");
			$("#pt17Text").css("color","#6D6E6A");

			$("#pt18").css("background","#fb9678");
			
			$("#pt18Title").css("color","#6D6E6A");
			$("#pt18Text").css("color","#6D6E6A");
		}else{
			//alert(msg);
			sepador = ",";
			datos = msg.split(sepador);
			//alert(datos[19]);
			ci = localStorage.getItem("PL");
			if (datos[0] == ci) {
				//alert("valor del 1ro: "+datos[0]);
				$("#pt1").css("background","#00c292");
				$("#pt1").css("cursor","pointer");
				

				$("#pt2").css("background","#fb9678");
				$("#pt2Title").css("color","#333");
				$("#pt2Text").css("color","#333");
				$("#pt2").css("cursor","pointer");

				$("#pt3").css("background","#fb9678");
				
				$("#pt3Title").css("color","#6D6E6A");
				$("#pt3Text").css("color","#6D6E6A");

				$("#pt4").css("background","#fb9678");
				
				$("#pt4Title").css("color","#6D6E6A");
				$("#pt4Text").css("color","#6D6E6A");

				$("#pt5").css("background","#fb9678");
				
				$("#pt5Title").css("color","#6D6E6A");
				$("#pt5Text").css("color","#6D6E6A");

				$("#pt6").css("background","#fb9678");
				
				$("#pt6Title").css("color","#6D6E6A");
				$("#pt6Text").css("color","#6D6E6A");

				$("#pt7").css("background","#fb9678");
				
				$("#pt7Title").css("color","#6D6E6A");
				$("#pt7Text").css("color","#6D6E6A");

				$("#pt8").css("background","#fb9678");
				
				$("#pt8Title").css("color","#6D6E6A");
				$("#pt8Text").css("color","#6D6E6A");

				$("#pt9").css("background","#fb9678");
				
				$("#pt9Title").css("color","#6D6E6A");
				$("#pt9Text").css("color","#6D6E6A");

				$("#pt10").css("background","#fb9678");
				
				$("#pt10Title").css("color","#6D6E6A");
				$("#pt10Text").css("color","#6D6E6A");

				$("#pt11").css("background","#fb9678");
				
				$("#pt11Title").css("color","#6D6E6A");
				$("#pt11Text").css("color","#6D6E6A");

				$("#pt12").css("background","#fb9678");
				
				$("#pt12Title").css("color","#6D6E6A");
				$("#pt12Text").css("color","#6D6E6A");

				$("#pt13").css("background","#fb9678");
				
				$("#pt13Title").css("color","#6D6E6A");
				$("#pt13Text").css("color","#6D6E6A");

				$("#pt14").css("background","#fb9678");
				
				$("#pt14Title").css("color","#6D6E6A");
				$("#pt14Text").css("color","#6D6E6A");

				$("#pt15").css("background","#fb9678");
				
				$("#pt15Title").css("color","#6D6E6A");
				$("#pt15Text").css("color","#6D6E6A");

				$("#pt16").css("background","#fb9678");
				
				$("#pt16Title").css("color","#6D6E6A");
				$("#pt16Text").css("color","#6D6E6A");

				$("#pt17").css("background","#fb9678");
				
				$("#pt17Title").css("color","#6D6E6A");
				$("#pt17Text").css("color","#6D6E6A");

				$("#pt18").css("background","#fb9678");
				
				$("#pt18Title").css("color","#6D6E6A");
				$("#pt18Text").css("color","#6D6E6A");				
			}//FINAL DE PUNTO 1

			if (datos[1] == ci) {
				$("#pt2").css("background","#00c292");
				

				$("#pt3").css("background","#fb9678");
				$("#pt3Title").css("color","#333");
				$("#pt3Text").css("color","#333");
				$("#pt3").css("cursor","pointer");

				$("#pt4").css("background","#fb9678");
				$("#pt4").css("cursor","pointer");
				$("#pt4Title").css("color","#333");
				$("#pt4Text").css("color","#333");

				$("#pt5").css("background","#fb9678");
				$("#pt5").css("cursor","pointer");
				$("#pt5Title").css("color","#333");
				$("#pt5Text").css("color","#333");

				$("#pt7").css("background","#fb9678");
				$("#pt7").css("cursor","pointer");
				$("#pt7Title").css("color","#333");
				$("#pt7Text").css("color","#333");

				$("#pt11").css("background","#fb9678");
				$("#pt11").css("cursor","pointer");
				$("#pt11Title").css("color","#333");
				$("#pt11Text").css("color","#333");

				$("#pt13").css("background","#fb9678");
				$("#pt13").css("cursor","pointer");
				$("#pt13Title").css("color","#333");
				$("#pt13Text").css("color","#333");

				$("#pt15").css("background","#fb9678");
				$("#pt15").css("cursor","pointer");
				$("#pt15Title").css("color","#333");
				$("#pt15Text").css("color","#333");
			}//FINAL DE PUNTO 2

			if (datos[2] == ci) {
				$("#pt3").css("background","#00c292");
				$("#pt3").css("cursor","pointer");
			}//FINAL DE PUNTO 3

			if (datos[3] == ci) {
				$("#pt4").css("background","#00c292");
				$("#pt4").css("cursor","pointer");
			}//FINAL DE PUNTO 4

			if (datos[4] == ci) {
				$("#pt5").css("background","#00c292");
				$("#pt5").css("cursor","pointer");
				$("#pt5Title").css("color","#333");
				$("#pt5Text").css("color","#333");

				$("#pt6").css("cursor","pointer");
				$("#pt6Title").css("color","#333");
				$("#pt6Text").css("color","#333");

				$("#pt8").css("cursor","pointer");
				$("#pt8Title").css("color","#333");
				$("#pt8Text").css("color","#333");

				$("#pt9").css("cursor","pointer");
				$("#pt9Title").css("color","#333");
				$("#pt9Text").css("color","#333");

				$("#pt10").css("cursor","pointer");
				$("#pt10Title").css("color","#333");
				$("#pt10Text").css("color","#333");

				$("#pt14").css("cursor","pointer");
				$("#pt14Title").css("color","#333");
				$("#pt14Text").css("color","#333");
			}//FINAL DE PUNTO 5

			if (datos[5] == ci) {
				$("#pt6").css("background","#00c292");
				$("#pt6").css("cursor","pointer");
			}//FINAL DE PUNTO 6

			if (datos[6] == ci) {
				$("#pt7").css("background","#00c292");
				$("#pt7").css("cursor","pointer");
			}//FINAL DE PUNTO 7

			if (datos[7] == ci) {
				$("#pt8").css("background","#00c292");
				
			}//FINAL DE PUNTO 8

			if ((datos[8] == ci) || (datos[9] == ci)) {
				$("#pt9").css("background","#00c292");
				$("#pt9").css("cursor","pointer");
			}//FINAL DE PUNTO 9

			if ((datos[10] == ci)||(datos[11] == ci)||(datos[12] == ci)||(datos[13] == ci)) {
				$("#pt10").css("background","#00c292");
				$("#pt10").css("cursor","pointer");
							
				$("#pt12").css("cursor","pointer");

				$("#pt16").css("cursor","pointer");
				$("#pt16Title").css("color","#333");
				$("#pt16Text").css("color","#333");
			}//FINAL DE PUNTO 10

			if (datos[14] == ci) {
				$("#pt11").css("background","#00c292");
				$("#pt11").css("cursor","pointer");
			}//FINAL DE PUNTO 11

			if ((datos[15] == ci)||(datos[16] == ci)) {
				$("#pt12").css("background","#00c292");
				$("#pt12").css("cursor","pointer");
				$("#pt12Title").css("color","#333");
				$("#pt12Text").css("color","#333");
			}//FINAL DE PUNTO 12

			if (datos[17] == ci) {
				$("#pt13").css("background","#00c292");
				
			}//FINAL DE PUNTO 13

			if (datos[18] == ci) {
				$("#pt14").css("background","#00c292");
				$("#pt14").css("cursor","pointer");
			}//FINAL DE PUNTO 14

			if (datos[19] == ci) {
				$("#pt15").css("background","#00c292");
				$("#pt15").css("cursor","pointer");
			}//FINAL DE PUNTO 15

			if (datos[20] == ci) {
				//alert(datos[20]);
				$("#pt16").css("background","#00c292");
				$("#pt16").css("cursor","pointer");

				$("#pt17").css("cursor","pointer");
				$("#pt17Title").css("color","#333");
				$("#pt17Text").css("color","#333");

	 			$("#pt18").css("cursor","pointer");
				$("#pt18Title").css("color","#333");
				$("#pt18Text").css("color","#333");
			}//FINAL DE PUNTO 16

			if (datos[21] == ci) {
				//alert(datos[21]);
				$("#pt17").css("background","#00c292");
				
			}//FINAL DE PUNTO 17

			if (datos[22] == ci) {	
				//alert(datos[22]);
				$("#pt18").css("background","#00c292");
				
			}//FINAL DE PUNTO 18
		}
	})
	/*.fail(function() {
		console.log("error");
	})
	.always(function() {
		console.log("complete");
	});*/
	
});

$("#nombreestacion").ready(function() {
	//alert("32 33");
	razon = localStorage.getItem("RS");
	$("#dataRS").text(razon);		
});


$("#nombreestacioncompleto").ready(function() {
	//alert("32 33");
	razon = localStorage.getItem("RS");
	cre = localStorage.getItem("PL")
	$("#dataRS").text(razon);
	$("#datacre").text(cre);
});


$("#calendarioact").ready(function() {
	
});


/*$("#auditoriaNumero").ready(function() {
	cre = localStorage.getItem("PL");
	$.ajax({
		url: 'php/read.php',
		method:'POST',
		dataType:'html',
		data:{opc:"punto15", cre:cre },
	})
	.done(function(msg) {
		alert(msg);
	})
});*/
