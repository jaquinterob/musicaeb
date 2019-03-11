<?php
include("../conexion/conexion.php");
date_default_timezone_set('America/Bogota');
foreach($_POST as $nombre_campo => $valor){
  $asignacion = "\$" . $nombre_campo . "='" . $valor . "';";
  eval($asignacion);
}

$sql="SELECT * FROM colores WHERE activo='1';";
$res=$connect->query($sql);
$row=$res->fetch_assoc();
$color=$row['color'];
$color_html=$row['color_html'];

if(isset($chart_llamamientos)){
  $sql="SELECT * FROM `barrios_llamamientos`";
  $res=$connect->query($sql);
  if (mysqli_num_rows($res)>0) {
    while($row = mysqli_fetch_assoc($res)) $array[] = $row;

    $ast1=$array[0]['miembro_obispado']+$array[0]['presidente']+$array[0]['director']+$array[0]['pianista']+$array[0]['director_coro']+$array[0]['pianista_coro'];
    $bel=$array[1]['miembro_obispado']+$array[1]['presidente']+$array[1]['director']+$array[1]['pianista']+$array[1]['director_coro']+$array[1]['pianista_coro'];
    $bue=$array[2]['miembro_obispado']+$array[2]['presidente']+$array[2]['director']+$array[2]['pianista']+$array[2]['director_coro']+$array[2]['pianista_coro'];
    $env=$array[3]['miembro_obispado']+$array[3]['presidente']+$array[3]['director']+$array[3]['pianista']+$array[3]['director_coro']+$array[3]['pianista_coro'];
    $flo=$array[4]['miembro_obispado']+$array[4]['presidente']+$array[4]['director']+$array[4]['pianista']+$array[4]['director_coro']+$array[4]['pianista_coro'];
    $gua=$array[5]['miembro_obispado']+$array[5]['presidente']+$array[5]['director']+$array[5]['pianista']+$array[5]['director_coro']+$array[5]['pianista_coro'];
    $rob=$array[6]['miembro_obispado']+$array[6]['presidente']+$array[6]['director']+$array[6]['pianista']+$array[6]['director_coro']+$array[6]['pianista_coro'];
    $ast2=$array[7]['miembro_obispado']+$array[7]['presidente']+$array[7]['director']+$array[7]['pianista']+$array[7]['director_coro']+$array[7]['pianista_coro'];
    echo $ast1+$ast2+$bel+$bue+$env+$flo+$gua+$rob;
  }
}

if (isset($llamamientos)) {
  $sql="SELECT * FROM `barrios_llamamientos`";
  $res=$connect->query($sql);
  if (mysqli_num_rows($res)>0) {
    while($row = mysqli_fetch_assoc($res)) $array[] = $row;
    $ast1=$array[0]['miembro_obispado']+$array[0]['presidente']+$array[0]['director']+$array[0]['pianista']+$array[0]['director_coro']+$array[0]['pianista_coro'];
    $bel=$array[1]['miembro_obispado']+$array[1]['presidente']+$array[1]['director']+$array[1]['pianista']+$array[1]['director_coro']+$array[1]['pianista_coro'];
    $bue=$array[2]['miembro_obispado']+$array[2]['presidente']+$array[2]['director']+$array[2]['pianista']+$array[2]['director_coro']+$array[2]['pianista_coro'];
    $env=$array[3]['miembro_obispado']+$array[3]['presidente']+$array[3]['director']+$array[3]['pianista']+$array[3]['director_coro']+$array[3]['pianista_coro'];
    $flo=$array[4]['miembro_obispado']+$array[4]['presidente']+$array[4]['director']+$array[4]['pianista']+$array[4]['director_coro']+$array[4]['pianista_coro'];
    $gua=$array[5]['miembro_obispado']+$array[5]['presidente']+$array[5]['director']+$array[5]['pianista']+$array[5]['director_coro']+$array[5]['pianista_coro'];
    $rob=$array[6]['miembro_obispado']+$array[6]['presidente']+$array[6]['director']+$array[6]['pianista']+$array[6]['director_coro']+$array[6]['pianista_coro'];
    $ast2=$array[7]['miembro_obispado']+$array[7]['presidente']+$array[7]['director']+$array[7]['pianista']+$array[7]['director_coro']+$array[7]['pianista_coro'];
    echo '<tbody>
    <tr>
    <td>Asturias I</td>
    <td>'.$ast1.'/6</td>
    <td>'.seleccionar_icono_llamamiento($ast).'</i></td>
    </tr>
    <tr>
    <td>Asturias II</td>
    <td>'.$ast2.'/6</td>
    <td>'.seleccionar_icono_llamamiento($ast).'</i></td>
    </tr>
    <tr>
    <td>Belén</td>
    <td>'.$bel.'/6</td>
    <td>'.seleccionar_icono_llamamiento($bel).'</i></td>    </tr>
    <tr>
    <td>Buenos Aires</td>
    <td>'.$bue.'/6</td>
    <td>'.seleccionar_icono_llamamiento($bue).'</i></td>    </tr>
    <tr>
    <td>Envigado</td>
    <td>'.$env.'/6</td>
    <td>'.seleccionar_icono_llamamiento($env).'</i></td>    </tr>
    <tr>
    <td>Floresta</td>
    <td>'.$flo.'/6</td>
    <td>'.seleccionar_icono_llamamiento($flo).'</i></td>    </tr>
    <tr>
    <td>Guayabal</td>
    <td>'.$gua.'/6</td>
    <td>'.seleccionar_icono_llamamiento($gua).'</i></td>    </tr>
    <tr>
    <td>Robledo</td>
    <td>'.$rob.'/6</td>
    <td>'.seleccionar_icono_llamamiento($rob).'</i></td>    </tr>
    </tbody>';
  }
}

