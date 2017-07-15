<?php 

	$id = $_POST['id'];
	$nombre = $_POST['nombre'];
	$contraseña = $_POST['contraseña'];

	if(empty($id) || empty($nombre) || empty($contraseña)){

		echo "complete todos los campos";

	}else {

		include "usuario.php";

		$usuario = 	new Usuario();
		$usuario->Registro_Usuario($id,$nombre,$contraseña);


	}





 ?>