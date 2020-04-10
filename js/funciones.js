
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
					localStorage.setItem("NES",a[2]);
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
		z = localStorage.getItem("PL");
		window.open('pt6.php?x='+z, '_blank');
		//window.open('pt3.php', '_self');
	});	
	/*$("#pt7").click(function() {
		//alert("HOLI");
		//window.open('pt3.php', '_self');
	});	*/
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
	/*$("#pt11").click(function() {
		//alert("HOLI");
		//window.open('pt3.php', '_self');
	});*/	
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

	/*ALTA PUNTO 4*/

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
			$("#nombreTES").val("");
			$("#aPTES").val("");
			$("#aMTES").val("");
			$("#puestoTES").val("Selecciona");
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
			alert("Curso Cargado Correctamente, Carga los Empleados que participaron.");
			localStorage.setItem("NCurso",msg);
		})
	});
	$("#guardarCT").click(function() {
		idNT = $("#nombreTrabj").val();
		cre = localStorage.getItem("PL");
		idC = localStorage.getItem("NCurso");
		$.ajax({
			url: 'php/insert.php',
    		method: 'POST',
    		dataType: 'html',
    		data: {opc:"addct6", tid:idNT, ic:cre, cid:idC },
		})
		.done(function(msg) {
			alert(msg);
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
		i = localStorage.getItem("PL");
		window.location.href = "php/down8.php?c="+i;
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

		//alert("hINICIAL"+hrIn+"FINAL"+hrFn)
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
	});
	$("#btnGuardar02").click(function(event) {
		/* Act on the event */
	});
	$("#btnGuardar03").click(function(event) {
		/* Act on the event */
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
				alert("Datos Insertados correctamente, ahora agrega las actividades.");
				localStorage.setItem("RepA",msg);
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
	$("#btndescarg16").click(function(){
		window.location.href = "php/down16.php";
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
		});
	});

	

});//fin de ready



