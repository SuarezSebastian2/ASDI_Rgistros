<?php
/*function conectar()
{
    $host = "localhost";
    $user = "root";
    $pass = "";
    $bd = "adsi";
    $con = mysqli_connect($host, $user, $pass);
    mysqli_select_db($con, $bd);
    return $con;
}*/

$conexion = mysqli_connect("localhost", "root", "", "adsi");
mysqli_set_charset($conexion, "utf8");
