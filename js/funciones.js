
$(document).ready(function(){
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

	$("#btnlegal").click(function() {
		$("#legal").show();
		$("#legis").hide();
		$("#asea").hide();
		$("#cre").hide();
	});
	$("#btnlegis").click(function() {
		$("#legis").show();
		$("#legal").hide();
		$("#asea").hide();
	});
	$("#btnasea").click(function() {
		$("#asea").show();
		$("#legal").hide();
		$("#legis").hide();
		$("#cre").hide();
	});
	$("#btncre").click(function() {
		$("#cre").show();
		$("#asea").hide();
		$("#legal").hide();
		$("#legis").hide();
	});
	$("#btnprofeco").click(function() {
		$("#cre").show();
		$("#asea").hide();
		$("#legal").hide();
		$("#legis").hide();
	});
});



