<!--ests tabla no necesita js para cargarse, el js es para el boton de modificar-->

<?php
include'vista_administrador.php'; 

?>

<!DOCTYPE html>
<html>
<head>
<title>Mi Renacer</title>
<meta charset="UTF-8">


<script type="text/javascript" src ="js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src ="js/funcionlistarcliente.js"></script>
<script type="text/javascript" src ="js/Eliminar.js"></script>


<!--crear funcionlistarcliente.js dentro de controlador en una carpeta js-->
<script type="text/javascript" src="js/jquery.js"></script><!--con este scrip se hace el filtro-->

</head>


  <script type="text/javascript"> 
        $(document).ready(function () {
            (function ($) {
                $('#filtrar').keyup(function () {
                    var rex = new RegExp($(this).val(), 'i');
                    $('.buscar tr').hide();
                    $('.buscar tr').filter(function () {
                        return rex.test($(this).text());
                    }).show();
                })
            }(jQuery));
        });
      </script>



<body> 
<br>
<div id="resultado">

<div id="ventana">


<div class="table-responsive col-sm-12">  
<hr>
  <h5 align="center"><label>LISTA CLIENTES</label></h5>
  <hr>

 <style type="text/css">
  #filtro{
    float:right;
  }

</style>

<style type="text/css">
  #boton{
    background-color:#5499C7;
  }

</style>


<style type="text/css">
  #black{
    background-color:#FFFFFF;
    color: #FFFFFF;
    text-transform: uppercase;
  }

</style>



<div id="filtro" >

<input id="filtrar" type="text" class="form-control" placeholder="Buscar.."  >
</div>
<br><br><br>

  <table id="tabla" class="table table-condensed" cellpadding="0" width="100%">
     <thead>
      <tr>

                <th width="8%">DOCUMENTO</th>
                <th width="8%">NOMBRE Y APELLIDOS</th>
                <th width="8%">CORREO ELECTRONICO</th>
                <th width="8%">CELULAR</th>
                <th width="8%">PERFIL USUARIO</th>

                <th width="5%">VER CLIENTE<span class="fa fa-eye" style="font-size:20px"></th>   
                <th width="8%">ELIMINAR CLIENTE<span class="fa fa-eye" style="font-size:20px"></th>   
     </tr>
        <thead>

   <tbody class="buscar">



  <?php
        require_once("../modelo/ValidarDatosClientes.php");

        $objetolistacliente=new ValidarDatosClientes();

         if( $listacliente=$objetolistacliente->ListarHistoriaClientes()){
      
        foreach($listacliente as $registro){

  echo 
                                
       "<tr>

       <td>".$registro['usuario_doc']."</td>
       <td>".$registro['usuario_nombre']."</td>
       <td>".$registro['usuario_correo']."</td>
       <td>".$registro['usuario_celular']."</td>
       <td>".$registro['usuario_perfil']."</td>

<td id='black'><button onclick ='VerHistoriaSQ(".$registro['usuario_doc'].");' id='boton' class='btn' >Editar Datos</button></td> 

           <td><button onclick='Eliminar(".$registro['usuario_doc'].");'>Eliminar</button> </td> "; 
 


/** las palabras VerHistoriaSQ Y  eliminar usuario viene de un js llamada funcionlistarcliente**/

}//cierra foreach



}

else{

  echo "No existen clientes";
}




?>





</tbody>
</table>
 </div>
</div>
</body>
</html>