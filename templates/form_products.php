<!-- formulario de alta de producto -->
<form action="insertarProducto" method="POST" class="my-4">
    <div class="row">
        <div class="col-9">
            <div class="form-group">
                <label>Marca</label>
                <input name="marca" type="text" class="form-control">
            </div>
        </div>
    </div>

    <div class="form-group">
        <label>Talle</label>
        <textarea name="talle" class="form-control" rows="3"></textarea>
    </div>

    <div class="form-group">
        <label>Color</label>
        <textarea name="color" class="form-control" rows="3"></textarea>
    </div>

    <button type="submit" class="btn btn-success">Agregar producto</button>
</form>