
$(document).ready(function(){
paginacion = 1;

	$("#btnclosei").click(function() { //BOTON DE CERRAR EN INICIO
		window.location.href = "index.php"
	});

	//INICIO DE SESION POR TIPO DE USUARIO
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
				if(a[0] == ""){
					alert("Error en datos favor de validar");
				}if(a[0] == "Admin"){
					//alert("Entra a Admin");
					window.location.href = "inicio.php?ty="+a[0];
				}if(a[0] == "sasisopa"){
					//alert("Entra a Admin");
					window.location.href = "inicio.php?ty="+a[0];
				}if (a[0] == "RL") {
					//alert("RL");
				}if(a[0] == "estacion"){
					window.location.href = "inicio.php?ty="+a[0];
					localStorage.setItem("PL",a[3]);
					localStorage.setItem("RS",a[4]);
				}

				//window.open('inicio.php');
			});
		} else { alert("no trae nada.")}
	});

	//USUARIO SASISOPA
	$("#btnstasasi").click(function(){
		$("#spaesta").show('slow/400/fast');
		$("#btnaddst").show('slow/400/fast');
		$("#btnupdst").show('slow/400/fast');
		$("#btnblqst").show('slow/400/fast');

		$("#btnsas").hide('slow/400/fast');
		$("#btnbl").hide('slow/400/fast');
	});
	$("#btnsasisasi").click(function(){
		$("#spaesta").show('slow/400/fast');
		$("#btnsas").show('slow/400/fast');
		$("#btnbl").show('slow/400/fast');
		$("#btnaddst").hide('slow/400/fast');
		$("#btnupdst").hide('slow/400/fast');
		$("#btnblqst").hide('slow/400/fast');		
	});
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
		window.location.href = "inicio.php?ty=sasisopa";
	});

	$("#btnprueba").click(function() {
		//cre2 = "PL/22402/EXP/ES/2019";

	});



	//USARIO ESTACION
	 //Boton de inicio
	 $("#btninicio").click(function(){
	 	$("#1pt").show();
	 	$("#2pt").hide();
	 	$("#3pt").hide();
	 	$("#4pt").hide();
	 	$("#5pt").hide();
	 	paginacion = 1;
	});

	//Boton atras
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

	$("#btnfinal").click(function() {//Boton final
		$("#5pt").show();
		$("#1pt").hide();
	 	$("#2pt").hide();
	 	$("#3pt").hide();
	 	$("#4pt").hide();
	 	paginacion = 5;
	}); 


	$("#pt3").click(function() {
		//alert("HOLI");
		window.open('pt3.php', '_blank');
		//window.open('pt3.php', '_self');
	});	
	$("#pt5").click(function() {
		//alert("HOLI");
		window.open('pt5.php', '_blank');
		//window.open('pt3.php', '_self');
	});	
	$("#pt6").click(function() {
		//alert("HOLI");
		window.open('pt6.php', '_blank');
		//window.open('pt3.php', '_self');
	});	
	$("#pt7").click(function() {
		//alert("HOLI");
		window.open('pt7.php', '_blank');
		//window.open('pt3.php', '_self');
	});	
	$("#pt9").click(function() {
		//alert("HOLI");
		window.open('pt9.php', '_blank');
		//window.open('pt3.php', '_self');
	});	
	$("#pt10").click(function() {
		//alert("HOLI");
		window.open('ptX.php', '_blank');
		//window.open('pt3.php', '_self');
	});	
	$("#pt11").click(function() {
		//alert("HOLI");
		window.open('ptXI.php', '_blank');
		//window.open('pt3.php', '_self');
	});	
	$("#pt12").click(function() {
		//alert("HOLI");
		window.open('ptXII.php', '_blank');
		//window.open('pt3.php', '_self');
	});	
	$("#pt14").click(function() {
		//alert("HOLI");
		window.open('ptXIV.php', '_blank');
		//window.open('pt3.php', '_self');
	});	
	$("#pt15").click(function() {
		//alert("HOLI");
		window.open('ptXV.php', '_blank');
		//window.open('pt3.php', '_self');
	});	
	$("#btnGuardarP").click(function(){
		//alert("empieza a guardar");
		archivo = $("#archivoSel").val();
		//alert("valor"+archivo);
		//https://ricardogeek.com/como-subir-archivos-con-javascript/
		$.ajax({
					url:'',
					method:'POST',
					dataType:'html',
					data:{},
				})
				.done(function(msg){
					
				});
	});
	$("#btnGuardarAR").click(function(){
		archivo = $("#archivoAR").val();
		$.ajax({
					url:'',
					method:'POST',
					dataType:'html',
					data:{},
				})
				.done(function(msg){
					
				});
	});

	/*BOTONES QUE SE USAN PARA MOVER LA INFROMACION QUE SE SOLICITA PUNTO 3*/
	$("#btnlegal").click(function() {
		$("#legal").show();
		$("#legis").hide();
		$("#asea").hide();
		$("#profeco").hide();
		$("#cre").hide();
		$("#pc").hide();
		$("#semt").hide();
		$("#stps").hide();
	});
	$("#btnlegis").click(function() {
		$("#legis").show();
		$("#pc").hide();
		$("#semt").hide();
		$("#stps").hide();
		$("#profeco").hide();
		$("#cre").hide();
		$("#legal").hide();
		$("#asea").hide();
	});
	$("#btnasea").click(function() {
		$("#asea").show();
		$("#pc").hide();
		$("#profeco").hide();
		$("#semt").hide();
		$("#stps").hide();
		$("#legal").hide();
		$("#legis").hide();
		$("#cre").hide();
	});
	$("#btncre").click(function() {
		$("#cre").show();
		$("#pc").hide();
		$("#semt").hide();
		$("#profeco").hide();
		$("#stps").hide();
		$("#asea").hide();
		$("#legal").hide();
		$("#legis").hide();
	});
	$("#btnprofeco").click(function() {
		$("#profeco").show();
		$("#pc").hide();
		$("#semt").hide();
		$("#stps").hide();
		$("#cre").hide();
		$("#asea").hide();
		$("#legal").hide();
		$("#legis").hide();
	});
	$("#btnpc").click(function() {
		$("#pc").show();
		$("#semt").hide();
		$("#stps").hide();
		$("#profeco").hide();
		$("#cre").hide();
		$("#asea").hide();
		$("#legal").hide();
		$("#legis").hide();
	});
	$("#btnstps").click(function() {
		$("#stps").show();
		$("#semt").hide();
		$("#pc").hide();
		$("#profeco").hide();
		$("#cre").hide();
		$("#asea").hide();
		$("#legal").hide();
		$("#legis").hide();
	});
	$("#btnsemt").click(function() {
		$("#semt").show();
		$("#stps").hide();
		$("#profeco").hide();
		$("#pc").hide();
		$("#cre").hide();
		$("#asea").hide();
		$("#legal").hide();
		$("#legis").hide();
	});


	/*BOTONES QUE SE USAN PARA MOVER LA INFROMACION QUE SE SOLICITA PUNTO 10*/
	$("#btnper").click(function() {
		$("#personal").show('slow/400/fast');
		$("#tecno").hide();
		$("#ordent").hide();;
	});
	$("#btntec").click(function() {
		$("#tecno").show('slow/400/fast');
		$("#personal").hide();
		$("#ordent").hide();;
	});
	$("#btnorden").click(function() {
		$("#ordent").show('slow/400/fast');
		$("#tecno").hide();
		$("#personal").hide();;
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

	/*BOTONES QUE SE USAN PARA MOVER LA INFROMACION QUE SE SOLICITA PUNTO 15*/
	$("#btnaudi").click(function() {
		$("#audi").show('slow/400/fast');
		$("#repaudi").hide();
	});
	$("#btnrepa").click(function() {
		$("#repaudi").show('slow/400/fast');
		$("#audi").hide();
	});

});



