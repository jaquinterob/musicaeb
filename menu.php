<?php
if (isset( $_GET["nombre"])) {
  $gestor= $_GET["nombre"];
}else{
  $gestor='Invitado';
}
if (isset($_GET["llamamiento"])) {
  $llamamiento= $_GET["llamamiento"];
}else{
  $llamamiento= 'ninguno';
}


$host= $_SERVER["HTTP_HOST"];
$url= $_SERVER["REQUEST_URI"];
$completo= "http://" . $host . $url;

 ?>
<nav>
  <div class="nav-wrapper green">
    <a href="#!"  class="brand-logo center-align">MusicaEB</a>
    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    <ul class="right hide-on-med-and-down">
      <li><a href=<?php $completo  ?>>Inicio</a></li>
      <li><a onclick="menu(-1)">Estaca</a></li>
      <li><a onclick="menu(1)">Asturias</a></li>
      <li><a onclick="menu(2)">Belen</a></li>
      <li><a onclick="menu(3)">Buenos Aires</a></li>
      <li><a onclick="menu(4)">Envigado</a></li>
      <li><a onclick="menu(5)">Floresta</a></li>
      <li><a onclick="menu(6)">Guayabal</a></li>
      <li><a onclick="menu(7)">Robledo</a></li>
      <li><a href="gestiones.php">Gestiones</a></li>
      <li><a style="color:#cbd0c2" href="index.php">Salir</a></li>
    </ul>
  </div>
</nav>

<ul class="sidenav" id="mobile-demo">
  <li><div class="user-view">
      <div class="background">
        <img src="img/bannerapp.png">
      </div>
      <a href="#user"><img class="circle" src="img/clave.png"></a>
      <a href="#name"><span class="white-text name">Usuario actual:&nbsp; <em><?php echo $gestor; ?></em></span></a>
      <a href="#email"><span  class="white-text email"><?php echo $llamamiento; ?></span></a>
    </div></li>
  <li><a href=<?php $completo  ?>><i class="material-icons">home</i>Inicio</a></li>
  <li><a onclick="menu(-1)"  ><i class="material-icons">account_balance</i>Estaca</a></li>
  <li><a onclick="menu(1)" ><i class="material-icons">near_me</i>Asturias</a></li>
  <li><a onclick="menu(2)" ><i class="material-icons">near_me</i>Belen</a></li>
  <li><a onclick="menu(3)" ><i class="material-icons">near_me</i>Buenos Aires</a></li>
  <li><a onclick="menu(4)" ><i class="material-icons">near_me</i>Envigado</a></li>
  <li><a onclick="menu(5)" ><i class="material-icons">near_me</i>Floresta</a></li>
  <li><a onclick="menu(6)" ><i class="material-icons">near_me</i>Guayabal</a></li>
  <li><a onclick="menu(7)" ><i class="material-icons">near_me</i>Robledo</a></li>
  <li><a href="gestiones.php" ><i class="material-icons">work</i>Gestiones</a></li>
  <li><a href="index.php" ><i class="material-icons">exit_to_app</i>Salir</a></li>
</ul>
