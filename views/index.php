<?php
include_once("../database/db.php");

?>

<?php include_once("../views/header.php");
?>
<link rel="stylesheet" href="../views/css/style.css">
<div class="container-fluid row" style="width: 80%; margin: auto;">
    <div class="col-md-12">
        <div class="card" style="margin: 20px;">
            <div class="card-header bg-primary">
                <div class="card-title">
                    <h3 style="text-align: center; color: white;">Listado</h3>
                </div>
            </div>
            <div class="card-body" style="padding-bottom: 0;">
                <div class="row">
                    <div class="col-md-12">
                        <h4 style="display: inline;">Proveedores Registrados</h4>
                        <a href="../views/create.php" class="btn btn-primary" style="float: right; margin-bottom: 15px;">Agregar Proveedor</a>
                    </div>


                    <table class="table table-bordered table-striped" style="text-align: center;">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Empresa</th>
                                <th>Direccion</th>
                                <th>Nombre</th>
                                <th>Telefono</th>
                                <th>Email</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php
                                $query = "SELECT * FROM proveedores_emdaa";
                                $result = mysqli_query($connect, $query);

                                $i = 1;
                                while ($row = mysqli_fetch_assoc($result)): ?>

                                    <td><?php echo $i++; ?></td>
                                    <td><?php echo $row['empresa_emdaa']; ?></td>
                                    <td><?php echo $row['direccion_emdaa']; ?></td>
                                    <td><?php echo $row['nombre_emdaa']; ?></td>
                                    <td><?php echo $row['telefono_emdaa']; ?></td>
                                    <td><?php echo $row['email_emdaa']; ?></td>
                                    <td><?php
                                        if ($row['estado_emdaa'] == 1) {
                                            echo "Activo";
                                        } else {
                                            echo "Inactivo";
                                        } ?></td>
                                    <td>
                                        <a href="../views/show.php?id=<?php echo $row['id']; ?>" class="btn btn-info" style="color: white;"><i class="fa-solid fa-eye"></i>Ver</a>
                                        <a href="../views/update.php?id=<?php echo $row['id']; ?>" class="btn btn-warning" style="color: white;"><i class="fa-solid fa-pen-to-square"></i>Editar</a>
                                        <a href="../app/controllers/deleteController.php?id=<?php echo $row['id']; ?>" class="btn btn-danger" style="color: white;"><i class="fa-solid fa-trash"></i>Eliminar</a>
                                    </td>
                            </tr>
                        <?php
                                endwhile;
                        ?>
                        <?php if (mysqli_num_rows($result) == 0): ?>
                            <tr>
                                <td colspan="8" style="text-align: center;">
                                    <div class="alert alert-warning m-0" role="alert">
                                        <b>No hay datos</b>
                                    </div>
                                </td>
                            </tr>
                        <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once("../views/footer.php");
?>

<?php

if (isset($_SESSION['message'])): ?>
    <script>
        Swal.fire(
            'Correcto!',
            '<?php echo $_SESSION['message']; ?>',
            'success',
        )
    </script>
<?php unset($_SESSION['message']);
endif; ?>