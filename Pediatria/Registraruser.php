<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "coralkidsconsultorio";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $genero = $_POST['genero'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $nombre_padre_tutor = $_POST['nombre_padre_tutor'];

    if ($password != $confirm_password) {
        echo "Las contraseñas no coinciden";
        exit();
    }

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO pacientes (nombre, apellido, fecha_nacimiento, genero, direccion, telefono, email, contraseña, nombre_padre_tutor)
            VALUES ('$nombre', '$apellido', '$fecha_nacimiento', '$genero', '$direccion', '$telefono', '$email', '$hashed_password', '$nombre_padre_tutor')";

    if ($conn->query($sql) === TRUE) {
        echo "Cliente registrado con éxito";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close(); 
}
else {
    echo "Formulario no enviado correctamente";
    }
?>