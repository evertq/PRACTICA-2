<?php
    include "../cabecera.php";
    echo $titulo[8];
    
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
    
    $sql = "SELECT id, nombre, apellido FROM Personas";
    
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        //Datos de salida de cada fila
        while($row = mysqli_fetch_assoc($result)) {
            echo "id: " . $row["id"]. " - Nombre: " . $row["nombre"]. " " . $row["apellido"]. "<br>";
        }
    } else {
        echo "0 results";
    }
    
    mysqli_close($conn);
?>