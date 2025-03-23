<?php
// MVC/Vista/includes/header.php

if (session_status() === PHP_SESSION_NONE) {
    session_start(); // Iniciar sesión solo si no está activa
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planealo - <?php echo isset($pageTitle) ? $pageTitle : 'Inicio'; ?></title>
    <link rel="stylesheet" href="Styles.css?v=1.0">
</head>
<body>
<header>
    <div class="logo">
        <h1><a href="index.php">Planealo</a></h1>
    </div>
    <nav>
        <ul>
            <li><a href="index.php">ACTIVIDADES</a></li>
            <li><a href="crear_plan.php">CREAR PLAN</a></li>
            <?php if (isset($_SESSION['user_id'])): ?>
                <li><a href="perfil.php">MI PERFIL (<?php echo htmlspecialchars($_SESSION['user_name']); ?>)</a></li>
                <li><a href="MVC/Vista/usuarios/logout.php">CERRAR SESIÓN</a></li>
            <?php else: ?>
                <li><a href="usuarios/login.php">INICIAR SESIÓN</a></li>
            <?php endif; ?>
        </ul>
    </nav>
</header>