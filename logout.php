<?php 
	error_reporting(E_ALL);
	ini_set("display_errors", true);

	session_start(); //para iniciar la sesion

	if(isset($_SESSION["idusuario"], $_SESSION["usuario"], $_SESSION["propietario"])){
		session_unset();		
		session_destroy();
		header("location: login.php?mensaje=Sesión cerrada exitosamente");
	}
	else{
		header("location: login.php?mensaje=La sesión ha caducado");
	}
	
?>