if (isset($coros)) {
  $yo=null;
  $sql="SELECT * FROM `barrios_llamamientos`";
  $res=$connect->query($sql);
  if (mysqli_num_rows($res)>0) {

    while($row = mysqli_fetch_assoc($res)) $array[] = $row;
    $yo=$array;

    echo '          <tbody >
    <tr>
    <td>Asturias I</td>
    <td>'.seleccionar_icono_coro($yo[0]['coro_activo']).'</i></td>
    </tr>
    <tr>
    <td>Asturias II</td>
    <td>'.seleccionar_icono_coro($yo[7]['coro_activo']).'</i></td>
    </tr>
    <tr>
    <td>Belén</td>
    <td>'.seleccionar_icono_coro($yo[1]['coro_activo']).'</i></td>
    </tr>
    <tr>
    <td>Buenos Aires</td>
    <td>'.seleccionar_icono_coro($yo[2]['coro_activo']).'</i></td>
    </tr>
    <tr>
    <td>Envigado</td>
    <td>'.seleccionar_icono_coro($yo[3]['coro_activo']).'</i></td>
    </tr>
    <tr>
    <td>Floresta</td>
    <td>'.seleccionar_icono_coro($yo[4]['coro_activo']).'</i></td>
    </tr>
    <tr>
    <td>Guayabal</td>
    <td>'.seleccionar_icono_coro($yo[5]['coro_activo']).'</i></td>
    </tr>
    <tr>
    <td>Robledo</td>
    <td>'.seleccionar_icono_coro($yo[6]['coro_activo']).'</i></td>
    </tr>
    </tbody>';
  }
}
if (isset($carga_inicial_curso_direccion)) {
  $yo=null;
  $sql="SELECT * FROM `barrios_llamamientos`";
  $res=$connect->query($sql);
  if (mysqli_num_rows($res)>0) {

    while($row = mysqli_fetch_assoc($res)) $array[] = $row;
    $yo=$array;

    echo '          <tbody >
    <tr>
    <td>Asturias I</td>
    <td>'.seleccionar_icono_coro($yo[0]['curso_direccion_activo']).'</i></td>
    </tr>
    <tr>
    <td>Asturias II</td>
    <td>'.seleccionar_icono_coro($yo[7]['curso_direccion_activo']).'</i></td>
    </tr>
    <tr>
    <td>Belén</td>
    <td>'.seleccionar_icono_coro($yo[1]['curso_direccion_activo']).'</i></td>
    </tr>
    <tr>
    <td>Buenos Aires</td>
    <td>'.seleccionar_icono_coro($yo[2]['curso_direccion_activo']).'</i></td>
    </tr>
    <tr>
    <td>Envigado</td>
    <td>'.seleccionar_icono_coro($yo[3]['curso_direccion_activo']).'</i></td>
    </tr>
    <tr>
    <td>Floresta</td>
    <td>'.seleccionar_icono_coro($yo[4]['curso_direccion_activo']).'</i></td>
    </tr>
    <tr>
    <td>Guayabal</td>
    <td>'.seleccionar_icono_coro($yo[5]['curso_direccion_activo']).'</i></td>
    </tr>
    <tr>
    <td>Robledo</td>
    <td>'.seleccionar_icono_coro($yo[6]['curso_direccion_activo']).'</i></td>
    </tr>
    </tbody>';
  }
}
if (isset($carga_inicial_curso_acompañamiento)) {
  $yo=null;
  $sql="SELECT * FROM `barrios_llamamientos`";
  $res=$connect->query($sql);
  if (mysqli_num_rows($res)>0) {

    while($row = mysqli_fetch_assoc($res)) $array[] = $row;
    $yo=$array;

    echo '          <tbody >
    <tr>
    <td>Asturias I</td>
    <td>'.seleccionar_icono_coro($yo[0]['curso_acom_activo']).'</i></td>
    </tr>
    <tr>
    <td>Asturias II</td>
    <td>'.seleccionar_icono_coro($yo[7]['curso_acom_activo']).'</i></td>
    </tr>
    <tr>
    <td>Belén</td>
    <td>'.seleccionar_icono_coro($yo[1]['curso_acom_activo']).'</i></td>
    </tr>
    <tr>
    <td>Buenos Aires</td>
    <td>'.seleccionar_icono_coro($yo[2]['curso_acom_activo']).'</i></td>
    </tr>
    <tr>
    <td>Envigado</td>
    <td>'.seleccionar_icono_coro($yo[3]['curso_acom_activo']).'</i></td>
    </tr>
    <tr>
    <td>Floresta</td>
    <td>'.seleccionar_icono_coro($yo[4]['curso_acom_activo']).'</i></td>
    </tr>
    <tr>
    <td>Guayabal</td>
    <td>'.seleccionar_icono_coro($yo[5]['curso_acom_activo']).'</i></td>
    </tr>
    <tr>
    <td>Robledo</td>
    <td>'.seleccionar_icono_coro($yo[6]['curso_acom_activo']).'</i></td>
    </tr>
    </tbody>';
  }
}

