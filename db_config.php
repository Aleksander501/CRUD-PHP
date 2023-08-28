<?php
// Definición de los parámetros de conexión a la base de datos
$servername = "localhost";   // Nombre del servidor de la base de datos
$username = "";         // Nombre de usuario para acceder a la base de datos
$password = ""; // Contraseña del usuario
$dbname = "CRUD";            // Nombre de la base de datos

// Crear una nueva instancia de conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar si la conexión tuvo éxito o si ocurrió algún error
if ($conn->connect_error) {
    // Si la conexión falla, se muestra un mensaje de error y se termina la ejecución del script
    die("Conexión fallida: " . $conn->connect_error);
}
?>


