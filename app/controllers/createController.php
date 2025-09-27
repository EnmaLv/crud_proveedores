<?php
session_start();
include_once("../../database/db.php");

if (isset($_POST['guardar_proveedor'])) {
    $empresa = $_POST['empresa'];
    $direccion = $_POST['direccion'];
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $estado = $_POST['estado'];

    $query = "INSERT INTO proveedores_emdaa (empresa_emdaa, direccion_emdaa, nombre_emdaa, telefono_emdaa, email_emdaa, estado_emdaa) VALUES ('$empresa', '$direccion', '$nombre', '$telefono', '$email', '$estado')";
    $result = mysqli_query($connect, $query);



    if ($result) {
        $_SESSION['message'] = 'Proveedor insertado correctamente';
        header("Location: ../../views/index.php?status=success");
        exit();
    } else {
        $_SESSION['message'] = 'Error al insertar el proveedor';
        header("Location: ../../views/index.php?status=error");
        exit();
    }
}
