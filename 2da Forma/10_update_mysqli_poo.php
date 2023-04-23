<?php
    include "../cabecera.php";
    echo $titulo[10];
   
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

    $sql = "UPDATE Personas SET apellido = 'Doe' WHERE id = 2";
    
    if ($conn->query($sql) === TRUE) {
        echo "Registro actualizado con éxito";
    } else {
        echo "Error al actualizar registro: " . $conn->error;
    }
 
    $conn->close();
?>