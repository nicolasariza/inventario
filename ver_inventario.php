<?php
$conectar = new mysqli('localhost', 'root', '', 'inventario');
if($conectar->connect_error)
{
    echo "la conexión falló";
}

$sql = "SELECT nombre_producto, cantidad, lote, fecha_vencimiento, precio FROM productos WHERE cantidad > 0";

$respuesta = $conectar->query($sql);
?>


<table class="table">
  <thead>
    <tr>
      <th scope="col">Nombre del producto</th>
      <th scope="col">Cantidad</th>
      <th scope="col">Lote</th>
      <th scope="col">Fecha de vencimiento</th>
      <th scope="col">Precio</th>
    </tr>
  </thead>
  <tbody>
  <?php 
    while($rows = mysqli_fetch_array($respuesta)): ?>
    <tr>
        <td><?php echo $rows['nombre_producto']; ?></td>
        <td><?php echo $rows['cantidad']; ?></td>
        <td><?php echo $rows['lote']; ?></td>
        <td><?php echo $rows['fecha_vencimiento']; ?></td>
        <td><?php echo $rows['precio']; ?></td>
    </tr>
    <?php endwhile;
?>
  </tbody>
</table>