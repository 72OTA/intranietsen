/**
 * Ajax action to api rest
 */
function execute_accion_asignar_usuarios(method, api_rest, formulario, accion, accion_redirect) {
  switch (api_rest) {
    case "select_perfil":
      title = 'Selección de perfil';
      break;
    case "traer_usuarios":
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

$('#usuario').on('click', function(e) {
  e.defaultPrevented;
  execute_accion_asignar_usuarios("POST", "traer_usuarios", 'form_opciones', 'reload')
});

function eliminar_solicitud_mod(id) {
  if (window.confirm("¿Esta seguro que desea eliminar esta persona?")) {
    document.getElementById("id_hx_mod").value = id;
    execute_accion_solicitudes_horas_extra("POST", 'eliminar_solicitud_mod', 'form_id_mod', 'reload')
  } else {
    alert("No eliminado");
  }
}

function modal_asignar_usuarios(id) {
  $('#modal_asignar_usuarios').modal('show');
}
$('#select_perfil').on('change', function select_perfil() {
  $.ajax({
    type: 'POST',
    url: 'api/select_perfil',
    data: $('#select_perfil').serialize(),
    success: function(json) {
      if (json.success == 1) {
        var mes = json.message;
        var but = $('<input type="button" id="btn_revisar"">');
        var inp = $('<input type="hidden" id="usuario">')
        $('#resultado option').remove();
        $('#boton_asignar').remove();
        $('#usuario').remove();
        $('#ejecutivos').append('<option>--</option>')
        for (var i = 0; i < mes.length; i++) {
          $('#ejecutivos').append('<option class="opcion" value="' + mes[i][0] + '">' + mes[i][0] + '</option>');
        }
        $('#resultado').append(but).append(inp);
        but.attr({
          title: 'Revisar',
          class: "btn-success btn-md",
          value: "Asignar Usuarios",
          onclick: "modal_asignar_usuarios()",
          id: 'boton_asignar'
        });
        but.attr('data-toggle', 'modal');
        $('#ejecutivos').on('change', function() {
          $('#ejecutivos option:selected').each(function() {
            var str = "";
            str += $(this).text();
            $('#usuario').val(str);
          });
        })
      } else {
        $('#resultado option').remove();
        $('#boton_asignar').remove();
        $('#usuario').remove();
        $('#ejecutivos').append('<option>--</option>')
      }

    },
    error: function( /*xhr, status*/ ) {
      msg_box_alert(xhr.responsetext);
    }
  });
});
$('#select_perfil').one('click', function crear_select() {
  var sel = $('<select></select>');
  var lab = $('<label><strong>Asignar ejecutivos a Supervisor</strong></label><br>');
  $('#resultado').append(lab);
  $('#resultado').append(sel);
  sel.attr('id', 'ejecutivos');
  $('#ejecutivos').append('<option>--</option>')
})
