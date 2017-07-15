<?php 
include "../../control/conexion.php";

session_start();

if(!isset($_SESSION['usuarioOn']) || $_SESSION['cargo'] != 0) 
{
	header('location: ../../index1.php');

}

$conexion = new conexion();

$conexion->conextar_db();

$consulta = 'SELECT *FROM operadores';

$respuesta = $conexion->Consulta_db($consulta);

 ?>




 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Operadores</title>
 	<link rel="stylesheet" href="../../css/estiloTabla.css">
 </head>
 <body>

	<header>
		<div>
			<h2>Mostrar Registro de Operadores</h2>
		</div>

	</header>
	
	<section>
		<table>
			<tr>
				<th>ID</th>
				<th>Nombre</th>
				<th>Contraseña</th>
				
			</tr>

			<?php 
				while($verTabla= $respuesta->fetch_array(MYSQLI_BOTH))
				{
					echo '<tr>
						  <td> '.$verTabla['id'].'</td>
						  <td> '.$verTabla['nombre'].'</td>
						  <td> '.$verTabla['contraseña'].'</td>
							</tr>';
				}


			 ?>


		</table>


	</section>

 </body>
 </html>