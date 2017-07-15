<?php 

 session_start();

if($_SESSION['cargo']==0){

	header('Location: ../view/admi.php');

}elseif ($_SESSION['cargo']==1) {
	header('Location: ../view/user.php');
}
 ?>
