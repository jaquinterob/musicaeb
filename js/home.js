/**
* @Date:   2018-10-14T19:59:01-05:00
* @Last modified time: 2018-10-15T19:09:39-05:00
*/
var jq = jQuery.noConflict();
jq(document).ready(function() {
  inicializaciones();
});

function log_ingreso(){
  var datosformulario="ingreso=1&gestor="+jq("#gestor").val();
  jq.ajax({
    url:"includes/home_includes.php",
    type:"POST",
    data:datosformulario,
    error:function(jqXHR,text_status,strError){
      jq(".cargando").hide();
      M.toast({html:'el error es: '+strError, classes:'red'});
    },
    timeout:10000,
    success:function(data){
    console.log(data);
    }
  });
}

function inicializaciones(){
  log_ingreso();
  validar_usuario();
  jq(".card").addClass('hoverable');
  jq("#contenedor_individual").hide();
  jq("#contenedor_individuales_titulo").hide();
  M.AutoInit();
  chart_general();
  chart_general1();
  carga_inicial_coro();
  carga_inicial_llamamientos();
  setTimeout(function () {
    jq(".icon-red").fadeOut('fast').fadeIn('fast').fadeOut('fast').fadeIn('fast').fadeOut('slow').fadeIn('slow').fadeOut('slow').fadeIn('slow');
  },1000);
  // ocultar_todo();
  jq(".cargando").hide();
  bienvenida();
}

function chart_general(){
  jq(".cargando").show();
  var datosformulario="chart_llamamientos=1";
  jq.ajax({
    url:"includes/home_includes.php",
    type:"POST",
    data:datosformulario,
    error:function(jqXHR,text_status,strError){
      jq(".cargando").hide();
      M.toast({html:'Error: '+strError, classes:'red'});
    },
    timeout:10000,
    success:function(data_php){
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['5', 'H'],
          ['Ok',     parseInt(data_php)],
          ['Falta',      (42-parseInt(data_php))]
        ]);
        var options = {
          title: ' Consolidado Llammamientos Estaca Belén',
          pieHole: 0.0,
          slices: [{color: '#4CAF50'},{color: '#beccbf'}]
        };
        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
      jq(".cargando").hide();
    }
  });
}

function chart_general1(){
  jq(".cargando").show();
  var datosformulario="chart1=1";
  jq.ajax({
    url:"includes/home_includes.php",
    type:"POST",
    data:datosformulario,
    error:function(jqXHR,text_status,strError){
      jq(".cargando").hide();
      M.toast({html:'el error es: '+strError, classes:'red'});
    },
    timeout:10000,
    success:function(datad){
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['5', 'H'],
          ['Ok',     parseInt(datad)],
          ['Falta',     7-parseInt(datad)]
        ]);
        var options = {
          title: 'Consolidado coros de Barrio Estaca Belén',
          pieHole: 0.0,
          slices: [{color: '#4CAF50'},{color: '#beccbf'}]
        };
        var chart = new google.visualization.PieChart(document.getElementById('donutchart1'));
        chart.draw(data, options);
      }
      jq(".cargando").hide();
    }
  });
}

function carga_inicial_coro(){
  jq(".cargando").show();
  var datosformulario="coros=1";
  jq.ajax({
    url:"includes/home_includes.php",
    type:"POST",
    data:datosformulario,
    error:function(jqXHR,text_status,strError){
      jq(".cargando").hide();
      M.toast({html:'el error es: '+strError, classes:'red'});
    },
    timeout:10000,
    success:function(data){
      jq("#contenedor_tabla_coros").html(data);
      jq(".cargando").hide();
    }
  });
}

