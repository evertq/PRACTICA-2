<?php
    include "../cabecera.php";
    echo $titulo[9];
    
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
    
    //SQL para eliminar un registro
    $sql = "DELETE FROM Personas WHERE id = 3";
    
    if (mysqli_query($conn, $sql)) {
        echo "Registro eliminado exitosamente";
    } else {
        echo "Error al eliminar registro: " . mysqli_error($conn);
    }
    
    mysqli_close($conn);
?>