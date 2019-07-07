<?php
    $conectar = new mysqli('localhost', 'root', '', 'inventario');
    if($conectar->connect_error)
    {
        echo "la conexión falló";
    }
    $nomb_prod = $_POST['nomb_prod'];
    $cantidad = $_POST['cantidad'];
    $lote = $_POST['lote'];
    $fech_venc = $_POST['fech_venc'];
    $precio = $_POST['precio'];
    $sql = "INSERT INTO productos VALUES('','$nomb_prod', '$cantidad', '$lote', '$fech_venc',
    '$precio')";
    $respuesta = $conectar->query($sql);
    header('Location: http://localhost/inventario/panel.php');
?>