function carga_inicial_llamamientos(){
  jq(".cargando").show();
  var datosformulario="llamamientos=1";
  jq.ajax({
    url:"includes/home_includes.php",
    type:"POST",
    data:datosformulario,
    error:function(jqXHR,text_status,strError){
      jq(".cargando").hide();
      M.toast({html:'el error es: '+strError, classes:'red'});
    },
    timeout:10000,
    success:function(data){
      jq("#contenedor_tabla_llamamientos").html(data);
      jq(".cargando").hide();
    }
  });
}

function menu(item) {
  jq(".cargando").show();
  var datosformulario="menu="+(item-1);
  jq.ajax({
    url:"includes/home_includes.php",
    type:"POST",
    data:datosformulario,
    error:function(jqXHR,text_status,strError){
      jq(".cargando").hide();
      M.toast({html:'el error es: '+strError, classes:'red'});
    },
    timeout:10000,
    success:function(datar){
      datar=datar.split('|');
      setTimeout(function() {
        jq("#contenedor_individual").html(datar[0]);
        jq('.tooltipped').tooltip();


        if (datar[2]=='3') {
          google.charts.load("current", {packages:["corechart"]});
          google.charts.setOnLoadCallback(drawChart);
          function drawChart() {
            var data = google.visualization.arrayToDataTable([
              ['5', 'H'],
              ['ok',     parseInt(datar[1])],
              ['Falta',     4-parseInt(datar[1])]
            ]);
            var options = {
              title: 'Adherencia Llamamientos',
              pieHole: 0.0,
              slices: [{color: '#4CAF50'},{color: '#beccbf'}]
            };
            var chart = new google.visualization.PieChart(document.getElementById('donutchart3'));
            chart.draw(data, options);
          }

        }else{
          google.charts.load("current", {packages:["corechart"]});
          google.charts.setOnLoadCallback(drawChart);
          function drawChart() {
            var data = google.visualization.arrayToDataTable([
              ['5', 'H'],
              ['ok',     parseInt(datar[1])],
              ['Falta',     6-parseInt(datar[1])]
            ]);
            var options = {
              title: 'Adherencia Llamamientos',
              pieHole: 0.0,
              slices: [{color: '#4CAF50'},{color: '#beccbf'}]
            };
            var chart = new google.visualization.PieChart(document.getElementById('donutchart2'));
            chart.draw(data, options);
          }
        }
      },1000);
      jq(".cargando").hide();
    }
  });
  switch (item) {
    case -1:
    jq("#contenedor_titulo").html('Estaca Belén');
    break;
    case 0:
    setTimeout(function () {
      jq("#contenedor_titulo").html('Barrio - <em>Inicio</em>');
    },1000);
    break;
    case 1:
    setTimeout(function () {
      jq("#contenedor_titulo").html('Barrio - <em>Asturias</em>');
    },1000);
    break;
    case 2:
    setTimeout(function () {
      jq("#contenedor_titulo").html('Barrio - <em>Belén</em>');
    },1000);
    break;
    case 3:
    setTimeout(function () {
      jq("#contenedor_titulo").html('Barrio - <em>Buenos Aires</em>');
    },1000);
    break;
    case 4:
    setTimeout(function () {
      jq("#contenedor_titulo").html('Barrio - <em>Envigado</em>');
    },1000);
    break;
    case 5:
    setTimeout(function () {
      jq("#contenedor_titulo").html('Barrio - <em>Floresta</em>');
    },1000);
    break;
    case 6:
    setTimeout(function () {
      jq("#contenedor_titulo").html('Barrio - <em>Guayabal</em>');
    },1000);
    break;
    case 7:
    setTimeout(function () {
      jq("#contenedor_titulo").html('Barrio - <em>Robledo</em>');
    },1000);
    break;
  }
  ocultar_todo();
  // jq("#contenedor_inicio").hide('slow');
  jq('.sidenav').sidenav();
  jq("#contenedor_individuales_titulo").show(1000);
  setTimeout(function () {
    jq(".icon-red").fadeOut('fast').fadeIn('fast').fadeOut('fast').fadeIn('fast').fadeOut('slow').fadeIn('slow').fadeOut('slow').fadeIn('slow');
  },1100);
  setTimeout(function () {
    jq("#contenedor_individual").fadeIn(1000);
  },500);
}

