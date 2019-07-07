<?php

$username=$_POST['username'];
$password=$_POST['password'];

session_start();

$conectar = new mysqli('localhost', 'root', '', 'inventario');
if($conectar->connect_error)
{
    echo "la conexión falló";
}

$sql = "SELECT nombre, apellido, usuario, pass, rol FROM personas WHERE usuario = '$username' and pass  = '$password'";
$respuesta = $conectar->query($sql);
$row = $respuesta->fetch_array(MYSQLI_ASSOC);
$datos_usuario = $row["nombre"]." ".$row["apellido"];
$rol = $row["rol"];
$_SESSION['username']=$datos_usuario;
$_SESSION['rol']=$rol;
if($respuesta->num_rows > 0)
{
    header('Location: http://localhost/inventario/panel.php');
}
else{
    echo "<h1>Verifique los datos</h1>";
}
?>