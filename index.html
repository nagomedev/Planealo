<!--Inicia la sesión o reanuda una sesión existente-->
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta de usuario</title>
<!--Enlace al archivo .css-->
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php
//Si no existe la sesión redirige al archivo validarSesion.php
    if(!isset($_SESSION['correo'])){
        ?>
    <script> location.href="validarSesion.php"; </script>
        <?php
    }
//Define el tiempo maximo de sesión
    $tiempo_maximo = 30 * 60;
//Si no existe el tiempo de sesión, se iniciara
    if(!isset($_SESSION['tiempo'])){
        $_SESSION['tiempo'] = time();
    }
//Verifica si ha superado el limite de la actividad y cuando finaliza, vuelve a redirigir al archivo validarSesion.php
    if(time()- $_SESSION['tiempo'] > $tiempo_maximo){
        session_unset();
        session_destroy();
        header("Location: validarSesion.php");
        exit();
    }
//Actualiza el tiempo de la sesión al tiempo actual
    $_SESSION['tiempo']= time();
//Incluye el archivo de cabecera.html
//    include "cabecera.html";
     
    ?>
<!--Muestra el nombre del usuario de la sesión-->
    <p>Usuario <?php echo $_SESSION['correo']; ?> </p>
<!--Link para finalizar la sesión-->
    <a href="cerrarSesion.php">Cerrar Sesión</a>
<!--Muestra la hora de inicio de sesión-->
    <p>Sesión iniciada a las <?php echo date("d/m/Y G:i:s", $_SESSION['tiempo']);?></p>
</body>
</html>