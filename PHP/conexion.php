<?php

//Creo las variables de conexión a MySQL
$servidor = "secret";
$user = "secret";
$password = "secret";
$basedatos = "secret";

//Establecer la conexión con MySQL
try {
	$conexion = new PDO("mysql:host=$servidor;dbname=$basedatos", $user, $password);
	$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	// echo"Conexión establecida...";
} catch (PDOException $error) {
	echo "Error" . $error->getMessage();
}
