<?php
    include "../cabecera.php";
    echo $titulo[9];
    
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
    
    //SQL para eliminar un registro
    $sql = "DELETE FROM Personas WHERE id = 3";
    
    if ($conn->query($sql) === TRUE) {
        echo "Registro eliminado exitosamente";
    } else {
        echo "Error al eliminar registro: ".$conn->error;
    }
    
    $conn->close();
?>