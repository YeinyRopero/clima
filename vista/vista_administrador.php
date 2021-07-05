
<!DOCTYPE html>
<html lang="es">
<head>
  <title>Mi Renacer</title>        
  <meta charset="utf-8" />        
  
     <link rel="stylesheet" href="../bootstrap-3.3.7/dist/css/bootstrap.min.css"><!--todas estas librerias permiten que la pagina tenga estilos-->
    <link rel="stylesheet" href="../bootstrap-3.3.7/dist/css/img.css"><!--todas estas librerias permiten cargar la imagen del banco-->
  
    <link rel="stylesheet" href="../bootstrap-3.3.7/dist/css/style.css">
    <link rel="stylesheet" href="../bootstrap-3.3.7/dist/estilosB.css">
    <link rel="stylesheet" type="text/css" href="../vista/iconos/css/fontawesome-all.min.css">



<script type="text/javascript">

function enviar1(){
document.f1.submit()

}
function enviar2(){
document.f2.submit()

}


function enviar3(){
document.f3.submit()

}


</script>
</head>

<body> 
    

<div id="img"><img  class="centrado"  src="../bootstrap-3.3.7/dist/img/imagenadministrador.png" class="img-responsive" 
   alt="Imagen responsive"></div>



<br><!--espacio arriba del cabezal-->

<div class="col-sm-12"><!--no cierraes esto es el tamaño del  navar-->
<nav class="navbar navbar-default"><!-- cierra despues del div-->
<div class="container-fluid"> <!--este divcierra abajo-->

<ul class="nav navbar-nav">
<br>
<li class=""> <form action="#" name="f1"  method="POST"><input type="hidden" name="opcion" value="4" >
<a href="#" onclick="enviar1();"> <i class="fas fa-address-book fa-3x"></i><span> VER CLIENTES REGISTRADOS</span> </a>
</form></li>
<li class=""> &emsp; </li> 

     
<li class=""> <form action="#" name="f2"  method="POST"><input type="hidden" name="opcion" value="5" >
<a href="#" onclick="enviar2();">  <i class=" "></i><span> </span> </a>
 </form></li>
<li class=""> &emsp; </li> 
</ul>

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


</div>
</div>
</nav>

</body> 

</html>


