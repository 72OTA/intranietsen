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
