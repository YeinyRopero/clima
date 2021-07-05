
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
<br>
<br>
<br>
<br>
<body> 

<!--script para validat el usuario ---------------------------------------------registrado-->


<div class="col-sm-2"></div><!--estando la cuadricula en 6 se les da espacio de 3 a los lados-->

   <div class="col-sm-8"><!--toda la cuadricula esta en seis-->


 
 <div class="panel panel-default"><!--fondo blanco dentro del fondo gris-->
<div class="container border"><!--container que  los botones se agrupen y vean ordenados-->


<form action="#" method="POST" >

<div class="form-group row">

<div class="col-sm-8" >
    <br>
    <p><h3 align= "center"><label>FORMATO MENSAJE</label></h3></p>
    </div>
    
    
   <div class="col-xs-9"> 
    <h5 style="color:#5DADE2"><label for="user"></label></h5> 
     <input type="hidden" pattern="^[1-9]\d*$"  name="mensaje_id" id="mensaje_id" placeholder="consecutivo" class="form-control"   autocomplete="off" />
       </div>


       <div class="col-xs-9"> 
    <h5 style="color:#5DADE2"><label for="user">INGRESE SU DOCUMENTO</label></h5> 
     <input type="text"   name="usuario_doc" id="usuario_doc" placeholder="Ingrese su documento" class="form-control" autocomplete="off"  required/>
       </div>

       

   <div class="col-xs-9"> 
    <h5 style="color:#5DADE2"><label for="user">SEÑOR USUARIO ESCRIBA SU MENSAJE ,QUEJA O RECLAMA:</label></h5> 
     <input type="text"   name="mensaje_des" id="mensaje_des" placeholder="Escriba su mensaje maximo 90 caracteres" class="form-control"    autocomplete="off"  required/>
       </div>

     

<br>
<br> 
  
    <div class="col-xs-8">
    <h1><button  style="" type="submit" class="btn btn-secondary btn-sm">ENVIAR MENSAJE</button></h1>
    <input type="hidden" name="opcion" value="7" >
    </div> 


    </div>
 </form>
 

    

 
</div>

</div>
</div>
