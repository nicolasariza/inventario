<div class="row justify-content-center align-items-center" style="height:80vh">
<form class="form-group col-sm-6" method="POST" action="M_productos.php">
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

