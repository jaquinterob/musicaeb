var jq = jQuery.noConflict();
jq(document).ready(function() {
  inicializaciones();
});

function inicializaciones(){
  M.AutoInit();
  jq(".cargando").hide();
}

function login(){
var usuario=jq("#usuario").val();
usuario=usuario.toLowerCase();
var contrasena=jq("#contrasena").val();
contrasena=contrasena.toLowerCase();
  jq(".cargando").show();
  if (validar_login()) {
    var datosformulario="usuario="+usuario+"&contrasena="+contrasena;
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
  data=data.trim();
        var res=data.split("|");
        if (res[0]=='1') {
           window.location='home.php?llamamiento='+res[1]+'&nombre='+jq("#usuario").val();
        }else{
          M.toast({html:res[1],classes:'red'});
        }
        jq(".cargando").hide();
      }
    });
  } else {
    jq(".cargando").hide();
    M.toast({html:'Datos incompletos',classes:'red'});
  }
}

function validar_login(){
  var v=0;
  if (jq("#usuario").val()=="") {
    jq("#usuario").addClass('invalid');
    v++;
  }else{
    jq("#usuario").removeClass('invalid');
  }
  if (jq("#contrasena").val()=="") {
    jq("#contrasena").addClass('invalid');
    v++;
  }else{
    jq("#contrasena").removeClass('invalid');
  }
  if (v==0) {
    return true;
  }else{
    return false;
  }
}
