<?php
    include "../cabecera.php";
    echo $titulo[3];
    
    $hostname = "localhost";
    $usuario = "root";
    $password = "";
    $nombreBD = "poo_php";
    
    //Crear conexión
    $conn = new mysqli($hostname, $usuario, $password, $nombreBD);
    
    //Verifica la conexión
    if($conn->connect_error) {
        die("La conexión falló: " .$conn->connect_error);
    }
    
    //echo "Conectado exitosamente con POO";
    
    // SQL para crear tabla
    $sql = "CREATE TABLE Personas (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        nombre VARCHAR(30) NOT NULL,
        apellido VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";
        
        if ($conn->query($sql) === TRUE) {
            echo "Tabla Personas creada con éxito";
        } else {
            echo "Error al crear la tabla: ".$conn->error;
        }
        
        $conn->close();
?>