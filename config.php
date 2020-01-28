<?php

$host="localhost2";
$usuariobd="root";
$password="";
$nombredb="videocrud";
$dsn="mysql:host=$host;dbname=$nombredb";

try {
    $conexion= new PDO($dsn, $usuariobd, $password);
} catch(PDOException $error) {
    echo $error->getMessage();
}