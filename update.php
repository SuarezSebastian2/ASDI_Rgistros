<?php
include('layouts/conexion.php');
$con = $conexion;

$tipoDocumento = $_POST['tipoDocumento'];
$numeroDocumento = $_POST['numeroDocumento'];
$nombretd = $_POST['nombretd'];
$apellidotd = $_POST['apellidotd'];


$sql = "UPDATE tipodoc SET tipoDocumento='$tipoDocumento', nombretd='$nombretd', apellidotd='$apellidotd' WHERE numeroDocumento='$numeroDocumento'";
$query = mysqli_query($con, $sql);

if ($query) {
    Header("Location: actualizarInfo.php");
} else {
    echo "Error:";
}
