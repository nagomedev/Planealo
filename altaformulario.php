<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta formulario</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<?php
//incluimos la funcion que hemos realizado para obtener los datos
include 'funciones.php';
list($nombre, $apellidos, $telefono, $correo, $password, $contenido) = datos();
if($contenido) :
//Si se han recibido correctamente los datos, nos muestra el formulario de confirmación
?>
<h2>Confirmar registro</h2>
<form action="alta.php" method="post">
    <div>
        <label for="nombre">Nombre: <?php echo htmlspecialchars($nombre); ?></label>
        <input type="hidden" id="nombre" name="nombre" value="<?php echo htmlspecialchars($nombre); ?>" required>
    </div>

    <div>
        <label for="apellidos">Apellidos: <?php echo htmlspecialchars($apellidos); ?></label>
        <input type="hidden" id="apellidos" name="apellidos" value="<?php echo htmlspecialchars($apellidos); ?>" required>
    </div>

    <div>
        <label for="telefono">Teléfono: <?php echo htmlspecialchars($telefono); ?></label>
        <input type="hidden" id="telefono" name="telefono" value="<?php echo htmlspecialchars($telefono); ?>" required>
    </div>

    <div>
        <label for="correo">Correo: <?php echo htmlspecialchars($correo); ?></label>
        <input type="hidden" id="correo" name="correo" value="<?php echo htmlspecialchars($correo); ?>" required>
    </div>

    <div>
        <label for="password">Contraseña: <?php echo htmlspecialchars($password); ?></label>
        <input type="hidden" id="password" name="password" value="<?php echo htmlspecialchars($password); ?>" required>
    </div>

    <div>
    <button type="submit">Confirmar Datos</button>
<!--Botón que redirecciona a form.php, para corregir los datos-->
    <button type="submit" formaction="form.php">Corregir Datos </button>
   </div>
</form>
<?php
else :
    echo "<h1>Error en los datos</h1>";
endif;
?>
    
    </body>
</html>