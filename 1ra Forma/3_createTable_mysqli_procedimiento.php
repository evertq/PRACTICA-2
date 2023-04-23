<?php
    include "../cabecera.php";
    echo $titulo[3];
    $hostname = "localhost";
    $usuario = "root";
    $password = "";
    $nombreBD = "procedimiento_php";
    //Crear conexión
    $conn = mysqli_connect($hostname, $usuario, $password, $nombreBD);
    //Verifica la conexión
    if (!$conn) {
        die("La conexión falló: ".mysqli_connect_error());
    }
    // SQL para crear tabla
    $sql = "CREATE TABLE Personas (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(30) NOT NULL,
    apellido VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";
    if (mysqli_query($conn, $sql)) {
        echo "Tabla persona creada con éxito";
    } else {
        echo "Error al crear la tabla: ".mysqli_error($conn);
    }
    mysqli_close($conn);
?>