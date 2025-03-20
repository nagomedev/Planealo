<?php
session_start();
include 'cabecera.html'; // archivo a la cabecera.
include 'conexion.php'; // Archivo con la conexión a la base de datos

if (isset($_POST['correo']) && isset($_POST['password'])) {
    $correo = $_POST['correo'];
    $password = $_POST['password'];

    // Verificar en la base de datos
    $sql = "SELECT * FROM usuarios WHERE correo = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $correo);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows > 0) {
        $fila = $resultado->fetch_assoc();
        if (password_verify($password, $fila['password'])) {
            echo "Contraseña correcta. Redirigiendo...";
            $_SESSION['correo'] = $correo;
            $_SESSION['tiempo'] = time();
            header("Location: test.php");
            exit();
        } else {
            echo "<p>Contraseña incorrecta. <a href='validarSesion.php'>Intentar de nuevo</a></p>";
        }
    } else {
        echo "<p>Usuario no encontrado. <a href='validarSesion.php'>Intentar de nuevo</a></p>";
    }

    $stmt->close();
    $conn->close();
} else {

?>
<form class="formulario_acceso" action="validarSesion.php" method="POST">
        <p>ACCESO</p>
        <label>Correo: </label>
        <input type="email" name="correo" required/>
        <label>Contraseña: </label>
        <input type="password" name="password" required/>
        <input type="submit" value="Enviar"/>
    </form>
    <a href="form.php">Registrarse</a>
<?php
}
?>