<?php $host="localhost";
# @Date:   2018-10-14T21:41:21-05:00
# @Last modified time: 2018-10-14T21:49:44-05:00

#comentario de prueba


$user="root";
 $pass="";
  $db="musicaeb";
$connect= new mysqli($host,$user,$pass,$db) or die ("error" .
mysqli_errno($connect)); if (!mysqli_set_charset($connect, "utf8")) {
printf("Error cargando el conjunto de caracteres utf8: %s\n",
mysqli_error($connect)); exit(); } ?>
