<?php
    include "../cabecera.php";
    echo $titulo[7];

    $hostname = "localhost";
    $usuario = "root";
    $password = "";
    $nombreBD = "poo_php";
    
    //Crear conexión
    $conn = new mysqli($hostname, $usuario, $password, $nombreBD);
    
    //Verifica la conexión
    if ($conn->connect_error) {
        die("La conexión falló: " . $conn->connect_error);
    }
    
    //Preparar y sql
    $stmt = $conn->prepare("INSERT INTO Personas (nombre, apellido, email) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $nombre, $apellido, $email);
    
    //Establecer parámetros y ejecutar
    $nombre = "John";
    $apellido = "Doe";
    $email = "john@example.com";
    $stmt->execute();
    
    $nombre = "Mary";
    $apellido = "Moe";
    $email = "mary@example.com";
    $stmt->execute();
    
    $nombre = "Julie";
    $apellido = "Dooley";
    $email = "julie@example.com";
    $stmt->execute();
    
    echo "Nuevos registros creados exitosamente";
    
    $stmt->close();
    $conn->close();
?>