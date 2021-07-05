<?php

require_once("../modelo/ValidarDatosClientes.php");

 $despacho=new ValidarDatosClientes();

 $validando=$despacho->getValidarU($_REQUEST['usuario_doc']);


 if($validando!="no"){
echo "Usuario ya registrado,digite otro numero";

  }
  else{
echo "No existe,puede registrarlo";

}
?>