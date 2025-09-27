<?php
session_start();

$connect = mysqli_connect(
    "localhost",
    "root",
    "",
    "crud_proveedores"
);

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