function ocultar_todo(){
  jq(".ocultar").hide('slow');
}

function abrir_modal1(tipo,titulo,barrio,llamamiento) {
  jq(".cargando").show();
  if (tipo==0) {
    // consultar estado actual estaca
    var datosformulario="consultar_estaca="+llamamiento;
    jq.ajax({
      url:"includes/home_includes.php",
      type:"POST",
      data:datosformulario,
      error:function(jqXHR,text_status,strError){
        jq(".cargando").hide();
        M.toast({html:'el error es: '+strError, classes:'red'});
      },
      timeout:10000,
      success:function(data){
        var res=data.split('|');
        jq("#nombre").val(res[0]);
        jq("#celular").val(res[1]);
        jq("#nota_gestion").val('');
        jq("#estado").val(res[3]);
        jq('select').formSelect();
        M.updateTextFields();
        jq(".cargando").hide();
      }
    });

    jq("#contenedor_boton_modal1").html('<a  class="modal-close waves-effect waves-green btn-flat">Cancelar</a><a onclick="actualizar_llamamiento(0,\''+llamamiento+'\',\''+barrio+'\')" class=" waves-effect waves-green btn-flat">Actualizar</a>   <a onclick="quitar_llamamiento(0,\''+llamamiento+'\',\''+barrio+'\')" class=" waves-effect waves-green btn-flat">Eliminar</a>');
  }else{
    var datosformulario="consultar_barrio="+barrio+"&llamamiento="+llamamiento;
    jq.ajax({
      url:"includes/home_includes.php",
      type:"POST",
      data:datosformulario,
      error:function(jqXHR,text_status,strError){
        M.toast({html:'el error es: '+strError, classes:'red'});
        jq(".cargando").hide();
      },
      timeout:10000,
      success:function(data){
        var res=data.split('|');
        jq("#nombre").val(res[0]);
        jq("#celular").val(res[1]);
        jq("#nota_gestion").val('');
        jq("#estado").val(res[3]);
        jq('select').formSelect();
        M.updateTextFields();
      }
    });
    jq("#contenedor_boton_modal1").html(' <a  class="modal-close waves-effect waves-green btn-flat">Cancelar</a> <a onclick="actualizar_llamamiento(1,\''+llamamiento+'\',\''+barrio+'\')" class="waves-effect waves-green btn-flat">Actualizar</a> <a onclick="quitar_llamamiento(1,\''+llamamiento+'\',\''+barrio+'\')" class="waves-effect waves-green btn-flat">Eliminar</a> ');
    jq(".cargando").hide();
  }

  var instance = M.Modal.getInstance(jq("#modal1"));
  instance.open();
  jq("#contenedor_titulo_modal1").text(titulo);
  // M.toast({html:'el barrio es: '+barrio,classes:'purple'});
  // M.toast({html:'el Llamamiento es: '+llamamiento,classes:'purple'});
}

function abrir_modal2(nombre,titulo,barrio) {
  jq(".cargando").show();
  var datosformulario="consultar_coro_barrio="+barrio;
  jq.ajax({
    url:"includes/home_includes.php",
    type:"POST",
    data:datosformulario,
    error:function(jqXHR,text_status,strError){
      jq(".cargando").hide();
      M.toast({html:'el error es: '+strError, classes:'red'});
    },
    timeout:10000,
    success:function(data){
      console.log(data);
      var res=data.split('|');
      console.log('estado del coro es: '+res[0]);
      if (res[0]=='1') {
        jq("#sw_coro").prop('checked',true);
        jq("#sw_coro").prop('checked',true);
        jq("#sw_coro").prop('checked',true);
        M.updateTextFields();
      }else{
        jq("#sw_coro").prop('checked',false);
        jq("#sw_coro").prop('checked',false);
        jq("#sw_coro").prop('checked',false);
        M.updateTextFields();
      }
      jq("#nota_gestion2").val('');
      M.updateTextFields();
      jq(".cargando").hide();
    }
  });

  var instance = M.Modal.getInstance(jq("#modal2"));
  instance.open();
  jq("#contenedor_titulo_modal2").text('Coro '+nombre);
  jq("#contenedor_boton_modal2").html('<a  class="modal-close waves-effect waves-green btn-flat">Cancelar</a>  <a onclick="actualizar_coro('+barrio+')" class=" waves-effect waves-green btn-flat">Actualizar</a>');
}

