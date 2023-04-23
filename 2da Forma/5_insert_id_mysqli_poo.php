<?php
    include "../cabecera.php";
    echo $titulo[5];
    
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
    
    $sql = "INSERT INTO Personas (nombre, apellido, email)
    VALUES ('Alejandro', 'Apaza', 'ale@hotmail.com')";
    
    if ($conn->query($sql) === TRUE) {
        $ultimo_id = $conn->insert_id;
        echo "Nuevo registro creado con éxito. La última identificación insertada es: ".$ultimo_id;
    } else {
        echo "Error: ".$sql."<br>".$conn->error;
    }
    
    $conn->close();
?>