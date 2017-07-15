<?php 

	session_start();

	if(!isset($_SESSION['usuarioOn']) ){
		
		header('location: ../index1.php');

	}

	
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Registro</title>
 	<link rel="stylesheet" href="../css/estilo.css">
 </head>
 <body>
 	<form action="../control/registroController.php" method="POST">
 		<h1>Registro</h1>

		<input type="text" name="id" maxlength="20" placeholder="ID">
		<input type="text" name="nombre" maxlength="20" placeholder="Nombre">
		<input type="text" name="contraseña" maxlength="20" placeholder="Contraseña">

		<input type="submit" name="Registrar">
		<!--<button type="button" name="boton"> Enviar </button>-->
		



 	</form>
 	
 </body>
 </html>