function actualizar_coro(indice_barrio){
  var v=0;
  if (jq("#nota_gestion2").val()=='') {
    jq("#nota_gestion2").addClass('invalid');
    M.toast({html:'Falta nota de gestión',classes:'red'});
    v++;
  }else{
    jq("#nota_gestion2").removeClass('invalid');
    nuevo_valor=jq("#sw_coro").prop('checked');
    indice_barrio++;
    jq(".cargando").show();
    var nuevo;
    console.log('el nuevo valor es = '+nuevo_valor);
    if (nuevo_valor) {
      nuevo='1';
    }else{
      nuevo='0';
    }
    var datosformulario="barrio_coro="+indice_barrio+"&nota_gestion="+jq("#nota_gestion2").val()+"&nuevo_valor="+nuevo+"&culpable="+jq("#gestor").val();
    jq.ajax({
      url:"includes/home_includes.php",
      type:"POST",
      data:datosformulario,
      error:function(jqXHR,text_status,strError){
        jq(".cargando").hide();
        M.toast({html:'el error es: '+strError, classes:'red'});
      },
      timeout:10000,
      success:function(data){
        res=data.split('|');
        if (res[0]==1) {
          M.toast({html:res[1], classes:'green'});
          menu(indice_barrio);
          var instance = M.Modal.getInstance(jq("#modal2"));
          instance.close();

        }else{
          M.toast({html:res[1],classse:'red'});
        }
        jq(".cargando").hide();
      }
    });
  }
}

function actualizar_llamamiento(tipo,llamamiento,indice_barrio) {
  indice_barrio++;

  var nombre=jq("#nombre").val();
  var celular=jq("#celular").val();
  var nota_gestion=jq("#nota_gestion").val();
  var estado=jq("#estado").val();
  if (validar_modal1()) {
    if (tipo=='1') {
      var datosformulario="token_llamamiento=1&nombre="+nombre+"&celular="+celular+"&nota_gestion="+nota_gestion+"&estado="+estado+"&llamamiento="+llamamiento+"&indice_barrio="+indice_barrio+"&culpable="+jq("#gestor").val()+"&activo=1";
      jq.ajax({
        url:"includes/home_includes.php",
        type:"POST",
        data:datosformulario,
        error:function(jqXHR,text_status,strError){
          jq(".cargando").hide();
          M.toast({html:'el error es: '+strError, classes:'red'});
        },
        timeout:10000,
        success:function(data){
          res=data.split('|');
          if (res[0]=='1') {
            M.toast({html:res[1],classes:'green'});
            menu(indice_barrio);
            var instance = M.Modal.getInstance(jq("#modal1"));
            instance.close();
          }else{
            M.toast({html:res[1],classes:'red'});
          }
        }
      });

    }else{
      if (validar_modal1()) {
        var datosformulario="token_estaca=1&nombre="+nombre+"&celular="+celular+"&nota_gestion="+nota_gestion+"&estado="+estado+"&llamamiento="+llamamiento+"&culpable="+jq("#gestor").val()+"&activo=1";
        jq.ajax({
          url:"includes/home_includes.php",
          type:"POST",
          data:datosformulario,
          error:function(jqXHR,text_status,strError){
            jq(".cargando").hide();
            M.toast({html:'el error es: '+strError, classes:'red'});
          },
          timeout:10000,
          success:function(data){
            res=data.split('|');
            if (res[0]=='1') {
              M.toast({html:res[1],classes:'green'});
              menu(-1);
              var instance = M.Modal.getInstance(jq("#modal1"));
              instance.close();
            }else{
              M.toast({html:res[1],classes:'red'});

            }
          }
        });
      }else{
        M.toast({html:'Faltan datos',classes:'red'});
      }
    }

  }else{
    M.toast({html:'faltan datos',classes:'red'});

  }
}

