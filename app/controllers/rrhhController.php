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
 * Controlador rrhh/
 *
 * @author Jorge Jara H. <jjara@wys.cl>
*/

class rrhhController extends Controllers implements IControllers {

    public function __construct(IRouter $router) {
        parent::__construct($router,array(
            'users_logged' => true,
            'access_menu' => ['id_menu' => 2, 'access' => true]
        ));
        global $config;
        $op = '2';
        $r = new Model\Horasextra($router);
        $aj = new Model\Asignaejecutivo($router);

        switch($this->method){
          case 'mantenedores_crud_masters':
              echo $this->template->render('rrhh/mantenedores_crud_masters', array(
                'menu_op' => $op
              ));
              break;
          case 'listar_trabajadores':
              echo $this->template->render('rrhh/listar_trabajadores', array(
                'menu_op' => $op,
                'personal_db' => (new Model\Mdlpersonal)->getPersonalAll()
              ));
              break;
          case 'nuevo_trabajador':
              echo $this->template->render('rrhh/nuevo_trabajador', array(
                'menu_op' => $op,
                'cargos_db' => (new Model\Mdlpersonal)->getCargos(),
                'areas_db' => (new Model\Mdlpersonal)->getAreas()
              ));
              break;
          case 'editar_trabajadores':
              if($this->isset_id and false !== ($data = (new Model\Mdlpersonal)->getTrabajadorById($router->getId()))) {
                echo $this->template->render('rrhh/editar_trabajadores', array(
                  'menu_op' => $op,
                  'db_trabajador' => $data[0],
                  'cargos_db' => (new Model\Mdlpersonal)->getCargos(),
                  'areas_db' => (new Model\Mdlpersonal)->getAreas()
                ));
              } else {
                $this->functions->redir($config['site']['url'] . 'rrhh/&error=true');
              }
              break;
          case 'estado_trabajador':
              (new Model\Mdlpersonal)->update_estado_trabajador($router->getId(true));
              break;
          case 'horasextra':
            $user = (new Model\Users)->getOwnerUser();
            echo $this->template->render('rrhh/horasextra/ingreso_horas_extra', array(
              'menu_op' => $op,
              'fecha' => date('Y-m-d'),
              'tiempo' => date('H:m'),
              'db_users'=>($r)->getdatos('*','estado=1'),
              'horas_extras' => ($r)->gethxtmp($user['id_user']),
              'ultimo_id' => ($r)->get_lastid($user['id_user'])
             ));
              break;
          case 'revisar_horas_extra':
            echo $this->template->render('rrhh/horasextra/horasextra', array(
              'opcion' => 'RRHH',
              'horas_extras' => ($r)->rev_hx(),
            ));
             break;
          case 'mostrar_hora_extra':
            if($this->isset_id and false != ($dato=$r->gethxid($router->getId()))){
            echo $this->template->render('rrhh/horasextra/mostrar_hora_extra', array(
             'opcion' => 'RRHH',
             'horas_extras' => ($r)->get_hx_users(),
             'id' => $dato[0]
                ));
              }
              break;
          case 'revisar_horas_extras_pendientes':
            echo $this->template->render('rrhh/horasextra/revisar_horas_extras_pendientes', array(
             'opcion' => 'RRHH',
             'horas_extras' => ($r)->gethx('*',"estado='Pendiente'"),
           ));
              break;
          case 'modificar':
            if($this->isset_id and false != ($dato=$r->gethxid($router->getId()))){
            echo $this->template->render('rrhh/horasextra/modificar_solicitud_hora_extra', array(
              'horas_extras' => ($r)->get_hx_users(),
              'db_users'=>($r)->getdatos('*','estado=1'),
             'modifica_hx' => $dato[0]));
                }
              break;
          case 'asignar_ejecutivo':
            echo $this->template->render('rrhh/asignar_ejecutivo/asignar_ejecutivo', array(
              'cargos' => ($aj)->getcargos(),

             ));
              break;
              // ------------------------------------------------------------------------------------------------------------------------------------------
              //MODULO TECNICOS
              // ------------------------------------------------------------------------------------------------------------------------------------------
              case 'listar_tecnicos':
                  echo $this->template->render('rrhh/tecnicos/listar_tecnicos', array(
                    'menu_op' => $op,
                    'tecnicos_db' => (new Model\Mdltecnicos)->verTecnicos()
                  ));
                  break;
              case 'nuevo_tecnico':
                  echo $this->template->render('rrhh/tecnicos/nuevo_tecnico', array(
                    'menu_op' => $op
                  ));
                  break;
              case 'importar_tecnico':
                  echo $this->template->render('rrhh/tecnicos/importar_tecnico', array(
                    'menu_op' => $op
                  ));
                  break;
              case 'editar_tecnico':
                  if($this->isset_id and false !== ($data = (new Model\Mdltecnicos)->getTecnicosById($router->getId()))) {
                    echo $this->template->render('rrhh/tecnicos/editar_tecnicos', array(
                      'menu_op' => $op,
                      'db_tecnico' => $data[0]
                    ));
                  } else {
                    $this->functions->redir($config['site']['url'] . 'rrhh/&error=true');
                  }
                  break;
              case 'estado_tecnico':
                      (new Model\Mdltecnicos)->update_estado_tecnico($router->getId(true));
                  break;
              // ------------------------------------------------------------------------------------------------------------------------------------------
              // ------------------------------------------------------------------------------------------------------------------------------------------

          default:
            echo $this->template->render('rrhh/rrhh', array(
              'menu_op' => $op
            ));
            break;
        }

    }

}
