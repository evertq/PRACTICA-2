<?php
    include "../cabecera.php";
    echo $titulo[1];
    //Declaracion de variables
    $hostname = "localhost";
    $usuario = "root";
    $password = "";
    //Crear conexion
    $conn = mysqli_connect($hostname, $usuario, $password);
    //Verificar la conexion
    if(!$conn){
        die("La conexion fallo: ".mysqli_connect_error());
    }
    echo "Conectado exitosamente al SERVIDOR con la forma de Procedimientos";
?>