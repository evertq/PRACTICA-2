<?php
    include "../cabecera.php";
    echo $titulo[2];
    
    $hostname = "localhost";
    $usuario = "root";
    $password = "";
    
    try {
        $conn = new PDO("mysql:host=$hostname", $usuario, $password);
        // Establecer el modo de error PDO en excepción
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Conectado exitosamente con PDO";
        
        $sql = "CREATE DATABASE pdo_php";
        //Usar exec() porque no se devuelven resultados
        $conn->exec($sql);
        echo "Base de datos creada con éxito<br>";
    } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
    $conn = null;
?>