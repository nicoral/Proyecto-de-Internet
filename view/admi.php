<?php 

  session_start();

  if(!isset($_SESSION['usuarioOn']) || $_SESSION['cargo'] != 0){


	header('location: ../index1.php');
  }

?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Administrador</title>
	<link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
	Hola Administrador <?php echo ucfirst($_SESSION['usuarioOn']); ?>


	<br/>

	<a href="cerrarSesion.php">
		<button type = "button" name ="button">Cerrar Sesion</button>	


	</a>	

	<br/>

	<a href="registro.php">
		<button type = "button" name ="agregar">Agregar Operador</button>	


	</a>
	<br/>

	<a href="VerTablas/VerTablas.php">
		<button type = "button" name ="agregar">Ver Operadores</button>	


	</a>

	
</body>
</html>