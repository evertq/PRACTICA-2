<?php
    include "../cabecera.php";
    echo $titulo[4];
    
    $hostname = "localhost";
    $usuario = "root";
    $password = "";
    $nombreBD = "pdo_php";
    
    try {
        $conn = new PDO("mysql:host=$hostname;dbname=$nombreBD", $usuario, $password);
        // Establecer el modo de error PDO en excepción
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO Personas (nombre, apellido, email) VALUES ('Alejandro', 'Apaza', 'ale@hotmail.com')";
        
        //Usar exec() porque no se devuelven resultados
        $conn->exec($sql);
        echo "Nuevo registro creado con éxito";
    } catch(PDOException $e) {
        echo $sql."<br>".$e->getMessage();
    }
    $conn = null;
?>