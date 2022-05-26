<?php
include('layouts/conexion.php');
$con = $conexion;

$numeroDocumento = $_GET['id'];

$sql = "DELETE FROM tipodoc  WHERE numeroDocumento='$numeroDocumento'";
$query = mysqli_query($con, $sql);

if ($query) {
    Header("Location: principal.php");
} else {
    echo "Error";
}
