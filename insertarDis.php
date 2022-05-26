<?php
include('layouts/conexion.php');
$con = $conexion;

$id_3 = trim($_POST['id_3']);
$tipoDiscapacidad = trim($_POST['tipoDiscapacidad']);
$tipoSolicitud = trim($_POST['tipoSolicitud']);
$fechaSolicitud = trim($_POST['fechaSolicitud']);
$numeroDoc3 = trim($_POST['numeroDoc3']);


$sql = "INSERT INTO discapacitados VALUES('$tipoDiscapacidad','$tipoSolicitud','$fechaSolicitud','$numeroDoc3')";
$query = mysqli_query($con, $sql);

if ($query) {
    Header("Location: discapacitados.php");
} else {
    echo "Error:";
}
