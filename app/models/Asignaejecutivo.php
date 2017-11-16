<?php

/*
 * This file is part of the Ocrend Framewok 2 package.
 *
 * (c) Ocrend Software <info@ocrend.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace app\models;

use app\models as Model;
use Ocrend\Kernel\Models\Models;
use Ocrend\Kernel\Models\IModels;
use Ocrend\Kernel\Models\ModelsException;
use Ocrend\Kernel\Models\Traits\DBModel;
use Ocrend\Kernel\Router\IRouter;

/**
 * Modelo Asignaejecutivo
 *
 * @author Jorge Jara H. <jjara@wys.cl>
 */

class Asignaejecutivo extends Models implements IModels {


    // Contenido del modelo...
  use DBModel;

    /**
      * __construct()
    */

    public function getcargos(){
        return $this->db->select('*','tblcargos');
    }

    public function select_perfil(): array {

        global $http;
          $cargo = $http->request->get('select_perfil');

          $query=$this->db->query_select("SELECT id_cargo FROM tblcargos WHERE descripcion='$cargo'");

          $valor = $query[0][0];
          $nombres = $this->db->query_select("SELECT nombres FROM tblpersonal WHERE id_cargo='$valor'");

          if ($nombres == true){
              return array('success' => 1, 'message' => $nombres);
              # code...
          }else{
            return array('success' => 0, 'message' => 'Datos no encontrados');
            }
      }

      public function traer_usuarios(): array {

        global $http;
        $nombre = $http->request->get('usuario');


      }

    public function __construct(IRouter $router = null) {
        parent::__construct($router);
        $this->startDBConexion();
    }

    /**
      * __destruct()
    */
    public function __destruct() {
        parent::__destruct();
        $this->endDBConexion();
    }
}