if (isset($chart1)) {
  $v=0;
  $c=0;
  $sql="SELECT * FROM `barrios_llamamientos`";
  $res=$connect->query($sql);
  if (mysqli_num_rows($res)>0) {
    while ($registro=mysqli_fetch_assoc($res)) {
      if ($registro['coro_activo']==1) {
        $v++;
      }
      $c++;
    }
    echo $v;
  }
}
if (isset($chart_general_curso_direccion)) {
  $v=0;
  $c=0;
  $sql="SELECT * FROM `barrios_llamamientos`";
  $res=$connect->query($sql);
  if (mysqli_num_rows($res)>0) {
    while ($registro=mysqli_fetch_assoc($res)) {
      if ($registro['curso_direccion_activo']==1) {
        $v++;
      }
      $c++;
    }
    echo $v;
  }
}
if (isset($chart_general_curso_acom)) {
  $v=0;
  $c=0;
  $sql="SELECT * FROM `barrios_llamamientos`";
  $res=$connect->query($sql);
  if (mysqli_num_rows($res)>0) {
    while ($registro=mysqli_fetch_assoc($res)) {
      if ($registro['curso_acom_activo']==1) {
        $v++;
      }
      $c++;
    }
    echo $v;
  }
}

if (isset($menu)) {
  if ($menu=='-2') {
    $sql="SELECT * FROM `estaca_llamamientos`";
    $res=$connect->query($sql);
    if (mysqli_num_rows($res)>0) {
      while($row = mysqli_fetch_assoc($res)) $array[] = $row;
      $con=$array[0]['miembro_presidencia']+$array[0]['asesor']+$array[0]['presidente']+$array[0]['especialista'];
      echo card_estaca($array[0]['miembro_presidencia'],'Miembro Pcia Estaca','miembro_presidencia',$array[0]['nombre_miembro_presidencia'],$array[0]['cel_miembro_presidencia'],$array[0]['estado_miembro_presidencia'],$array[0]['gestion_miembro_presidencia'],$array[0]['fecha_gestion_miembro_presidencia']).
      card_estaca($array[0]['asesor'],'Asesor de Música','asesor',$array[0]['nombre_asesor'],$array[0]['cel_asesor'],$array[0]['estado_asesor'],$array[0]['gestion_asesor'],$array[0]['fecha_gestion_asesor']).
      card_estaca($array[0]['presidente'],'Presidente de Música','presidente',$array[0]['nombre_presidente'],$array[0]['cel_presidente'],$array[0]['estado_presidente'],$array[0]['gestion_presidente'],$array[0]['fecha_gestion_presidente']).
      card_estaca($array[0]['especialista'],'Especialista de Música','especialista',$array[0]['nombre_especialista'],$array[0]['cel_especialista'],$array[0]['estado_especialista'],$array[0]['gestion_especialista'],$array[0]['fecha_gestion_especialista']).
      '  <div class="col s12 m6 l3">
      <div class="card ">

      <div style="margin:20px" id="donutchart3" style="width: 10px; height: 19px;"></div>
      </div>
      </div>
      </div>|'.$con.'|3';
    }
  }else{
    $sql="SELECT * FROM `barrios_llamamientos`";
    $res=$connect->query($sql);
    if (mysqli_num_rows($res)>0) {

      while($row = mysqli_fetch_assoc($res)) $array[] = $row;
      $con=$array[$menu]['miembro_obispado']+$array[$menu]['presidente']+$array[$menu]['director']+$array[$menu]['pianista']+$array[$menu]['director_coro']+$array[$menu]['pianista_coro'];
      echo card($array[$menu]['miembro_obispado'],'Miembro Obispado','miembro_obispado',$menu,$array[$menu]['nombre_miembro_obispado'],$array[$menu]['cel_miembro_obispado'],$array[$menu]['estado_miembro_obispado'],$array[$menu]['gestion_miembro_obispado'],$array[$menu]['fecha_gestion_miembro_obispado']).
      card($array[$menu]['presidente'],'Presidente de Música','presidente',$menu,$array[$menu]['nombre_presidente'],$array[$menu]['cel_presidente'],$array[$menu]['estado_presidente'],$array[$menu]['gestion_presidente'],$array[$menu]['fecha_gestion_presidente']).
      card($array[$menu]['director'],'Director de Música','director',$menu,$array[$menu]['nombre_director'],$array[$menu]['cel_director'],$array[$menu]['estado_director'],$array[$menu]['gestion_director'],$array[$menu]['fecha_gestion_director']).
      card($array[$menu]['pianista'],'Pianista','pianista',$menu,$array[$menu]['nombre_pianista'],$array[$menu]['cel_pianista'],$array[$menu]['estado_pianista'],$array[$menu]['gestion_pianista'],$array[$menu]['fecha_gestion_pianista']).
      card($array[$menu]['director_coro'],'Director del Coro','director_coro',$menu,$array[$menu]['nombre_director_coro'],$array[$menu]['cel_director_coro'],$array[$menu]['estado_director_coro'],$array[$menu]['gestion_director_coro'],$array[$menu]['fecha_gestion_director_coro']).
      card($array[$menu]['pianista_coro'],'Pianista del coro','pianista_coro',$menu,$array[$menu]['nombre_pianista_coro'],$array[$menu]['cel_pianista_coro'],$array[$menu]['estado_pianista_coro'],$array[$menu]['gestion_pianista_coro'],$array[$menu]['fecha_gestion_pianista_coro']).
      card_coro($array[$menu]['barrio'],$menu,$array[$menu]['coro_activo'],$array[$menu]['gestion_coro'],$array[$menu]['fecha_gestion_coro']).
      card_curso_direccion($array[$menu]['barrio'],$menu,$array[$menu]['curso_direccion_activo'],$array[$menu]['gestion_curso_direccion'],$array[$menu]['fecha_gestion_curso_direccion']).
      card_curso_acomp($array[$menu]['barrio'],$menu,$array[$menu]['curso_acom_activo'],$array[$menu]['gestion_curso_acom'],$array[$menu]['fecha_gestion_curso_acom']).'|'.$con.'|2';
    }
  }
}

