<?php
session_start();
include_once("../../database/db.php");

if (isset($_POST['editar_proveedor'])) {
    $id = $_GET['id'];
    $empresa = $_POST['empresa'];
    $direccion = $_POST['direccion'];
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $estado = $_POST['estado'];

    $query = "UPDATE proveedores_emdaa SET empresa_emdaa = '$empresa', direccion_emdaa = '$direccion', nombre_emdaa = '$nombre', telefono_emdaa = '$telefono', email_emdaa = '$email', estado_emdaa = '$estado' WHERE id = $id";
    $result = mysqli_query($connect, $query);



    if ($result) {
        $_SESSION['message'] = 'Proveedor actualizado correctamente';
        header("Location: ../../views/index.php?status=success");
        exit();
    } else {
        $_SESSION['message'] = 'Error al actualizar el proveedor';
        header("Location: ../../views/index.php?status=error");
        exit();
    }
}
