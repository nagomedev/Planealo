<?php
session_start();
$_SESSION = []; // Limpiar variables de sesión
session_destroy(); // Destruir sesión
setcookie(session_name(), '', time() - 3600, '/'); // Borrar la cookie de sesión

header('Location: login.php'); // Asegurar la redirección
exit();
?>