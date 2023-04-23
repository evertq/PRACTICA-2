<?php
    include "../cabecera.php";
    echo $titulo[2];
    $hostname = "localhost";
    $usuario = "root";
    $password = "";
    //Crear conexión
    $conn = mysqli_connect($hostname, $usuario, $password);
    //Verifica la conexión
    if (!$conn) {
        die("La conexión falló: ".mysqli_connect_error());
    }
    // Create database
    $sql = "CREATE DATABASE procedimiento_php";
    if (mysqli_query($conn, $sql)) {
        echo "Base de datos creada con éxito";
    } else {
        echo "Error al crear la base de datos: " . mysqli_error($conn);
    }
    mysqli_close($conn);
?>