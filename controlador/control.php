

<?php


session_start();

$opcion=$_REQUEST['opcion'];



/**?>
<script type="text/javascript">alert('alerta para saber si el documento esta llegando al controlador');</script>
<?php**/



switch($opcion){
	
case 1:


	require_once("../modelo/validarperfil.php");
		$validar=new Datosacceso();   
        $validar->setAcceso_usuario($_REQUEST['usuario']);
		$validar->setAcceso_clave($_POST['clave']);
        
if( $datos=$validar->validar()){
/**/
		    foreach($datos as $registro){

				$_SESSION['usuario_doc']=$registro['usuario_doc'];
		        $_SESSION['usuario_nombre']=$registro['usuario_nombre'];
		        $_SESSION['acceso_perfil']=$registro['acceso_perfil'];

		     
		    }// cierra el for
	

			if($_SESSION['acceso_perfil']=="administrador"){
				require_once("../vista/vista_administrador.php");
	
			}
	
				else if($_SESSION['acceso_perfil']=="cliente")
				require_once("../vista/vista_cliente.php");
	
	
	
				else if($_SESSION['acce_perfil']=="medico")
				require_once("../vista/medico/vista_medico.php");
	
	
				else if($_SESSION['acce_perfil']=="psiquiatra")
				require_once("../vista/psiquiatra/vista_psiquiatra.php");
	
	
				else if($_SESSION['acce_perfil']=="psicologo")
				require_once("../vista/psicologo/vista_psicologo.php");
	
	
				else if($_SESSION['acce_perfil']=="trabajadorsocial")
				require_once("../vista/tsocial/vista_tsocial.php");
	
	
				else if($_SESSION['acce_perfil']=="nutricionista")
				require_once("../vista/nutricionista/vista_nutricionista.php");
	
	
	
				else if($_SESSION['acce_perfil']=="terapeuta")
				require_once("../vista/terapeuta/vista_terapeuta.php");
	
	
	}else{
	
	
	  header("location: ../index.php?fallo=true");
	
	
	}// cierra el else principal
	
	break;


	case 2:
		require_once("../vista/vistanuevoingreso.php");

	break;
	
	case 3:

		require_once("../modelo/ValidarDatosIngreso.php");
	
	
		$dato=new ValidarDatosIngreso();
		
		$dato->setUsuario_doc($_REQUEST['usuario_doc']);
	
		$dato->setUsuario_nombre($_REQUEST['usuario_nombre']);
	
		$dato->setUsuario_correo($_REQUEST['usuario_correo']);
	
		$dato->setUsuario_celular($_REQUEST['usuario_celular']);
	
		$dato->setUsuario_perfil($_REQUEST['usuario_perfil']);
	
		$dato->setAcceso_usuario($_REQUEST['acceso_usuario']);
	
		$dato->setAcceso_clave($_REQUEST['acceso_clave']);
	
		$dato->InsertarDatosIngreso();


		?>
	   <script type="text/javascript">alert('Su ingreso a sido exitoso');</script>


	   <?php

header("location: ../index.php?fallo=true");


	break;

	

	case 4:

		require_once("../vista/tablalistarclientes.php");//para lista y editar clientess despues de listados

//esta tabla no necesita js

		break;

		
		case 5:



			require_once("../modelo/ValidarDatosClientes.php");//para editar pacientes despues de listados

			$datoeditarcliente=new ValidarDatosClientes();
			$datoeditarcliente->setUsuario_doc($_REQUEST['usuario_doc']);
			$datoeditarcliente->setUsuario_nombre($_REQUEST['usuario_nombre']);
			$datoeditarcliente->setUsuario_correo($_REQUEST['usuario_correo']);
			$datoeditarcliente->setUsuario_celular($_REQUEST['usuario_celular']);
			$datoeditarcliente->setUsuario_perfil($_REQUEST['usuario_perfil']);
			
			$datoeditarcliente->setAcceso_usuario($_REQUEST['acceso_usuario']);
			$datoeditarcliente->setAcceso_clave($_REQUEST['acceso_clave']);

			$datoeditarcliente->ModificarHistoriaCliente();
			
			
			
			 ?>
			<script type="text/javascript">alert('Datos Modificados Correctamente');</script>
			<?php
			
			require_once("../vista/vista_administrador.php");

	
			break;



			case 6:

				require_once("../vista/formulariomensaje.php");


		
				break;


				case 7:

					require_once("../modelo/ValidarDatosIngreso.php");
				
				
					$dato=new ValidarDatosIngreso();
					
					$dato->setMensaje_id($_REQUEST['mensaje_id']);
					$dato->setMensaje_des($_REQUEST['mensaje_des']);
					$dato->setUsuario_doc($_REQUEST['usuario_doc']);
				
					$dato->InsertarMensaje();
			
			
					?>
				   <script type="text/javascript">alert('mensaje enviado con exito');</script>
			
				   <?php
			
		
				break;

				


				
			case 8:

				require_once("");


		
				break;


}
?>
