<?php

/*
 * This file is part of the Ocrend Framewok 2 package.
 *
 * (c) Ocrend Software <info@ocrend.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
*/

namespace app\controllers;

use app\models as Model;
use Ocrend\Kernel\Router\IRouter;
use Ocrend\Kernel\Controllers\Controllers;
use Ocrend\Kernel\Controllers\IControllers;

/**
 * Controlador confirmacion/
 *
 * @author Jorge Jara H. <jjara@wys.cl>
*/

class confirmacionController extends Controllers implements IControllers {

    public function __construct(IRouter $router) {
        parent::__construct($router,array(
            'users_logged' => true,
            'access_menu' => ['id_menu' => 1, 'access' => true]
        ));
        global $config;
        $op = '1';
        switch($this->method){
          case 'mantenedores_crud_masters':
              echo $this->template->render('confirmacion/mantenedores_crud_masters', array(
                'menu_op' => $op
              ));
              break;
          // ------------------------------------------------------------------------------------------------------------------------------------------
          case 'listar_actividades':
              echo $this->template->render('confirmacion/actividad/listar_actividad', array(
                'menu_op' => $op,
                'actividades_db' => (new Model\Mdlconfirmacion)->verActividades()
              ));
              break;
          case 'nueva_actividad':
              echo $this->template->render('confirmacion/actividad/nueva_actividad', array(
                'menu_op' => $op
              ));
              break;
          case 'editar_actividad':
              if($this->isset_id and false !== ($data = (new Model\Mdlconfirmacion)->getActividadesById($router->getId()))) {
                echo $this->template->render('confirmacion/actividad/editar_actividad', array(
                  'menu_op' => $op,
                  'db_actividad' => $data[0]
                ));
              } else {
                $this->functions->redir($config['site']['url'] . 'confirmacion/&error=true');
              }
              break;
          case 'estado_actividad':
                  (new Model\Mdlconfirmacion)->update_estado_actividad($router->getId(true));
              break;
          // ------------------------------------------------------------------------------------------------------------------------------------------
          case 'listar_bloque':
              echo $this->template->render('confirmacion/bloque/listar_bloque', array(
                'menu_op' => $op,
                'bloques_db' => (new Model\Mdlconfirmacion)->verBloques()
              ));
              break;
          case 'nuevo_bloque':
              echo $this->template->render('confirmacion/bloque/nuevo_bloque', array(
                'menu_op' => $op
              ));
              break;
          case 'editar_bloque':
              if($this->isset_id and false !== ($data = (new Model\Mdlconfirmacion)->getBloquesById($router->getId()))) {
                echo $this->template->render('confirmacion/bloque/editar_bloque', array(
                  'menu_op' => $op,
                  'db_bloque' => $data[0]
                ));
              } else {
                $this->functions->redir($config['site']['url'] . 'confirmacion/&error=true');
              }
              break;
          case 'estado_bloque':
                  (new Model\Mdlconfirmacion)->update_estado_bloque($router->getId(true));
              break;
          // ------------------------------------------------------------------------------------------------------------------------------------------
          case 'listar_comunas':
              echo $this->template->render('confirmacion/comuna/listar_comuna', array(
                'menu_op' => $op,
                'comunas_db' => (new Model\Mdlconfirmacion)->verComunas()
              ));
              break;
          case 'nueva_comuna':
              echo $this->template->render('confirmacion/comuna/nueva_comuna', array(
                'menu_op' => $op
              ));
              break;
          case 'editar_comuna':
              if($this->isset_id and false !== ($data = (new Model\Mdlconfirmacion)->getComunasById($router->getId()))) {
                echo $this->template->render('confirmacion/comuna/editar_comuna', array(
                  'menu_op' => $op,
                  'db_comuna' => $data[0]
                ));
              } else {
                $this->functions->redir($config['site']['url'] . 'confirmacion/&error=true');
              }
              break;
          case 'estado_comuna':
                  (new Model\Mdlconfirmacion)->update_estado_comuna($router->getId(true));
              break;
          // ------------------------------------------------------------------------------------------------------------------------------------------
          case 'listar_motivocall':
              echo $this->template->render('confirmacion/motivocall/listar_motivocall', array(
                'menu_op' => $op,
                'motivocall_db' => (new Model\Mdlconfirmacion)->verMotivocall()
              ));
              break;
          case 'nuevo_motivocall':
              echo $this->template->render('confirmacion/motivocall/nuevo_motivocall', array(
                'menu_op' => $op
              ));
              break;
          case 'editar_motivocall':
              if($this->isset_id and false !== ($data = (new Model\Mdlconfirmacion)->getMotivocallById($router->getId()))) {
                echo $this->template->render('confirmacion/motivocall/editar_motivocall', array(
                  'menu_op' => $op,
                  'db_motivocall' => $data[0]
                ));
              } else {
                $this->functions->redir($config['site']['url'] . 'confirmacion/&error=true');
              }
              break;
          case 'estado_motivocall':
                  (new Model\Mdlconfirmacion)->update_estado_motivocall($router->getId(true));
              break;
              // ------------------------------------------------------------------------------------------------------------------------------------------
              case 'listar_resultado':
                  echo $this->template->render('confirmacion/resultado/listar_resultado', array(
                    'menu_op' => $op,
                    'resultado_db' => (new Model\Mdlconfirmacion)->verResultado()
                  ));
                  break;
              case 'nuevo_resultado':
                  echo $this->template->render('confirmacion/resultado/nuevo_resultado', array(
                    'menu_op' => $op
                  ));
                  break;
              case 'editar_resultado':
                  if($this->isset_id and false !== ($data = (new Model\Mdlconfirmacion)->getResultadoById($router->getId()))) {
                    echo $this->template->render('confirmacion/resultado/editar_resultado', array(
                      'menu_op' => $op,
                      'resultado_db' => $data[0]
                    ));
                  } else {
                    $this->functions->redir($config['site']['url'] . 'confirmacion/&error=true');
                  }
                  break;
              case 'estado_resultado':
                      (new Model\Mdlconfirmacion)->update_estado_resultado($router->getId(true));
                  break;
          // ------------------------------------------------------------------------------------------------------------------------------------------
        // CHUPAPI HECTOR


                case "programacion":
                echo $this->template->render('confirmacion/programacion/programacion', array(
                'db_bloque'=>(new Model\Mdlconfirmacion)->carga_bloque(),
                'db_motivo'=>(new Model\Mdlconfirmacion)->carga_motivo(),
                'db_comuna'=>(new Model\Mdlconfirmacion)->carga_comunas(),
                'db_actividad'=>(new Model\Mdlconfirmacion)->carga_actividad(),
                'db_resultado'=>(new Model\Mdlconfirmacion)->carga_resultado(),
                'fecha' => date('Y-m-d')
                 ));
                 break;
                case "listar_ordenes":
                echo $this->template->render('confirmacion/programacion/listar_ordenes', array(
                'db_ordenes'=>(new Model\Mdlconfirmacion)->listar_ordenes(date('Y-m-d'))
                ));
                break;
                case "listar_allorden":
                echo $this->template->render('confirmacion/programacion/listar_allorden', array(
                'menu_op' => $op,
                'db_todas'=>(new Model\Mdlconfirmacion)->listar_todas_ordenes(date('Y-m-d'))
                ));
                break;
                case "editar_confirmacion":
                  if($this->isset_id and false !== ($orden=(new Model\Mdlconfirmacion)->get_orden_byId($router->getId(true)))){
                     echo $this->template->render('confirmacion/programacion/editar_confirmacion', array(
                    'db_modorden'=>$orden[0],
                    'db_motivo'=>(new Model\Mdlconfirmacion)->carga_motivo(),
                    'db_bloque'=>(new Model\Mdlconfirmacion)->carga_bloque(),
                    'db_comuna'=>(new Model\Mdlconfirmacion)->carga_comunas(),
                    'db_actividad'=>(new Model\Mdlconfirmacion)->carga_actividad(),
                    'db_resultado'=>(new Model\Mdlconfirmacion)->carga_resultado()
                     ));
                   }
                 break;
                 case "listar_ejecutivos":
                  echo $this->template->render('confirmacion/programacion/listar_ejecutivos', array(
                  'menu_op'=>$op,
                  'db_ejecutivos'=>(new Model\Mdlconfirmacion)->listar_ejecutivos()
                  ));
               break;
        // -------------------------------------------------------------------------------------------------------------------------------------------------------
          default:
            echo $this->template->render('confirmacion/confirmardefault', array(
              'menu_op' => $op
            ));
            break;
        }

    }

}
