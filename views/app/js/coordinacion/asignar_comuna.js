/**
 * Ajax action to api rest
 */
function execute_accion_asignar_usuarios(method, api_rest, formulario, accion, accion_redirect) {
  switch (api_rest) {
    case "select_ejecutivo":
      title = 'Selección de ejecutivo';
      break;
    case "traer_ejecutivos":
      title = 'Traer Usuarios';
      break;
  }
  $.ajax({
    type: method,
    url: 'api/' + api_rest,
    data: $('#' + formulario).serialize(),
    success: function(json) {
      msg_box_alert(json.success, title, json.message, accion, accion_redirect);
    },
    error: function(xhr, status) {
      msg_box_alert(99, title, 'Ha ocurrido un problema.' + xhr.responsetext);
    }
  });
}

function eliminar_solicitud_mod(id) {
  if (window.confirm("¿Esta seguro que desea eliminar esta persona?")) {
    document.getElementById("id_hx_mod").value = id;
    execute_accion_solicitudes_horas_extra("POST", 'eliminar_solicitud_mod', 'form_id_mod', 'reload')
  } else {
    alert("No eliminado");
  }
}

$('#select_ejecutivo').on('change', function select_ejecutivo() {
  $.ajax({
    type: 'POST',
    url: 'api/select_ejecutivo',
    data: $('#select_ejecutivo').serialize(),
    success: function(json) {
      if (json.success == 1) {
        var mes = json.message;
        var but = $('<input type="button" id="boton_asignar_comuna" title="revisar" class="btn-success btn-md animated fadeIn" value="Asignar Comuna">');
        var inp = $('<form id="form_usuario" name="form_usuario"><input type="hidden" id="usuario" name="usuario"><input type="hidden" id="name" name="name"></form>')
        $('#resultado option').remove();
        $('#boton_asignar_comuna').remove();
        $('#usuario').remove();
        $('#caja_secundaria').remove();
        $('#ejecutivos').append('<option>--</option>')
        for (var i = 0; i < mes.length; i++) {
          $('#ejecutivos').append('<option class="opcion animated fadeIn" value="' + mes[i][0] + '">' + mes[i][1] + '</option>');
        }
        $('#resultado').append(inp);
        $('#form_opciones').append(but);
        $('#ejecutivos').on('change', function() {
          $('#ejecutivos option:selected').each(function() {
            var str = "";
            var nme = "";
            nme += $(this).text();
            str += $(this).val();
            $('#usuario').val(str);
            $('#name').val(nme);
          });
        })
      } else {
        $('#resultado option').remove();
        $('#boton_asignar_comuna').remove();
        $('#usuario').remove();
        $('#caja_secundaria').remove();
        $('#ejecutivos').append('<option>--</option>')
      }

    },
    error: function( /*xhr, status*/ ) {
      msg_box_alert(xhr.responsetext);
    }
  });
});
$('#select_ejecutivo').one('click', function crear_select() {
  var sel = $('<select></select>');
  var lab = $('<label><strong>Asignar ejecutivos a Supervisor</strong></label><br>');
  $('#resultado').append(lab);
  $('#resultado').append(sel);
  sel.attr('id', 'ejecutivos');
  $('#ejecutivos').append('<option>--</option>')
});
// $(document).on('click', '#boton_asignar_comuna',function(){
//   if ($('#caja_secundaria').length == 0) {
//     var mostrarTodo = $('<!-- Default box --><div class="box" id="caja_secundaria"><!-- Custom Tabs (Pulled to the right) --><div class="nav-tabs-custom"><ul class="nav nav-tabs pull-rigth"><li class="active"><a href="#tab_2-2" data-toggle="tab"><label for="">Usuario</label></a></li><li class="pull-left header"></li></ul><div class="tab-content"><div class="tab-pane active" id="tab_1-1"><div class="row"><div class="col-md-6"><label for="">Usuarios no asignados</label></div><div class="col-md-6"><label for="">Usuarios asignados</label></div></div></div><!-- /.tab-pane --></div></div></div>');
//     $('#mostrarDatos').prepend(mostrarTodo);
//
//   }
// });

