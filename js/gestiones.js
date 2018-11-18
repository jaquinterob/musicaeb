var jq = jQuery.noConflict();
jq(document).ready(function() {
  inicializaciones();
});

function inicializaciones(){
  M.AutoInit();
  jq(".cargando").hide();
  cargar_gestiones();
}

function cargar_gestiones(){
  // console.log('gestor actual = '+jq("#gestor_verde").va());

  var datosformulario="token_gestiones=1&gestor="+jq("#gestor_verde").val();
  jq.ajax({
    url:"includes/gestiones_includes.php",
    type:"POST",
    data:datosformulario,
    error:function(jqXHR,text_status,strError){
      jq(".cargando").hide();
      M.toast({html:'el error es: '+strError, classes:'red'});
    },
    timeout:10000,
    success:function(data){
      jq("#contenedor_gestiones").html(data);
    }
  });
}
