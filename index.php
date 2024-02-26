<!-- 
aqui se redirige con js abajo es con php

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <script>
        // Redireccionar automáticamente a login.php
        window.location.href = "auth/login.php";
    </script>
</head>
<body>
   
</body>
</html> -->

<?php
// Redireccionar automáticamente a login.php
header("Location: auth/index.php");
exit(); // Asegurarse de que el script se detenga aquí
?>

