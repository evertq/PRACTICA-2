<?php
    include "../cabecera.php";
    echo $titulo[5];
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
    VALUES ('Jacob', 'Larico', 'jacob@hotmail.com')";
    if (mysqli_query($conn, $sql)) {
        $ultimo_id = mysqli_insert_id($conn);
        echo "Nuevo registro creado con éxito. La última identificación insertada es: ".$ultimo_id;
    } else {
        echo "Error: ".$sql."<br>".mysqli_error($conn);
    }
    mysqli_close($conn);
?>