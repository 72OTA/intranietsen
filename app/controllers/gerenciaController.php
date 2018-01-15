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

class gerenciaController extends Controllers implements IControllers {

    public function __construct(IRouter $router) {
        parent::__construct($router,array(
            'users_logged' => true,
            'access_menu' => ['id_menu' => 2, 'access' => true]
        ));
        global $config;
        $op = '6';
        switch($this->method){
          case 'mantenedores_crud_masters':
              echo $this->template->render('gerencia/mantenedores_crud_masters', array(
                'menu_op' => $op
              ));
              break;
          // ------------------------------------------------------------------------------------------------------------------------------------------
          case 'listar_programadores':
              echo $this->template->render('gerencia/listar_programadores', array(
                'menu_op' => $op,
                'programadores_db' => (new Model\Mdlgerencia)->verProgramadores(),
                'ot_db' => (new Model\Mdlgerencia)->verOrdenes()

              ));
              break;
          case 'listar_coordinadores':
              echo $this->template->render('gerencia/listar_coordinadores', array(
                'menu_op' => $op
              ));
              break;
          case 'listar_ot':
              echo $this->template->render('gerencia/listar_ot', array(
                'menu_op' => $op
              ));
              break;


        // -------------------------------------------------------------------------------------------------------------------------------------------------------
          default:
            echo $this->template->render('gerencia/gerencia', array(
              'menu_op' => $op
            ));
            break;
        }

    }

}
