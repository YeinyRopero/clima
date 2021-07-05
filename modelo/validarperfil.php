<?php


 class Datosacceso{
 	
	private $acceso_id;
    private $acceso_usuario;
	private $acceso_clave;
	private $acceso_perfil;

    private $usuario_doc;

    private $usuario_nombre;
    private $usuario_correo;
    private $usuario_celular;
    private $usuario_perfil;

	private $datos;

    

	public function getAcceso_id(){
		return $this->acceso_id;
		}
public function setAcceso_id($acceso_id){
		$this->acceso_id=$acceso_id;
		}



public function getAcceso_usuario(){
		return $this->acceso_usuario;
		}
public function setAcceso_usuario($acceso_usuario){
		$this->acceso_usuario=$acceso_usuario;
		}




public function getAcceso_clave(){
		return $this->acceso_clave;
		}
public function setAcceso_clave($acceso_clave){
		$this->acceso_clave=$acceso_clave;
		}

public function getAcceso_perfil(){
		return $this->acceso_perfil;
		}
public function setAcceso_perfil($acceso_perfil){
		$this->acceso_perfil=$acceso_perfil;
		}
     
    

		public function getUsuario_doc(){
			return $this->usuario_doc;
			}
	public function setUsuario_doc($usuario_doc){
			$this->usuario_doc=$usuario_doc;
			}
		 

			public function getUsuario_nombre(){
				return $this->usuario_nombre;
				}
		public function setUsuario_nombre($usuario_nombre){
				$this->usuario_nombre=$usuario_nombre;
				}


				public function getUsuario_correo(){
					return $this->usuario_correo;
					}
			public function setUsuario_correo($usuario_correo){
					$this->usuario_correo=$usuario_correo;
					}
	

					public function getUsuario_celular(){
						return $this->usuario_celular;
						}
				public function setUsuario_celular($usuario_celular){
						$this->usuario_celular=$usuario_celular;
						}
		


						public function getUsuario_perfil(){
							return $this->usuario_perfil;
							}
					public function setUsuario_perfil($usuario_perfil){
							$this->usuario_perfil=$usuario_perfilr;
							}







     
public function __construct(){
	require_once('conectarbd.php');
	$this->db=conectarbd::conexion();
	
}


//-----------------------------------------------------------------------------------------------

public  function validar(){//hacer esto  en validar peril banco y crearbase dedatos
	
	
	$sql="SELECT usuarios.usuario_doc, usuarios.usuario_nombre,  usuarios.usuario_correo, usuarios.usuario_celular,
	             usuarios.usuario_perfil, 
				 
				 acceso.acceso_perfil
    
	      FROM usuarios,acceso 


		 WHERE acceso.usuario_doc=usuarios.usuario_doc

		 AND   acceso.acceso_usuario= BINARY '$this->acceso_usuario' 

		 and  acceso.acceso_clave=BINARY '$this->acceso_clave'";


	
	$consulta=$this->db->query($sql);
	
	while ($fila=$consulta->fetch(PDO::FETCH_ASSOC)){
		
		$this->datos[]=$fila;
		
		}
		
		return $this->datos;
 
}
     
     
     
 }//cierra cla principal datosacceso

?>

