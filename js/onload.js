
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