if (isset($barrio_coro)) {
  $v='coro_';
  $sql="UPDATE barrios_llamamientos SET   ".$v."activo='" . $nuevo_valor . "',gestion_coro='" . $nota_gestion. "',fecha_gestion_coro=DATE_SUB(now(), INTERVAL 5 HOUR) WHERE id='" .$barrio_coro. "'";
  if ($connect->query($sql)) {
    if (guardar_log('Coro',$culpable,$nota_gestion,nombrar_barrio($barrio_coro))) {
      echo '1|Se actualiza el coro satisfactoriamente';
    } else{
      echo '1|Se actualiza el coro satisfactoriamente, pero no se registra en el log =(';
    }
  }else{
    echo '0|No se pudo actualizar';
  }
}
if (isset($barrio_curso_direccion)) {
  $v='curso_direccion_';
  $sql="UPDATE barrios_llamamientos SET   ".$v."activo='" . $nuevo_valor . "',gestion_curso_direccion='" . $nota_gestion. "',	fecha_gestion_curso_direccion=DATE_SUB(now(), INTERVAL 5 HOUR) WHERE id='" .$barrio_curso_direccion. "'";
  if ($connect->query($sql)) {
    if (guardar_log('Curso de Dirección',$culpable,$nota_gestion,nombrar_barrio($barrio_curso_direccion))) {
      echo '1|Se actualiza item satisfactoriamente';
    } else{
      echo '1|Se actualiza item satisfactoriamente, pero no se registra en el log =(';
    }
  }else{
    echo '0|No se pudo actualizar';
  }
}
if (isset($barrio_curso_acom)) {
  $v='curso_acom_';
  $sql="UPDATE barrios_llamamientos SET   ".$v."activo='" . $nuevo_valor . "',gestion_curso_acom='" . $nota_gestion. "',fecha_gestion_curso_acom=DATE_SUB(now(), INTERVAL 5 HOUR) WHERE id='" .$barrio_curso_acom. "'";
  if ($connect->query($sql)) {
    if (guardar_log('Curso de Acompañamiento',$culpable,$nota_gestion,nombrar_barrio($barrio_curso_acom))) {
      echo '1|Se actualiza item satisfactoriamente';
    } else{
      echo '1|Se actualiza item satisfactoriamente, pero no se registra en el log =(';
    }
  }else{
    echo '0|No se pudo actualizar';
  }
}

if (isset($consultar_estaca)) {
  $sql="SELECT * FROM `estaca_llamamientos`";
  $res=$connect->query($sql);
  if (mysqli_num_rows($res)>0) {
    $estaca=mysqli_fetch_assoc($res);
    echo  $estaca['nombre_'.$consultar_estaca].'|'.$estaca['cel_'.$consultar_estaca].'|'.$estaca['gestion_'.$consultar_estaca].'|'.$estaca['estado_'.$consultar_estaca];
  }
}

if (isset($consultar_barrio)) {
  $sql="SELECT * FROM `barrios_llamamientos`";
  $res=$connect->query($sql);
  if (mysqli_num_rows($res)>0){
    while($row = mysqli_fetch_assoc($res)) $array[] = $row;
    echo $array[$consultar_barrio]['nombre_'.$llamamiento].'|'.$array[$consultar_barrio]['cel_'.$llamamiento].'|'.$array[$consultar_barrio]['gestion_'.$llamamiento].'|'.$array[$consultar_barrio]['estado_'.$llamamiento];
  }
}

if(isset($consultar_coro_barrio)){
  $sql="SELECT * FROM `barrios_llamamientos`";
  $res=$connect->query($sql);
  if (mysqli_num_rows($res)>0) {
    while($row = mysqli_fetch_assoc($res)) $array[] = $row;
    echo $array[$consultar_coro_barrio]['coro_activo'].'|'.$array[$consultar_coro_barrio]['gestion_coro'];
  }
}
if(isset($consultar_curso_direccion)){
  $sql="SELECT * FROM `barrios_llamamientos`";
  $res=$connect->query($sql);
  if (mysqli_num_rows($res)>0) {
    while($row = mysqli_fetch_assoc($res)) $array[] = $row;
    echo $array[$consultar_curso_direccion]['curso_direccion_activo'].'|'.$array[$consultar_curso_direccion]['gestion_curso_direccion'];
  }
}
if(isset($consultar_curso_acomp)){
  $sql="SELECT * FROM `barrios_llamamientos`";
  $res=$connect->query($sql);
  if (mysqli_num_rows($res)>0) {
    while($row = mysqli_fetch_assoc($res)) $array[] = $row;
    echo $array[$consultar_curso_acomp]['curso_acom_activo'].'|'.$array[$consultar_curso_acomp]['gestion_curso_acom'];
  }
}

