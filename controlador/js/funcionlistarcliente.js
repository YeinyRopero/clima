
    
    

function VerHistoriaSQ(cod){// esta palabra VerHistoriaSQ viene de tabla listar cliente, solo es in id.

    var parametros = { "usuario_doc": cod };
    
    
    $.ajax({
         data:parametros,
         url:"../vista/FormularioClienteModificar.php",
         type:"POST",
    
          beforeSend: function(){
           $("#ventana").html("Procesando...");
    },
    
    success: function(vista){
        $("#ventana").html(vista);
    }
    
    });
    
    }



   