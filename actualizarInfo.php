<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <title>Actualizar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>

<body>
    <div class="container mt-5">
        <form action="update.php" method="POST">

            <input type="hidden" name="numeroDoc" value="<?php echo $row['numeroDocumento']  ?>">

            <input type="text" class="form-control mb-3" name="tipoDocumento" placeholder="Dni" value="<?php echo $row['tipoDocumento']  ?>">
            <input type="text" class="form-control mb-3" name="nombretd" placeholder="Nombres" value="<?php echo $row['nombretd']  ?>">
            <input type="text" class="form-control mb-3" name="apellidotd" placeholder="Apellidos" value="<?php echo $row['apellidotd']  ?>">

            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
        </form>

    </div>
</body>

</html>
<?php
include("layouts/conexion.php");
$con = $conexion;

$numeroDocumento = trim($_GET['id']);

$sql = "SELECT * FROM tipodoc WHERE numeroDocumento='$numeroDocumento'";
$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query);
?>