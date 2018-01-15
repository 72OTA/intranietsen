<?php

/*
 * This file is part of the Ocrend Framewok 2 package.
 *
 * (c) Ocrend Software <info@ocrend.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
*/

use app\models as Model;

/**
    * Inicio de sesión
    *
    * @return json
*/
$app->post('/login', function() use($app) {
    $u = new Model\Users;

    return $app->json($u->login());
});

/**
    * Modifica password usuario
    *
    * @return json
*/
$app->post('/resetpass', function() use($app) {
    $u = new Model\Users;

    return $app->json($u->resetpass());
});

/**
    * Inicio de sesión
    *
    * @return json
*/
$app->post('/logout', function() use($app) {
    $u = new Model\Users;

    return $app->json($u->logout());
});

/**
    * Registro de un usuario
    *
    * @return json
*/
$app->post('/registra_nuevo_usuario', function() use($app) {
    $u = new Model\Users;

    return $app->json($u->registra_nuevo_usuario());
});
/**
    * Registro de un usuario
    *
    * @return json
*/
$app->post('/update_usuario', function() use($app) {
    $u = new Model\Users;

    return $app->json($u->update_usuario());
});
/**
    * Recuperar contraseña perdida
    *
    * @return json
*/
$app->post('/lostpass', function() use($app) {
    $u = new Model\Users;

    return $app->json($u->lostpass());
});

/**
    * Recuperar contraseña perdida
    *
    * @return json
*/
$app->post('/registra_nuevo_perfil', function() use($app) {
    $u = new Model\Users;

    return $app->json($u->registra_nuevo_perfil());
});
/**
    * Elimina perfil seleccionado
    *
    * @return json
*/
$app->post('/delete_perfil', function() use($app) {
    $u = new Model\Users;

    return $app->json($u->delete_perfil());
});
/**
    * Elimina perfil seleccionado
    *
    * @return json
*/
$app->post('/reset_pass_user', function() use($app) {
    $u = new Model\Users;

    return $app->json($u->resetpass());
});
/**
    * Actualiza perfil de usuario modificado directamente
    *
    * @return json
*/
$app->post('/update_peril_usuario', function() use($app) {
    $u = new Model\Users;

    return $app->json($u->update_peril_usuario());
});
/**
    * Actualiza perfil de usuario modificado directamente
    *
    * @return json
*/
$app->post('/mostar_datos_perfil', function() use($app) {
    $u = new Model\Users;

    return $app->json($u->mostar_datos_perfil());
});
/**
    * Actualiza perfil de usuario modificado directamente
    *
    * @return json
*/
$app->post('/update_perfil', function() use($app) {
    $u = new Model\Users;

    return $app->json($u->update_perfil());
});
/**
    * Actualiza perfil datos de empresa
    *
    * @return json
*/
$app->post('/update_empresa', function() use($app) {
    $e = new Model\Empresa;

    return $app->json($e->update_empresa());
});

