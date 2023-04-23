<?php
    include "../cabecera.php";
    echo $titulo[1];
    
    $hostname = "localhost";
    $usuario = "root";
    $password = "";
    
    //Crear conexión
    $conn = new mysqli($hostname, $usuario, $password);
    
    //Verifica la conexión
    
    if($conn->connect_error) {
        die("La conexión falló: " .$conn->connect_error);
    }
    
    echo "Conectado exitosamente con POO";
?>