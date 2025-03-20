<?php
//creamos una función que verifica si obtenemos los datos
function datos(){
if(isset($_POST['nombre']) && isset($_POST['apellidos']) && isset($_POST['telefono']) && isset($_POST['correo'])  && isset($_POST['password'])){
//se lo asignamos a las variables si existen
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $password = $_POST['password'];
    $contenido = true;
return [$nombre, $apellidos, $telefono, $correo , $password, $contenido];
}else{
    $contenido=false;
    return $contenido;
}}
?>