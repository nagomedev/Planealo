<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta completa</title>
    <link rel="stylesheet" href="styles.css">
    <?php include "cabecera.html"; ?>
</head>
<body>

<?php
// Incluimos las funciones y la conexión a la base de datos
include 'funciones.php';
include 'conexion.php';

// Obtenemos los datos del formulario
list($nombre, $apellidos, $telefono, $correo, $password, $contenido) = datos();

// Verificamos si los datos fueron enviados correctamente
if ($contenido) {
    // Verificar si el correo ya existe en la base de datos
    $sql_check = "SELECT * FROM usuarios WHERE correo = ?";
    $stmt_check = $conn->prepare($sql_check);
    $stmt_check->bind_param("s", $correo);
    $stmt_check->execute();
    $resultado = $stmt_check->get_result();

    if ($resultado->num_rows > 0) {
        // Si el correo ya existe, mostrar un mensaje de error
        echo "<h1>Error</h1>";
        echo "<p>El correo '$correo' ya está en uso. <a href='form.php'>Volver</a></p>";
    } else {
        // Si el correo no existe, insertar el nuevo usuario en la base de datos
        $pass_hash = password_hash($password, PASSWORD_DEFAULT); // Hasheamos la contraseña
        $sql = "INSERT INTO usuarios (nombre, apellidos, telefono, correo, password) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssiss", $nombre, $apellidos, $telefono, $correo, $pass_hash);

        if ($stmt->execute()) {
            // Si la inserción es exitosa, mostrar un mensaje de éxito
            echo "<h1>Registro Completado</h1>";
            echo "<p>El usuario con correo '$correo' ha sido creado satisfactoriamente.</p>";
            echo "<a href='index.php'>Volver al inicio</a>";
        } else {
            // Si hay un error en la inserción, mostrar un mensaje de error
            echo "<h1>Error en el registro</h1>";
            echo "<p>Hubo un problema al registrar el usuario. <a href='form.php'>Volver</a></p>";
        }

        // Cerrar la declaración de inserción solo si está definida
        if (isset($stmt)) {
            $stmt->close();
        }
    }

    // Cerrar la declaración de verificación y la conexión
    $stmt_check->close();
    $conn->close();
} else {
    // Si no se recibieron los datos correctamente, mostrar un mensaje de error
    echo "<h1>Error en la recepción</h1>";
    echo "<p>No se recibieron todos los datos necesarios. <a href='form.php'>Volver</a></p>";
}
?>
</body>
</html>