//////// CONTROLER RRHH ////////////////
/**
    * Busca datos de usuario
    *
    * @return json
*/
$app->post('/search_user', function() use($app) {
    $e = new Model\Users;

    return $app->json($e->search_user());
});
/**
    * Busca coincidencias en la bd
    *
    * @return json
*/
$app->post('/buscar_coincidencia', function() use($app) {
    $e = new Model\Horasextra;

    return $app->json($e->buscar_coincidencia());
});
/**
    * Registra nuevo trabajador
    *
    * @return json
*/
$app->post('/registra_nuevo_trabajador', function() use($app) {
    $e = new Model\Mdlpersonal;

    return $app->json($e->registra_nuevo_trabajador());
});
/**
    * Registra Hora Extra
    *
    * @return json
*/
$app->post('/hora_extra', function() use($app) {
    $u = new Model\Horasextra;

    return $app->json($u->hora_extra());
});
/**
    * Registra Hora Extra temporal
    *
    * @return json
*/
$app->post('/tmp_hora_extra', function() use($app) {
    $u = new Model\Horasextra;

    return $app->json($u->tmp_hora_extra());
});
/**
    * Revisar Horas Extra
    *
    * @return json
*/
$app->post('/revisar', function() use($app) {
    $u = new Model\Horasextra;

    return $app->json($u->revisar());
});
/**
    * Modificar Horas Extra
    *
    * @return json
*/
$app->post('/modificar', function() use($app) {
    $u = new Model\Horasextra;

    return $app->json($u->modificar());
});
/**
    * Modificar Horas Extra
    *
    * @return json
*/
$app->post('/aprobar', function() use($app) {
    $u = new Model\Horasextra;

    return $app->json($u->aprobar());
});
/**
    * Rechazar Horas Extra
    *
    * @return json
*/
$app->post('/rechazar', function() use($app) {
    $u = new Model\Horasextra;

    return $app->json($u->rechazar());
});
/**
    * Eliminar Horas Extra
    *
    * @return json
*/
$app->post('/eliminar', function() use($app) {
    $u = new Model\Horasextra;

    return $app->json($u->eliminar());
});
/**
    * Eliminar Horas peticiones de Extra
    *
    * @return json
*/
$app->post('/eliminar_peticiones', function() use($app) {
    $u = new Model\Horasextra;

    return $app->json($u->eliminar_peticiones());
});
/**
    * Eliminar usuarios al modificar horas extra
    *
    * @return json
*/
$app->post('/eliminar_solicitud_mod', function() use($app) {
    $u = new Model\Horasextra;

    return $app->json($u->eliminar_solicitud_mod());
});
/**
    * Agregar usuarios de manera directa modificando
    *
    * @return json
*/
$app->post('/agregar_usuario', function() use($app) {
    $u = new Model\Horasextra;

    return $app->json($u->agregar_usuario());
});
/**
    * Selección de cargo
    *
    * @return json
*/
$app->post('/select_perfil', function() use($app) {
    $au = new Model\Asignaejecutivo;

    return $app->json($au->select_perfil());
});
/**
    * Traer usuarios
    *
    * @return json
*/
$app->post('/traer_usuarios', function() use($app) {
    $au = new Model\Asignaejecutivo;

    return $app->json($au->traer_usuarios());
});
/**
    * Re asignar usuario como pendiente
    *
    * @return json
*/
$app->post('/quitar_supervision', function() use($app) {
    $au = new Model\Asignaejecutivo;

    return $app->json($au->quitar_supervision());
});
/**
    * Asignar usuario como pendiente
    *
    * @return json
*/
$app->post('/asignar_supervision', function() use($app) {
    $au = new Model\Asignaejecutivo;

    return $app->json($au->asignar_supervision());
});
/**
    * Registra nuevo tecnico
    *
    * @return json
*/
$app->post('/registra_nuevo_tecnico', function() use($app) {
    $e = new Model\Mdltecnicos;

    return $app->json($e->registra_nuevo_tecnico());
});
/**
    * Modificar tecnico
    *
    * @return json
*/
$app->post('/editar_tecnico', function() use($app) {
    $e = new Model\Mdltecnicos;

    return $app->json($e->editar_tecnico());
});
// -----------------------------------------------------------------------------
// Modulo Confirmación
/**
    * Registra nueva actividad
    *
    * @return json
*/
$app->post('/registra_nueva_actividad', function() use($app) {
    $e = new Model\Mdlconfirmacion;

    return $app->json($e->registra_nueva_actividad());
});
/**
    * Modificar actividad
    *
    * @return json
*/
$app->post('/editar_actividad', function() use($app) {
    $e = new Model\Mdlconfirmacion;

    return $app->json($e->editar_actividad());
});
/**
    * Registra nuevo bloque
    *
    * @return json
*/
$app->post('/registra_nuevo_bloque', function() use($app) {
    $e = new Model\Mdlconfirmacion;

    return $app->json($e->registra_nuevo_bloque());
});
/**
    * Modificar bloque
    *
    * @return json
*/
$app->post('/editar_bloque', function() use($app) {
    $e = new Model\Mdlconfirmacion;

    return $app->json($e->editar_bloque());
});
/**
    * Registra nueva comuna
    *
    * @return json
*/
$app->post('/registra_nueva_comuna', function() use($app) {
    $e = new Model\Mdlconfirmacion;

    return $app->json($e->registra_nueva_comuna());
});
/**
    * Modificar comuna
    *
    * @return json
*/
$app->post('/editar_comuna', function() use($app) {
    $e = new Model\Mdlconfirmacion;

    return $app->json($e->editar_comuna());
});
/**
    * Registra nuevo motivo de llamado
    *
    * @return json
*/
$app->post('/registra_nuevo_motivocall', function() use($app) {
    $e = new Model\Mdlconfirmacion;

    return $app->json($e->registra_nuevo_motivocall());
});
/**
    * Modificar motivo de llamado
    *
    * @return json
*/
$app->post('/editar_motivocall', function() use($app) {
    $e = new Model\Mdlconfirmacion;

    return $app->json($e->editar_motivocall());
});
/**
    * Registra nuevo resultado
    *
    * @return json
*/
$app->post('/registra_nuevo_resultado', function() use($app) {
    $e = new Model\Mdlconfirmacion;

    return $app->json($e->registra_nuevo_resultado());
});
/**
    * Modificar resultado
    *
    * @return json
*/
$app->post('/editar_resultado', function() use($app) {
    $e = new Model\Mdlconfirmacion;

    return $app->json($e->editar_resultado());
});
// -----------------------------------------------------------------------------
/**
    * Importar tecnico
    *
    * @return json
*/
$app->post('/cargar_excel', function() use($app) {

$u = new Model\Mdltecnicos;

return $app->json($u->cargar_excel());
});


// HECTORelfather
$app->post('/ingresar_orden', function() use($app) {


$u = new Model\Mdlconfirmacion;


return $app->json($u->ingresar_orden());

});

$app->post('/modificar_la_orden', function() use($app) {


$u = new Model\Mdlconfirmacion;


return $app->json($u->modificar_la_orden());

});

$app->post('/eliminarorden', function() use($app) {


$u = new Model\Mdlconfirmacion;


return $app->json($u->eliminarorden());

});
