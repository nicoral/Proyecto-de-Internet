<?php 

	session_start();

	if(!isset($_SESSION['usuarioOn']) || $_SESSION['cargo'] != 1){
		
		header('location: ../index1.php');

	}
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Operador</title>
 </head>
 <body>
 	Hola Operador <?php echo ucfirst($_SESSION['usuarioOn']); ?>

 	<a href="cerrarSesion.php">
		<button type="button" name="button">Cerrar Sesion</button>	


	</a>

	<br/>
	<br/>

	<!--<a href="cerrarSesion.php">
		<button type="button" name="agregar">Agregar Operador</button>	


	</a>-->


 </body>
 </html>