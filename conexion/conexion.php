<?php $host="localhost";
$user="root";
$pass="";
$db="2111145_prueba";
$connect= new mysqli($host,$user,$pass,$db) or die ("error" .
mysqli_errno($connect)); if (!mysqli_set_charset($connect, "utf8")) {
    printf("Error cargando el conjunto de caracteres utf8: %s\n",
    mysqli_error($connect)); exit(); }
    ?>
