<?php 
	
class conexion {
		#creamos la variable conexion $mysqli
	private $mysqli ='';  #en esta clase guardaremos el obejeto devuelto por la funcion mysqli(); 

	public function conextar_db()

	{
		#creamos una nueva conexion 
		$this->mysqli = new mysqli('localhost','root','','admision2');

		if ($this->mysqli->connect_errno)
		{
			echo 'Fallo al conextarse ala base de datos'. $this->mysqli->connect_error;

		}
	}
	#creamos una copnsulta sql con la funcion php query
	public function Consulta_db($consulta)
	{

		return $this->mysqli->query($consulta);

	}
	#esta funcion devuelve 1 si encontro una cfila y 0 si no encontro nada

	public function verificarExistencia($consulta)
	{
		$existencia = mysqli_num_rows(
			$this->mysqli->query($consulta));
		return $existencia;

	}

	#cerramos la conexion sql 
	public function Cerrar_db()
	{

		$this->mysqli->close();
	}
	

	

		






}



 ?>