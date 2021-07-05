
    function Eliminar(usuario_doc) {

        
        $.ajax({
                type: "POST",
                url:"../modelo/Eliminar.php",
                cache: false,
                data: {usuario_doc},
                error:function(){
             $("#resultado").html("Error");
                },
                beforeSend:function(){
                    $("#resultado").html("Cargando...");
                },
                success: function(okay){
                $('#tabla2').load('tablalistarclientes.php');
                $("#resultado").html("Registro Eliminado");
                }
    
        });
    }