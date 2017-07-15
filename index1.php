<?php 
	session_start();
	/*session_destroy();*/

	if(isset($_SESSION['id'])){

		header("location: control/redireccionar.php");
	}

	/*$_SESSION['hola'] = "holaaa";*/

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" href="css/estilo.css">

</head>
<body>
	<form action = "control/probar.php" method="POST">
		<h1>Login</h1>
		<input type="text" name="uss" max-length="20" placeholder="Usuario" > 
		<input type="password" name = "password" max-length="20" placeholder="Contraseña" >
		<!--<button type="button" name ="button">Ingresar</button>-->
		<input type="submit" name="Entrar">		

			


	</form>


	
</body>
</html>