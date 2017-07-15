<?php 
include 'conexion.php';
#declaramos la clase usuari para el manejo de este 
 class Usuario extends  conexion #heredamos los meotods de la clase conexion

 {
 	public function login($usuario,$contrasena)
 	{

 	#con parent llamamos a un metodo de una clase hereda
 	parent:: conextar_db();
 	
 	$user = $usuario;
 	$pass =	$contrasena;

 	$consulta = 'select id, nombre, contrasena, cargo from operadores where nombre="'.$user.'" and contrasena="'.$pass.'" ';

 	$verificar_usuario = parent::verificarExistencia($consulta);

 	if($verificar_usuario>0){


 		$convertir_string = mysqli_fetch_array(parent::Consulta_db($consulta));


 		/*iniciamos una session para poder usar variables globales en todas las paginas */
 		session_start();
 		/*para poder crear variables usamos $_session[nombre de la variable]*/
 		/*luego asignamos los campos en modo string de nuestra consulta ala base de datos */

 		$_SESSION['usuarioOn'] = $usuario;
 		$_SESSION['id'] = $convertir_string['id'];
 		$_SESSION['nombre'] = $convertir_string['nombre'];
 		$_SESSION['cargo'] = $convertir_string['cargo'];

 		/*echo $_SESSION['id'].$_SESSION['nombre'].$_SESSION['cargo'];*/
 		/*echo $convertir_string['id'];*/
 		/*echo 'hola';*/

 		if ($_SESSION['cargo']== 0)
 		{
 			header('Location: ../view/admi.php');
 		} else if($_SESSION['cargo']==1){
 			header('Location: ../view/user.php');
 		}


 	}else{
 		echo "Usuario o Contraseña incorrectas";
 	}
	
	parent::Cerrar_db();

 	}
	public function Registro_Usuario($iid,$noombre,$coontrasena)
	{

 		parent::conextar_db();
 		$id = $iid;
 		$nombre = $noombre;
 		$contraseña = $coontraseña;

 		$consulta = 'select nombre from operadores where nombre= "'.$nombre.'" ';
 		$verificarNombre = parent::verificarExistencia($consulta);

 		if($verificarNombre>0){
 			echo 'nombre existente';
 		} else {

 			parent::Consulta_db('insert into operadores(id, nombre, contrasena, cargo) values("'.$id.'", "'.$nombre.'", "'.$contraseña.'", 1)');

 			session_start();

 			$_SESSION['usuarioOn'] = $nombre;
 			$_SESSION['cargo'] = 1;

 			header('location: ../view/user.php');



 		}

 		parent::Cerrar_db();

 	}
 }







 ?>