if (isset($token_llamamiento)) {
  $sql="UPDATE barrios_llamamientos SET ".$llamamiento."='" .$activo. "',nombre_".$llamamiento."='" .$nombre. "',cel_".$llamamiento."='" . $celular. "',estado_".$llamamiento."='" . $estado. "',gestion_".$llamamiento."='" .$nota_gestion. "',fecha_gestion_".$llamamiento."=DATE_SUB(now(), INTERVAL 5 HOUR)
  WHERE id='" .$indice_barrio."'";
  if ($connect->query($sql)) {
    if (guardar_log($llamamiento,$culpable,$nota_gestion,nombrar_barrio($indice_barrio))) {
      echo '1|Se actualiza llamamiento satisfactoriamente';
    }else{
      echo '1|Se actualiza llamamiento satisfactoriamente, pero no se registra en el log =(';
    }
  }else{
    echo '0|No se pudo actualizar';
  }
}

if (isset($token_estaca)) {
  $sql="UPDATE estaca_llamamientos SET ".$llamamiento."='" .$activo. "',nombre_".$llamamiento."='" .$nombre. "',cel_".$llamamiento."='" . $celular. "',estado_".$llamamiento."='" . $estado. "',gestion_".$llamamiento."='" .$nota_gestion. "',fecha_gestion_".$llamamiento."=DATE_SUB(now(), INTERVAL 5 HOUR)";
  if ($connect->query($sql)) {
    if (guardar_log($llamamiento,$culpable,$nota_gestion,'Estaca')) {
      echo '1|Se actualiza llamamiento de estaca satisfactoriamente';
    } else {
      echo '1|Se actualiza llamamiento de estaca satisfactoriamente, pero no se registra en el log';
    }
  }else{
    echo '0|No se pudo actualizar el llamamiento';
  }
}

if (isset($usuario)) {
  $sql="SELECT * FROM `login` WHERE usuario='" . $usuario . "' AND password='" . $contrasena . "'";
  $res=$connect->query($sql);
  if (mysqli_num_rows($res)>0) {
    $registro=mysqli_fetch_assoc($res);
    echo '1|'.$registro['llamamiento'];
  }else{
    echo '0|Usuario  o contraseña errados';
  }
}

if (isset($ingreso)) {
  $sql="INSERT INTO logs_ingresos (usuario,fecha)
  VALUES ('".$gestor."',DATE_SUB(now(), INTERVAL 5 HOUR));";

if($connect->query($sql)){
    echo 'Se guarda correctamente en logs_ingresos';
  } else {
    echo 'No se guarda en logs_ingresos';
  }
}

if (isset($token_color)) {
  echo $color_html;
}

function seleccionar_icono_coro($h){
  global $color_html;
  if($h==1){
    return '<i style="color:'.$color_html.'" class="material-icons icon-green">sentiment_very_satisfied';
  }else{
    return '<i class="material-icons icon-red">sentiment_very_dissatisfied';
  }
}

function seleccionar_icono_llamamiento($h){
  global $color_html;
  if($h>3 && $h<6){
    return '<i class="material-icons icon-grey">sentiment_satisfied';
  }
  if ($h<4 && $h>0) {
    return '<i class="material-icons icon-grey">sentiment_neutral';
  }
  if ($h==0) {
    return '<i class="material-icons icon-red">sentiment_very_dissatisfied';
  }
  if ($h==6) {
    return '<i style="color:'.$color_html.'" class="material-icons ">sentiment_very_satisfied';
  }
}

