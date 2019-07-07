<?php
    $conectar = new mysqli('localhost', 'root', '', 'inventario');
    if($conectar->connect_error)
    {
        echo "la conexión falló";
    }
    $sql = "INSERT INTO productos VALUES('','$nomb_prod')";
    die($sql);
    
    $respuesta = $conectar->query($sql);
    $row = $respuesta->fetch_array(MYSQLI_ASSOC);
    $datos_usuario = $row["nombre"]." ".$row["apellido"];
?>