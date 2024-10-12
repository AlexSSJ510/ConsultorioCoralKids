<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $telefono = isset($_POST['telefono']) ? $_POST['telefono'] : '';
    $fecha = isset($_POST['fecha']) ? $_POST['fecha'] : '';
    $especialidad = isset($_POST['especialidad']) ? $_POST['especialidad']:'';
    $mensaje = isset($_POST['mensaje']) ? $_POST['mensaje'] : '';

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "coralkidsconsultorio";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    $sql = "INSERT INTO reservas (nombre, email, telefono, fecha, mensaje, especialidad) 
            VALUES ('$nombre', '$email', '$telefono', '$fecha', '$mensaje', '$especialidad')";

    if ($conn->query($sql) === TRUE) {
        echo "Formulario enviado con éxito";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} else {
    echo "Formulario no enviado correctamente";
}
?>