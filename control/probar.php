<?php 
/*include 'conexion.php';*/
include "usuario.php";
/*include "index1.php";*/

$user =$_POST["uss"];
$pass = $_POST['password'];

/*$con = new conexion();
$con->conextar_db();


$consulta = 'CREATE DATABASE EJEMPLO1000';*/

/*$con = new Usuario();*/


/*$con->Consulta_db($consulta);*/
/*$con->login('diego','1234');*/

if (empty($user) || empty($pass))
{
	echo "Ingrese todo los campos";



}else{
	$con = new Usuario();
	$con->login($user,$pass);


	
}






 ?> 