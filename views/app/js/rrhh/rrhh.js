/**
 * Ajax action to api rest
*/
function execute_accion_rrhh(method,api_rest,formulario,accion,accion_redirect){
  switch(api_rest) {
    case "registra_nuevo_trabajador":
      title='Registro de Trabajador';
      break;
    case "registra_nuevo_tecnico":
      title='Registro de Tecnico';
      break;
    case "editar_tecnico":
      title='Modificar datos tecnico';
      break;
  }
  $.ajax({
    type : method,
    url : 'api/'+api_rest,
    data : $('#'+ formulario).serialize(),
    success : function(json) {
      msg_box_alert(json.success,title,json.message,accion,accion_redirect);
    },
    error : function(xhr, status) {
      msg_box_alert(99,title,xhr.responseText);
    }
  });
}
$('#register_personal').click(function(e) {
  e.defaultPrevented;
  execute_accion_rrhh("POST","registra_nuevo_trabajador",'register_trabajador_form','reload');
});
$('#register_trabajador_form').keypress(function(e) {
    e.defaultPrevented;
    if(e.which == 13) {
        execute_accion_rrhh("POST","registra_nuevo_trabajador",'register_trabajador_form','reload');
        return false;
    }
});

// ---------------------------------------------------------------------------------------------------------------------------------
// Tecnicos
$('#register_tecnico').click(function(e) {
  e.defaultPrevented;
  execute_accion_rrhh("POST","registra_nuevo_tecnico",'register_tecnico_form','reload');
});
$('#update_tecnico').click(function(e) {
  e.defaultPrevented;
  execute_accion_rrhh("POST","editar_tecnico",'editar_tecnico_form','reload');
});

function subirarchivoexcel(){
    $("#div_cargando").html($("#cargador").html());
    var formData = new FormData();
    formData.append('excel',document.getElementById('imagefile').files[0]);
    $.ajax({
        type : 'POST',
        url : 'api/cargar_excel',
        contentType:false,
        processData:false,
        data : formData,
        success : function(json) {
            if ( json.success == 1 ){
                msg_box_alert(json.success,"Registro Guardado",json.message);
            }else{
                msg_box_alert(json.success,"Error",json.message);
            }
            $("#div_cargando").html('<a class="btn btn-success btn-social" title="Exportar a Excel" data-toggle="tooltip" onclick="subirarchivoexcel()"><i class="fa fa-arrow-up"></i> Cargar Turnos</a>');
        },
        error : function(xhr, status) {
            $("#div_cargando").html('<a class="btn btn-success btn-social" title="Exportar a Excel" data-toggle="tooltip" onclick="subirarchivoexcel()"><i class="fa fa-arrow-up"></i> Cargar Turnos</a>');
          msg_box_alert(99,"Error",xhr.responseText);
        }
    });
}
// ---------------------------------------------------------------------------------------------------------------------------------

//funciones varias
function cargar_datos_personal_de_iduser(){
  var formData = new FormData();
  formData.append('id_user',document.getElementById('id_user').value);

  $.ajax({
    type : 'POST',
    url : 'api/search_user',
    contentType:false,
    processData:false,
    data : formData,
    success : function(json) {
        if ( json.success == 1 ){
          document.getElementById('nombres').value = json.message.name;
          document.getElementById('fono').value = json.message.fono;
        }
        document.getElementById('rut').focus();
    },
    error : function(xhr, status) {
      msg_box_alert(99,title,xhr.responseText);
    }
  });
}
