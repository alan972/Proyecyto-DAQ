<?php
$local = "localhost";
$user = "root";
$pass = "";
$bd = "bd_daq";

$var = rand(1,100);
$var_temp = rand(1,100);
$var_gas = rand(1,100);
$conexion = mysqli_connect($local,$user,$pass);

mysqli_select_db($conexion,$bd);

?>