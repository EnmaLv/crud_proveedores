<?php include_once("../database/db.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM proveedores_emdaa WHERE id = $id";
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_array($result);
}
?>
<?php include_once("../views/header.php");
?>

<div class="container-fluid row" style="width: 80%; margin: auto;">
    <div class="col-md-12">
        <div class="card" style="margin: 20px">
            <div class="card-header bg-info text-white text-center">
                <h3 class="card-title">Ver Proveedor</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="Empresa">Empresa</label>
                            <input type="text" class="form-control" name="empresa" id="empresa" value="<?php echo $row['empresa_emdaa']; ?>" disabled>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="Direccion">Direccion</label>
                            <input type="text" class="form-control" name="direccion" id="direccion" value="<?php echo $row['direccion_emdaa']; ?>" disabled>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="Nombre">Nombre</label>
                            <input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo $row['nombre_emdaa']; ?>" disabled>
                        </div>
                    </div>



                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="Telefono">Telefono</label>
                            <input type="text" class="form-control" name="telefono" id="telefono" value="<?php echo $row['telefono_emdaa']; ?>" disabled>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="Email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" value="<?php echo $row['email_emdaa']; ?>" disabled>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="Estado">Estado</label>
                            <select name="estado" id="estado" class="form-control" disabled>
                                <option value="" <?php if ($row['estado_emdaa'] == '') echo 'selected'; ?>>Seleccione</option>
                                <option value="1" <?php if ($row['estado_emdaa'] == '1') echo 'selected'; ?>>Activo</option>
                                <option value="0" <?php if ($row['estado_emdaa'] == '0') echo 'selected'; ?>>Inactivo</option>
                            </select>
                        </div>
                    </div>
                </div>

            </div>
            <div class="card-footer" style="text-align: right;">
                <a href="../views/index.php" class="btn btn-secondary">Cancelar</a>
            </div>
        </div>
    </div>
</div>
</div>




<?php include_once("../views/footer.php");
?>