<?php
    include "../cabecera.php";
    echo $titulo[3];
    
    $hostname = "localhost";
    $usuario = "root";
    $password = "";
    $nombreBD = "pdo_php";

    try {
        $conn = new PDO("mysql:host=$hostname;dbname=$nombreBD", $usuario, $password);
        // Establecer el modo de error PDO en excepción
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Conectado exitosamente con PDO";
        
        // SQL para crear tabla
        $sql = "CREATE TABLE Personas (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            nombre VARCHAR(30) NOT NULL,
            apellido VARCHAR(30) NOT NULL,
            email VARCHAR(50),
            fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";
            //Usar exec() porque no se devuelven resultados
            $conn->exec($sql);
            echo "Tabla Personas creada con éxito";
        }catch(PDOException $e) {
            echo $sql."<br>".$e->getMessage();
        }

        $conn = null;
?>