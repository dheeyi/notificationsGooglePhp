<?php
include_once 'userregistration.php';
$UserRegistrationClass = new UserRegistrationFromDevice();

if(isset($_POST['registrationId'])){
	$registration_id = $_POST['registrationId'];
    $UserRegistrationClass->saveNewRegisteredUser($registration_id);
}

if(isset($_POST['nombre'])){
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$ci = $_POST['ci'];
	$usuario = $_POST['usuario'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$imdei = $_POST['imei'];
    
    $UserRegistrationClass->saveNewUser($nombre, $apellido, $ci, $usuario, $password, $email, $imdei);
}

?>