
$(document).ready(function(){
	paginacion = 1;

	$("#btnclosei").click(function() { //BOTON DE CERRAR EN INICIO
		window.location.href = "index.php"
	});

	/*INICIO DE SESION POR TIPO DE USUARIO*/
	$("#btnInicio").click(function() {
		//alert("Va a ingresar a pagina inicio");
		u = $('#user').val();
		c = $("#pass").val(); //servicio
		if((u != "") && (c !="")){
			//alert("traen valores");
			$.ajax({
				url:'php/read.php',
				method:'POST',
				dataType:'html',
				data:{opc:"user", user:u, pass:c},
			})
			.done(function(msg){
				//alert(msg);
				sepador = ",";
				a = msg.split(sepador);
				//alert(a[4]+a[5]);
				if(msg == "Hablar con un Asesor de Energas."){
					alert(msg);
				}else{
					if(a[0] == ""){
					alert("Error en datos favor de validar");
					}if(a[0] == "Admin"){
						//alert("Entra a Admin");
						window.location.href = "inicio.php?ty="+a[0]+"&x=";
					}if(a[0] == "sasisopa"){
						//alert("Entra a SASISOPA");
						window.location.href = "inicio.php?ty="+a[0]+"&x=";
					}if (a[0] == "RL") {
						//alert("RL");
					}if(a[0] == "estacion"){
						alert("Ingreso exitoso"); //aqui hay que ver si se puede cambiar por un MODAL
						window.location.href = "inicio.php?ty="+a[0]+"&x="+a[3];
						localStorage.setItem("NES",a[2]);
						localStorage.setItem("PL",a[3]);
						localStorage.setItem("RS",a[4]+a[5]);
					}
				}
				//window.open('inicio.php');
			});
		} else { alert("no trae nada.")}
	});

	//USUARIO SASISOPA
	/*MUESTRA LOS MENUS DE ESTACIONES*/
	$("#btnstasasi").click(function(){
		$("#spaesta").show('slow/400/fast');
		$("#btnaddst").show('slow/400/fast');
		$("#btnupdst").show('slow/400/fast');
		$("#btnAdu").show('slow/400/fast');

		$("#btnsas").hide('slow/400/fast');
		$("#btnbl").hide('slow/400/fast');
	});
	/*MUESTRA LOS MENUS DE BLOQ Y IMPLEMENTACION*/
	$("#btnsasisasi").click(function(){
		$("#spaesta").show('slow/400/fast');
		$("#btnsas").show('slow/400/fast');
		$("#btnbl").show('slow/400/fast');
		$("#btnaddst").hide('slow/400/fast');
		$("#btnupdst").hide('slow/400/fast');
		$("#btnAdu").hide('slow/400/fast');		
	});
	/*AGREGA UNA ESTACION A LA BASE DE DATOS*/
	$("#btnGuardarEstacion").click(function() {
		razonSocial = $('#RS').val();
		cre = $('#PL').val();
		noEst = $('#idStation').val();
		fran = $('#franq').val();
		dFiscal = $('#dirFis').val();
		rfcEst = $('#rfcStation').val();
		uEst = $('#ubiStation').val();
		tEst = $('#telStation').val();
		cEst = $('#correoASEA').val();
		rL = $('#nameRL').val();
		rfcR = $('#rfcRL').val();
		curpR = $('#curpRL').val();
		estadoS = $('#estadoStation').val();

		if((razonSocial != "") && (cre !="") && (noEst !="") && (fran !="") && (dFiscal !="") && (rfcEst !="") && (uEst !="") && (tEst !="") && (cEst !="") && (rL !="") && (rfcR !="") && (curpR !="") && (estadoS !="")){
			//alert("traen valores");
			//alert(razonSocial+cre+noEst+fran+dFiscal+rfcEst+uEst+tEst+cEst+rL+rfcR+curpR+estadoS);
			$.ajax({
				url:'php/insert.php',
				method:'POST',
				dataType:'html',
				data:{opc:"addSt", razonSocial:razonSocial, PL:cre, idCESH:noEst, franquicia:fran, direccionFiscal:dFiscal, rfc:rfcEst, ubicacion:uEst, telefono:tEst, correo:cEst, rl:rL, rfcRl:rfcR, curpRl:curpR, idEstado:estadoS},
			})
			.done(function(msg){
				if(msg == 1){
					//alert("YA QUEDO! ENTONCES HAY QUE DARLE LA CONTRASEÑA AQUI!");
					sepador = "/";
					a = cre.split(sepador,2);
					console.log(a);
					pw = a[0]+a[1];
					//console.log("esta es la contraseña"+pw);
					localStorage.setItem("U",rfcEst);
					localStorage.setItem("W",pw);
					localStorage.setItem("S",noEst);
					$('#userentry').text(rfcEst);
					$('#pssentry').text(pw);


				}else{
					alert(msg);
				}
			});	
		} else { alert("no trae nada.")}
	});
	/*MUESTRA LOS DATOS FINALES DE USUARIO Y CONTRASEÑA*/
	$("#btnCerrarModals").click(function() {
		//alert("SI DA EL CLIC");
		user = localStorage.getItem("U");
		pss = localStorage.getItem("W");
		noS = localStorage.getItem("S");
		//alert("estos son los datos"+user+" "+pss);
		$.ajax({
			url: 'php/insert.php',
			type: 'POST',
			dataType: 'html',
			data: {opc: 'usuario', u:user, pw:pss, idC:noS},
		})
		.done(function(msg) {
			console.log(msg);
		});
		//window.location.href = "inicio.php?ty=sasisopa";
		location.reload();
	});
	/*BOTON QUE SELECIONA LOS DATOS DE LA ESTACION A ACTUALIZAR*/
	$("#btnSeleccionarEstacion").click(function() {
		/* Act on the event */
		valor = $("#nombreEstacion").val();
		//alert("s "+valor);
		$("#actuB").show();
		$("#actuF").show();
		$.ajax({
			url: 'php/read.php',
			method:'POST',
			dataType:'html',
			data:{opc:"sel", i:valor },
		})
		.done(function(msg) {
			//console.log("success");
			//alert(msg);
			sepador = "*";
			datos = msg.split(sepador);
			$("#PLu").val(datos[0]);
			$("#idStationu").val(datos[1]);
			$("#RSu").val(datos[2]);
			$("#franqu").val(datos[3]);
			$("#dirFisu").val(datos[4]);
			$("#rfcStationu").val(datos[5]);
			$("#ubiStationu").val(datos[6]);
			$("#telStationu").val(datos[7]);
			$("#correoASEAu").val(datos[8]);
			$("#nameRLu").val(datos[9]);
			$("#rfcRLu").val(datos[10]);
			$("#curpRLu").val(datos[11]);
		})		
	});
	/*ACTUALIZA LOS DATOS ATRAVEZ DE UN PHP*/
	$("#btnActualizarEstacion").click(function() {
		/* Act on the event */
		upl = $("#PLu").val();
		unst = $("#idStationu").val();
		urs = $("#RSu").val();
		ufr = $("#franqu").val(); 
		udifis = $("#dirFisu").val();
		urfst = $("#rfcStationu").val();
		ubist = $("#ubiStationu").val();
		utel = $("#telStationu").val();
		ucor = $("#correoASEAu").val();
		uname = $("#nameRLu").val();
		urfcrl = $("#rfcRLu").val();
		ucrrl = $("#curpRLu").val();
		//uest
		//

		$.ajax({
			url: 'php/update.php',
			method:'POST',
			dataType:'html',
			data:{opc:"upSt",  pl:upl, nosta:unst, rzs:urs, fq:ufr, dst:udifis, rsta:urfst, usta:ubist, tsta:utel, mail:ucor, nrls:uname, rrls:urfcrl, crls:ucrrl },
		})
		.done(function(msg) {
			alert(msg);
		})	
	});
	/*ABRIR PAGINA PARA PODER BLOQUEAR*/
	$("#btnsas").click(function() {
		/* Act on the event */
		window.open('bloqPts.php', '_self');
	});


	/*USARIO ESTACION*/
	/*BOTONES DE MOVIMIENTO DE PUNTOS*/
	/*Boton de inicio*/
	$("#btninicio").click(function(){
		$("#1pt").show();
		$("#2pt").hide();
		$("#3pt").hide();
		$("#4pt").hide();
		$("#5pt").hide();
		paginacion = 1;
	});

	/*BOTON ATRAS */
	$("#btnatras").click(function() {
		if((paginacion <= 2)&&(paginacion > 1)){
			//alert("enable");
			paginacion = 1;
			$("#1pt").show();
			$("#2pt").hide();
			$("#3pt").hide();
			$("#4pt").hide();
			$("#5pt").hide();
		}else{
			paginacion = paginacion -1
			if(paginacion == 5){
				$("#1pt").hide();
			 	$("#2pt").hide();
			 	$("#3pt").hide();
			 	$("#4pt").hide();
			 	$("#5pt").show();
			}
			if (paginacion == 4) {
				$("#1pt").hide();
			 	$("#2pt").hide();
			 	$("#3pt").hide();
			 	$("#4pt").show();
			 	$("#5pt").hide();
			}
			if (paginacion == 3) {
				$("#1pt").hide();
			 	$("#2pt").hide();
			 	$("#3pt").show();
			 	$("#4pt").hide();
			 	$("#5pt").hide();
			}
			if (paginacion == 2) {
				$("#1pt").hide();
			 	$("#2pt").show();
			 	$("#3pt").hide();
			 	$("#4pt").hide();
			 	$("#5pt").hide();
			}
		}
	}); 
	/*BOTON ADELANTE*/
	$("#btnadelante").click(function() {//Boton adelante
		/* Act on the event */
		if(paginacion > 5){
			//alert("enable");
			paginacion = 5;
		}else{
			paginacion = paginacion+1;
			if(paginacion == 2){
				$("#1pt").hide();
			 	$("#2pt").show();
			 	$("#3pt").hide();
			 	$("#4pt").hide();
			 	$("#5pt").hide();
			}
			if(paginacion == 3){
				$("#1pt").hide();
			 	$("#2pt").hide();
			 	$("#3pt").show();
			 	$("#4pt").hide();
			 	$("#5pt").hide();
			}
			if(paginacion == 4){
				$("#1pt").hide();
			 	$("#2pt").hide();
			 	$("#3pt").hide();
			 	$("#4pt").show();
			 	$("#5pt").hide();
			}
			if(paginacion == 5){
				$("#1pt").hide();
			 	$("#2pt").hide();
			 	$("#3pt").hide();
			 	$("#4pt").hide();
			 	$("#5pt").show();
			}
		}
	}); 
	/*BOTON HASTA EL FINAL */
	$("#btnfinal").click(function() {//Boton final
		$("#5pt").show();
		$("#1pt").hide();
	 	$("#2pt").hide();
	 	$("#3pt").hide();
	 	$("#4pt").hide();
	 	paginacion = 5;
	}); 

	/*PUNTOS DE SASISOPA QUE ABREN OTRA PAGINA*/
	$("#pt3").click(function() {
		//alert("HOLI");
		z = localStorage.getItem("PL");
		window.open('pt3.php?x='+z, '_blank');
		//window.open('pt3.php', '_self');
	});	
	$("#pt5").click(function() {
		//alert("HOLI");
		z = localStorage.getItem("PL");
		window.open('pt5.php?x='+z, '_blank');
		//window.open('pt3.php', '_self');
	});	
	$("#pt6").click(function() {
		//alert("HOLI");
		z = localStorage.getItem("PL");
		window.open('pt6.php?x='+z, '_blank');
		//window.open('pt3.php', '_self');
	});
	$("#pt9").click(function() {
		//alert("HOLI");
		z = localStorage.getItem("PL");
		window.open('pt9.php?x='+z, '_blank');
		//window.open('pt3.php', '_self');
	});	
	$("#pt10").click(function() {
		//alert("HOLI");
		z = localStorage.getItem("PL");
		window.open('ptX.php?x='+z, '_blank');
		//window.open('pt3.php', '_self');
	});
	$("#pt11").click(function() {
		//alert("HOLI");
		z = localStorage.getItem("PL");
		window.open('ptXI.php?x='+z, '_blank');
		//window.open('ptXI.php', 'blank');
	});
	$("#pt12").click(function() {
		//alert("HOLI");
		window.open('ptXII.php', '_blank');
		//window.open('pt3.php', '_self');
	});	
	$("#pt14").click(function() {
		//alert("HOLI");
		z = localStorage.getItem("PL");
		window.open('ptXIV.php?x='+z, '_blank');
		//window.open('pt3.php', '_self');
	});	
	$("#pt15").click(function() {
		//alert("HOLI");
		window.open('ptXV.php', '_blank');
		//window.open('pt3.php', '_self');
	});	

	$("#pt17").click(function() {
		//alert("HOLI");
		window.open('ptXVIII.php', '_blank');
		//window.open('pt3.php', '_self');
	});

	$("#pt18").click(function() {
		//alert("HOLI");
		window.open('ptXVIII.php', '_blank');
		//window.open('pt3.php', '_self');
	});


	//CLIC DE CALENDARIO
	$("#actcal").click(function() {
		//alert("HOLI");
		window.open('calendarioA.php', '_blank');
		//window.open('pt3.php', '_self');
	});



	$(".updatecalendario").click(function() {
		alert("ajax");
	});
	$(".update11").click(function() {
		z = localStorage.getItem("PL");
		window.open('ptXI.php?x='+z, '_blank');
	});
	$(".update10").click(function() {
		z = localStorage.getItem("PL");
		window.open('ptX.php?x='+z, '_blank');
	});
	$(".updatemon").click(function() {
		alert("ajax");
	});

	/*Accion de modal Politica - PUNTO 1*/
	$("#btnGuardarP").click(function(){
		cre = localStorage.getItem("PL");
		sepador = "/";
		sid = cre.split(sepador);
		id = sid[0]+sid[1];
		
		$("#ic").val(cre)
		$("#cre").val(id);
		$("#opc").val("pol");

		valores = new FormData($("#enviarP")[0]);
		//valores.append("opc",opc,"cre", id);
		$.ajax({
				//data:{opc:"pol", cre:id},
				data: valores,
				url:'php/upload.php',
				method:'POST',
				dataType:'html',
				contentType: false,
				processData: false,
				
			})
			.done(function(msg){
				alert(msg);
			});
		//location.reload();
	});
	/*Accion de modal AR - PUNTO 2*/
	$("#btnGuardarAR").click(function(){
		cre = localStorage.getItem("PL");
		sepador = "/";
		sid = cre.split(sepador);
		id = sid[0]+sid[1];
		
		$("#icar").val(cre)
		$("#crear").val(id);
		$("#opc[name=opcar]").val("ar");

		valores = new FormData($("#enviarAR")[0]);
		$.ajax({
				data: valores,
				url:'php/upload.php',
				method:'POST',
				dataType:'html',
				contentType: false,
				processData: false,
				
			})
			.done(function(msg){
				alert(msg);
			});
		location.reload();
	});

	/*BOTONES QUE SE USAN PARA MOVER LA INFROMACION QUE SE SOLICITA PUNTO 3*/
	
	//DOCUMENTACION LEGAL
	$("#btnlegal").click(function() {
		$("#legal").show();
		$("#legis").hide();
		$("#asea").hide();
		$("#profeco").hide();
		$("#cre").hide();
		$("#pc").hide();
		$("#semt").hide();
		$("#stps").hide();
		$("#se").hide();
	});
	/*BOTON ACTA CUMPLE*/
	$("#cActa").click(function() {	
		//alert("entra");
		statusActa = $("#cActa").text();
		//alert("es: "+statusActa);

		if(statusActa == " - "){
			//alert("Si");
			$("#cActa").text("Si");
			$("#cActa").addClass("active");
			cumActa = "Si";
		}if(statusActa == "Si"){
			//alert("No");
			$("#cActa").text("No");
			$("#cActa").addClass("success");
			$("#cActa").removeClass("active");
			cumActa = "No";
		}if(statusActa == "No"){
			//alert("otra SI");
			$("#cActa").text("Si");
			$("#cActa").addClass("active");
			$("#cActa").removeClass("success");
			cumActa = "Si";
		}
		//console.log(cumActa);
		//$("#cActa").val("Si");
	});
	/*BOTON PODER CUMPLE*/
	$("#cPNot").click(function(){
		//alert("entra");
		statusPoder = $("#cPNot").text();
		//alert("es: "+statusActa);

		if(statusPoder == " - "){
			//alert("Si");
			$("#cPNot").text("Si");
			$("#cPNot").addClass("active");
			cumPoder = "Si";
		}if(statusPoder == "Si"){
			//alert("No");
			$("#cPNot").text("No");
			$("#cPNot").addClass("success");
			$("#cPNot").removeClass("active");
			cumPoder = "No";
		}if(statusPoder == "No"){
			//alert("otra SI");
			$("#cPNot").text("Si");
			$("#cPNot").addClass("active");
			$("#cPNot").removeClass("success");
			cumPoder = "Si";
		}
		//console.log(cumActa);
		//$("#cActa").val("Si");
	});
	$("#altaSHCP").click(function(){
		//alert("entra");
		statusAltaS = $("#altaSHCP").text();
		//alert("es: "+statusActa);

		if(statusAltaS == " - "){
			//alert("Si");
			$("#altaSHCP").text("Si");
			$("#altaSHCP").addClass("active");
			cumAltaShcp = "Si";
		}if(statusAltaS == "Si"){
			//alert("No");
			$("#altaSHCP").text("No");
			$("#altaSHCP").addClass("success");
			$("#altaSHCP").removeClass("active");
			cumAltaShcp = "No";
		}if(statusAltaS == "No"){
			//alert("otra SI");
			$("#altaSHCP").text("Si");
			$("#altaSHCP").addClass("active");
			$("#altaSHCP").removeClass("success");
			cumAltaShcp = "Si";
		}
		//console.log(cumActa);
		//$("#cActa").val("Si");
	});
	$("#RFCS").click(function(){
		//alert("entra");
		statusrfc = $("#RFCS").text();
		//alert("es: "+statusActa);

		if(statusrfc == " - "){
			//alert("Si");
			$("#RFCS").text("Si");
			$("#RFCS").addClass("active");
			cumRfc = "Si";
		}if(statusrfc == "Si"){
			//alert("No");
			$("#RFCS").text("No");
			$("#RFCS").addClass("success");
			$("#RFCS").removeClass("active");
			cumRfc = "No";
		}if(statusrfc == "No"){
			//alert("otra SI");
			$("#RFCS").text("Si");
			$("#RFCS").addClass("active");
			$("#RFCS").removeClass("success");
			cumRfc = "Si";
		}
		//console.log(cumActa);
		//$("#cActa").val("Si");
	});
	$("#PL").click(function(){
		//alert("entra");
		statuspl = $("#PL").text();
		//alert("es: "+statusActa);

		if(statuspl == " - "){
			//alert("Si");
			$("#PL").text("Si");
			$("#PL").addClass("active");
			cumpl = "Si";
		}if(statuspl == "Si"){
			//alert("No");
			$("#PL").text("No");
			$("#PL").addClass("success");
			$("#PL").removeClass("active");
			cumpl = "No";
		}if(statuspl == "No"){
			//alert("otra SI");
			$("#PL").text("Si");
			$("#PL").addClass("active");
			$("#PL").removeClass("success");
			cumpl = "Si";
		}
		//console.log(cumActa);
		//$("#cActa").val("Si");
	});
	$("#LFM").click(function(){
		//alert("entra");
		statusLfm = $("#LFM").text();
		//alert("es: "+statusActa);

		if(statusLfm == " - "){
			//alert("Si");
			$("#LFM").text("Si");
			$("#LFM").addClass("active");
			cumlfm = "Si";
		}if(statusLfm == "Si"){
			//alert("No");
			$("#LFM").text("No");
			$("#LFM").addClass("success");
			$("#LFM").removeClass("active");
			cumlfm = "No";
		}if(statusLfm == "No"){
			//alert("otra SI");
			$("#LFM").text("Si");
			$("#LFM").addClass("active");
			$("#LFM").removeClass("success");
			cumlfm = "Si";
		}
		//console.log(cumActa);
		//$("#cActa").val("Si");
	});
	$("#dicSuelo").click(function(){
		//alert("entra");
		statusdS = $("#dicSuelo").text();
		//alert("es: "+statusActa);

		if(statusdS == " - "){
			//alert("Si");
			$("#dicSuelo").text("Si");
			$("#dicSuelo").addClass("active");
			cumdS = "Si";
		}if(statusdS == "Si"){
			//alert("No");
			$("#dicSuelo").text("No");
			$("#dicSuelo").addClass("success");
			$("#dicSuelo").removeClass("active");
			cumdS = "No";
		}if(statusdS == "No"){
			//alert("otra SI");
			$("#dicSuelo").text("Si");
			$("#dicSuelo").addClass("active");
			$("#dicSuelo").removeClass("success");
			cumdS = "Si";
		}
		//console.log(cumActa);
		//$("#cActa").val("Si");
	});
	$("#oImss").click(function(){
		//alert("entra");
		statusimss = $("#oImss").text();
		//alert("es: "+statusActa);

		if(statusimss == " - "){
			//alert("Si");
			$("#oImss").text("Si");
			$("#oImss").addClass("active");
			cumimss = "Si";
		}if(statusimss == "Si"){
			//alert("No");
			$("#oImss").text("No");
			$("#oImss").addClass("success");
			$("#oImss").removeClass("active");
			cumimss = "No";
		}if(statusimss == "No"){
			//alert("otra SI");
			$("#oImss").text("Si");
			$("#oImss").addClass("active");
			$("#oImss").removeClass("success");
			cumimss = "Si";
		}
		//console.log(cumActa);
		//$("#cActa").val("Si");
	});
	$("#planoA").click(function(){
		//alert("entra");
		statusplano = $("#planoA").text();
		//alert("es: "+statusActa);

		if(statusplano == " - "){
			//alert("Si");
			$("#planoA").text("Si");
			$("#planoA").addClass("active");
			cumplano = "Si";
		}if(statusplano == "Si"){
			//alert("No");
			$("#planoA").text("No");
			$("#planoA").addClass("success");
			$("#planoA").removeClass("active");
			cumplano = "No";
		}if(statusplano == "No"){
			//alert("otra SI");
			$("#planoA").text("Si");
			$("#planoA").addClass("active");
			$("#planoA").removeClass("success");
			cumplano = "Si";
		}
		//console.log(cumActa);
		//$("#cActa").val("Si");
	});
	$("#aSiem").click(function(){
		//alert("entra");
		statusSiem = $("#aSiem").text();
		//alert("es: "+statusActa);

		if(statusSiem == " - "){
			//alert("Si");
			$("#aSiem").text("Si");
			$("#aSiem").addClass("active");
			cumpSiem = "Si";
		}if(statusSiem == "Si"){
			//alert("No");
			$("#aSiem").text("No");
			$("#aSiem").addClass("success");
			$("#aSiem").removeClass("active");
			cumpSiem = "No";
		}if(statusSiem == "No"){
			//alert("otra SI");
			$("#aSiem").text("Si");
			$("#aSiem").addClass("active");
			$("#aSiem").removeClass("success");
			cumpSiem = "Si";
		}
		//console.log(cumActa);
		//$("#cActa").val("Si");
	});
	$("#dElec").click(function(){
		//alert("entra");
		statusdEl = $("#dElec").text();
		//alert("es: "+statusActa);

		if(statusdEl == " - "){
			//alert("Si");
			$("#dElec").text("Si");
			$("#dElec").addClass("active");
			cumpEl = "Si";
		}if(statusdEl == "Si"){
			//alert("No");
			$("#dElec").text("No");
			$("#dElec").addClass("success");
			$("#dElec").removeClass("active");
			cumpEl = "No";
		}if(statusdEl == "No"){
			//alert("otra SI");
			$("#dElec").text("Si");
			$("#dElec").addClass("active");
			$("#dElec").removeClass("success");
			cumpEl = "Si";
		}
		//console.log(cumActa);
		//$("#cActa").val("Si");
	});
	$("#dTfisica").click(function(){
		//alert("entra");
		statusdTf = $("#dTfisica").text();
		//alert("es: "+statusActa);

		if(statusdTf == " - "){
			//alert("Si");
			$("#dTfisica").text("Si");
			$("#dTfisica").addClass("active");
			cumpdTF = "Si";
		}if(statusdTf == "Si"){
			//alert("No");
			$("#dTfisica").text("No");
			$("#dTfisica").addClass("success");
			$("#dTfisica").removeClass("active");
			cumpdTF = "No";
		}if(statusdTf == "No"){
			//alert("otra SI");
			$("#dTfisica").text("Si");
			$("#dTfisica").addClass("active");
			$("#dTfisica").removeClass("success");
			cumpdTF = "Si";
		}
		//console.log(cumActa);
		//$("#cActa").val("Si");
	});
	$("#calDisp").click(function(){
		//alert("entra");
		statuscD = $("#calDisp").text();
		//alert("es: "+statusActa);

		if(statuscD == " - "){
			//alert("Si");
			$("#calDisp").text("Si");
			$("#calDisp").addClass("active");
			cumpCd = "Si";
		}if(statuscD == "Si"){
			//alert("No");
			$("#calDisp").text("No");
			$("#calDisp").addClass("success");
			$("#calDisp").removeClass("active");
			cumpCd = "No";
		}if(statuscD == "No"){
			//alert("otra SI");
			$("#calDisp").text("Si");
			$("#calDisp").addClass("active");
			$("#calDisp").removeClass("success");
			cumpCd = "Si";
		}
		//console.log(cumActa);
		//$("#cActa").val("Si");
	});
	$("#pHerm").click(function(){
		//alert("entra");
		statusHr = $("#pHerm").text();
		//alert("es: "+statusActa);

		if(statusHr == " - "){
			//alert("Si");
			$("#pHerm").text("Si");
			$("#pHerm").addClass("active");
			cumpHm = "Si";
		}if(statusHr == "Si"){
			//alert("No");
			$("#pHerm").text("No");
			$("#pHerm").addClass("success");
			$("#pHerm").removeClass("active");
			cumpHm = "No";
		}if(statusHr == "No"){
			//alert("otra SI");
			$("#pHerm").text("Si");
			$("#pHerm").addClass("active");
			$("#pHerm").removeClass("success");
			cumpHm = "Si";
		}
		//console.log(cumActa);
		//$("#cActa").val("Si");
	});
	$("#pHermT").click(function(){
		//alert("entra");
		statusHT = $("#pHermT").text();
		//alert("es: "+statusActa);

		if(statusHT == " - "){
			//alert("Si");
			$("#pHermT").text("Si");
			$("#pHermT").addClass("active");
			cumpHmT = "Si";
		}if(statusHT == "Si"){
			//alert("No");
			$("#pHermT").text("No");
			$("#pHermT").addClass("success");
			$("#pHermT").removeClass("active");
			cumpHmT = "No";
		}if(statusHT == "No"){
			//alert("otra SI");
			$("#pHermT").text("Si");
			$("#pHermT").addClass("active");
			$("#pHermT").removeClass("success");
			cumpHmT = "Si";
		}
		//console.log(cumActa);
		//$("#cActa").val("Si");
	});
	$("#tanqueA").click(function(){
		//alert("entra");
		statusTa = $("#tanqueA").text();
		//alert("es: "+statusActa);

		if(statusTa == " - "){
			//alert("Si");
			$("#tanqueA").text("Si");
			$("#tanqueA").addClass("active");
			cumpTnA = "Si";
		}if(statusTa == "Si"){
			//alert("No");
			$("#tanqueA").text("No");
			$("#tanqueA").addClass("success");
			$("#tanqueA").removeClass("active");
			cumpTnA = "No";
		}if(statusTa == "No"){
			//alert("otra SI");
			$("#tanqueA").text("Si");
			$("#tanqueA").addClass("active");
			$("#tanqueA").removeClass("success");
			cumpTnA = 1;
		}
		//console.log(cumActa);
		//$("#cActa").val("Si");
	});
	$("#dispensarios").click(function(){
		//alert("entra");
		statusdis = $("#dispensarios").text();
		//alert("es: "+statusActa);

		if(statusdis == " - "){
			//alert("Si");
			$("#dispensarios").text("Si");
			$("#dispensarios").addClass("active");
			cumpdis = "Si";
		}if(statusdis == "Si"){
			//alert("No");
			$("#dispensarios").text("No");
			$("#dispensarios").addClass("success");
			$("#dispensarios").removeClass("active");
			cumpdis = "No";
		}if(statusdis == "No"){
			//alert("otra SI");
			$("#dispensarios").text("Si");
			$("#dispensarios").addClass("active");
			$("#dispensarios").removeClass("success");
			cumpdis = "Si";
		}
		//console.log(cumActa);
		//$("#cActa").val("Si");
	});
	$("#cIventarios").click(function(){
		//alert("entra");
		statuscIn = $("#cIventarios").text();
		//alert("es: "+statusActa);

		if(statuscIn == " - "){
			//alert("Si");
			$("#cIventarios").text("Si");
			$("#cIventarios").addClass("active");
			cumpIn = "Si";
		}if(statuscIn == "Si"){
			//alert("No");
			$("#cIventarios").text("No");
			$("#cIventarios").addClass("success");
			$("#cIventarios").removeClass("active");
			cumpIn = "No";
		}if(statuscIn == "No"){
			//alert("otra SI");
			$("#cIventarios").text("Si");
			$("#cIventarios").addClass("active");
			$("#cIventarios").removeClass("success");
			cumpIn = 1;
		}
		//console.log(cumActa);
		//$("#cActa").val("Si");
	});
	$("#guardarDocEst").click(function() {
		/* Act on the event */
		//alert("tomar los 18 valores");
		//alert("tomar los 18 valores: "+cumActa+" - "+cumPoder+" - "+cumAltaShcp+" - "+cumRfc+" - "+cumpl+" - "+cumlfm+" - "+cumdS+" - "+cumimss+" - "+cumplano+" - "+cumpSiem+" - "+cumpEl+" - "+cumpdTF+" - "+cumpCd+" - "+cumpHm+" - "+cumpHmT+" - "+cumpTnA+" - "+cumpdis+" - "+cumpIn);
		sta01 = $("#estAct").val();
		por01 = $("#porceAct").val();
		evi01 = $("#eviAct").val();

		sta02 = $("#estPn").val();
		por02 = $("#porcePn").val();
		evi02 = $("#eviPn").val();

		sta03 = $("#estSHCP").val();
		por03 = $("#porceSHCP").val();
		evi03 = $("#eviSHCP").val();

		sta04 = $("#estSRFCS").val();
		por04 = $("#porceRFCS").val();
		evi04 = $("#eviRFCS").val();

		sta05 = $("#estPL").val();
		por05 = $("#porcePL").val();
		evi05 = $("#eviPL").val();

		sta06 = $("#estLFM").val();
		por06 = $("#porceLFM").val();
		evi06 = $("#eviLFM").val();

		sta07 = $("#estdicS").val();
		por07 = $("#porcedicS").val();
		evi07 = $("#evidicS").val();

		sta08 = $("#estoIm").val();
		por08 = $("#porceoIm").val();
		evi08 = $("#evidoIm").val();

		sta09 = $("#estplano").val();
		por09 = $("#porceplano").val();
		evi09 = $("#evidplano").val();

		sta10 = $("#estSiem").val();
		por10 = $("#porceSiem").val();
		evi10 = $("#evidSiem").val();

		sta11 = $("#estdElec").val();
		por11 = $("#porcedElec").val();
		evi11 = $("#eviddElec").val();

		sta12 = $("#estdTfi").val();
		por12 = $("#porcedTfi").val();
		evi12 = $("#eviddTfi").val();

		sta13 = $("#estcalD").val();
		por13 = $("#porcecalD").val();
		evi13 = $("#evidcalD").val();

		sta14 = $("#estpHerm").val();
		por14 = $("#porcepHerm").val();
		evi14 = $("#evidpHerm").val();

		sta15 = $("#estpHt").val();
		por15 = $("#porcepHt").val();
		evi15 = $("#evidpHt").val();

		sta16 = $("#estTanque").val();
		por16 = $("#porceTanque").val();
		evi16 = $("#evidTanque").val();

		sta17 = $("#estdisp").val();
		por17 = $("#porcedisp").val();
		evi17 = $("#eviddisp").val();

		sta18 = $("#estCiv").val();
		por18 = $("#porceCiv").val();
		evi18 = $("#evidCiv").val();

		cre = localStorage.getItem("PL");
		//alert("LOS VALORES DEL PRIMER ELEMENTO LEGALES:"+sta01+"-"+por01+"-"+evi01);
		$.ajax({
			url: 'php/insert.php',
    		method: 'POST',
    		dataType: 'html',
    		data: {opc:"add3d",acta:cumActa, staacta:sta01, poracta:por01, eviacta:evi01, poder:cumPoder, stapoder:sta02, porpoder:por02, evipoder:evi02, alta:cumAltaShcp, staalta:sta03, poralta:por03, evialta:evi03, rfc:cumRfc, starfc:sta04, porrfc:por04, evirfc:evi04, pl:cumpl, stapl:sta05, porpl:por05, evipl:evi05, lfm:cumlfm, stalfm:sta06, porlfm:por06, evilfm:evi06, ds:cumdS, stads:sta07, pords:por07, evids:evi07,timss:cumimss, statim:sta08, portim:por08, evitim:evi08, pA:cumplano, stapA:sta09, porpA:por09, evipA:evi09, aS:cumpSiem, staaS:sta10, poraS:por10, eviaS:evi10, de:cumpEl, stade:sta11, porde:por11, evide:evi11, dtf:cumpdTF, stadtf:sta12, pordtf:por12, evidtf:evi12, cld:cumpCd, stacld:sta13, porcld:por13, evicld:evi13, phm:cumpHm, staphm:sta14, porphm:por14, eviphm:evi14, phmt:cumpHmT, staphmt:sta15, porphmt:por15, eviphmt:evi15, tqA:cumpTnA, statqA:sta16, portqA:por16, evitqA:evi16, dis:cumpdis, stadis:sta17, pordis:por17, evidis:evi17, cIn:cumpIn, stacIn:sta18, porcIn:por18, evicIn:evi18, cre:cre },
		})
		.done(function(msg) {
			alert(msg);
		})		
	});
	$("#actualizarDocEst").click(function() {
		/* Act on the event */
		cumActa = $("#cActa").text();
		cumPoder = $("#cPNot").text();
		cumAltaShcp = $("#altaSHCP").text();
		cumRfc = $("#RFCS").text();
		cumpl = $("#PL").text();
		cumlfm = $("#LFM").text();
		cumdS = $("#dicSuelo").text();
		cumimss = $("#oImss").text();
		cumplano = $("#planoA").text();
		cumpSiem = $("#aSiem").text();
		cumpEl = $("#dElec").text();
		cumpdTF = $("#dTfisica").text();
		cumpCd = $("#calDisp").text();
		cumpHm = $("#pHerm").text();
		cumpHmT = $("#pHermT").text();
		cumpTnA = $("#tanqueA").text();
		cumpdis = $("#dispensarios").text();
		cumpIn = $("#cIventarios").text();
		//alert("tomar los 18 valores: "+cumActa+" - "+cumPoder+" - "+cumAltaShcp+" - "+cumRfc+" - "+cumpl+" - "+cumlfm+" - "+cumdS+" - "+cumimss+" - "+cumplano+" - "+cumpSiem+" - "+cumpEl+" - "+cumpdTF+" - "+cumpCd+" - "+cumpHm+" - "+cumpHmT+" - "+cumpTnA+" - "+cumpdis+" - "+cumpIn);
		cre = localStorage.getItem("PL");
		$.ajax({
			url: 'php/update.php',
    		method: 'POST',
    		dataType: 'html',
    		data: {opc:"upd3d",acta:cumActa, poder:cumPoder, alta:cumAltaShcp, rfc:cumRfc, pl:cumpl, lfm:cumlfm, ds:cumdS, timss:cumimss, pA:cumplano, aS:cumpSiem, de:cumpEl, dtf:cumpdTF, cld:cumpCd, phm:cumpHm, phmt:cumpHmT, tqA:cumpTnA, dis:cumpdis, cIn:cumpIn, cre:cre },
		})
		.done(function(msg) {
			alert(msg);
			location.reload();
		})		
	});

	//DOCUMENTACION ASEA
	$("#btnasea").click(function() {
		$("#asea").show();
		$("#pc").hide();
		$("#profeco").hide();
		$("#semt").hide();
		$("#stps").hide();
		$("#legal").hide();
		$("#legis").hide();
		$("#cre").hide();
		$("#se").hide();
	});
	$("#c005").click(function(){
		//alert("entra");
		status005 = $("#c005").text();
		//alert("es: "+statusActa);

		if(status005 == " - "){
			//alert("Si");
			$("#c005").text("Si");
			$("#c005").addClass("active");
			cump005 = 1;
		}if(status005 == "Si"){
			//alert("No");
			$("#c005").text("No");
			$("#c005").addClass("success");
			$("#c005").removeClass("active");
			cump005 = 0;
		}if(status005 == "No"){
			//alert("otra SI");
			$("#c005").text("Si");
			$("#c005").addClass("active");
			$("#c005").removeClass("success");
			cump005 = 1;
		}
		//console.log(cumActa);
		//$("#cActa").val("Si");
	});
	$("#cMia").click(function(){
		//alert("entra");
		statusmia = $("#cMia").text();
		Pstatusip = $("#cIp").text();
		//alert("es: "+statusActa);


		if(statusmia == " - "){
			//alert("Si");
			$("#cMia").text("Si");
			$("#cMia").addClass("active");
			//alert("ESTADO DE IP: "+Pstatusip);
			cumpmia = 1;

			if(Pstatusip == " - "){
				$("#cIp").text("No");
				$("#cIp").addClass("success");
				$("#cIp").removeClass("active");
				cumpip = 0;
			}
			
		}if(statusmia == "Si"){
			//alert("No");
			$("#cMia").text("No");
			$("#cMia").addClass("success");
			$("#cMia").removeClass("active");
			cumpmia = 0;

			if(Pstatusip == "No"){
				$("#cIp").text("Si");
				$("#cIp").addClass("active");
				$("#cIp").removeClass("success");
				cumpip = 1;
			}
			
		}if(statusmia == "No"){
			//alert("otra SI");
			$("#cMia").text("Si");
			$("#cMia").addClass("active");
			$("#cMia").removeClass("success");
			cumpmia = 1;

			if(Pstatusip == "Si"){
				$("#cIp").text("No");
				$("#cIp").addClass("success");
				$("#cIp").removeClass("active");
				cumpip = 0;
			}
			
		}
		//console.log(cumActa);
		//$("#cActa").val("Si");
	});
	$("#cIp").click(function(){
		//alert("entra");
		statusip = $("#cIp").text();
		Pstatusmia = $("#cMia").text();
		//alert("es: "+statusActa);

		if(statusip == " - "){
			//alert("Si");
			$("#cIp").text("Si");
			$("#cIp").addClass("active");
			cumpip = 1;

			if(Pstatusmia == " - "){
				$("#cMia").text("No");
				$("#cMia").addClass("success");
				$("#cMia").removeClass("active");
				cumpmia = 0;
			}
		}if(statusip == "Si"){
			//alert("No");
			$("#cIp").text("No");
			$("#cIp").addClass("success");
			$("#cIp").removeClass("active");
			cumpip = 0;

			if(Pstatusmia == "No"){
				$("#cMia").text("Si");
				$("#cMia").addClass("active");
				$("#cMia").removeClass("success");
				cumpmia = 1;
			}
		}if(statusip == "No"){
			//alert("otra SI");
			$("#cIp").text("Si");
			$("#cIp").addClass("active");
			$("#cIp").removeClass("success");
			cumpip = 1;

			if(Pstatusmia == "Si"){
				$("#cMia").text("No");
				$("#cMia").addClass("success");
				$("#cMia").removeClass("active");
				cumpmia = 0;
			}
		}
		//console.log(cumActa);
		//$("#cActa").val("Si");
	});
	$("#cLf").click(function(){
		//alert("entra");
		statuslf = $("#cLf").text();
		//alert("es: "+statusActa);

		if(statuslf == " - "){
			//alert("Si");
			$("#cLf").text("Si");
			$("#cLf").addClass("active");
			cumplf = 1;
		}if(statuslf == "Si"){
			//alert("No");
			$("#cLf").text("No");
			$("#cLf").addClass("success");
			$("#cLf").removeClass("active");
			cumplf = 0;
		}if(statuslf == "No"){
			//alert("otra SI");
			$("#cLf").text("Si");
			$("#cLf").addClass("active");
			$("#cLf").removeClass("success");
			cumplf = 1;
		}
		//console.log(cumActa);
		//$("#cActa").val("Si");
	});
	$("#cGrp").click(function(){
		//alert("entra");
		statusgrp = $("#cGrp").text();
		//alert("es: "+statusActa);

		if(statusgrp == " - "){
			//alert("Si");
			$("#cGrp").text("Si");
			$("#cGrp").addClass("active");
			cumpgrp = 1;
		}if(statusgrp == "Si"){
			//alert("No");
			$("#cGrp").text("No");
			$("#cGrp").addClass("success");
			$("#cGrp").removeClass("active");
			cumpgrp = 0;
		}if(statusgrp == "No"){
			//alert("otra SI");
			$("#cGrp").text("Si");
			$("#cGrp").addClass("active");
			$("#cGrp").removeClass("success");
			cumpgrp = 1;
		}
		//console.log(cumActa);
		//$("#cActa").val("Si");
	});
	$("#cCoa").click(function(){
		//alert("entra");
		statuscoa = $("#cCoa").text();
		//alert("es: "+statusActa);

		if(statuscoa == " - "){
			//alert("Si");
			$("#cCoa").text("Si");
			$("#cCoa").addClass("active");
			cumpcoa = 1;
		}if(statuscoa == "Si"){
			//alert("No");
			$("#cCoa").text("No");
			$("#cCoa").addClass("success");
			$("#cCoa").removeClass("active");
			cumpcoa = 0;
		}if(statuscoa == "No"){
			//alert("otra SI");
			$("#cCoa").text("Si");
			$("#cCoa").addClass("active");
			$("#cCoa").removeClass("success");
			cumpcoa = 1;
		}
		//console.log(cumActa);
		//$("#cActa").val("Si");
	});
	$("#guardarDocASEA").click(function() {
		A1sta = $("#estc005").val();
		A1por = $("#porcec005").val();
		A1evi = $("#evidc005").val();

		A2sta = $("#estcMia").val();
		A2por = $("#porcecMia").val();
		A2evi = $("#evidcMia").val();

		A3sta = $("#estcIp").val();
		A3por = $("#porcecIp").val();
		A3evi = $("#evidcIp").val();

		A4sta = $("#estcLf").val();
		A4por = $("#porcecLf").val();
		A4evi = $("#evidcLf").val();

		A5sta = $("#estcGrp").val();
		A5por = $("#porcecGrp").val();
		A5evi = $("#evidcGrp").val();

		A6sta = $("#estcCoa").val();
		A6por = $("#porcecCoa").val();
		A6evi = $("#evidcCoa").val();
		/* Act on the event */
		//alert("tomar los 6 valores"); 
		//cump005 nom005 Cumpmia  MIA cumpip IP cumplf LF cumpgrp GRP cumpcoa COA
		//alert("tomar los 2 valores: "+cump005+" - % No. 1 "+A1por+" DOS:"+" - "+cumpmia+" la evidencia 5"+A5evi+" - "+cumpip+" - "+cumplf+" - "+cumpgrp+" - "+cumpcoa);
		cre = localStorage.getItem("PL");
		$.ajax({
			url: 'php/insert.php',
    		method: 'POST',
    		dataType: 'html',
    		data: {opc:"add3a",n005:cump005, sn005:A1sta, en005:A1evi, pn005:A1por, mia:cumpmia, smia:A2sta, emia:A2evi, pmia:A2por, ip:cumpip, sip:A3sta, eip:A3evi, pip:A3por, lf:cumplf, slf:A4sta, elf:A4evi, plf:A4por, grp:cumpgrp, sgrp:A5sta, egrp:A5evi, pgrp:A5por, coa:cumpcoa, scoa:A6sta, ecoa:A6evi, pcoa:A6por, cre:cre },
		})
		.done(function(msg) {
			alert(msg);
		})	
	});
	$("#actualizarDocASEA").click(function() {
		/* Act on the event */
		cump005 = $("#c005").text();
		cumpmia = $("#cMia").text();
		cumpip = $("#cIp").text();
		cumplf = $("#cLf").text();
		cumpgrp = $("#cGrp").text();
		cumpcoa = $("#cCoa").text();
		//alert("tomar los 6 valores"); 
		//cump005 nom005 Cumpmia  MIA cumpip IP cumplf LF cumpgrp GRP cumpcoa COA
		//alert("tomar los 2 valores: "+cump005+" DOS:"+" - "+cumpmia+" - "+cumpip+" - "+cumplf+" - "+cumpgrp+" - "+cumpcoa);
		cre = localStorage.getItem("PL");
		$.ajax({
			url: 'php/update.php',
    		method: 'POST',
    		dataType: 'html',
    		data: {opc:"upd3a",n005:cump005, mia:cumpmia, ip:cumpip, lf:cumplf, grp:cumpgrp, coa:cumpcoa, cre:cre },
		})
		.done(function(msg) {
			alert(msg);
			location.reload();
		})	
	});

	//DOCUMENTACION CRE
	$("#btncre").click(function() {
		$("#cre").show();
		$("#pc").hide();
		$("#semt").hide();
		$("#profeco").hide();
		$("#stps").hide();
		$("#asea").hide();
		$("#legal").hide();
		$("#legis").hide();
		$("#se").hide();
	});
	$("#rDiariov").click(function(){
		//alert("entra");
		statusrdv = $("#rDiariov").text();
		//alert("es: "+statusActa);

		if(statusrdv == " - "){
			//alert("Si");
			$("#rDiariov").text("Si");
			$("#rDiariov").addClass("active");
			cumprdv = 1;
		}if(statusrdv == "Si"){
			//alert("No");
			$("#rDiariov").text("No");
			$("#rDiariov").addClass("success");
			$("#rDiariov").removeClass("active");
			cumprdv = 0;
		}if(statusrdv == "No"){
			//alert("otra SI");
			$("#rDiariov").text("Si");
			$("#rDiariov").addClass("active");
			$("#rDiariov").removeClass("success");
			cumprdv = 1;
		}
		//console.log(cumActa);
		//$("#cActa").val("Si");
	});
	$("#rDiariop").click(function(){
		//alert("entra");
		statusrdp = $("#rDiariop").text();
		//alert("es: "+statusActa);

		if(statusrdp == " - "){
			//alert("Si");
			$("#rDiariop").text("Si");
			$("#rDiariop").addClass("active");
			cumprdp = 1;
		}if(statusrdp == "Si"){
			//alert("No");
			$("#rDiariop").text("No");
			$("#rDiariop").addClass("success");
			$("#rDiariop").removeClass("active");
			cumprdp = 0;
		}if(statusrdp == "No"){
			//alert("otra SI");
			$("#rDiariop").text("Si");
			$("#rDiariop").addClass("active");
			$("#rDiariop").removeClass("success");
			cumprdp = 1;
		}
		//console.log(cumActa);
		//$("#cActa").val("Si");
	});
	$("#cEstad").click(function(){
		//alert("entra");
		statuseta = $("#cEstad").text();
		//alert("es: "+statusActa);

		if(statuseta == " - "){
			//alert("Si");
			$("#cEstad").text("Si");
			$("#cEstad").addClass("active");
			cumpesta = 1;
		}if(statuseta == "Si"){
			//alert("No");
			$("#cEstad").text("No");
			$("#cEstad").addClass("success");
			$("#cEstad").removeClass("active");
			cumpesta = 0;
		}if(statuseta == "No"){
			//alert("otra SI");
			$("#cEstad").text("Si");
			$("#cEstad").addClass("active");
			$("#cEstad").removeClass("success");
			cumpesta = 1;
		}
		//console.log(cumActa);
		//$("#cActa").val("Si");
	});
	$("#016").click(function(){
		//alert("entra");
		status016 = $("#016").text();
		//alert("es: "+statusActa);

		if(status016 == " - "){
			//alert("Si");
			$("#016").text("Si");
			$("#016").addClass("active");
			cump016 = 1;
		}if(status016 == "Si"){
			//alert("No");
			$("#016").text("No");
			$("#016").addClass("success");
			$("#016").removeClass("active");
			cump016 = 0;
		}if(status016 == "No"){
			//alert("otra SI");
			$("#016").text("Si");
			$("#016").addClass("active");
			$("#016").removeClass("success");
			cump016 = 1;
		}
		//console.log(cumActa);
		//$("#cActa").val("Si");
	});
	$("#0162017").click(function(){
		//alert("entra");
		status0162017 = $("#0162017").text();
		//alert("es: "+statusActa);

		if(status0162017 == " - "){
			//alert("Si");
			$("#0162017").text("Si");
			$("#0162017").addClass("active");
			cump0162017 = 1;
		}if(status0162017 == "Si"){
			//alert("No");
			$("#0162017").text("No");
			$("#0162017").addClass("success");
			$("#0162017").removeClass("active");
			cump0162017 = 0;
		}if(status0162017 == "No"){
			//alert("otra SI");
			$("#0162017").text("Si");
			$("#0162017").addClass("active");
			$("#0162017").removeClass("success");
			cump0162017 = 1;
		}
		//console.log(cumActa);
		//$("#cActa").val("Si");
	});
	$("#rPsupervi").click(function(){
		//alert("entra");
		statusrpag = $("#rPsupervi").text();
		//alert("es: "+statusActa);

		if(statusrpag == " - "){
			//alert("Si");
			$("#rPsupervi").text("Si");
			$("#rPsupervi").addClass("active");
			cumprpag = 1;
		}if(statusrpag == "Si"){
			//alert("No");
			$("#rPsupervi").text("No");
			$("#rPsupervi").addClass("success");
			$("#rPsupervi").removeClass("active");
			cumprpag = 0;
		}if(statusrpag == "No"){
			//alert("otra SI");
			$("#rPsupervi").text("Si");
			$("#rPsupervi").addClass("active");
			$("#rPsupervi").removeClass("success");
			cumprpag = 1;
		}
		//console.log(cumActa);
		//$("#cActa").val("Si");
	});
	$("#polizAnual").click(function(){
		//alert("entra");
		statuspAnual = $("#polizAnual").text();
		//alert("es: "+statusActa);

		if(statuspAnual == " - "){
			//alert("Si");
			$("#polizAnual").text("Si");
			$("#polizAnual").addClass("active");
			cumpAnual = 1;
		}if(statuspAnual == "Si"){
			//alert("No");
			$("#polizAnual").text("No");
			$("#polizAnual").addClass("success");
			$("#polizAnual").removeClass("active");
			cumpAnual = 0;
		}if(statuspAnual == "No"){
			//alert("otra SI");
			$("#polizAnual").text("Si");
			$("#polizAnual").addClass("active");
			$("#polizAnual").removeClass("success");
			cumpAnual = 1;
		}
		//console.log(cumActa);
		//$("#cActa").val("Si");
	});
	$("#polizaSg").click(function(){
		//alert("entra");
		statuspSg = $("#polizaSg").text();
		//alert("es: "+statusActa);

		if(statuspSg == " - "){
			//alert("Si");
			$("#polizaSg").text("Si");
			$("#polizaSg").addClass("active");
			cumpSg = 1;
		}if(statuspSg == "Si"){
			//alert("No");
			$("#polizaSg").text("No");
			$("#polizaSg").addClass("success");
			$("#polizaSg").removeClass("active");
			cumpSg = 0;
		}if(statuspSg == "No"){
			//alert("otra SI");
			$("#polizaSg").text("Si");
			$("#polizaSg").addClass("active");
			$("#polizaSg").removeClass("success");
			cumpSg = 1;
		}
		//console.log(cumActa);
		//$("#cActa").val("Si");
	});
	$("#rQue").click(function(){
		//alert("entra");
		statusrQ = $("#rQue").text();
		//alert("es: "+statusActa);

		if(statusrQ == " - "){
			//alert("Si");
			$("#rQue").text("Si");
			$("#rQue").addClass("active");
			cumprQ = 1;
		}if(statusrQ == "Si"){
			//alert("No");
			$("#rQue").text("No");
			$("#rQue").addClass("success");
			$("#rQue").removeClass("active");
			cumprQ = 0;
		}if(statusrQ == "No"){
			//alert("otra SI");
			$("#rQue").text("Si");
			$("#rQue").addClass("active");
			$("#rQue").removeClass("success");
			cumprQ = 1;
		}
		//console.log(cumActa);
		//$("#cActa").val("Si");
	});
	$("#factProd").click(function(){
		//alert("entra");
		statusfPro = $("#factProd").text();
		//alert("es: "+statusActa);

		if(statusfPro == " - "){
			//alert("Si");
			$("#factProd").text("Si");
			$("#factProd").addClass("active");
			cumpfPr = 1;
		}if(statusfPro == "Si"){
			//alert("No");
			$("#factProd").text("No");
			$("#factProd").addClass("success");
			$("#factProd").removeClass("active");
			cumpfPr = 0;
		}if(statusfPro == "No"){
			//alert("otra SI");
			$("#factProd").text("Si");
			$("#factProd").addClass("active");
			$("#factProd").removeClass("success");
			cumpfPr = 1;
		}
		//console.log(cumActa);
		//$("#cActa").val("Si");
	});
	$("#incidentes").click(function(){
		//alert("entra");
		statusInc = $("#incidentes").text();
		//alert("es: "+statusActa);

		if(statusInc == " - "){
			//alert("Si");
			$("#incidentes").text("Si");
			$("#incidentes").addClass("active");
			cumpInc = 1;
		}if(statusInc == "Si"){
			//alert("No");
			$("#incidentes").text("No");
			$("#incidentes").addClass("success");
			$("#incidentes").removeClass("active");
			cumpInc = 0;
		}if(statusInc == "No"){
			//alert("otra SI");
			$("#incidentes").text("Si");
			$("#incidentes").addClass("active");
			$("#incidentes").removeClass("success");
			cumpInc = 1;
		}
		//console.log(cumActa);
		//$("#cActa").val("Si");
	});
	$("#anInde").click(function(){
		//alert("entra");
		statusAnIn = $("#anInde").text();
		//alert("es: "+statusActa);

		if(statusAnIn == " - "){
			//alert("Si");
			$("#anInde").text("Si");
			$("#anInde").addClass("active");
			cumpAnIn = 1;
		}if(statusAnIn == "Si"){
			//alert("No");
			$("#anInde").text("No");
			$("#anInde").addClass("success");
			$("#anInde").removeClass("active");
			cumpAnIn = 0;
		}if(statusAnIn == "No"){
			//alert("otra SI");
			$("#anInde").text("Si");
			$("#anInde").addClass("active");
			$("#anInde").removeClass("success");
			cumpAnIn = 1;
		}
		//console.log(cumActa);
		//$("#cActa").val("Si");
	});
	$("#guardarDoCre").click(function() {
		/* Act on the event */
		
		Csta1 = $("#estRdia").val();
		Cpor1 = $("#porceRdia").val();
		Cevi1 = $("#evidRdia").val();

		Csta2 = $("#estRdiap").val();
		Cpor2 = $("#porceRdiap").val();
		Cevi2 = $("#evidRdiap").val();

		Csta3 = $("#estcEs").val();
		Cpor3 = $("#porcecEs").val();
		Cevi3 = $("#evidcEs").val();

		Csta4 = $("#est016").val();
		Cpor4 = $("#porce016").val();
		Cevi4 = $("#evid016").val();

		Csta5 = $("#est0162017").val();
		Cpor5 = $("#porce0162017").val();
		Cevi5 = $("#evid0162017").val();

		Csta6 = $("#estrPs").val();
		Cpor6 = $("#porcerPs").val();
		Cevi6 = $("#evidrPs").val();

		Csta7 = $("#estPoliza").val();
		Cevi7 = $("#evidPoliza").val();
		Cpor7 = $("#porcePoliza").val();

		Csta8 = $("#estPsg").val();
		Cevi8 = $("#evidPsg").val();
		Cpor8 = $("#porcePsg").val();

		Csta9 = $("#estrQ").val();
		Cevi9 = $("#evidrQ").val();
		Cpor9 = $("#porcerQ").val();

		Csta10 = $("#estFacP").val();
		Cevi10 = $("#evidFacP").val();
		Cpor10 = $("#porceFacP").val();

		Csta11 = $("#estInc").val();
		Cevi11 = $("#evidInc").val();
		Cpor11 = $("#porceInc").val();

		Csta12 = $("#estAnI").val();
		Cevi12 = $("#evidAnI").val();
		Cpor12 = $("#porceAnI").val();
		//alert("Valores "+cumprdp+"evidencia 4 "+Cevi4+"porcenteja 9 "+Cpor9);
		//alert("tomar los 12 valores: "+cumprdv+" DOS:"+" - "+cumprdp+" - "+cumpesta+" - "+cump016+" - "+cump0162017+" - "+cumprpag+" - "+cumpAnual+" - "+cumpSg+" - "+cumprQ+" - "+cumpfPr+" - "+cumpInc+" - "+cumpAnIn);
		cre = localStorage.getItem("PL");
		$.ajax({
			url: 'php/insert.php',
    		method: 'POST',
    		dataType: 'html',
    		data: {opc:"add3c",rdv:cumprdv, srdv:Csta1, erdv:Cevi1, prdv:Cpor1, rdp:cumprdp, srdp:Csta2, erdp:Cevi2, prdp:Cpor2, sta:cumpesta, ssta:Csta3, esta:Cevi3, psta:Cpor3, cpet:cump016, scpet:Csta4, ecpet:Cevi4, pcpet:Cpor4, dcpet:cump0162017, sdcpet:Csta5, edcpet:Cevi5, pdcpet:Cpor5, sup:cumprpag, ssup:Csta6, esup:Cevi6, psup:Cpor6, cre:cre, panual:cumpAnual, spanual:Csta7, epanual:Cevi7, ppanual:Cpor7, pseg:cumpSg, spseg:Csta8, epseg:Cevi8, ppseg:Cpor8, repq:cumprQ, srepq:Csta9, erepq:Cevi9, prepq:Cpor9, proc:cumpfPr, sproc:Csta10, eproc:Cevi10, pproc:Cpor10, reme:cumpInc, sreme:Csta11, ereme:Cevi11, preme:Cpor11, anuncio:cumpAnIn, sanuncio:Csta12, eanuncio:Cevi12, panuncio:Cpor12 },
		})
		.done(function(msg) {
			alert(msg);
		})
	});
	$("#actualizarDoCre").click(function() {
		/* Act on the event */
		cumprdv = $("#rDiariov").text();
		cumprdp = $("#rDiariop").text();
		cumpesta = $("#cEstad").text();
		cump016 = $("#016").text();
		cump0162017 = $("#0162017").text();
		cumprpag = $("#rPsupervi").text();
		cumpAnual = $("#polizAnual").text();
		cumpSg = $("#polizaSg").text();
		cumprQ = $("#rQue").text();
		cumpfPr = $("#factProd").text();
		cumpInc = $("#incidentes").text();
		cumpAnIn = $("#anInde").text();
		//alert("tomar los 12 valores: "+cumprdv+" DOS:"+" - "+cumprdp+" - "+cumpesta+" - "+cump016+" - "+cump0162017+" - "+cumprpag+" - "+cumpAnual+" - "+cumpSg+" - "+cumprQ+" - "+cumpfPr+" - "+cumpInc+" - "+cumpAnIn);
		cre = localStorage.getItem("PL");
		$.ajax({
			url: 'php/update.php',
    		method: 'POST',
    		dataType: 'html',
    		data: {opc:"upd3c",rdv:cumprdv, rdp:cumprdp, sta:cumpesta, cpet:cump016, dcpet:cump0162017, sup:cumprpag, cre:cre, panual:cumpAnual, pseg:cumpSg, repq:cumprQ, proc:cumpfPr, reme:cumpInc, anuncio:cumpAnIn },
		})
		.done(function(msg) {
			alert(msg);
			location.reload();
		})
	});

	//DOCUMENTACION PROFECO
	$("#btnprofeco").click(function() {
		$("#profeco").show();
		$("#pc").hide();
		$("#semt").hide();
		$("#stps").hide();
		$("#cre").hide();
		$("#asea").hide();
		$("#legal").hide();
		$("#legis").hide();
		$("#se").hide();
	});
	$("#vPerdisp").click(function(){
		//alert("entra");
		statusvDis = $("#vPerdisp").text();
		//alert("es: "+statusActa);

		if(statusvDis == " - "){
			//alert("Si");
			$("#vPerdisp").text("Si");
			$("#vPerdisp").addClass("active");
			cumpvDis = 1;
		}if(statusvDis == "Si"){
			//alert("No");
			$("#vPerdisp").text("No");
			$("#vPerdisp").addClass("success");
			$("#vPerdisp").removeClass("active");
			cumpvDis = 0;
		}if(statusvDis == "No"){
			//alert("otra SI");
			$("#vPerdisp").text("Si");
			$("#vPerdisp").addClass("active");
			$("#vPerdisp").removeClass("success");
			cumpvDis = 1;
		}
		//console.log(cumActa);
		//$("#cActa").val("Si");
	});
	$("#rControldis").click(function(){
		//alert("entra");
		statusrCd = $("#rControldis").text();
		//alert("es: "+statusActa);

		if(statusrCd == " - "){
			//alert("Si");
			$("#rControldis").text("Si");
			$("#rControldis").addClass("active");
			cumprCd = 1;
		}if(statusrCd == "Si"){
			//alert("No");
			$("#rControldis").text("No");
			$("#rControldis").addClass("success");
			$("#rControldis").removeClass("active");
			cumprCd = 0;
		}if(statusrCd == "No"){
			//alert("otra SI");
			$("#rControldis").text("Si");
			$("#rControldis").addClass("active");
			$("#rControldis").removeClass("success");
			cumprCd = 1;
		}
		//console.log(cumActa);
		//$("#cActa").val("Si");
	});
	$("#guardarDocp").click(function() {
		/* Act on the event */
		//cumpvDis //verificacion de dispensario
		//cumprCd //reporte a distancia
		Psta1 = $("#estvPd").val();;
		Ppor1 = $("#porcevPd").val();;
		Pevi1 = $("#evidvPd").val();;

		Psta2 = $("#estrCtd").val();;
		Ppor2 = $("#porcerCtd").val();;
		Pevi2 = $("#evidrCtd").val();;

		//alert("Primer valor "+cumpvDis+" DOS:"+cumprCd);
		//alert("Primer valor "+cumpvDis+" estatus1:"+Psta1+" porcentaje2:"+Ppor2);
		cre = localStorage.getItem("PL");
		$.ajax({
			url: 'php/insert.php',
    		method: 'POST',
    		dataType: 'html',
    		data: {opc:"add3pr",unoprofeco:cumpvDis, unoprofecos:Psta1, unoprofecop:Ppor1, unoprofecoe:Pevi1, dosprofeco:cumprCd, dosprofecos:Psta2, dosprofecop:Ppor2, dosprofecoe:Pevi2, cre:cre },
		})
		.done(function(msg) {
			alert(msg);
		})	
	});
	$("#actualizarDocP").click(function() {
		/* Act on the event */
		alert("no funciona");
	});

	//DOCUMENTACION PROTECCION CIVIL
	$("#btnpc").click(function() {
		$("#pc").show();
		$("#semt").hide();
		$("#stps").hide();
		$("#profeco").hide();
		$("#cre").hide();
		$("#asea").hide();
		$("#legal").hide();
		$("#legis").hide();
		$("#se").hide();
	});
	$("#vBueno").click(function(){
		//alert("entra");
		statusvB = $("#vBueno").text();
		//alert("es: "+statusActa);

		if(statusvB == " - "){
			//alert("Si");
			$("#vBueno").text("Si");
			$("#vBueno").addClass("active");
			cumpvB = 1;
		}if(statusvB == "Si"){
			//alert("No");
			$("#vBueno").text("No");
			$("#vBueno").addClass("success");
			$("#vBueno").removeClass("active");
			cumpvB = 0;
		}if(statusvB == "No"){
			//alert("otra SI");
			$("#vBueno").text("Si");
			$("#vBueno").addClass("active");
			$("#vBueno").removeClass("success");
			cumpvB = 1;
		}
		//console.log(cumActa);
		//$("#cActa").val("Si");
	});
	$("#cdecla").click(function(){
		//alert("entra");
		statusdL = $("#cdecla").text();
		//alert("es: "+statusActa);

		if(statusdL == " - "){
			//alert("Si");
			$("#cdecla").text("Si");
			$("#cdecla").addClass("active");
			cumpdL = 1;
		}if(statusdL == "Si"){
			//alert("No");
			$("#cdecla").text("No");
			$("#cdecla").addClass("success");
			$("#cdecla").removeClass("active");
			cumpdL = 0;
		}if(statusdL == "No"){
			//alert("otra SI");
			$("#cdecla").text("Si");
			$("#cdecla").addClass("active");
			$("#cdecla").removeClass("success");
			cumpdL = 1;
		}
		//console.log(cumActa);
		//$("#cActa").val("Si");
	});
	$("#guardarDocPc").click(function() {
		/* Act on the event */
		//cumpvB //visto bueno
		//cumpdL //autodeclaratoria
		PCs1 = $("#estVb").val();;
		PCe1 = $("#evidVb").val();;
		PCp1 = $("#porceVb").val();;

		PCs2 = $("#estCdc").val();;
		PCe2 = $("#evidCdc").val();;
		PCp2 = $("#porceCdc").val();;
		//alert("tomar valores: "+cumpvB+" Porcentaje uno:"+PCp1+" Evidencia dos:"+PCe2);
		cre = localStorage.getItem("PL");
		$.ajax({
			url: 'php/insert.php',
    		method: 'POST',
    		dataType: 'html',
    		data: {opc:"add3pc",unopc:cumpvB, unopcs:PCs1, unopce:PCe1, unopcp:PCp1, dospc:cumpdL, dospcs:PCs2, dospce:PCe2, dospcp:PCp2, cre:cre },
		})
		.done(function(msg) {
			alert(msg);
		})		
	});

	$("#actualizarDocPc").click(function() {
		/* Act on the event */
		cumpvB = $("#vBueno").text();
		cumpdL = $("#cdecla").text();
		//alert("tomar los 2 valores: "+cumpvB+" DOS:"+cumpdL);
		cre = localStorage.getItem("PL");
		$.ajax({
			url: 'php/update.php',
    		method: 'POST',
    		dataType: 'html',
    		data: {opc:"upd3pc",unopc:cumpvB, dospc:cumpdL, cre:cre },
		})
		.done(function(msg) {
			alert(msg);
			location.reload();
		})	
	});

	//DOCUMENTACION DE SECRETARIA DE ECONOMIA
	$("#btnse").click(function() {
		$("#se").show();
		$("#pc").hide();
		$("#semt").hide();
		$("#stps").hide();
		$("#profeco").hide();
		$("#cre").hide();
		$("#asea").hide();
		$("#legal").hide();
		$("#legis").hide();
	});
	$("#conNac").click(function(){
		//alert("entra");
		statusconNac = $("#conNac").text();
		//alert("es: "+statusActa);

		if(statusconNac == " - "){
			//alert("Si");
			$("#conNac").text("Si");
			$("#conNac").addClass("active");
			cumpconN = 1;
		}if(statusconNac == "Si"){
			//alert("No");
			$("#conNac").text("No");
			$("#conNac").addClass("success");
			$("#conNac").removeClass("active");
			cumpconN = 0;
		}if(statusconNac == "No"){
			//alert("otra SI");
			$("#conNac").text("Si");
			$("#conNac").addClass("active");
			$("#conNac").removeClass("success");
			cumpconN = 1;
		}
		//console.log(cumActa);
		//$("#cActa").val("Si");
	});
	
	$("#guardarDocSe").click(function() {
		/* Act on the event */
		//cumpvB //visto bueno
		//cumpdL //autodeclaratoria
		contNS = $("#estconNac").val();
		contNP = $("#porceconNac").val();
		contNE = $("#evidconNac").val();

		//alert("tomar el valor: "+cumpconN+"%"+contNP+"evi:"+contNE);
		cre = localStorage.getItem("PL");
		$.ajax({
			url: 'php/insert.php',
    		method: 'POST',
    		dataType: 'html',
    		data: {opc:"add3se",unose:cumpconN, unoseS:contNS, unoseE:contNE, unoseP:contNP, cre:cre },
		})
		.done(function(msg) {
			alert(msg);
		})		
	});

	$("#actualizarDocSe").click(function() {
		/* Act on the event */
		cumpconN = $("#conNac").text();
		//alert("tomar los 2 valores: "+cumpvB+" DOS:"+cumpdL);
		cre = localStorage.getItem("PL");
		$.ajax({
			url: 'php/update.php',
    		method: 'POST',
    		dataType: 'html',
    		data: {opc:"upd3se",unose:cumpconN, cre:cre },
		})
		.done(function(msg) {
			alert(msg);
			location.reload();
		})	
	});


	//DOCUMENTACION STPS
	$("#btnstps").click(function() {
		$("#stps").show();
		$("#semt").hide();
		$("#pc").hide();
		$("#profeco").hide();
		$("#cre").hide();
		$("#asea").hide();
		$("#legal").hide();
		$("#legis").hide();
		$("#se").hide();
	});
	$("#001stps").click(function(){
		//alert("entra");
		status001s = $("#001stps").text();
		//alert("es: "+statusActa);

		if(status001s == " - "){
			//alert("Si");
			$("#001stps").text("Si");
			$("#001stps").addClass("active");
			cump001s = 1;
		}if(status001s == "Si"){
			//alert("No");
			$("#001stps").text("No");
			$("#001stps").addClass("success");
			$("#001stps").removeClass("active");
			cump001s = 0;
		}if(status001s == "No"){
			//alert("otra SI");
			$("#001stps").text("Si");
			$("#001stps").addClass("active");
			$("#001stps").removeClass("success");
			cump001s = 1;
		}
		//console.log(cumActa);
		//$("#cActa").val("Si");
	});
	$("#002stps").click(function(){
		//alert("entra");
		status002s = $("#002stps").text();
		//alert("es: "+statusActa);

		if(status002s == " - "){
			//alert("Si");
			$("#002stps").text("Si");
			$("#002stps").addClass("active");
			cump002s = 1;
		}if(status002s == "Si"){
			//alert("No");
			$("#002stps").text("No");
			$("#002stps").addClass("success");
			$("#002stps").removeClass("active");
			cump002s = 0;
		}if(status002s == "No"){
			//alert("otra SI");
			$("#002stps").text("Si");
			$("#002stps").addClass("active");
			$("#002stps").removeClass("success");
			cump002s = 1;
		}
		//console.log(cumActa);
		//$("#cActa").val("Si");
	});
	$("#009stps").click(function(){
		//alert("entra");
		status009s = $("#009stps").text();
		//alert("es: "+statusActa);

		if(status009s == " - "){
			//alert("Si");
			$("#009stps").text("Si");
			$("#009stps").addClass("active");
			cump009s = 1;
		}if(status009s == "Si"){
			//alert("No");
			$("#009stps").text("No");
			$("#009stps").addClass("success");
			$("#009stps").removeClass("active");
			cump009s = 0;
		}if(status009s == "No"){
			//alert("otra SI");
			$("#009stps").text("Si");
			$("#009stps").addClass("active");
			$("#009stps").removeClass("success");
			cump009s = 1;
		}
		//console.log(cumActa);
		//$("#cActa").val("Si");
	});
	$("#010stps").click(function(){
		//alert("entra");
		status010s = $("#010stps").text();
		//alert("es: "+statusActa);

		if(status010s == " - "){
			//alert("Si");
			$("#010stps").text("Si");
			$("#010stps").addClass("active");
			cump010s = 1;
		}if(status010s == "Si"){
			//alert("No");
			$("#010stps").text("No");
			$("#010stps").addClass("success");
			$("#010stps").removeClass("active");
			cump010s = 0;
		}if(status010s == "No"){
			//alert("otra SI");
			$("#010stps").text("Si");
			$("#010stps").addClass("active");
			$("#010stps").removeClass("success");
			cump010s = 1;
		}
		//console.log(cumActa);
		//$("#cActa").val("Si");
	});
	$("#011stps").click(function(){
		//alert("entra");
		status011s = $("#011stps").text();
		//alert("es: "+statusActa);

		if(status011s == " - "){
			//alert("Si");
			$("#011stps").text("Si");
			$("#011stps").addClass("active");
			cump011s = 1;
		}if(status011s == "Si"){
			//alert("No");
			$("#011stps").text("No");
			$("#011stps").addClass("success");
			$("#011stps").removeClass("active");
			cump011s = 0;
		}if(status011s == "No"){
			//alert("otra SI");
			$("#011stps").text("Si");
			$("#011stps").addClass("active");
			$("#011stps").removeClass("success");
			cump011s = 1;
		}
		//console.log(cumActa);
		//$("#cActa").val("Si");
	});
	$("#017stps").click(function(){
		//alert("entra");
		status017s = $("#017stps").text();
		//alert("es: "+statusActa);

		if(status017s == " - "){
			//alert("Si");
			$("#017stps").text("Si");
			$("#017stps").addClass("active");
			cump017s= 1;
		}if(status017s == "Si"){
			//alert("No");
			$("#017stps").text("No");
			$("#017stps").addClass("success");
			$("#017stps").removeClass("active");
			cump017s = 0;
		}if(status017s == "No"){
			//alert("otra SI");
			$("#017stps").text("Si");
			$("#017stps").addClass("active");
			$("#017stps").removeClass("success");
			cump017s = 1;
		}
		//console.log(cumActa);
		//$("#cActa").val("Si");
	});
	$("#018stps").click(function(){
		//alert("entra");
		status018s = $("#018stps").text();
		//alert("es: "+statusActa);

		if(status018s == " - "){
			//alert("Si");
			$("#018stps").text("Si");
			$("#018stps").addClass("active");
			cump018s = 1;
		}if(status018s == "Si"){
			//alert("No");
			$("#018stps").text("No");
			$("#018stps").addClass("success");
			$("#018stps").removeClass("active");
			cump018s = 0;
		}if(status018s == "No"){
			//alert("otra SI");
			$("#018stps").text("Si");
			$("#018stps").addClass("active");
			$("#018stps").removeClass("success");
			cump018s = 1;
		}
		//console.log(cumActa);
		//$("#cActa").val("Si");
	});
	$("#019stps").click(function(){
		//alert("entra");
		status019s = $("#019stps").text();
		//alert("es: "+statusActa);

		if(status019s == " - "){
			//alert("Si");
			$("#019stps").text("Si");
			$("#019stps").addClass("active");
			cump019s = 1;
		}if(status019s == "Si"){
			//alert("No");
			$("#019stps").text("No");
			$("#019stps").addClass("success");
			$("#019stps").removeClass("active");
			cump019s = 0;
		}if(status019s == "No"){
			//alert("otra SI");
			$("#019stps").text("Si");
			$("#019stps").addClass("active");
			$("#019stps").removeClass("success");
			cump019s = 1;
		}
		//console.log(cumActa);
		//$("#cActa").val("Si");
	});
	$("#022stps").click(function(){
		//alert("entra");
		status022s = $("#022stps").text();
		//alert("es: "+statusActa);

		if(status022s == " - "){
			//alert("Si");
			$("#022stps").text("Si");
			$("#022stps").addClass("active");
			cump022s = 1;
		}if(status022s == "Si"){
			//alert("No");
			$("#022stps").text("No");
			$("#022stps").addClass("success");
			$("#022stps").removeClass("active");
			cump022s = 0;
		}if(status022s == "No"){
			//alert("otra SI");
			$("#022stps").text("Si");
			$("#022stps").addClass("active");
			$("#022stps").removeClass("success");
			cump022s = 1;
		}
		//console.log(cumActa);
		//$("#cActa").val("Si");
	});
	$("#024stps").click(function(){
		//alert("entra");
		status024s = $("#024stps").text();
		//alert("es: "+statusActa);

		if(status024s == " - "){
			//alert("Si");
			$("#024stps").text("Si");
			$("#024stps").addClass("active");
			cump024s = 1;
		}if(status024s == "Si"){
			//alert("No");
			$("#024stps").text("No");
			$("#024stps").addClass("success");
			$("#024stps").removeClass("active");
			cump024s = 0;
		}if(status024s == "No"){
			//alert("otra SI");
			$("#024stps").text("Si");
			$("#024stps").addClass("active");
			$("#024stps").removeClass("success");
			cump024s = 1;
		}
		//console.log(cumActa);
		//$("#cActa").val("Si");
	});
	$("#025stps").click(function(){
		//alert("entra");
		status025s = $("#025stps").text();
		//alert("es: "+statusActa);

		if(status025s == " - "){
			//alert("Si");
			$("#025stps").text("Si");
			$("#025stps").addClass("active");
			cump025s = 1;
		}if(status025s == "Si"){
			//alert("No");
			$("#025stps").text("No");
			$("#025stps").addClass("success");
			$("#025stps").removeClass("active");
			cump025s = 0;
		}if(status025s == "No"){
			//alert("otra SI");
			$("#025stps").text("Si");
			$("#025stps").addClass("active");
			$("#025stps").removeClass("success");
			cump025s = 1;
		}
		//console.log(cumActa);
		//$("#cActa").val("Si");
	});
	$("#026stps").click(function(){
		//alert("entra");
		status026s = $("#026stps").text();
		//alert("es: "+statusActa);

		if(status026s == " - "){
			//alert("Si");
			$("#026stps").text("Si");
			$("#026stps").addClass("active");
			cump026s = 1;
		}if(status026s == "Si"){
			//alert("No");
			$("#026stps").text("No");
			$("#026stps").addClass("success");
			$("#026stps").removeClass("active");
			cump026s = 0;
		}if(status026s == "No"){
			//alert("otra SI");
			$("#026stps").text("Si");
			$("#026stps").addClass("active");
			$("#026stps").removeClass("success");
			cump026s = 1;
		}
		//console.log(cumActa);
		//$("#cActa").val("Si");
	});
	$("#027stps").click(function(){
		//alert("entra");
		status027s = $("#027stps").text();
		//alert("es: "+statusActa);

		if(status027s == " - "){
			//alert("Si");
			$("#027stps").text("Si");
			$("#027stps").addClass("active");
			cump027s = 1;
		}if(status027s == "Si"){
			//alert("No");
			$("#027stps").text("No");
			$("#027stps").addClass("success");
			$("#027stps").removeClass("active");
			cump027s = 0;
		}if(status027s == "No"){
			//alert("otra SI");
			$("#027stps").text("Si");
			$("#027stps").addClass("active");
			$("#027stps").removeClass("success");
			cump027s = 1;
		}
		//console.log(cumActa);
		//$("#cActa").val("Si");
	});
	$("#029stps").click(function(){
		//alert("entra");
		status029s = $("#029stps").text();
		//alert("es: "+statusActa);

		if(status029s == " - "){
			//alert("Si");
			$("#029stps").text("Si");
			$("#029stps").addClass("active");
			cump029s = 1;
		}if(status029s == "Si"){
			//alert("No");
			$("#029stps").text("No");
			$("#029stps").addClass("success");
			$("#029stps").removeClass("active");
			cump029s = 0;
		}if(status029s == "No"){
			//alert("otra SI");
			$("#029stps").text("Si");
			$("#029stps").addClass("active");
			$("#029stps").removeClass("success");
			cump029s = 1;
		}
		//console.log(cumActa);
		//$("#cActa").val("Si");
	});
	$("#033stps").click(function(){
		//alert("entra");
		status033s = $("#033stps").text();
		//alert("es: "+statusActa);

		if(status033s == " - "){
			//alert("Si");
			$("#033stps").text("Si");
			$("#033stps").addClass("active");
			cump033s = 1;
		}if(status033s == "Si"){
			//alert("No");
			$("#033stps").text("No");
			$("#033stps").addClass("success");
			$("#033stps").removeClass("active");
			cump033s = 0;
		}if(status033s == "No"){
			//alert("otra SI");
			$("#033stps").text("Si");
			$("#033stps").addClass("active");
			$("#033stps").removeClass("success");
			cump033s = 1;
		}
		//console.log(cumActa);
		//$("#cActa").val("Si");
	});
	$("#guardarDocstp").click(function() {
		/* Act on the event */
		stps1s = $("#est001").val();
		stps1e = $("#evid001").val();
		stps1p = $("#porce001").val();

		stps2s = $("#est002").val();
		stps2e = $("#evid002").val();
		stps2p = $("#porce002").val();

		stps3s = $("#est009").val();
		stps3e = $("#evid009").val();
		stps3p = $("#porce009").val();

		stps4s = $("#est010").val();
		stps4e = $("#evid010").val();
		stps4p = $("#porce010").val();

		stps5s = $("#est011").val();
		stps5e = $("#evid011").val();
		stps5p = $("#porce011").val();

		stps6s = $("#est017").val();
		stps6e = $("#evid017").val();
		stps6p = $("#porce017").val();

		stps7s = $("#est018").val();
		stps7e = $("#evid018").val();
		stps7p = $("#porce018").val();

		stps8s = $("#est019").val();
		stps8e = $("#evid019").val();
		stps8p = $("#porce019").val();

		stps9s = $("#est022").val();
		stps9e = $("#evid022").val();
		stps9p = $("#porce022").val();

		stps10s = $("#est024").val();
		stps10e = $("#evid024").val();
		stps10p = $("#porce024").val();

		stps11s = $("#est025").val();
		stps11e = $("#evid025").val();
		stps11p = $("#porce025").val();

		stps12s = $("#est026").val();
		stps12e = $("#evid026").val();
		stps12p = $("#porce026").val();

		stps13s = $("#est027").val();
		stps13e = $("#evid027").val();
		stps13p = $("#porce027").val();

		stps14s = $("#est029").val();
		stps14e = $("#evid029").val();
		stps14p = $("#porce029").val();

		stps15s = $("#est033").val();
		stps15e = $("#evid033").val();
		stps15p = $("#porce033").val();
		
		//alert("tomar los valores 12: "+cump026s+" evidencia 10 "+stps10e+" porcentaje 5 "+stps5p+" status 15 "+stps15s);
		cre = localStorage.getItem("PL");
		
		$.ajax({
			url: 'php/insert.php',
    		method: 'POST',
    		dataType: 'html',
    		data: {opc:"add3s",unos:cump001s, unosS:stps1s, unosE:stps1e, unosP:stps1p, doss:cump002s, dossS:stps2s, dossE:stps2e, dossP:stps2p, tress:cump009s, tressS:stps3s, tressE:stps3e, tressP:stps3p, cuatros:cump010s, cuatrosS:stps4s, cuatrosE:stps4e, cuatrosP:stps4p, cincos:cump011s, cincosS:stps5s, cincosE:stps5e, cincosP:stps5p, seiss:cump017s, seissS:stps6s, seissE:stps6e, seissP:stps6p, sietes:cump018s, sietesS:stps7s, sietesE:stps7e, sietesP:stps7p, ochos:cump019s, ochosS:stps8s, ochosE:stps8e, ochosP:stps8p, nueves:cump022s, nuevesS:stps9s, nuevesE:stps9e, nuevesP:stps9p, diezs:cump024s, diezsS:stps10s, diezsE:stps10e, diezsP:stps10p, onces:cump025s, oncesS:stps11s, oncesE:stps11e, oncesP:stps11p, doces:cump026s, docesS:stps12s, docesE:stps12e, docesP:stps12p, treces:cump027s, trecesS:stps13s, trecesE:stps13e, trecesP:stps13p, cators:cump029s, catorsS:stps14s, catorsE:stps14e, catorsP:stps14p, quins:cump033s, quinsS:stps15s, quinsE:stps15e, quinsP:stps15p, cre:cre },
		})
		.done(function(msg) {
			alert(msg);
		})			
	});

	$("#actualizarDocstp").click(function() {
		/* Act on the event */
		cump001s = $("#001stps").text();
		cump002s = $("#002stps").text();
		cump009s = $("#009stps").text();
		cump010s = $("#010stps").text();
		cump011s = $("#011stps").text();
		cump017s = $("#017stps").text();
		cump018s = $("#018stps").text();
		cump019s = $("#019stps").text();
		cump022s = $("#022stps").text();
		cump024s = $("#024stps").text();
		cump025s = $("#025stps").text();
		cump026s = $("#026stps").text();
		cump027s = $("#027stps").text();
		cump029s = $("#029stps").text();
		cump033s = $("#033stps").text();
		//alert("tomar los 15 valores: "+cump001s+" - "+cump002s+" - "+cump009s+" - "+cump010s+" - "+cump011s+" - "+cump017s+" - "+cump018s+" - "+cump019s+" - "+cump022s+" - "+cump024s+" - "+cump025s+" - "+cump026s+" - "+cump027s+" - "+cump029s+" - "+cump033s);
		cre = localStorage.getItem("PL");
		$.ajax({
			url: 'php/update.php',
    		method: 'POST',
    		dataType: 'html',
    		data: {opc:"upd3s",unos:cump001s, doss:cump002s, tress:cump009s, cuatros:cump010s, cincos:cump011s, seiss:cump017s, sietes:cump018s, ochos:cump019s,  nueves:cump022s, diezs:cump024s, onces:cump025s, doces:cump026s, treces:cump027s, cators:cump029s, quins:cump033s, cre:cre },
		})
		.done(function(msg) {
			alert(msg);
			location.reload();
		})			
	});


	/*ALTA PUNTO 4*/
	$("#btnGuardar4").click(function() {
		meta4 = $("#metap4").val();
		fc4 = $("#fechapt4").val();
		sepador = "/";
		fecha = fc4.split(sepador);
		fecha4 = fecha[2]+"-"+fecha[0]+"-"+fecha[1];
		nombreT4 = $("#nombreTrabjpt4").val();
		pl = localStorage.getItem("PL");

		$.ajax({
			url: 'php/insert.php',
    		method: 'POST',
    		dataType: 'html',
    		data: {opc:"add4",m:meta4, f:fecha4, n:nombreT4, cre:pl },
		})
		.done(function(msg) {
			alert(msg);
			location.reload();
		})		
	});

	/*ALTA PUNTO 5*/
	$("#guardarU").click(function() {
		nameTES = $("#nombreTES").val();
		apPTES = $("#aPTES").val();
		amTTES = $("#aMTES").val();
		pueTES = $("#puestoTES").val();
		pl = localStorage.getItem("PL");

		$.ajax({
			url: 'php/insert.php',
    		method: 'POST',
    		dataType: 'html',
    		data: {opc:"add5",n:nameTES, aPN:apPTES, aMN:amTTES, p:pueTES, cre:pl },
		})
		.done(function(msg) {
			alert(msg);
			location.reload();
		})		
	});
	/*ALTA PUNTO 6*/
	$("#guardarCurso").click(function() {
		Ncurso = $("#cursoN").val();
		Ninstr = $("#instrucN").val();
		fechaC = $("#fechCurso").val();
		sepador = "/";
		fecha = fechaC.split(sepador);
		fechaN = fecha[2]+"-"+fecha[0]+"-"+fecha[1]
		Cert = $("#doCert").val();
		cre = localStorage.getItem("PL");
		//alert(fechaN);
		$.ajax({
			url: 'php/insert.php',
    		method: 'POST',
    		dataType: 'html',
    		data: {opc:"add6",Nom:Ncurso, ins:Ninstr, fec:fechaN, cer:Cert,  i:cre },
		})
		.done(function(msg) {
			alert(msg+" Curso Cargado Correctamente.");
			//localStorage.setItem("NCurso",msg);
			location.reload();
		})
	});
	$("#guardarCT").click(function() {
		idNT = $("#nombreTrabj").val();
		cre = localStorage.getItem("PL");
		//idC = localStorage.getItem("NCurso");
		idC = $("#numCurso").val();
		//alert("trabajador"+idNT+" curso"+idC);
		$.ajax({
			url: 'php/insert.php',
    		method: 'POST',
    		dataType: 'html',
    		data: {opc:"addct6", tid:idNT, ic:cre, cid:idC },
		})
		.done(function(msg) {
			alert(msg);
			location.reload();
		})
	});

	/*ACCION DE MODAL SUG/QUEJAS - PUNTO 7*/
	$("#btnGuardar7").click(function(){
		cre = localStorage.getItem("PL");
		sepador = "/";
		sid = cre.split(sepador);
		id = sid[0]+sid[1];
		
		$("#icsq").val(cre)
		$("#cresq").val(id);
		$("#opc[name=opcsq]").val("sq");

		valores = new FormData($("#enviarsq")[0]);
		$.ajax({
				data: valores,
				url:'php/upload.php',
				method:'POST',
				dataType:'html',
				contentType: false,
				processData: false,
				
			})
			.done(function(msg){
				alert(msg);
			});
	});

	/*DESCARGA DE PUNTO 8*/
	$("#btnGuardar8").click(function(){
		x = localStorage.getItem("PL");
		$.ajax({
			url: 'php/down.php',
    		method: 'POST',
    		dataType: 'html',
    		data: {opc:"pt8", cre:x },
		})
		.done(function(msg) {
			alert(msg);
		})		
	});

	/*ALTA PUNTO 9**/
	/*MOVIMIENTO DE ETIQUETAS*/
	$("#btncontrolr").click(function() {
		$("#controlr").show('slow/400/fast');
		$("#rbpo").hide();
	});
	$("#btnrbpoc").click(function() {
		$("#rbpo").show('slow/400/fast');
		$("#controlr").hide();
	});

	$("#guardarControl").click(function() {
		proced = $("#nomnbreP").val();
		suge = $("#sugerencia").val();
		mesp = $("#meselec").val();
		estado = $("#statusP").val();
		respT = $("#reprTec").val();
		cre = localStorage.getItem('PL');

		$.ajax({
			url: 'php/insert.php',
    		method: 'POST',
    		dataType: 'html',
    		data: {opc:"add9", p:proced, s:suge, m:mesp, e:estado, r:respT, i:cre  },
		})
		.done(function(msg) {
			alert(msg);
		})
	});

	$("#guardarbpo").click(function() {
		ar = $("#areaRbpo").val();
		nS = $("#supRbpo").val();
		nT = $("#nombreRbpo").val();
		dA = $("#descA").val();
		crti = $("#criticaA").val();
		inAc = $("#incAcc").val();
		cus = $("#causa").val();
		obse = $("#obs").val();
		cre = localStorage.getItem("PL");

		$.ajax({
			url: 'php/insert.php',
    		method: 'POST',
    		dataType: 'html',
    		data: {opc:"addrbpo9", a:ar, n:nS, t:nT, d:dA, c:crti, ia:inAc, u:cus, o:obse, i:cre  },
		})
		.done(function(msg) {
			alert(msg);
		})
	});

	/*BOTONES QUE SE USAN PARA MOVER LA INFROMACION QUE SE SOLICITA PUNTO 10*/
	$("#btnper").click(function() {
		$("#personal").show('slow/400/fast');
		$("#tecno").hide();
		$("#ordent").hide();
		$("#bit").hide();
	});
	$("#btntec").click(function() {
		$("#tecno").show('slow/400/fast');
		$("#personal").hide();
		$("#ordent").hide();
		$("#bit").hide();
	});
	$("#btnorden").click(function() {
		$("#ordent").show('slow/400/fast');
		$("#tecno").hide();
		$("#personal").hide();
		$("#bit").hide();
	});
	$("#btnbitacora").click(function() {
		$("#bit").show('slow/400/fast');
		$("#tecno").hide();
		$("#personal").hide();
		$("#ordent").hide();
	});

	$("#guardarCPersonal").click(function() {
		areaN = $("#aNueva").val();
		ntrab = $("#nombreTrabjC").val();
		responC = $("#autori").val();
		motC = $("#motivoC").val();
		cre = localStorage.getItem("PL");
		//alert(areaN);
		$.ajax({
			url: 'php/insert.php',
			method: 'POST',
			dataType: 'html',
			data: {opc:"add10",area:areaN, n:ntrab, r:responC, m:motC, cre:cre},
		})
		.done(function(msg) {
			alert(msg);
		})		
	});

	$("#guardarCTec").click(function() {
		equipC = $("#equipoC").val();
		repM = $("#respMant").val();
		fechaCmT = $("#fechaCT").val();
		sepador = "/";
		fCT = fechaCmT.split(sepador);
		feCmT = fCT[2]+"-"+fCT[0]+"-"+fCT[1]

		descC = $("#descrpC").val();
		cre = localStorage.getItem("PL");
		$.ajax({
			url: 'php/insert.php',
			method: 'POST',
			dataType: 'html',
			data: {opc:"add10T",ecam:equipC, rm:repM, feCT:feCmT, descrp:descC, cre:cre},
		})
		.done(function(msg) {
			alert(msg);
		})		
	});

	$("#guardarOrdenTrabajo").click(function() {
		fOrdTra = $("#fechaOT").val();
		sepador = "/";
		fCT = fOrdTra.split(sepador);
		fOrdTra = fCT[2]+"-"+fCT[0]+"-"+fCT[1];

		noPer = $("#noPermiso").val();
		ubiT = $("#ubicacionT").val();
		detT = $("#detallesT").val();
		perC = $("#personalC").val();
		tipT = $("#tipoT").val();
		tipTrab = $("#tipoTrabajo").val();
		hrIn = $("#hrIni").val() +":"+ $("#minIni").val();
		//miIn = 
		hrFn = $("#hrFin").val() +":"+ $("#minFin").val();
		//miFn = ;
		Pel = $("#peligros").val();
		Pre = $("#precauciones").val();
		areaTrb = $("#areaTrab").val();
		cre = localStorage.getItem("PL");

		//alert("hINICIAL"+hrIn+"FINAL"+hrFn);
		//alert("Peligros: "+Pel+" Precauciones: "+Pre)
		$.ajax({
			url: 'php/insert.php',
			method: 'POST',
			dataType: 'html',
			data: {opc:"add10oT",fOT:fOrdTra, NP:noPer, UT:ubiT, DT:detT, PC:perC, TT:tipT, TTb:tipTrab, HI:hrIn, HF:hrFn, Pl:Pel, Pr:Pre, ATr:areaTrb, cre:cre},
		})
		.done(function(msg) {
			alert(msg);
		})
	});

	$("#btnGuardar01").click(function(event) {
		/* Act on the event */
		cre = localStorage.getItem("PL");
		$("#idbt01").val(cre);
		valores = new FormData($("#enviarbt01")[0]);
		$.ajax({
			data: valores,
			url:'php/upload.php',
			method:'POST',
			dataType:'html',
			contentType: false,
			processData: false,
		})
		.done(function(msg) {
			alert(msg);
			localion.reload();
		})		
	});

	$("#btnGuardar02").click(function(event) {
		/* Act on the event */
		cre = localStorage.getItem("PL");
		$("#idbt02").val(cre);
		valores = new FormData($("#enviarbt02")[0]);
		$.ajax({
			data: valores,
			url:'php/upload.php',
			method:'POST',
			dataType:'html',
			contentType: false,
			processData: false,
		})
		.done(function(msg) {
			alert(msg);
			location.reload();
		})
	});
	$("#btnGuardar03").click(function(event) {
		/* Act on the event */
		cre = localStorage.getItem("PL");
		$("#idbt03").val(cre);
		valores = new FormData($("#enviarbt03")[0]);
		$.ajax({
			data: valores,
			url:'php/upload.php',
			method:'POST',
			dataType:'html',
			contentType: false,
			processData: false,
		})
		.done(function(msg) {
			alert(msg);
			location.reload();
		})
	});

	/*SUBIDA DE BITACORAS DE PUNTO 11*/
	$("#btnGuardar11bt01").click(function() {
		/* Act on the event */
		cre = localStorage.getItem("PL");
		$("#id11bt01").val(cre);
		valores = new FormData($("#frm11bt01")[0]);
		$.ajax({
			data: valores,
			url:'php/upload.php',
			method:'POST',
			dataType:'html',
			contentType: false,
			processData: false,
		})
		.done(function(msg) {
			alert(msg);
		})
	});

	$("#btnGuardar11bt02").click(function() {
		/* Act on the event */
		cre = localStorage.getItem("PL");
		$("#id11bt02").val(cre);
		valores = new FormData($("#frm11bt02")[0]);
		$.ajax({
			data: valores,
			url:'php/upload.php',
			method:'POST',
			dataType:'html',
			contentType: false,
			processData: false,
		})
		.done(function(msg) {
			alert(msg);
		})
	});

	$("#btnGuardar02m").click(function() {
		/* Act on the event */
		cre = localStorage.getItem("PL");
		$("#id11bt02m").val(cre);
		valores = new FormData($("#frm11bt02m")[0]);
		$.ajax({
			data: valores,
			url:'php/upload.php',
			method:'POST',
			dataType:'html',
			contentType: false,
			processData: false,
		})
		.done(function(msg) {
			alert(msg);
		})
	});

	$("#btnGuardar03t").click(function() {
		/* Act on the event */
		cre = localStorage.getItem("PL");
		$("#id11bt02t").val(cre);
		valores = new FormData($("#frm11bt02t")[0]);
		$.ajax({
			data: valores,
			url:'php/upload.php',
			method:'POST',
			dataType:'html',
			contentType: false,
			processData: false,
		})
		.done(function(msg) {
			alert(msg);
		})
	});

	$("#btnGuardar03c").click(function() {
		/* Act on the event */
		cre = localStorage.getItem("PL");
		$("#id11bt02c").val(cre);
		valores = new FormData($("#frm11bt02c")[0]);
		$.ajax({
			data: valores,
			url:'php/upload.php',
			method:'POST',
			dataType:'html',
			contentType: false,
			processData: false,
		})
		.done(function(msg) {
			alert(msg);
		})
	});

	$("#btnGuardar03s").click(function() {
		/* Act on the event */
		cre = localStorage.getItem("PL");
		$("#id11bt02s").val(cre);
		valores = new FormData($("#frm11bt02s")[0]);
		$.ajax({
			data: valores,
			url:'php/upload.php',
			method:'POST',
			dataType:'html',
			contentType: false,
			processData: false,
		})
		.done(function(msg) {
			alert(msg);
		})
	});

	$("#btnGuardar03a").click(function() {
		/* Act on the event */
		cre = localStorage.getItem("PL");
		$("#id11bt02a").val(cre);
		valores = new FormData($("#frm11bt02a")[0]);
		$.ajax({
			data: valores,
			url:'php/upload.php',
			method:'POST',
			dataType:'html',
			contentType: false,
			processData: false,
		})
		.done(function(msg) {
			alert(msg);
		})
	});

	$("#btnGuardar03q").click(function() {
		/* Act on the event */
		cre = localStorage.getItem("PL");
		$("#id11bt02q").val(cre);
		valores = new FormData($("#frm11bt02q")[0]);
		$.ajax({
			data: valores,
			url:'php/upload.php',
			method:'POST',
			dataType:'html',
			contentType: false,
			processData: false,
		})
		.done(function(msg) {
			alert(msg);
		})
	});

	$("#btnGuardar04").click(function() {
		/* Act on the event */
		cre = localStorage.getItem("PL");
		$("#id11bt03").val(cre);
		valores = new FormData($("#frm11bt03")[0]);
		$.ajax({
			data: valores,
			url:'php/upload.php',
			method:'POST',
			dataType:'html',
			contentType: false,
			processData: false,
		})
		.done(function(msg) {
			alert(msg);
		})
	});


	/*BOTONES QUE SE USAN PARA MOVER LA INFROMACION QUE SE SOLICITA PUNTO 12*/
	$("#btnaddp").click(function() {
		$("#agregarP").show('slow/400/fast');
		$("#herramientE").hide();
	});
	$("#btnhepp").click(function() {
		$("#herramientE").show('slow/400/fast');
		$("#agregarP").hide();
	});
	$("#guardarprove").click(function() {
		razon = $("#razonP").val();
		serv = $("#descripcionS").val();
		e = $("#metodoE").val();
		cre = localStorage.getItem('PL')
		$.ajax({
			url: 'php/insert.php',
			method: 'POST',
			dataType: 'html',
			data: {opc:"add12",rs:razon, s:serv, metodo:e, cre:cre},
		})
		.done(function(msg) {
			alert(msg);
			//alert("Datos Insertados correctamente, ahora agrega las actividades.");
		})
	});
    $("#guardartrab").click(function(){
    	n = $("#nameT").val();
    	nE = $("#nombreEmpresa").val();
    	idS = localStorage.getItem("PL");
    	$.ajax({
    		url: 'php/insert.php',
    		method: 'POST',
    		dataType: 'html',
    		data: {opc:"addt12",nomb:n,nomE:nE, cre:idS },
    	})
    	.done(function(msg) {
    		//alert(msg);
    		if(msg != ""){
				alert("Datos Insertados correctamente, ahora agrega las herramientas.");
				localStorage.setItem("TrabC",msg);
			}
    	})
    });
    $("#guardarH").click(function() {
    	nH = $("#nomHerr").val();
    	sH = $("#estHerr").val();
    	eP = $("#epp").val();
    	idT = localStorage.getItem("TrabC");
    	$.ajax({
    		url: 'php/insert.php',
    		method: 'POST',
    		dataType: 'html',
    		data: {opc:"addh12",nombH:nH, estH:sH, PP:eP, numT:idT },
    	})
    	.done(function(msg) {
    		alert(msg);    		
    	})
    });

    /*ACCION DE MODAL PRE PUNTO 13*/
    $("#btnGuardarPRE").click(function(){
		cre = localStorage.getItem("PL");
		sepador = "/";
		sid = cre.split(sepador);
		id = sid[0]+sid[1];
		
		$("#icpre").val(cre)
		$("#crepre").val(id);
		$("#opc[name=oppre]").val("pre");

		valores = new FormData($("#enviarPRE")[0]);
		//valores.append("opc",opc,"cre", id);
		$.ajax({
				//data:{opc:"pol", cre:id},
				data: valores,
				url:'php/upload.php',
				method:'POST',
				dataType:'html',
				contentType: false,
				processData: false,
				
			})
			.done(function(msg){
				alert(msg);
			});		
	});

	/*PUNTO 14*/
	$("#guardarSolicitud").click(function() {
		s = $("#solicitud").val();
		ar14 = $("#areaTrab14").val();
		con = $("#conformidad").val();
		rAp = $("#respAprev").val();
		rV = $("#respVerif").val();
		a = $("#accions").val();
		tR = $("#trabjRespo").val();
		fpg = $("#fechaProg").val();
		sepador = "/";
		fechagp = fpg.split(sepador);
		fgps = fechagp[2]+"-"+fechagp[0]+"-"+fechagp[1]
		cre = localStorage.getItem("PL");

		//alert(s+ar14+con+rAp+rV+a+tR+fgps+cre);

		$.ajax({
			url: 'php/insert.php',
			method: 'POST',
			dataType: 'html',
			data: {opc:"add14",sol:s, area:ar14, conf:con, prev:rAp, verf:rV, acion:a, responj:tR, fchap:fgps, cre:cre},
		})
		.done(function(msg) {
			alert(msg)
		})
	});

	/*BOTONES QUE SE USAN PARA MOVER LA INFROMACION QUE SE SOLICITA PUNTO 15*/
	$("#btnaudi").click(function() {
		$("#audi").show('slow/400/fast');
		$("#repaudi").hide();
	});
	$("#btnrepa").click(function() {
		$("#repaudi").show('slow/400/fast');
		$("#audi").hide();
		noau = localStorage.getItem("RepA");
		t = localStorage.getItem("taud");
		$("#noaud").val(noau);
		$("#tau").val(t);
		date = new Date();
		fecha=date.getDate()+"/"+(date.getMonth()+1)+"/"+date.getFullYear()+" "+date.getHours()+":"+date.getMinutes()+":"+date.getSeconds();
		$("#fecharep").val(fecha);
	});

	$("#guardarauditoria").click(function() {
		//alert("ENTRA A AUDITORIA");
		alc = $("#alcance").val();
		al = $("#al").val();
		a1 = $("#a1").val();
		a2 = $("#a2").val();

		$('#criterio option:selected').each(function(){
			cri = $(this).text();
		});
		$('#tipo option:selected').each(function(){
			tipo = $(this).text();
		});
		$('#objetivos option:selected').each(function(){
			obj = $(this).text();
		});
		localStorage.setItem("taud",tipo);

		$.ajax({
			url: 'php/insert.php',
			method: 'POST',
			dataType: 'html',
			data: {opc:"add15",alca:alc, crit:cri, tip:tipo, obje:obj, ali:al, au1:a1, au2:a2},
		})
		.done(function(msg) {
			//alert(msg);
			if(msg != ""){
				datosa = msg.split("-");
				alert("Datos Insertados correctamente, ahora agrega las actividades.");
				$("#auditorias").text("No. Reporte: "+datosa[0]+" - "+datosa[1]);
				//$("#idauditoria").text(razon);
				localStorage.setItem("RepA",datosa[0]);
			}
		})
	});

	$("#guardaractaudi").click(function() {
		//alert("actAuditoria");
		pro = $("#procact").val();
		aud = $("#auditor").val();
		idaud = localStorage.getItem("RepA");

		$.ajax({
			url: 'php/insert.php',
			method: 'POST',
			dataType: 'html',
			data: {opc:"addact15",procesos:pro, auditor:aud, aud:idaud },
		})
		.done(function(msg) {
			alert(msg);
		})
	});

	$("#guardarrepaud").click(function() {
		no = $("#noaud").val();
		pl = localStorage.getItem("PL");
		elab = $("#elab").val();
		halla = $("#hallaz").val();
		conc = $("#conclu").val();
		reco = $("#recom").val();

		$.ajax({
			url: 'php/insert.php',
			method: 'POST',
			dataType: 'html',
			data: {opc:"addrep15",id:no, cre:pl, elaborado:elab, hallazgo:halla, conclusion:conc, recomendacion:reco },
		})
		.done(function(msg) {
			alert(msg);
		})
	});


	/*DESCARGA DE PUNTO 16*/
	$("#qincident").change(function () {
		valor = "";
		$('#qincident option:selected').each(function(){
			valor += $(this).val();
		});
		if(valor == 1){
			//alert(valor);
			//$("#descarga").show();
			$("#descarga1").css("display","block");
		}else{
			$("#descarga1").hide();
		}
	});

	$("#btnGuardar16").click(function(){
		$('#qincident option:selected').each(function(){
			l = $(this).text();
		});
		id = localStorage.getItem("PL");

		//alert("resp "+valor+"cre "+id);
		$.ajax({
			url:'php/insert.php',
			method:'POST',
			dataType:'html',
			data:{opc:"add16", r:l, cesh:id},
			})
			.done(function(msg){
				alert(msg);
				location.reload();
		});
	});

	

});//fin de ready