function card($tipo,$titulo,$llamamiento,$indice_barrio,$nombre,$celular,$estado,$ultima_gestion,$fecha_gestion){
global $color;
global $color_html;
  if ($tipo=='1') {
    return '<div class="col s12 m6 l3">
    <div class="card ">
    <div class="card-content '.$color.'-text">
    <span class="card-title">'.$titulo.' <i style="color:'.$color_html.'" class="material-icons right">check</i></a></span>
    <table class="highlight" >
    <tbody>
    <tr>
    <td  >Nombre:</td>
    <td  >&nbsp;&nbsp;'.$nombre.'</td>
    </tr>
    <tr>
    <td  >Celular:</td>
    <td  >&nbsp;&nbsp;'.$celular.'</td>
    </tr>
    <tr>
    <td  >Estado:</td>
    <td  >&nbsp;&nbsp;'.$estado.'</td>
    </tr>
    </tbody>
    </table>
    </div>
    <a onclick="abrir_modal1(1,\''.$titulo.'\',\''.$indice_barrio.'\',\''.$llamamiento.'\')" class=" btn-floating halfway-fab btn-small waves-effect waves-light '.$color.'"><i class="material-icons">edit</i></a>
    <a style="margin-right:12%" class=" tooltipped btn-floating halfway-fab btn-small waves-effect waves-light grey " data-position="bottom" data-tooltip="Gestión:&nbsp;\''.$ultima_gestion.'\' <br>'.$fecha_gestion.'"><i class="material-icons">remove_red_eye</i></a>
    </div>
    </div>';

  }else{
    return '<div class="col s12 m6 l3">
    <div class="card">
    <div class="card-content grey-text">
    <span class="card-title">'.$titulo.' <i class="material-icons right icon-amarillo">warning</i></a></span>
    <table class="highlight" >
    <tbody>
    <tr>
    <td  >&nbsp;&nbsp; </td>
    <td  >&nbsp;&nbsp; </td>
    </tr>
    <tr>
    <td style="text-align:center;color:#e8b0b0" colspan="2" ><i class="material-icons  icon-red">sentiment_very_dissatisfied</i></td>
    </tr>
    <tr>
    <td  >&nbsp;&nbsp; </td>
    <td  >&nbsp;&nbsp;</td>
    </tr>
    </tbody>
    </table>
    </div>
    <a onclick="abrir_modal1(1,\''.$titulo.'\',\''.$indice_barrio.'\',\''.$llamamiento.'\')" class="pulse btn-floating halfway-fab btn-small waves-effect waves-light '.$color.'"><i class="material-icons">edit</i></a>
    <a style="margin-right:12%" class=" tooltipped btn-floating halfway-fab btn-small waves-effect waves-light grey " data-position="bottom" data-tooltip="Gestión: '.$ultima_gestion.' <br>'.$fecha_gestion.'"><i class="material-icons">remove_red_eye</i></a>
    </div>
    </div>';
  }
}

