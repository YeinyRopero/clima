

<DOCTYPE html>
<html>

  <head>
   <title>Clima</title>        
    <meta charset="utf-8">   
    <meta name="viewport" content="width=device-width, initial-scale=1"> 

    <link rel="stylesheet" href="bootstrap-3.3.7/dist/css/bootstrap.min.css"><!--todas estas librerias permiten que la pagina tenga estilos-->
    <link rel="stylesheet" href="bootstrap-3.3.7/dist/css/img.css"><!--todas estas librerias permiten cargar la imagen del banco-->
    <link rel="stylesheet" href="bootstrap-3.3.7/dist/css/style.css">
    <link rel="stylesheet" href="bootstrap-3.3.7/dist/estilosB.css"> 
  </head>
   <body>
      
      <br><br>
   <div class="col-sm-3"></div><!--estando la cuadricula en 6 se les da espacio de 3 a los lados-->

   <div class="col-sm-6"><!--toda la cuadricula esta en seis-->

   <div id="img"><img  class="centrado"  src="../clima/bootstrap-3.3.7/dist/img/logo_index.png" class="img-responsive" 
   alt="Imagen responsive"></div>

     
          <form action="controlador/control.php"  method="POST">
 
                             <div class="form-group"> 
                                <label for="user">DOCUMENTO</label>
                                 <input type="text"  name="usuario" placeholder="Ingresar usuario" class="form-control" autocomplete="off" />
                             </div>
                        
                              <div class="form-group">
                                 <label for="clave">CONTRASEÑA</label>
                                 <input type="password" name="clave" placeholder="Ingresar contraseña" class="form-control"  autocomplete="off" />
                             </div>

                                          <?php
                                             if(isset($_GET["fallo"]) && $_GET["fallo"] == 'true')
                                                {
                                                  echo "<div style='color:red'>Usuario o contraseña no coinciden,por favor verifique</div>";
                                                       }
                                                         ?>
 


                          <input class="btn btn-i" type="submit" name="login" id="login" value="ENTRAR"/>   
                            <input name="opcion" type="hidden"  id="opcion" value="1"/> 

          </form>




          <form action="controlador/control.php"  method="POST">
          <input class="btn btn-i" type="submit" name="login" id="login" value="CREAR CUENTA"/>   
          <input name="opcion" type="hidden"  id="opcion" value="2"/> 
           </form>
          

          </div><!--div que cierra la cuadricula de 6-->
       


          <div class="col-sm-3"></div><!--cierra div de espacio del lado de los cajones-->



  </body>

</html>