if ($('#caja_secundaria').length > 0) {
  $('#caja_secundaria').remove();
} else {
  $(document).on('click', '#boton_asignar_comuna', function traer_ejecutivos() {
    var select = $('#ejecutivos option:selected').text();
    if ( select == '--') {
      msg_box_alert('0','Seleccione un ejecutivo','No hay ejecutivos seleccionados');
    }else {
    $.ajax({
      type: 'POST',
      url: 'api/traer_ejecutivos',
      data: $('#form_usuario').serialize(),
      success: function(json) {
        if (json.success == 1) {
          var usuariosNoAsignados = json.usuariosNoAsignados;
          var usuariosAsignados = json.usuariosAsignados;
          var valor = json.valor;
          var user = $('#name').val();
          var mostrarTodo = $('<!-- Default box --><div class="box animated fadeIn" id="caja_secundaria"><!-- Custom Tabs (Pulled to the right) --><div class="nav-tabs-custom"><ul class="nav nav-tabs pull-rigth"><li class="active"><a href="#tab_2-2" data-toggle="tab"><label for="">' + user + '</label></a></li><li class="pull-left header"></li></ul><div class="tab-content"><div class="tab-pane active" id="tab_1-1"><div class="row">  <div class="col-md-2"></div><div class="col-md-4"><label for="">Usuarios no asignados</label><table id="usuariosNoAsignados" class="table table-bordered"><form id="idBtn"></table></div><div class="col-md-2"></div><div class="col-md-4"><label for="">Usuarios asignados</label><table id="usuariosAsignados" class="table table-bordered"></table><form></div></div></div><!-- /.tab-pane --></div></div></div>');
          if ($('#caja_secundaria').length > 0) {
            $('#caja_secundaria').remove();
            $('#mostrarDatos').prepend(mostrarTodo);
          } else {
            $('#mostrarDatos').prepend(mostrarTodo);
          }
          var user_id = $('#usuario').val();
          for (var i = 0; i < usuariosNoAsignados.length; i++) {
            $('#usuariosNoAsignados').append('<tr><td><a data-placement="top" title="Asignar Supervisión" id="' + usuariosNoAsignados[i][0] + '" onclick="asignar_supervision('+ usuariosNoAsignados[i][0] +',' + user_id + ')" class="btn btn-success btn-md" ><i class="fa fa-user-plus" ></i></a></td><td class="opcion" value="' + usuariosNoAsignados[i][2] + '">' + usuariosNoAsignados[i][2] + '</td></tr>');
          }
          if (usuariosAsignados != undefined) {
            for (var i = 0; i < usuariosAsignados.length; i++) {
              $('#usuariosAsignados').append('<tr><td><a data-placement="top" title="Quitar Supervisión"  class="btn btn-danger btn-md btnDesasignar" id="' + usuariosAsignados[i][0] + '" onclick="quitar_supervision('+ usuariosAsignados[i][0] +')" ><i class="fa fa-user-times"></i></a></td><td class="opcion" value="' + usuariosAsignados[i][2] + '">' + usuariosAsignados[i][2] + '</td></tr> ');
            }
          }
          // AQUI PONER EL ELSE DE LA WEA
        }
      },
      error: function(xhr, status) {
        msg_box_alert(xhr.responsetext);
      }
    });
  }
  });
}

function quitar_supervision(id) {
  var formData = new FormData();
  formData.append('mandoId',id);

    $.ajax({
      type: 'POST',
      url: 'api/quitar_supervision',
      contentType:false,
      processData:false,
      data: formData,
      success: function(json) {
        if (json.success == 1) {
          $('#caja_secundaria').remove();
          $("#boton_asignar_comuna").trigger('click');
        } else {
          msg_box_alert('CAGO ESTA WEA');
        }
      }
    })
}

function asignar_supervision(id,id_super) {
  var formData = new FormData();
  formData.append('mandoId',id);
  formData.append('mandoIdSuper',id_super);

    $.ajax({
      type: 'POST',
      url: 'api/asignar_supervision',
      contentType:false,
      processData:false,
      data: formData,
      success: function(json) {
        if (json.success == 1) {
          $('#caja_secundaria').remove();
          $("#boton_asignar_comuna").trigger('click');
        } else {
          msg_box_alert('CAGO ESTA WEA');
        }
      }
    })
}
