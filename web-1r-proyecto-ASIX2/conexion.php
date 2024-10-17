<?php
$servername = "localhost";
$username = "root";
$password = "root"; // Ajusta este valor si cambiaste la contraseña de MAMP
$dbname = "myconexion";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Ejemplo de inserción de datos
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dato = $_POST["dato"];

    $sql = "INSERT INTO estudiantes (nombre) VALUES ('$dato')";
    if ($conn->query($sql) === TRUE) {
        echo "Nuevo registro creado exitosamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
