<?php
    include "../cabecera.php";
    echo $titulo[7];

    $hostname = "localhost";
    $usuario = "root";
    $password = "";
    $nombreBD = "pdo_php";
    
    try {
        $conn = new PDO("mysql:host=$hostname;dbname=$nombreBD", $usuario, $password);
        // Establecer el modo de error PDO en excepción
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        //Preparar sql y vincular parámetros
        $stmt = $conn->prepare("INSERT INTO Personas (nombre, apellido, email)
        VALUES (:firstname, :lastname, :email)");
        $stmt->bindParam(':firstname', $nombre);
        $stmt->bindParam(':lastname', $apellido);
        $stmt->bindParam(':email', $email);
    
        //Insertar una fila
        $nombre = "John";
        $apellido = "Doe";
        $email = "john@example.com";
        $stmt->execute();
    
        //Inserte otra fila
        $nombre = "Mary";
        $apellido = "Moe";
        $email = "mary@example.com";
        $stmt->execute();
    
        //Inserte otra fila
        $nombre = "Julie";
        $apellido = "Dooley";
        $email = "julie@example.com";
        $stmt->execute();
    
        echo "Nuevos registros creados exitosamente";
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $conn = null;
?>