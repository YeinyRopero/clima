
<?php
require_once("conectarbd.php");
$link = conexion();
$query = "DELETE FROM usuarios WHERE usuario_doc='$_POST[usuario_doc]'";

echo $consulta=mysqli_query($link, $query);

?>