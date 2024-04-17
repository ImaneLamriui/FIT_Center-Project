<?php

//Creo las variables de conexión a MySQL
$servidor = "sql311.infinityfree.com";
$user = "if0_36382254";
$password = "FvUQJ7hUM7V8A";
$basedatos = "if0_36382254_bd_proyecto_daw";

//Establecer la conexión con MySQL
try {
	$conexion = new PDO("mysql:host=$servidor;dbname=$basedatos", $user, $password);
	$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	// echo"Conexión establecida...";
} catch (PDOException $error) {
	echo "Error" . $error->getMessage();
}
