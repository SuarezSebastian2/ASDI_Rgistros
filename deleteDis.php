<?php
include('layouts/conexion.php');
$con = $conexion;

$id3 = $_GET['id'];

$sql = "DELETE FROM tipodoc  WHERE i_d3='$id3'";
$query = mysqli_query($con, $sql);

if ($query) {
    Header("Location: discapacitados.php");
} else {
    echo "Error";
}
