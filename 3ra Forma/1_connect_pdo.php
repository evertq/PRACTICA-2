<?php
    include "../cabecera.php";
    echo $titulo[1];
    
    $hostname = "localhost";
    $usuario = "root";
    $password = "";
    
    try {
        $conn = new PDO("mysql:host=$hostname", $usuario, $password);
        // Establecer el modo de error PDO en excepción
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Conectado exitosamente con PDO";
    } catch(PDOException $e) {
        echo "La conexión falló: " . $e->getMessage();
    }
?>