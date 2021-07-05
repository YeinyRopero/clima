<?php

 class ValidarDatosIngreso{ //clase principal,los objetos se nombran y se llaman desde tablatransaccion
 	

    private $usuario_doc;
    private $usuario_nombre;
    private $usuario_correo;
    private $usuario_celular;
    private $usuario_perfil;


    private $acceso_id;
    private $acceso_usuario;
	private $acceso_clave;
	private $acceso_perfil;


    private $mensaje_id;
    private $mensaje_des;






private $todos; 

private $dato;


public function getMensaje_id(){
    return $this->mensaje_id;
    }
public function setMensaje_id($mensaje_id){
    $this->mensaje_id=$mensaje_id;
    }


    public function getMensaje_des(){
        return $this->mensaje_des;
        }
    public function setMensaje_des($mensaje_des){
        $this->mensaje_des=$mensaje_des;
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
                    $this->usuario_perfil=$usuario_perfil;
                    }


//----------------------
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




		

// conexion base de datos

public function __construct(){//el constructor es n metodo especialpara creacion de objetos,con this referenciamos ese objeto
	require_once('conectarbd.php');
	$this->db=conectarbd::conexion();//  :: los puntos se utilizan para llamr la funcion estatica 'conexion' que se encuentra en conectarbd.php
	
}

// funciones del 

public function InsertarDatosIngreso(){//inserta un nueva historia psi
 $sql="INSERT INTO usuarios  VALUES(
        
   '$this->usuario_doc', 
   '$this->usuario_nombre', 
   '$this->usuario_correo', 
   '$this->usuario_celular',
   '$this->usuario_perfil')";

    $insert=$this->db->query($sql);
    $sql = "INSERT INTO acceso 
         VALUES (0,
          '$this->acceso_usuario',
          '$this->acceso_clave',
           'cliente' ,
           '$this->usuario_doc'
             )";
   $insert=$this->db->query($sql);
   
       } 



       


       public function InsertarMensaje(){//inserta un nueva historia psi

        $sql="INSERT INTO mensajes  VALUES(
               
          '$this->mensaje_id', 
          '$this->mensaje_des', 
          
          '$this->usuario_doc')";
       
           $insert=$this->db->query($sql);
          
          
              } 




	



   


 }//cierra la clase principal 

?>
 