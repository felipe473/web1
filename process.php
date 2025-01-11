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

// Preparar y enlazar
$stmt = $conn->prepare("INSERT INTO registro (nombre, correo, carrera, codigo) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $nombre, $correo, $carrera, $codigo);

// Establecer parámetros y ejecutar
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$carrera = $_POST['carrera'];
$codigo = $_POST['codigo'];
$stmt->execute();

echo "Registro exitoso";
$stmt->close();
$conn->close();

// Redirigir al formulario de ingreso
header("Location: ingreso.html");
exit();
?>

