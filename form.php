<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="styles.css">
    <?php include "cabecera.html"; ?>
</head>
<body>

<?php
//incluimos la funcion que hemos realizado para obtener los datos
include 'funciones.php';
list($nombre, $apellidos, $telefono, $correo, $password, $contenido)= datos();
//Si se han recibido correctamente los datos, nos muestra el formulario
if($contenido) :
?>
<section class="completo">
    <article class="centrado">
<!--Formulario de registro prellenado-->
        <h2>Formulario de Registro</h2>
        <form action="Altaformulario.php" method="post" class="formulario">
            <div class="formulario-conjunto">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" value="<?php echo $nombre ?>" required>
            </div>

            <div class="formulario-conjunto">
                <label for="apellidos">Apellidos:</label>
                <input type="text" id="apellidos" name="apellidos" value="<?php echo $apellidos; ?>" required>
            </div>

            <div class="formulario-conjunto">
                <label for="telefono">Teléfono:</label>
                <input type="text" id="telefono" name="telefono" value="<?php echo $telefono; ?>" required>
            </div>

            <div class="formulario-conjunto">
                <label for="correo">Correo:</label>
                <input type="email" id="correo" name="correo" value="<?php echo $correo; ?>" required>
            </div>

            <div class="formulario-conjunto">
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" value="<?php echo $password; ?>" required>
            </div>

            <div class="formulario-conjunto">
                <button type="submit">Enviar</button>
                <button type="button" onclick="location.href='index.php'">Cancelar </button>
            </div>
        </form>
    </article>
</section>
<?php
//Si los datos no han sido enviados, nos muestra el formulario en blanco para que el usuario lo rellene
else :
    ?>
<section class="completo">
    <article class="centrado">
        <h2>Formulario de Registro</h2>
        <form action="Altaformulario.php" method="post" class="formulario">
            <div class="formulario-conjunto">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>

            <div class="formulario-conjunto">
                <label for="apellidos">Apellidos:</label>
                <input type="text" id="apellidos" name="apellidos" required>
            </div>

            <div class="formulario-conjunto">
                <label for="telefono">Teléfono:</label>
                <input type="text" id="telefono" name="telefono" required>
            </div>

            <div class="formulario-conjunto">
                <label for="correo">Correo:</label>
                <input type="email" id="correo" name="correo" required>
            </div>

            <div class="formulario-conjunto">
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required>
            </div>

            <div class="formulario-conjunto">
                <button type="submit">Enviar</button>
                <button type="button" onclick="location.href='index.php'">Cancelar </button>
            </div>
        </form>
    </article>
</section>
<?php

endif;
?>
   
   </body>
</html>