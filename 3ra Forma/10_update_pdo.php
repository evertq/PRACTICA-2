<?php
    include "../cabecera.php";
    echo $titulo[10];
    
    $hostname = "localhost";
    $usuario = "root";
    $password = "";
    $nombreBD = "pdo_php";

    try {
        $conn = new PDO("mysql:host=$hostname;dbname=$nombreBD", $usuario, $password);
        // Establecer el modo de error PDO en excepción
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $sql = "UPDATE Personas SET apellido = 'Doe' WHERE id = 2";
        
        //Preparar declaración
        $stmt = $conn->prepare($sql);
        
        //Ejecutar la consulta
        $stmt->execute();
        //echo un mensaje para decir que la ACTUALIZACIÓN se realizó correctamente
        //1 se modifico
        //0 no se modifico
        echo $stmt->rowCount()." registros ACTUALIZADOS exitosamente";
    } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
    $conn = null;
?>