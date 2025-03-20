<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cerrar Sesión</title>
</head>
<body>
<?php
// Elimina todas las variables de sesión
    session_unset();
// Destruye la sesión
    session_destroy();

    header("location: index.php");
?>
</body>
</html>