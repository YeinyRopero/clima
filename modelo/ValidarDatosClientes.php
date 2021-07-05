<?php

 class ValidarDatosClientes{



 	
	private $usuario_doc;
    private $usuario_monbre;
    private $usuario_correo;
    private $usuario_celular;
    private $usuario_perfil;

    private $acceso_id;
    private $acceso_usuario;
    private $acceso_clave;
    private $acceso_perfil;
    
    private $nom;
	private $ex;  
  
    private $todos; 
    private $todashistorias;
    private $todospacientes;

//------------------NUEVA CONSULTA TABLA USUARIOS-------------------------------------------------------------


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
                    $this->usuario_perfil=$usuario_perfil;
                    }






   //-------------------------------------------------------------------------------------------------------  



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









public function __construct(){
	require_once('conectarbd.php');
	$this->db=conectarbd::conexion();


    
		$this->usuarios=array();
        $this->nom="no";
	
}

public function getValidarU($usuario_doc){

    $sql="SELECT usuario_doc FROM usuarios WHERE usuario_doc='".$usuario_doc."'";

    $consulta=$this->db->query($sql);
    while( $fila=$consulta->fetch( PDO::FETCH_ASSOC ) ){
    $this->nom=$fila["usuario_doc"];
                    }
    return $this->nom;
    }


//-----------------------------------------------------------------------------------------------


	public function ListarHistoriaClientes(){// se llama desde el documento tablalistarclientes

              $consulta=$this->db->query("SELECT *FROM usuarios");
                    while( $fila=$consulta->fetch( PDO::FETCH_ASSOC ) ){
			          $this->todospacientes[]=$fila;
			     }//cieraa while
		            return $this->todospacientes;
}




public function VerDatosPacienteSQ($usuario_doc){//listar los clientes

              $consulta=$this->db->query("SELECT 
                                           	  
                                              usuarios.usuario_doc,
                                              usuarios.usuario_nombre,
                                              usuarios.usuario_correo,
                                              usuarios.usuario_celular,
                                              usuarios.usuario_perfil,

                                              acceso.acceso_id,
                                              acceso.acceso_usuario,
                                              acceso.acceso_clave,
                                              acceso.acceso_perfil,
                                              acceso.usuario_doc


              	                          FROM usuarios,acceso
              	                               
                                     
                                           WHERE usuarios.usuario_doc=  acceso.usuario_doc 

                                           AND 
                                                   usuarios.usuario_doc='$usuario_doc'");

                    while( $fila=$consulta->fetch( PDO::FETCH_ASSOC ) ){
			          $this->todos[]=$fila;
			     }//cieraa while
		            return $this->todos;         

}












//----------------------------------------------------------------------------------------

    public function ModificarHistoriaCliente(){

                                          $sql="UPDATE usuarios

                                                SET 

                                                 usuario_doc='$this->usuario_doc',
                                                 usuario_nombre='$this->usuario_nombre',
                                                 usuario_correo='$this->usuario_correo',
                                                 usuario_celular='$this->usuario_celular',
                                                 usuario_perfil='$this->usuario_perfil'
                                                 WHERE 
                                                 usuario_doc='$this->usuario_doc'";
                                                 $update=$this->db->query($sql);

                                                 $sql="UPDATE acceso
                                                 SET 

                                                 acceso_usuario='$this->acceso_usuario',
                                                 acceso_clave='$this->acceso_clave'
                                               
                                                 WHERE 
                                                 usuario_doc='$this->usuario_doc'";
                                                 $update=$this->db->query($sql);




	                                              return true;



}

public function Eliminar($usuario_doc){


    
    $query = "DELETE FROM usuarios WHERE usuario_doc='$_POST[usuario_doc]'";
    
    echo $consulta=mysqli_query($query);
    

}


	


public function InsertarSeguimientoSQ(){

                                  $sql="INSERT INTO seguimiento_psiquiatra 


          	                          VALUES('$this->spq_id','$this->spq_fecha','$this->spq_descripcion','$this->empl_doc','$this->hcq_id')";

                                  $insert=$this->db->query($sql);
            

}


   public function listarSeguimientoSQ($hcq_id){//aca lista  seguimientos de  la historia que  abrimos dentro del  formulario


                                         $consulta=$this->db->query


                                         ("SELECT seguimiento_psiquiatra.spq_id, 
                                         	      seguimiento_psiquiatra.spq_fecha,
                                         	      seguimiento_psiquiatra.spq_descripcion,
                                         	      seguimiento_psiquiatra.empl_doc,
                                         	      seguimiento_psiquiatra.hcq_id
                                           	      
              
              	                          FROM seguimiento_psiquiatra

                                          WHERE seguimiento_psiquiatra.hcq_id='$hcq_id'");

                    while( $fila=$consulta->fetch( PDO::FETCH_ASSOC ) ){
			          $this->todashistorias[]=$fila;
			     }//cieraa while
		            return $this->todashistorias;

}


    public function ModificarSeguimientoSQ(){

                                          $sql="UPDATE seguimiento_psiquiatra 

                                                   SET 

                                                          spq_id='$this->spq_id',
                                                          spq_fecha='$this->spq_fecha',
                                                          spq_descripcion='$this->spq_descripcion',
                                                          empl_doc='$this->empl_doc',
                                                          hcq_id='$this->hcq_id'

                                                   WHERE 
                                                         spq_id='$this->spq_id'";


                                                   $update=$this->db->query($sql);
                                                   
	                                                return true;

}


public function listarDatosPersonales($empl_doc){

              $consulta=$this->db->query("SELECT 
                                           	  
                                              empleado.empl_doc,
                                              empleado.empl_nom,
                                              empleado.empl_ape,
                                              empleado.empl_cel,
                                              empleado.empl_tel,
                                              empleado.empl_dir,




                                              acceso.empl_doc,
                                              acceso.acce_usuario,
                                              acceso.acce_clave,
                                              acceso.acce_perfil


              	                          FROM empleado,acceso
              	                               
                                     
                                           WHERE                         
                                                    empleado.empl_doc=acceso.empl_doc AND empleado.empl_doc='$empl_doc' ");

                    while( $fila=$consulta->fetch( PDO::FETCH_ASSOC ) ){
			          $this->todos[]=$fila;
			     }//cieraa while
		            return $this->todos;         

}

                                                                             

	                                                



    public function ModificarDatosPersonales(){



 $sql="UPDATE empleado

                                                SET 

                                                 empl_doc='$this->empl_doc',

                                                 empl_nom='$this->empl_nom',

                                                 empl_ape='$this->empl_ape',

                                                 empl_cel='$this->empl_cel',

                                                 empl_tel='$this->empl_tel',

                                                 empl_dir='$this->empl_dir'
                                              
                                              

                                                 WHERE 

                                                 empl_doc='$this->empl_doc'";


                                                 $update=$this->db->query($sql);


                                              
	                                   
                                                $sql="UPDATE acceso


                                                SET 

                                                 acce_perfil='$this->acce_perfil',
                                                 acce_usuario='$this->acce_usuario',
                                                 acce_clave='$this->acce_clave'

                                                 WHERE 

                                                 empl_doc='$this->empl_doc'";




                                                 $update=$this->db->query($sql);


	                                      return true;


    }






 }//cierra la clase principal 

?>