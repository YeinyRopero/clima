

function VerPacientesP(cod){ //cambiar al hacer las tablas de transacciones

var parametros = { "paci_doc": cod };//aca seria clien_doc


$.ajax({
     data:parametros,
     url:"../vista/tablatransanccion.php",
     type:"POST",
     beforeSend: function(){
	 $("#ventana").html("Procesando...");
},

success: function(vista){

	$("#ventana").html(vista);
}

});

}
