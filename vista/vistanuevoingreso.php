


<!DOCTYPE html>
<html>
<head>
<title>CLIMA</title>
<meta charset="UTF-8">


<link rel="stylesheet" type="text/css"  href="../bootstrap-3.3.7/dist/css/bootstrap.min.css"><!--todas estas librerias permiten que la pagina tenga estilos-->
<link rel="stylesheet" type="text/css" href="../vista/iconos/css/fontawesome-all.min.css"><!--todas estas librerias probar que esta haciendo-->
<script src="../bootstrap-3.3.7/dist/js/jquery.min.js"></script><!--todas estas librerias probar que esta haciendo-->
<script src="../bootstrap-3.3.7/dist/js/bootstrap.min.js"></script><!--todas estas librerias probar que esta haciendo-->
<script type="text/javascript" src ="../controlador/js/jquery-3.1.1.min.js"></script><!--todas estas librerias probar que esta haciendo-->



<script type="text/javascript" src ="js/jquery-3.1.1.min.js"></script><!--sirve y para prueba-->
    
<script type="text/javascript" src ="js/funciones5.js"></script><!--con este js cargo la tabla ahi mismo en la vista cliente-->
    
<script type="text/javascript" src="js/jquery.js"></script><!--con este scrip se hace el filtro-->

</head>


<body> 

<!--script para validat el usuario ---------------------------------------------registrado-->

<script type="text/javascript">

addEvent(window,'load',inicializarEventos,false);
var conexion1;


function  validarUsuario() 
{  

  conexion1=crearXMLHttpRequest();
  conexion1.onreadystatechange = procesarEventos;
  conexion1.open('GET','../vista/archivop.php?usuario_doc='+document.getElementById('usuario_doc').value, true);
  conexion1.send(null);
  }

function procesarEventos()
{
  var existe = document.getElementById("existe");
  if(conexion1.readyState == 4)
  {
    existe.innerHTML = conexion1.responseText;

    if(existe.innerHTML=="Registrado")
      document.getElementById('boton').disabled=true;


  } 
  else 
  {
    existe.innerHTML = 'Cargando...';
  }
}
//Funciones comunes a todos los problemas
//***************************************
function addEvent(elemento,nomevento,funcion,captura)
{ if (elemento.attachEvent)  {
    elemento.attachEvent('on'+nomevento,funcion);
    return true;  }
  else  
    if (elemento.addEventListener)
    { elemento.addEventListener(nomevento,funcion,captura);
      return true;    }
    else
      return false;}
function crearXMLHttpRequest() 
{ var xmlHttp=null;
  if (window.ActiveXObject) 
    xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
  else 
    if (window.XMLHttpRequest) 
      xmlHttp = new XMLHttpRequest();
  return xmlHttp;
}

</script>

<!--script para validat el usuario ---------------------------------------------registrado-->


<div class="col-sm-2"></div><!--estando la cuadricula en 6 se les da espacio de 3 a los lados-->

   <div class="col-sm-8"><!--toda la cuadricula esta en seis-->


 
 <div class="panel panel-default"><!--fondo blanco dentro del fondo gris-->
<div class="container border"><!--container que  los botones se agrupen y vean ordenados-->


<form action="#" method="POST" >

<div class="form-group row">

<div class="col-sm-8" >
    <br>
    <p><h3 align= "center"><label>FORMULARIO NUEVO USUARIO</label></h3></p>
    </div>
    

   <div class="col-xs-9"> 
    <h5 style="color:#5DADE2"><label for="user">INGRESE DOCUMENTO</label></h5> 
     <input type="text" pattern="^[1-9]\d*$"  name="usuario_doc" id="usuario_doc" placeholder="Ingresar documento" class="form-control"  onchange="validarUsuario()" autocomplete="off" required />
     <span id="existe"></span>
       
       </div>

       <div class="col-xs-9"> 
    <h5 style="color:#5DADE2"><label for="user">INGRESE NOMBRE </label></h5> 
     <input type="text"   name="usuario_nombre"  id="usuario_nombre" placeholder="Ingresar nombre completo" class="form-control" autocomplete="off" required />
       </div>

       <div class="col-xs-9"> 
    <h5 style="color:#5DADE2"><label for="user">INGRESE CORREO </label></h5> 
     <input type="text"   name="usuario_correo" id="usuario_correo" placeholder="Ingresar correo electronico" class="form-control" autocomplete="off" required/>
       </div>

       <div class="col-xs-9"> 
    <h5 style="color:#5DADE2"><label for="user">INGRESE CELULAR </label></h5> 
     <input type="text" pattern="^[1-9]\d*$"  name="usuario_celular" id="usuario_celular" placeholder="Ingresar celular" class="form-control" autocomplete="off"  required />
       </div>


       <div class="col-xs-9"> 
    <h5 style="color:#5DADE2"><label for="user">INGRESE USUARIO DESEADO  </label></h5> 
     <input type="text"  name="acceso_usuario" id="acceso_usuario" placeholder="Ingresar usuario nuevo" class="form-control" autocomplete="off" required />
       </div>


       <div class="col-xs-9"> 
    <h5 style="color:#5DADE2"><label for="user">INGRESE CLAVE DESEADA </label></h5> 
     <input type="text"   name="acceso_clave" id="acceso_clave" placeholder="Ingresar clave nueva " class="form-control" autocomplete="off"  required/>
       </div>

    <div class="col-xs-9"> 
    <h5 style="color:#5DADE2"><label for="user"></label></h5> 
   <input type="hidden"   value= "cliente"  name="usuario_perfil" id="" placeholder="" class="form-control" autocomplete="off" />
    </div>



<br>
<br> 
  
    <div class="col-xs-8">
    <h1><button  style="" type="submit" class="btn btn-secondary btn-sm">GUARDAR DATOS</button></h1>
    <input type="hidden" name="opcion" value="3" >
    </div> 


    </div>
 </form>
 

    

 
</div>

</div>
</div>





</body>
</html>