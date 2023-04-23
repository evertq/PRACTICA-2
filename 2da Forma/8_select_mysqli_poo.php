<?php
    include "../cabecera.php";
    echo $titulo[8];
    
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
    
    $sql = "SELECT id, nombre, apellido FROM Personas";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        //Datos de salida de cada fila
        while($row = $result->fetch_assoc()) {
            echo "id: " . $row["id"]. " - Name: " . $row["nombre"]. " " . $row["apellido"]. "<br>";
        }
    } else {
        echo "0 results";
    }
    
    $conn->close();
?>