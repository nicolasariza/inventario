<?php
    session_start();
    $id_persona = $_SESSION['id_persona'];
    $conectar = new mysqli('localhost', 'root', '', 'inventario');
    if($conectar->connect_error)
    {
        echo "la conexión falló";
    }
    $producto = $_POST['producto'];
    $cantidad = $_POST['cantidad'];
   // $sql = "SELECT id_factura, id_persona, id_producto,cantidad,total FROM factura";
   // $respuesta = $conectar->query($sql);
   // $row = $respuesta->fetch_array(MYSQLI_ASSOC);
   // $id_factura = $row['id_factura'];
    $sql = "SELECT precio,cantidad FROM productos WHERE id_producto = '$producto'";
    $respuesta = $conectar->query($sql);
    $row = $respuesta->fetch_array(MYSQLI_ASSOC);
    $total = $row['precio']*$cantidad;
    $cant_inve = $row['cantidad']-$cantidad;
    if($cant_inve < 0)
    {
        header('Location: http://localhost/inventario/panel.php');
        die();
    }
    $sql = "UPDATE productos SET cantidad = '$cant_inve' WHERE id_producto = '$producto'";
    $conectar->query($sql);
    $sql = "DELETE FROM productos WHERE cantidad = 0";
    $conectar->query($sql);
    $sql = "INSERT INTO factura VALUES('','$id_persona','$producto', '$cantidad',  '$total')";
    $respuesta = $conectar->query($sql);
    header('Location: http://localhost/inventario/panel.php');
?>