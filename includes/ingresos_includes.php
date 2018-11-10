<?php
include("../conexion/conexion.php");
date_default_timezone_set('America/Bogota');
foreach($_POST as $nombre_campo => $valor){
  $asignacion = "\$" . $nombre_campo . "='" . $valor . "';";
  eval($asignacion);
}


if (isset($token_gestiones)) {
    $sql="SELECT * FROM logs_ingresos ORDER BY id desc;";
    $res=$connect->query($sql);
    if (mysqli_num_rows($res)>0) {
        while ($registro=mysqli_fetch_assoc($res)) {
            echo '<div class="col s12 m6 l3">

            <div style="margin:10px" class=" center-align">
            <div class="card-content green-text">
            <div class="col s12 grey ">
            <span class=" card-title white-text">Ingreso #'.$registro['id'].'</span>
            </div>
            <table  >
            <tbody style="color:grey">


            <tr>
            <td  >Fecha:</td>
            <td  >'.$registro['fecha'].'</td>
            </tr>

            <tr>
            <td  >Gestor:</td>
            <td  >'.$registro['usuario'].'</td>
            </tr>
            </tbody>
            </table>
            </div>
            </div>
            </div>';
        }
    }else{
        echo '<div style="margin-top:10%" class="center-align grey-text"><em>No se encontraron gestiones</em></div>
                <div class="center-align"> <img class="responsive-img" src="img/gestion.png"></div>';
    }
}

$connect->close();
?>
