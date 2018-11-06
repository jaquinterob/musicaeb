<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <title>Inicio MEB</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link rel="stylesheet" href="css/estilo.css">
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>
  <body>
    <div class="row">
  <div style="margin-top:5%" class="col s12 m6 offset-m3">
    <div style="margin:10%"class=" ">
      <div class="card-content center-align">
        <span style="margin-bottom:5%" class="card-title">Musica Estaca Belen <br> INICIO DE SESION</span>
      <div class="row">

        <div class="input-field col s12">
          <i class="material-icons prefix">person</i>
          <input id="usuario" type="text" class="validate">
          <label for="usuario">Usuario</label>
        </div>
        <div class="input-field col s12">
          <i class="material-icons prefix">lock</i>
          <input id="contrasena" type="password" class="validate">
          <label for="contrasena">Contraseña</label>
        </div>
      </div>
      </div>
      <div class="card-action right-align">
      <a onclick="login()" class="waves-effect waves-light pulse btn-small green">Entrar</a>
      </div>
    </div>
  </div>
</div>

<div class="cargando">
    <div class="preloader-wrapper big active">
        <div class="spinner-layer spinner-green-only">
            <div class="circle-clipper left">
                <div class="circle"></div>
            </div>
            <div class="gap-patch">
                <div class="circle"></div>
            </div>
            <div class="circle-clipper right">
                <div class="circle"></div>
            </div>
        </div>
    </div>
</div>
  </body>
    <script type="text/javascript" src="js/index.js"></script>
</html>
