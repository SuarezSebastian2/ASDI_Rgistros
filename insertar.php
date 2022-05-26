<?php
include('layouts/conexion.php');
$con = $conexion;

$tipoDocumento = trim($_POST['tipoDocumento']);
$numeroDocumento = trim($_POST['numeroDocumento']);
$nombretd = trim($_POST['nombretd']);
$apellidotd = trim($_POST['apellidotd']);


$sql = "INSERT INTO tipodoc VALUES('$tipoDocumento','$numeroDocumento','$nombretd','$apellidotd')";
$query = mysqli_query($con, $sql);

if ($query) {
    Header("Location: principal.php");
} else {
    echo "Error:";
}
