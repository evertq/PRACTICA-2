<?php
    include "../cabecera.php";
    echo $titulo[8];

    $hostname = "localhost";
    $usuario = "root";
    $password = "";
    $nombreBD = "pdo_php";

    try {
        $conn = new PDO("mysql:host=$hostname;dbname=$nombreBD", $usuario, $password);
        // Establecer el modo de error PDO en excepción
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // FETCH_ASSOC
        $stmt = $conn->prepare("SELECT id, nombre, apellido FROM Personas");
        // Especificamos el fetch mode antes de llamar a fetch()
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        // Ejecutamos
        $stmt->execute();
        // Mostramos los resultados
        while ($row = $stmt->fetch()){
            echo "<b>Id:</b>{$row["id"]} "."<b>Nombre:</b>{$row["nombre"]} "."<b>Apellido:</b>{$row["apellido"]}<br>";
        }
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $conn = null;
    echo "</table>";
?>