<div class="row justify-content-center align-items-center" style="height:80vh">
<form class="form-group col-sm-6" method="POST" action="productos.php">
        <label for="nomb_prod" >Nombre del producto</label>
        <input type="text" class="form-control" id="nomb_prod" name="nomb_prod">
        <label for="cantidad">Cantidad</label>
        <input type="number" class="form-control" id="cantidad" name="cantidad">
        <label for="lote">Lote</label>
        <input type="number" class="form-control" id="lote" name="lote">
        <label for="fech_venc">Fecha de vencimiento</label>
        <input type="date" class="form-control" id="fech_venc" name="fech_venc">
        <label for="precio">Precio</label>
        <input type="text" class="form-control" id="precio" name="precio">
        <p></p>
        <button type="submit" class="btn btn-primary">Guardar</button>
</form>
</div>
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
   // header('Location: http://localhost/inventario/panel.php');
?>