function card_coro($nombre_barrio,$barrio,$tipo, $ultima_gestion,$fecha_gestion){
  global $color;
  global $color_html;
  if ($tipo=='1') {
    return '
    <div class="col s12 m6 l3">
    <div class="card ">
    <div style="margin:20px" id="donutchart2" style="width: 10px; height: 19px;"></div>
    </div>
    </div>
    </div>
    <div class="col s12 m6 l3">
    <div class="card grey lighten-5">
    <div class="card-content grey-text">
    <span class="card-title">CORO DE BARRIO <i style="color:'.$color_html.'"class="material-icons right">check</i></a></span>
    <table class="highlight" >
    <tbody>
    <tr>
    <td  >&nbsp;&nbsp; </td>
    <td  >&nbsp;&nbsp; </td>
    </tr>
    <tr>
    <td style="text-align:center;color:#e8b0b0" colspan="2" ><i style="color:'.$color_html.'" class="material-icons">sentiment_very_satisfied</i></td>
    </tr>
    <tr>
    <td  >&nbsp;&nbsp; </td>
    <td  >&nbsp;&nbsp;</td>
    </tr>
    </tbody>
    </table>
    </div>
    <a  onclick="abrir_modal2(\''.$nombre_barrio.'\',\'Coro\',\''.$barrio.'\')" class=" btn-floating halfway-fab btn-small waves-effect waves-light '.$color.'"><i class="material-icons">edit</i></a>
    <a style="margin-right:12%" class="  tooltipped btn-floating halfway-fab btn-small waves-effect waves-light grey " data-position="bottom" data-tooltip="Gestión:&nbsp;\''.$ultima_gestion.'\'<br>'.$fecha_gestion.'"><i class="material-icons">remove_red_eye</i></a>
    </div>
    </div>';
  }else{
    return '
    <div class="col s12 m6 l3">
    <div class="card ">
    <div style="margin:20px" id="donutchart2" style="width: 10px; height: 19px;"></div>
    </div>
    </div>
    </div>
    <div class="col s12 m6 l3">
    <div class="card grey lighten-5">
    <div class="card-content grey-text">
    <span class="card-title">CORO DE BARRIO <i class="material-icons right icon-red">warning</i></a></span>
    <table class="highlight" >
    <tbody>
    <tr>
    <td  >&nbsp;&nbsp; </td>
    <td  >&nbsp;&nbsp; </td>
    </tr>
    <tr>
    <td style="text-align:center;color:#e8b0b0" colspan="2" ><i class="material-icons  icon-red">sentiment_very_dissatisfied</i></td>
    </tr>
    <tr>
    <td  >&nbsp;&nbsp; </td>
    <td  >&nbsp;&nbsp;</td>
    </tr>
    </tbody>
    </table>
    </div>
    <a onclick="abrir_modal2(\''.$nombre_barrio.'\',\'Coro\',\''.$barrio.'\')" class="  btn-floating halfway-fab btn-small waves-effect waves-light '.$color.'"><i class="material-icons">edit</i></a>
    <a style="margin-right:12%" class="  tooltipped btn-floating halfway-fab btn-small waves-effect waves-light grey " data-position="bottom" data-tooltip="Gestión:&nbsp;\''.$ultima_gestion.'\'<br>'.$fecha_gestion.'"><i class="material-icons">remove_red_eye</i></a>
    </div>
    </div>
    ';
  }
}
function card_curso_direccion($nombre_barrio,$barrio,$tipo, $ultima_gestion,$fecha_gestion){
  global $color;
  global $color_html;
  if ($tipo=='1') {
    return '
    <div class="col s12 m6 l3">
    <div class="card ">
    <div style="margin:20px" id="donutchart2" style="width: 10px; height: 19px;"></div>
    </div>
    </div>
    </div>
    <div class="col s12 m6 l3">
    <div class="card grey lighten-5">
    <div class="card-content grey-text">
    <span class="card-title">Curso de Direccion Musical <i style="color:'.$color_html.'"class="material-icons right">check</i></a></span>
    <table class="highlight" >
    <tbody>
    <tr>
    <td  >&nbsp;&nbsp; </td>
    <td  >&nbsp;&nbsp; </td>
    </tr>
    <tr>
    <td style="text-align:center;color:#e8b0b0" colspan="2" ><i style="color:'.$color_html.'" class="material-icons">sentiment_very_satisfied</i></td>
    </tr>
    <tr>
    <td  >&nbsp;&nbsp; </td>
    <td  >&nbsp;&nbsp;</td>
    </tr>
    </tbody>
    </table>
    </div>
    <a  onclick="abrir_modal2(\''.$nombre_barrio.'\',\'Curso Dirección\',\''.$barrio.'\')" class=" btn-floating halfway-fab btn-small waves-effect waves-light '.$color.'"><i class="material-icons">edit</i></a>
    <a style="margin-right:12%" class="  tooltipped btn-floating halfway-fab btn-small waves-effect waves-light grey " data-position="bottom" data-tooltip="Gestión:&nbsp;\''.$ultima_gestion.'\'<br>'.$fecha_gestion.'"><i class="material-icons">remove_red_eye</i></a>
    </div>
    </div>';
  }else{
    return '
    <div class="col s12 m6 l3">
    <div class="card ">
    <div style="margin:20px" id="donutchart2" style="width: 10px; height: 19px;"></div>
    </div>
    </div>
    </div>
    <div class="col s12 m6 l3">
    <div class="card grey lighten-5">
    <div class="card-content grey-text">
    <span class="card-title">Curso de Dirección Musical <i class="material-icons right icon-red">warning</i></a></span>
    <table class="highlight" >
    <tbody>
    <tr>
    <td  >&nbsp;&nbsp; </td>
    <td  >&nbsp;&nbsp; </td>
    </tr>
    <tr>
    <td style="text-align:center;color:#e8b0b0" colspan="2" ><i class="material-icons  icon-red">sentiment_very_dissatisfied</i></td>
    </tr>
    <tr>
    <td  >&nbsp;&nbsp; </td>
    <td  >&nbsp;&nbsp;</td>
    </tr>
    </tbody>
    </table>
    </div>
    <a onclick="abrir_modal2(\''.$nombre_barrio.'\',\'Curso Dirección\',\''.$barrio.'\')" class="  btn-floating halfway-fab btn-small waves-effect waves-light '.$color.'"><i class="material-icons">edit</i></a>
    <a style="margin-right:12%" class="  tooltipped btn-floating halfway-fab btn-small waves-effect waves-light grey " data-position="bottom" data-tooltip="Gestión:&nbsp;\''.$ultima_gestion.'\'<br>'.$fecha_gestion.'"><i class="material-icons">remove_red_eye</i></a>
    </div>
    </div>
    ';
  }
}
function card_curso_acomp($nombre_barrio,$barrio,$tipo, $ultima_gestion,$fecha_gestion){
  global $color;
  global $color_html;
  if ($tipo=='1') {
    return '
    <div class="col s12 m6 l3">
    <div class="card ">
    <div style="margin:20px" id="donutchart2" style="width: 10px; height: 19px;"></div>
    </div>
    </div>
    </div>
    <div class="col s12 m6 l3">
    <div class="card grey lighten-5">
    <div class="card-content grey-text">
    <span class="card-title">Curso de Direccion Musical <i style="color:'.$color_html.'"class="material-icons right">check</i></a></span>
    <table class="highlight" >
    <tbody>
    <tr>
    <td  >&nbsp;&nbsp; </td>
    <td  >&nbsp;&nbsp; </td>
    </tr>
    <tr>
    <td style="text-align:center;color:#e8b0b0" colspan="2" ><i style="color:'.$color_html.'" class="material-icons">sentiment_very_satisfied</i></td>
    </tr>
    <tr>
    <td  >&nbsp;&nbsp; </td>
    <td  >&nbsp;&nbsp;</td>
    </tr>
    </tbody>
    </table>
    </div>
    <a  onclick="abrir_modal2(\''.$nombre_barrio.'\',\'Curso Acompañamiento\',\''.$barrio.'\')" class=" btn-floating halfway-fab btn-small waves-effect waves-light '.$color.'"><i class="material-icons">edit</i></a>
    <a style="margin-right:12%" class="  tooltipped btn-floating halfway-fab btn-small waves-effect waves-light grey " data-position="bottom" data-tooltip="Gestión:&nbsp;\''.$ultima_gestion.'\'<br>'.$fecha_gestion.'"><i class="material-icons">remove_red_eye</i></a>
    </div>
    </div>';
  }else{
    return '
    <div class="col s12 m6 l3">
    <div class="card ">
    <div style="margin:20px" id="donutchart2" style="width: 10px; height: 19px;"></div>
    </div>
    </div>
    </div>
    <div class="col s12 m6 l3">
    <div class="card grey lighten-5">
    <div class="card-content grey-text">
    <span class="card-title">Curso Acompmáñamiento Musical <i class="material-icons right icon-red">warning</i></a></span>
    <table class="highlight" >
    <tbody>
    <tr>
    <td  >&nbsp;&nbsp; </td>
    <td  >&nbsp;&nbsp; </td>
    </tr>
    <tr>
    <td style="text-align:center;color:#e8b0b0" colspan="2" ><i class="material-icons  icon-red">sentiment_very_dissatisfied</i></td>
    </tr>
    <tr>
    <td  >&nbsp;&nbsp; </td>
    <td  >&nbsp;&nbsp;</td>
    </tr>
    </tbody>
    </table>
    </div>
    <a onclick="abrir_modal2(\''.$nombre_barrio.'\',\'Curso Acompañamiento\',\''.$barrio.'\')" class="  btn-floating halfway-fab btn-small waves-effect waves-light '.$color.'"><i class="material-icons">edit</i></a>
    <a style="margin-right:12%" class="  tooltipped btn-floating halfway-fab btn-small waves-effect waves-light grey " data-position="bottom" data-tooltip="Gestión:&nbsp;\''.$ultima_gestion.'\'<br>'.$fecha_gestion.'"><i class="material-icons">remove_red_eye</i></a>
    </div>
    </div>
    ';
  }
}

