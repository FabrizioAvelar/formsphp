<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "practicaphp";

// Create connection
try{
    $conn = new PDO("mysql:host=$servername; dbname=$db", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e){
    echo "Conexion Fallida: " . $e->getMessage();
}

?>