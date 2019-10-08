<?php

require_once "../class.phpmailer.php";
require '../PHPMailerAutoload.php';
session_start();

$_SESSION['error'] = 0;

$nombreErr = $emailErr  = $telefonoErr = $mensajeErr = "";	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (empty($_POST["nombre"])) {
			$nombreErr = "Nombre es necesario";
			 $_SESSION['error'] = 1;
			 header('Location: ../index.php');
		} else {
			$nombre = test_input($_POST["nombre"]);
			if (!preg_match("/^[a-zA-Z ]*$/",$nombre)) {
			$nombreErr = "Solo permiten letras y espacios"; 
			$_SESSION['error'] = 1;
			 header('Location: ../index.php');
			}
		}	
		if (empty($_POST["email"])) {
			$emailErr = "Email  es necesario";
			$_SESSION['error'] = 2;
			header('Location: ../index.php');
		} else {
			$email = test_input($_POST["email"]);
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$emailErr = "Formato es incorrecto"; 
				$_SESSION['error'] = 2;
				header('Location: ../index.php');
			}
		}
		if (!empty($_POST["telefono"])) {
			$telefono = test_input($_POST["telefono"]);
			if (!preg_match("/^[0-9]*$/",$telefono)) {
				$telefonoErr = "Solo permiten números"; 
				$_SESSION['error'] = 3;
				 header('Location: ../index.php');
			}
		}		
		if (empty($_POST["mensaje"])) {
			$mensajeErr = "Mensaje  es necesario";
			$_SESSION['error'] = 4;
			 header('Location: ../index.php');
		} else {
			$mensaje = test_input($_POST["mensaje"]);
		}
	}
			
	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
		
		
		
		
		
		

	
$to      = 'noreply@e-indiga.com';
$subject = 'Contacto';
$headers = 'From: ' . $_POST["email"] . "\r\n";
echo mail($to, $subject, $_POST["mensaje"], $headers);
echo "<br>";
echo $to;
echo "<br>";
echo $subject;
echo "<br>";
echo $_POST["mensaje"];
echo "<br>";
echo $headers;

?>