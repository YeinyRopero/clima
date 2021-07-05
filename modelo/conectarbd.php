<?php 

class conectarbd{ 
	
	public static function conexion(){// estaic puede acceder sin instaciar ninguna clase,ya que el constructor no tiene clase
		//Los métodos estáticos no deben tener ningún efecto sobre el estado del objeto. Pueden tener variables locales además de los parámetros.
		
	try{ 


		$conexion=new PDO('mysql:host=localhost;dbname=clima','root','');//objeto pdo dela  clase conectarbd y funcion conexion


		$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	    $conexion->exec("SET CHARACTER SET UTF8");
		}// cierra el try
		catch(Exception $e){
		die("error en la conexion".$e->getMessage());
			echo "Linea del error" . $e->getLine();
				}// cierra el catch
		return $conexion;	
			}// cierra el metodo conexion
	}// cierra la clase
?>