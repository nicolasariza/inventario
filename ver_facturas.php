<?php
$conectar = new mysqli('localhost', 'root', '', 'inventario');
if($conectar->connect_error)
{
    echo "la conexión falló";
}

$sql = "SELECT id_factura as id_factura, per.nombre as nombre, per.apellido as apellido,p.nombre_producto as nombre_producto, f.cantidad as
 cantidad, f.total as total
 FROM factura as f, productos as p, personas as per where p.id_producto = f.id_producto and f.id_persona= per.id_persona";

$respuesta = $conectar->query($sql);
?>


<table class="table">
  <thead>
    <tr>
      <th scope="col">ID factura</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">nombre_producto</th>
      <th scope="col">cantidad</th>
      <th scope="col">total</th>
    </tr>
  </thead>
  <tbody>
  <?php 
    while($rows = mysqli_fetch_array($respuesta)): ?>
    <tr>
        <td><?php echo $rows['id_factura']; ?></td>
        <td><?php echo $rows['nombre']; ?></td>
        <td><?php echo $rows['apellido']; ?></td>
        <td><?php echo $rows['nombre_producto']; ?></td>
        <td><?php echo $rows['cantidad']; ?></td>
        <td><?php echo $rows['total']; ?></td>
    </tr>
    <?php endwhile;
?>
  </tbody>
</table>