<?php
    include "../cabecera.php";
    echo $titulo[9];
    
    $hostname = "localhost";
    $usuario = "root";
    $password = "";
    $nombreBD = "pdo_php";

    try {
        $conn = new PDO("mysql:host=$hostname;dbname=$nombreBD", $usuario, $password);
        // Establecer el modo de error PDO en excepción
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        //SQL para eliminar un registro
        $sql = "DELETE FROM Personas WHERE id = 3";
        
        //Usa exec() porque no se devuelven resultados
        $conn->exec($sql);
        echo "Registro eliminado exitosamente";
    } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
    $conn = null;
?>