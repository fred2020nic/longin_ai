<?php
// require_once "./conexion.php";

// require_once  "../config/conexion.php";



$conex = require_once "../config/conexion.php";

if ($conex){
    echo "conexion correcta";

    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //     $username = $_POST["username"];
    //     $password = $_POST["password"];

    // var_dump($_POST["username"]);
    // }
}


// require_once  "conexion.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

       // Debugging: Imprimir los datos recibidos del formulario
    //    echo "Usuario recibido: " . $username . "<br>";
    //    echo "Contraseña recibida: " . $password . "<br>";



    // Consulta SQL para verificar las credenciales
    $sql = "SELECT * FROM usuarios WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Usuario autenticado
        echo "success";
    } else {
        // Usuario no encontrado o credenciales incorrectas
        echo "error";
    }
}
?>
