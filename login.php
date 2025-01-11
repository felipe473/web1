<?php
$servername = "localhost";
$username = "root";
$password = "usbw";
$dbname = "examen";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos del formulario
$correo = $_POST['correo'];
$codigo = $_POST['codigo'];

// Verificar en la base de datos
$sql = "SELECT * FROM registro WHERE correo='$correo' AND codigo='$codigo'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Ingreso exitoso. <a href='index.html'>curso</a>";
} else {
    echo "Correo o código incorrecto";
}

$conn->close();
?>
