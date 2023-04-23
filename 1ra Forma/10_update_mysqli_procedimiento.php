<?php
    include "../cabecera.php";
    echo $titulo[10];
    
    $hostname = "localhost";
    $usuario = "root";
    $password = "";
    $nombreBD = "procedimiento_php";
    
    //Crear conexión
    $conn = mysqli_connect($hostname, $usuario, $password, $nombreBD);
    //Verifica la conexión
    if (!$conn) {
        die("La conexión falló: " . mysqli_connect_error());
    }
    $sql = "UPDATE Personas SET apellido = 'Humerez Janco' WHERE id = 2";
    
    if (mysqli_query($conn, $sql)) {
        echo "Registro actualizado con éxito";
    } else {
        echo "Error al actualizar registro: " . mysqli_error($conn);
    }
    mysqli_close($conn);
?>