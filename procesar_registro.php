<?php
// Conexión a la base de datos 
$servername = "localhost";
$username = "tu_usuario";
$password = "tu_contraseña";
$dbname = "tu_base_de_datos";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión a la base de datos fallida: " . $conn->connect_error);
}

// Obtener datos del formulario
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$edad = $_POST["edad"];
$contraseña = $_POST["password"];
$genero = $_POST["genero"];
$hobbies = $_POST["hobbies"];
$estadoCivil = $_POST["estadoCivil"];
$imagenPerfil = $_FILES["imagen"]["name"];

// Insertar datos en la base de datos
$sql = "INSERT INTO usuarios (nombre, email, edad, contraseña, genero, hobbies, estadoCivil, imagenPerfil)
        VALUES ('$nombre', '$email', $edad, '$contraseña', '$genero', '$hobbies', '$estadoCivil', '$imagenPerfil')";

if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
