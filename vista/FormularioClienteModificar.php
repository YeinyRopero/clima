<!DOCTYPE html>

<html lang="en">

<head>

  <title>Modificar</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">



<script type="text/javascript"> 
function enviar25(){
document.f25.submit()
}

</script>

 </head>

<body>
<br>
<br>



<div container><!--container para que encierre todo y sea responsive-->

 <div class="panel-body"><!--borde de fondo gris-->
<div class="panel-footer"><!--fondo gris-->
 <div class="panel panel-default"><!--fondo blanco dentro del fondo gris-->
<div class="container border"><!--container que  los botones se agrupen y vean ordenados-->

<!--------------------------------------------------------------------------->
<br>
<hr>
  <h4 align="center"><label>MODIFICAR  DATOS CLIENTE</label></h4>
 <hr>


 <div class="form-group row"><!--abre div tamaño de botoenes-->

 <?php



            require_once("../modelo/ValidarDatosClientes.php");

            $objetoverdatoscliente=new ValidarDatosClientes();
    
            $verdatoscliente=$objetoverdatoscliente->VerDatosPacienteSQ($_POST['usuario_doc']);// VerDatosPacientesHistoriaSQ
            
            
          foreach($verdatoscliente as $registro){
    

            echo

                '<form action="#" method="POST">

                  <div class="form-group row">




                  <div class="col-xs-3">
                  <h5 style="color:#238271"><label for="user">C.C USUARIO</label></h5> 
                  <input type="text" maxlength=50 name="usuario_doc" id="usuario_doc"  class="form-control"  
                  required autocomplete="off" readonly="yes" value ="'.$registro["usuario_doc"].'"/>
                  </div>

                  <div class="col-xs-3">
                  <h5 style="color:#238271"><label for="user">ID ACCESO</label></h5> 
                  <input type="text" maxlength=50 name="acceso_id" id="acceso_id"  class="form-control"  
                  required autocomplete="off" readonly="yes" value ="'.$registro["acceso_id"].'"/>
                  </div>

                  <div class="col-xs-3">
                  <h5 style="color:#238271"><label for="user"> CLAVE DE ACCESO</label></h5> 
                  <input type="text" maxlength=50 name="acceso_clave" id="acceso_clave"  class="form-control" 
                   required autocomplete="off" readonly="yes" value ="'.$registro["acceso_clave"].'"/>
                  </div>

                  <div class="col-xs-3">
                  <h5 style="color:#238271"><label for="user"> PERFIL ACCESO</label></h5> 
                  <input type="text" maxlength=50 name="acceso_perfil" id="acceso_perfil"  class="form-control"
                    required autocomplete="off" readonly="yes" value ="'.$registro["acceso_perfil"].'"/>
                  </div>



                  <br> <br> <br> <br> <br> <br>

        




                  <div class="col-xs-3">
                  <h5 style="color:#238271"><label for="user">USUARIO_DOC</label></h5> 
                  <input type="text" maxlength=50 name="usuario_doc" id="usuario_doc"  class="form-control"  
                  required autocomplete="off" readonly="yes" value ="'.$registro["usuario_doc"].'"/>
                  </div>

                  <div class="col-xs-3">
                  <h5 style="color:#238271"><label for="user">USUARIO_PERFIL</label></h5> 
                  <input type="text" maxlength=50 name="usuario_perfil" id="usuario_perfil"  class="form-control"  
                  required autocomplete="off" readonly="yes" value ="'.$registro["usuario_perfil"].'"/>
                  </div>




                  <div class="col-xs-12">
                  <h5 style="color:#238271"><label for="user">NOMBRE Y APELLIDOS</label></h5> 
                  <textarea name="usuario_nombre" id="usuario_nombre" class="form-control" onkeypress="return event.charCode != 39" 
                    required autocomplete="off" >'.$registro["usuario_nombre"].'</textarea>
                  </div>

                  <div class="col-xs-12">
                  <h5 style="color:#238271"><label for="user">CORREO</label></h5> 
                  <textarea name="usuario_correo" id="usuario_correo" class="form-control" onkeypress="return event.charCode != 39"  
                   required autocomplete="off" >'.$registro["usuario_correo"].'</textarea>
                  </div>

                  <div class="col-xs-12">
                  <h5 style="color:#238271"><label for="user">CELULAR</label></h5> 
                  <textarea name="usuario_celular" id="usuario_celular" class="form-control" onkeypress="return event.charCode != 39" 
                    required autocomplete="off" >'.$registro["usuario_celular"].'</textarea>
                  </div>


                  
                  <div class="col-xs-12">
                  <h5 style="color:#238271"><label for="user">USUARIO PERSONAL DE ACCESO</label></h5> 
                  <textarea name="acceso_usuario" id="acceso_usuario" class="form-control" onkeypress="return event.charCode != 39" 
                    required autocomplete="off" >'.$registro["acceso_usuario"].'</textarea>
                  </div>

                  <div class="col-xs-12">
                  <h5 style="color:#238271"><label for="user">CLAVE PERSONAL DE ACCESO</label></h5> 
                  <textarea name="acceso_clave" id="acceso_clave" class="form-control" onkeypress="return event.charCode != 39" 
                    required autocomplete="off" >'.$registro["acceso_clave"].'</textarea>
                  </div>


                <div class="col-md-12" >
                 <div id="modificar">
              <h4><button   id="modificar" type="submit" class="btn btn-info btn-responsive btninter right">MODIFICAR</button></h4>
                <input type="hidden" name="opcion" value="5">
                </div>
                </div>

               

                </div>
                </form>';
            


echo
               '<form action="#" method="POST">

             
              </form>'; 

 }

?>




  <style type="text/css">
   #descargar{
    width: 200px;

    display: flex;
    justify-content: center;
   }
</style>



 <style type="text/css">
  #modificar{
  width: 200px;
  display: flex;
  justify-content: center;
}
</style>  



<br> <br><br> <br><br><br>
                
</div>
</div>
</div>
</div>
</div>
</body>
</html>