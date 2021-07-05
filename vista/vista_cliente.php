<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Clima</title>

  <link rel="stylesheet" href="../vista/reset.css" /><!--cambios del navegador-->
  <link rel="stylesheet" href="../vista/style.css" />
  <script src="../vista/main.js" defer></script> <!--aca llamo la aplicacion del clima que me pidieron-->


  <link rel="stylesheet" href="../bootstrap-3.3.7/dist/css/bootstrap.min.css"><!--todas estas librerias permiten que la pagina tenga estilos-->
  <link rel="stylesheet" href="../bootstrap-3.3.7/dist/css/img.css"><!--todas estas librerias permiten cargar la imagen del banco-->
    <link rel="stylesheet" type="text/css" href="../vista/iconos/css/fontawesome-all.min.css">

    
    <script type="text/javascript">

function enviar1(){
document.f1.submit()

}
function enviar2(){
document.f2.submit()

}



</script>

  
</head>

<br><br><br>
<div class="col-sm-12"><!--no cierraes esto es el tamaño del  navar-->
  <nav class="navbar navbar-default"><!-- cierra despues del div-->
  <div class="container-fluid"> <!--este divcierra abajo-->
  
  <ul class="nav navbar-nav">


  <!--botones de nombreeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee-->

    <ul class="nav navbar-nav">
      <br>
      <li class=""> <form action="#" name="f1"  method="POST"><input type="hidden" name="opcion" value="6" >
      <a href="#" onclick="enviar1();"> <i class="fas fa-address-book fa-3x"></i><span> ENVIAR UN MENSAJE</span> </a>
      </form></li>
      <li class=""> &emsp; </li> 
      
           
      <li class=""> <form action="#" name="f2"  method="POST"><input type="hidden" name="opcion" value="8" >
      <a href="#" onclick="enviar2();">  <i class="fas fa-address-book fa-3x "></i><span>ACTUALIZAR DATOS </span> </a>
       </form></li>
      <li class=""> &emsp; </li> 
      </ul>
  <!--botones de nombreeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee-->


  <!--botones de nombreeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee-->
<ul class="nav navbar-nav navbar-right">

<li ><input type="hidden"><a><i class=" fas fa-user  fa-3x"></i><span>NOMBRE
     <?php echo $_SESSION['usuario_nombre'];?></span></a> </li>

     <li ><input type="hidden"><a><i class=" fas fa-user  fa-3x"></i><span>IDENTIFICACION
     <?php echo $_SESSION['usuario_doc'];?></span></a> </li>


<li class=""> &emsp; </li> 
<li class=""><input type="hidden"><a href="../index.php "><i class="fas fa-key  fa-3x"></i>
<span> SALIR </span></a>
 </li>
<li class=""> &emsp; </li>       
 </ul> 
  <!--botones de nombreeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee-->

  </ul>
  </div>
  </div>
  </nav>
  <br><br><br>



  <main>
    <div class="search-form">
      <form id="search-form">
        <div class="searchbox"><!--identificador de la clase searcbox--><!-- search es otra clase-->
          <input type="text" autocomplete="off" placeholder="Buscar ciudad..." class="search" id="searchbox" />
        </div>
      </form>
    </div>

    <div class="weather-card" id="card"><!--abre div tarjeta de informacion-->
      <div class="city" id="city"></div>
      <div class="date" id="date"></div>
      <div class="temperature">
        <img src="../vista/images/temp-mid.png" class="temp-img" id="temp-img" />
        <div class="temp" id="temp">14c</div>
      </div>
      <div class="weather" id="weather">Sol</div>
      <div class="range" id="range">12c / 18c</div>
    </div><!--cierra div tarjeta de informacion-->
  </main>

  
</body>

</html>