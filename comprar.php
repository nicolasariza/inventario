<?php
$conectar = new mysqli('localhost', 'root', '', 'inventario');
if($conectar->connect_error)
{
    echo "la conexión falló";
}

$sql = "SELECT id_producto,nombre_producto, cantidad, lote, fecha_vencimiento, precio FROM productos WHERE cantidad > 0 ";

$respuesta = $conectar->query($sql);
?>

<div class="row justify-content-center align-items-center" style="height:80vh">
<form class="form-group col-sm-6" method="POST" action="M_comprar.php">
        <label for="producto" >Producto</label>
        <select class="form-control" id="producto" name="producto">
        <?php 
            while($rows = mysqli_fetch_array($respuesta)): ?>
            <?php echo '<option value="'.$rows['id_producto'].'">'.$rows['nombre_producto'].' ------ cantidad total disponible: 
            '.$rows['cantidad'].' </option>';?>
        <?php endwhile;?>
        </select>
        <label for="cantidad">Cantidad</label>
        <input type="number" class="form-control" id="cantidad" name="cantidad">
        <p></p>
        <button type="submit" class="btn btn-primary">Guardar</button>
</form>
</div>