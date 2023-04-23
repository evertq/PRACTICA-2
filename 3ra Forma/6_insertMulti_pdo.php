<?php
    include "../cabecera.php";
    echo $titulo[6];

    $hostname = "localhost";
    $usuario = "root";
    $password = "";
    $nombreBD = "pdo_php";

    try {
        $conn = new PDO("mysql:host=$hostname;dbname=$nombreBD", $usuario, $password);
        // Establecer el modo de error PDO en excepción
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        //Comenzar la transacción
        $conn->beginTransaction();
        //Nuestras declaraciones SQL
        $conn->exec("INSERT INTO Personas (nombre, apellido, email)
        VALUES ('Juan Ariel', 'Huanca Sosa', 'juan@example.com')");
        $conn->exec("INSERT INTO Personas (nombre, apellido, email)
        VALUES ('Lilia Elisabeth', 'Janco', 'lilia@example.com')");
        $conn->exec("INSERT INTO Personas (nombre, apellido, email)
        VALUES ('Liseth Brisila', 'Quino Arias', 'lis@example.com')");
        
        //Confirma la transacción
        $conn->commit();
        echo "Nuevos registros creados exitosamente";
    } catch(PDOException $e) {
        //Revierte la transacción si algo falla
        $conn->rollback();
        echo "Error: " . $e->getMessage();
    }
    $conn = null;
?>