<?php
    include "../cabecera.php";
    echo $titulo[4];
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
    $sql = "INSERT INTO Personas (nombre, apellido, email)
    VALUES ('Alejandro', 'Apaza', 'ale@hotmail.com')";
    
    if (mysqli_query($conn, $sql)) {
        echo "Nuevo registro creado con éxito";
    } else {
        echo "Error: ".$sql."<br>".mysqli_error($conn);
    }
    mysqli_close($conn);
?>