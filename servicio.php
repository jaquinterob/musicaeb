<?php
include("conexion/conexion.php");
include('librerias/lib/nusoap.php');
$servicio = new soap_server();
$ns = "urn:miserviciowsdl";
$servicio->configureWSDL("MiPrimerServicioWeb",$ns);
$servicio->schemaTargetNamespace = $ns;
$servicio->register("MiFuncion", array('num1' => 'xsd:integer', 'num2' => 'xsd:integer'), array('return' => 'xsd:string'), $ns );
function MiFuncion($num1, $num2){
  global $connect;
  $respuesta="";
  $sql="SELECT * FROM `barrios_llamamientos`";
  $res=$connect->query($sql);
  while ($row=$res->fetch_assoc()) {
    $respuesta.=$row['nombre_miembro_obispado'].'|';
  }
  return $respuesta;
}
$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
$servicio->service(file_get_contents("php://input"));
$connect->close();
?>
