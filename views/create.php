<?php include_once("../database/db.php");
?>
<?php include_once("../views/header.php");
?>

<div class="container-fluid row" style="width: 80%; margin: auto;">
    <div class="col-md-12">
        <div class="card card-primary" style="margin: 20px;">
            <form action="../app/controllers/createController.php" method="post">
                <div class="card-header bg-success text-white text-center">
                    <h3 class="card-title">Agregar Proveedor</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="Empresa">Empresa</label>
                                <input type="text" class="form-control" name="empresa" id="empresa" required>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="Direccion">Direccion</label>
                                <input type="text" class="form-control" name="direccion" id="direccion" required>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="Nombre">Nombre</label>
                                <input type="text" class="form-control" name="nombre" id="nombre" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="Telefono">Telefono</label>
                                <input type="number" class="form-control" name="telefono" id="telefono" required>
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="Email">Email</label>
                                <input type="email" class="form-control" name="email" id="email" required>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="Estado">Estado</label>
                                <select name="estado" id="estado" class="form-control" required>
                                    <option value="">Seleccione</option>
                                    <option value="1">Activo</option>
                                    <option value="0">Inactivo</option>
                                </select>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="card-footer" style="text-align: right;">
                    <a href="../views/index.php" class="btn btn-secondary">Cancelar</a>
                    <input class="btn btn-primary" name="guardar_proveedor" type="submit" value="Guardar">
                </div>
            </form>
        </div>
    </div>
</div>




<?php include_once("../views/footer.php");
?>