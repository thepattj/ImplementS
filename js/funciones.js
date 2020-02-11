
$(document).ready(function(){

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
				alert(msg);
				if(msg == ""){
					alert("Error en datos favor de validar");
				}if(msg == "Admin"){
					alert("Entra a Admin");
					$("#btnInicio").attr("href", inicio.php);
				}if (msg == "RL") {
					alert("RL");
				}if(msg == "estacion"){
					alert("Encargado");
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






	$("#pt3").click(function() {
		//alert("HOLI");
		window.open('pt3.php', '_blank');
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



