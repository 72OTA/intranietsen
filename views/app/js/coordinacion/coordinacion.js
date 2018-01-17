/**
 * Ajax action to api rest
*/
function cargarnodo(nodo){
document.formmodorden.textmodresultado.value=nodo;
}
function execute_accion_coordinacion(method,api_rest,formulario,accion,accion_redirect){
  switch(api_rest) {

    case "registra_nuevo_nodo":
      title='Registro de Nodo';
      break;

    case "editar_nodo":
      title='Modificar Nodo';
      break;

      // -------------------------------------------------------
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
$('#register_nodo').click(function(e) {
  e.defaultPrevented;
  execute_accion_coordinacion("POST","registra_nuevo_nodo",'register_nodo_form','redirect','coordinacion/listar_nodo');
});
$('#update_nodo').click(function(e) {
  e.defaultPrevented;
  execute_accion_coordinacion("POST","editar_nodo",'editar_nodo_form','redirect','coordinacion/listar_nodo');
});