function card_estaca($tipo,$titulo,$llamamiento,$nombre,$celular,$estado,$ultima_gestion,$fecha_gestion){
global $color;
global $color_html;
  if ($tipo=='1') {
    return ' <div class="col s12 m6 l3">
    <div class="card ">
    <div class="card-content '.$color.'-text">
    <span class="card-title">'.$titulo.'<i style="color:'.$color_html.'" class="material-icons right">check</i></a></span>
    <table class="highlight" >
    <tbody>
    <tr>
    <td  >Nombre:</td>
    <td  >&nbsp;&nbsp;'.$nombre.'</td>
    </tr>
    <tr>
    <td  >Celular:</td>
    <td  >&nbsp;&nbsp;'.$celular.'</td>
    </tr>
    <tr>
    <td  >Estado:</td>
    <td  >&nbsp;&nbsp;'.$estado.'</td>
    </tr>
    </tbody>
    </table>
    </div>
    <a onclick="abrir_modal1(0,\''.$titulo.'\',\'0\',\''.$llamamiento.'\')" class=" btn-floating halfway-fab btn-small waves-effect waves-light '.$color.'"><i class="material-icons">edit</i></a>
    <a style="margin-right:12%" class=" tooltipped btn-floating halfway-fab btn-small waves-effect waves-light grey " data-position="bottom" data-tooltip="Gestión:&nbsp;\''.$ultima_gestion.'\'<br>'.$fecha_gestion.'"><i class="material-icons">remove_red_eye</i></a>
    </div>
    </div>';
  }else{

    return '<div class="col s12 m6 l3">
    <div class="card">
    <div class="card-content grey-text">
    <span class="card-title">'.$titulo.' <i class="material-icons right icon-amarillo">warning</i></a></span>
    <table class="highlight" >
    <tbody>
    <tr>
    <td  >&nbsp;&nbsp; </td>
    <td  >&nbsp;&nbsp; </td>
    </tr>
    <tr>
    <td style="text-align:center;color:#e8b0b0" colspan="2" ><i class="material-icons  icon-red">sentiment_very_dissatisfied</i></td>
    </tr>
    <tr>
    <td  >&nbsp;&nbsp; </td>
    <td  >&nbsp;&nbsp;</td>
    </tr>
    </tbody>
    </table>
    </div>
    <a onclick="abrir_modal1(0,\''.$titulo.'\',\'0\',\''.$llamamiento.'\')" class="pulse btn-floating halfway-fab btn-small waves-effect waves-light '.$color.'"><i class="material-icons">edit</i></a>
    <a style="margin-right:12%" class=" tooltipped btn-floating halfway-fab btn-small waves-effect waves-light grey " data-position="bottom" data-tooltip="Gestión:&nbsp;\''.$ultima_gestion.'\'<br>'.$fecha_gestion.'"><i class="material-icons">remove_red_eye</i></a>
    </div>
    </div>';

  }
}

function guardar_log($item,$culpable,$nota_gestion,$categoria){
  global $connect;
  $fecha_gestion="DATE_SUB(now(), INTERVAL 5 HOUR)";
  $sql="INSERT INTO log_gestion
  VALUES(null,'" . $item . "','" . $culpable . "','" . $nota_gestion . "',DATE_SUB(now(), INTERVAL 5 HOUR),'" .$categoria. "');";
  if ($connect->query($sql)) {
    return true;
  }else{
    return false;
  }
}

function nombrar_barrio($n){
  switch ($n) {
    case '1':
    return "Asturias I";
    break;
    case '2':
    return "Belén";
    break;
    case '3':
    return "Buenos Aires";
    break;
    case '4':
    return "Envigado";
    break;
    case '5':
    return "Floresta";
    break;
    case '6':
    return "Guayabal";
    break;
    case '7':
    return "Robledo";
    case '8':
    return "Asturias II";
    break;
  }
}

$connect->close();
?>
