<?php

// echo '<h1> hola mundo </h1>'; 

// Declaramos las variables de conexion  al servidor y la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$database = "longin_ai";

// creamos la conexion 

$conn = new mysqli($servername, $username, $password,$database);

if ($conn->connect_error){
    die($conn->error);
}else{
    echo "Connection correct 2024";
}

?>