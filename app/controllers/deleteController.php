<?php
session_start();
include_once("../../database/db.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM proveedores_emdaa WHERE id = $id";
    $result = mysqli_query($connect, $query);

    if ($result) {
        $_SESSION['message'] = 'Proveedor eliminado correctamente';
        header("Location: ../../views/index.php?status=success");
        exit();
    } else {
        $_SESSION['message'] = 'Error al eliminar el proveedor';
        header("Location: ../../views/index.php?status=error");
        exit();
    }
}