function validar_modal1(){
  var v=0;
  if (jq("#nombre").val()=='') {
    jq("#nombre").addClass('invalid');
    v++;
  } else {
    jq("#nombre").removeClass('invalid');
  }
  if (jq("#celular").val()=='') {
    jq("#celular").addClass('invalid');
    v++;
  }else{
    jq("#celular").removeClass('invalid');
  }
  if (jq("#nota_gestion").val()=='') {
    jq("#nota_gestion").addClass('invalid');
    v++;
  }else{
    jq("#nota_gestion").removeClass('invalid');
  }
  if (jq("#estado").val()=='') {
    jq("#estado").addClass('invalid');
    v++;
  } else {
    jq("#estado").removeClass('invalid');
  }
  if (v==0) {
    return true;
  }else{
    return false;
  }
}

function validar_usuario(){
  if (jq("#gestor").val()=='Invitado') {
    window.location='index.php';
  }
}

function bienvenida(){
  M.toast({html:'Credenciales actuales<br>Usuario: '+jq("#gestor").val()+'<br>Llamamiento: '+jq("#llamamiento").val()});
}

function quitar_llamamiento(tipo,llamamiento,barrio){
  var nombre='';
  var celular='';
  var nota_gestion='Eliminado';
  var estado='por llamar';
  var indice_barrio=barrio;
  if (tipo=='1') {
    var datosformulario="token_llamamiento=1&nombre="+nombre+"&celular="+celular+"&nota_gestion="+nota_gestion+"&estado="+estado+"&llamamiento="+llamamiento+"&indice_barrio="+indice_barrio+"&culpable="+jq("#gestor").val()+"&activo=0";
    jq.ajax({
      url:"includes/home_includes.php",
      type:"POST",
      data:datosformulario,
      error:function(jqXHR,text_status,strError){
        jq(".cargando").hide();
        M.toast({html:'el error es: '+strError, classes:'red'});
      },
      timeout:10000,
      success:function(data){
        res=data.split('|');
        if (res[0]=='1') {
          M.toast({html:res[1],classes:'green'});
          menu(indice_barrio);
          var instance = M.Modal.getInstance(jq("#modal1"));
          instance.close();
        }else{
          M.toast({html:res[1],classes:'red'});
        }
      }
    });
  }else{
    var datosformulario="token_estaca=1&nombre="+nombre+"&celular="+celular+"&nota_gestion="+nota_gestion+"&estado="+estado+"&llamamiento="+llamamiento+"&culpable="+jq("#gestor").val()+"&activo=0";
    jq.ajax({
      url:"includes/home_includes.php",
      type:"POST",
      data:datosformulario,
      error:function(jqXHR,text_status,strError){
        jq(".cargando").hide();
        M.toast({html:'el error es: '+strError, classes:'red'});
      },
      timeout:10000,
      success:function(data){
        res=data.split('|');
        if (res[0]=='1') {
          M.toast({html:res[1],classes:'green'});
          menu(-1);
          var instance = M.Modal.getInstance(jq("#modal1"));
          instance.close();
        }else{
          M.toast({html:res[1],classes:'red'});
        }
      }
    });

  }
}

function ingresos(){
    if (jq("#gestor").val()=='john.quintero') {
        location.href ="ingresos.php";
    }
}
