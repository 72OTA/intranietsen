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
use Ocrend\Kernel\Helpers\Strings;
use Ocrend\Kernel\Helpers\Files;


/**
 * Modelo Mdlpersonal
 *
 * @author Jorge Jara H. <jjara@wys.cl>
 */

class Mdlconfirmacion extends Models implements IModels {
    /**
      * Característica para establecer conexión con base de datos.
    */
    use DBModel;

    // Contenido del modelo...


		/**
      * Obtiene elementos de Mdlconfirmacion en 4 tablas distintas
      *
      * @param string $select: Elementos de tbltecnicos a seleccionar
      *
      * @return false|array: false si no hay datos.
      *                     array con los datos.
    */
    public function verActividades(string $select = '*'){
    return $this->db->select($select,'tblactividad');
}
    public function verBloques(string $select = '*'){
    return $this->db->select($select,'tblbloque');
    }
    public function verComunas(string $select = '*'){
    return $this->db->select($select,'tblcomuna');
    }
    public function verMotivocall(string $select = '*'){
    return $this->db->select($select,'tblmotivollamado');
    }
    public function verResultado(string $select = '*'){
    return $this->db->select($select,'tblresultado');
    }

    final public function getActividadesById(int $id, string $select = '*') {
        return $this->db->select($select,'tblactividad',"id_actividad='$id'",'LIMIT 1');
    }
    final public function getBloquesById(int $id, string $select = '*') {
        return $this->db->select($select,'tblbloque',"id_bloque='$id'",'LIMIT 1');
    }
    final public function getComunasById(int $id, string $select = '*') {
        return $this->db->select($select,'tblcomuna',"id_comuna='$id'",'LIMIT 1');
    }
    final public function getMotivocallById(int $id, string $select = '*') {
        return $this->db->select($select,'tblmotivollamado',"id_motivo='$id'",'LIMIT 1');
    }
    final public function getResultadoById(int $id, string $select = '*') {
        return $this->db->select($select,'tblresultado',"id_resultado='$id'",'LIMIT 1');
    }

    final public function update_estado_actividad($id) {
        global $config;
        # Actualiza Estado
        $this->db->query("UPDATE tblactividad SET estado=if(estado=0,1,0) WHERE id_actividad=$id LIMIT 1;");
        # Redireccionar a la página principal del controlador
        $this->functions->redir($config['site']['url'] . 'confirmacion/listar_actividades');
    }
    final public function update_estado_bloque($id) {
        global $config;
        # Actualiza Estado
        $this->db->query("UPDATE tblbloque SET estado=if(estado=0,1,0) WHERE id_bloque=$id LIMIT 1;");
        # Redireccionar a la página principal del controlador
        $this->functions->redir($config['site']['url'] . 'confirmacion/listar_bloque');
    }
    final public function update_estado_comuna($id) {
        global $config;
        # Actualiza Estado
        $this->db->query("UPDATE tblcomuna SET estado=if(estado=0,1,0) WHERE id_comuna=$id LIMIT 1;");
        # Redireccionar a la página principal del controlador
        $this->functions->redir($config['site']['url'] . 'confirmacion/listar_comunas');
    }
    final public function update_estado_motivocall($id) {
        global $config;
        # Actualiza Estado
        $this->db->query("UPDATE tblmotivollamado SET estado=if(estado=0,1,0) WHERE id_motivo=$id LIMIT 1;");
        # Redireccionar a la página principal del controlador
        $this->functions->redir($config['site']['url'] . 'confirmacion/listar_motivocall');
    }
    final public function update_estado_resultado($id) {
        global $config;
        # Actualiza Estado
        $this->db->query("UPDATE tblresultado SET estado=if(estado=0,1,0) WHERE id_resultado=$id LIMIT 1;");
        # Redireccionar a la página principal del controlador
        $this->functions->redir($config['site']['url'] . 'confirmacion/listar_resultado');
    }
    /**
     * Realiza la acción de registro dentro del sistema
     *
     * @return array : Con información de éxito/falla al registrar la actividad.
     */
    public function registra_nueva_actividad() : array {
        try {
            global $http;

            # Obtener los datos $_POST
            $actividad = $http->request->get('actividad');

            # Verificar que no están vacíos
            if ($this->functions->e($actividad)) {
                throw new ModelsException('Ingresar datos donde campos se especifica como Requerido');
            }
            # Registrar al actividad
            $this->db->insert('tblactividad', array(
                'actividad' => $actividad
            ));

            return array('success' => 1, 'message' => 'Registrado con éxito.');
        } catch (ModelsException $e) {
            return array('success' => 0, 'message' => $e->getMessage());
        }
    }
    /**
     * Realiza la acción de registro dentro del sistema
     *
     * @return array : Con información de éxito/falla al registrar el bloque.
     */
    public function registra_nuevo_bloque() : array {
        try {
            global $http;

            # Obtener los datos $_POST
            $bloque = $http->request->get('bloque');

            # Verificar que no están vacíos
            if ($this->functions->e($bloque)) {
                throw new ModelsException('Ingresar datos donde campos se especifica como Requerido');
            }
            # Registrar el bloque
            $this->db->insert('tblbloque', array(
                'bloque' => $bloque
            ));

            return array('success' => 1, 'message' => 'Registrado con éxito.');
        } catch (ModelsException $e) {
            return array('success' => 0, 'message' => $e->getMessage());
        }
    }
    /**
     * Realiza la acción de registro dentro del sistema
     *
     * @return array : Con información de éxito/falla al registrar la comuna.
     */
    public function registra_nueva_comuna() : array {
        try {
            global $http;

            # Obtener los datos $_POST
            $comuna = $http->request->get('comuna');

            # Verificar que no están vacíos
            if ($this->functions->e($comuna)) {
                throw new ModelsException('Ingresar datos donde campos se especifica como Requerido');
            }
            # Registrar el bloque
            $this->db->insert('tblcomuna', array(
                'nombre' => $comuna
            ));

            return array('success' => 1, 'message' => 'Registrado con éxito.');
        } catch (ModelsException $e) {
            return array('success' => 0, 'message' => $e->getMessage());
        }
    }
    /**
     * Realiza la acción de registro dentro del sistema
     *
     * @return array : Con información de éxito/falla al registrar el motivo de llamado.
     */
    public function registra_nuevo_motivocall() : array {
        try {
            global $http;

            # Obtener los datos $_POST
            $motivo = $http->request->get('motivo');

            # Verificar que no están vacíos
            if ($this->functions->e($motivo)) {
                throw new ModelsException('Ingresar datos donde campos se especifica como Requerido');
            }
            # Registrar el bloque
            $this->db->insert('tblmotivollamado', array(
                'motivo' => $motivo
            ));

            return array('success' => 1, 'message' => 'Registrado con éxito.');
        } catch (ModelsException $e) {
            return array('success' => 0, 'message' => $e->getMessage());
        }
    }
    /**
     * Realiza la acción de registro dentro del sistema
     *
     * @return array : Con información de éxito/falla al registrar el motivo de llamado.
     */
    public function registra_nuevo_resultado() : array {
        try {
            global $http;

            # Obtener los datos $_POST
            $nombre = $http->request->get('nombre');
            $cumplimiento = $http->request->get('cumplimiento');
            $grupo = $http->request->get('grupo');

            # Verificar que no están vacíos
            if ($this->functions->e($nombre, $cumplimiento, $grupo)) {
                throw new ModelsException('Ingresar datos donde campos se especifica como Requerido');
            }
            # Registrar el bloque
            $this->db->insert('tblresultado', array(
                'nombre' => $nombre,
                'cumplimiento' => $cumplimiento,
                'grupo' => $grupo
            ));

            return array('success' => 1, 'message' => 'Registrado con éxito.');
        } catch (ModelsException $e) {
            return array('success' => 0, 'message' => $e->getMessage());
        }
    }

    /**
      * Actualiza una actividad
      *
      * @return void
    */
    public function editar_actividad(): array {
    try {
      global $http;


      #Obtener los datos $_POST
      $actividad = $http->request->get('actividad');
      $id_actividad = $http->request->get('id_actividad');

      if ($this->functions->e($actividad)) {
          throw new ModelsException('Todos los datos son necesarios');
      }
      $this->db->update('tblactividad',array(
        'actividad' => $actividad,
    ),"id_actividad='$id_actividad'");
      //
      return array('success' => 1, 'message' => 'Modificacion de Actividad exitosa');
    }catch (ModelsException $e) {
        return array('success' => 0, 'message' => $e->getMessage());
    }
  }

  /**
    * Actualiza un bloque
    *
    * @return void
  */
  public function editar_bloque(): array {
  try {
    global $http;


    #Obtener los datos $_POST
    $bloque = $http->request->get('bloque');
    $id_bloque = $http->request->get('id_bloque');
    $limit = $http->request->get('limit');

    if ($this->functions->e($bloque)) {
        throw new ModelsException('Todos los datos son necesarios');
    }
    $this->db->update('tblbloque',array(
      'bloque' => $bloque,
      'limite_q_programacion' => $limit,
  ),"id_bloque='$id_bloque'");
    //
    return array('success' => 1, 'message' => 'Modificacion de Bloque exitosa');
  }catch (ModelsException $e) {
      return array('success' => 0, 'message' => $e->getMessage());
  }
}

/**
  * Actualiza una Comuna
  *
  * @return void
*/
public function editar_comuna(): array {
try {
  global $http;


  #Obtener los datos $_POST
  $comuna = $http->request->get('comuna');
  $id_comuna = $http->request->get('id_comuna');

  if ($this->functions->e($comuna)) {
      throw new ModelsException('Todos los datos son necesarios');
  }
  $this->db->update('tblcomuna',array(
    'nombre' => $comuna,
),"id_comuna='$id_comuna'");
  //
  return array('success' => 1, 'message' => 'Modificacion de Comuna exitosa');
}catch (ModelsException $e) {
    return array('success' => 0, 'message' => $e->getMessage());
}
}

/**
  * Actualiza una Comuna
  *
  * @return void
*/
public function editar_motivocall(): array {
try {
  global $http;


  #Obtener los datos $_POST
  $motivo = $http->request->get('motivo');
  $id_motivo = $http->request->get('id_motivo');

  if ($this->functions->e($motivo)) {
      throw new ModelsException('Todos los datos son necesarios');
  }
  $this->db->update('tblmotivollamado',array(
    'motivo' => $motivo,
),"id_motivo='$id_motivo'");
  //
  return array('success' => 1, 'message' => 'Modificacion de Motivo exitosa');
}catch (ModelsException $e) {
    return array('success' => 0, 'message' => $e->getMessage());
}
}

/**
  * Actualiza un resultado
  *
  * @return void
*/
public function editar_resultado(): array {
try {
  global $http;


  #Obtener los datos $_POST
  $nombre = $http->request->get('nombre');
  $cumplimiento = $http->request->get('cumplimiento');
  $grupo = $http->request->get('grupo');
  $id_resultado = $http->request->get('id_resultado');

  if ($this->functions->e($nombre, $cumplimiento, $grupo)) {
      throw new ModelsException('Todos los datos son necesarios');
  }
  $this->db->update('tblresultado',array(
    'nombre' => $nombre,
    'cumplimiento' => $cumplimiento,
    'grupo' => $grupo,
),"id_resultado='$id_resultado'");
  //
  return array('success' => 1, 'message' => 'Modificacion de Resultado');
}catch (ModelsException $e) {
    return array('success' => 0, 'message' => $e->getMessage());
}
}

// --------------------------------------------------------------------------MODELO HECTORELFATHER
public function carga_comunas(){

    return $this->db->query_select("select * from tblcomuna where estado='1'");
}
public function carga_resultado(){

    return $this->db->query_select("select * from tblresultado where estado='1'");
}
public function carga_bloque(){

    return $this->db->query_select("select id_bloque,bloque from tblbloque where estado='1'");
}
public function carga_motivo(){

    return $this->db->query_select("select id_motivo, motivo from tblmotivollamado where estado='1'");
}
public function carga_actividad(){

    return $this->db->query_select("select * from tblactividad where estado='1'");
}
public function listar_ordenes($fecha){

  return $this->db->query_select("select * from tblordenes where fecha_dia='$fecha'");
}




public function ingresar_orden(){
  global $http;

  $orden=$http->request->get('textidorden');
  $operador=$http->request->get('textid');
  $reg=$http->request->get('textreg');
  $rutcliente=$http->request->get('textrutcliente');
  $fechacompromiso=$http->request->get('textfecha');
  $bloque=$http->request->get('textbloque');
  $motivo=$http->request->get('textmotivo');
  $comuna=$http->request->get('textcomuna');
  $actividad=$http->request->get('textactividad');
  $resultado=$http->request->get('textresultado');
  $observacion=$http->request->get('textobservacion');
  $fecha_dia=date('Y-m-d');

  if ($this->functions->e($orden, $reg,$rutcliente,$fechacompromiso,$bloque,$motivo,$comuna,$actividad,$resultado,$observacion)) {
       return array('success' => 0, 'message' => 'Debe ingresar todos los campos');
    }else {

      $consulta=$this->db->query_select("select n_orden from tblordenes where n_orden='$orden'");
      if($consulta[0][0]!=true){

            $this->db->insert('tblordenes', array(
                'n_orden'=>$orden,
                'operador'=> $operador,
                'reg'=>$reg,
                'rut_cliente'=>$rutcliente,
                'fecha_compromiso'=>$fechacompromiso,
                'bloque'=>$bloque,
                'motivo'=>$motivo,
                'comuna'=>$comuna,
                'actividad'=>$actividad,
                'resultado'=>$resultado,
                'observacion'=>$observacion,
                'fecha_dia'=>$fecha_dia
                ));
                 return array('success' => 1, 'message' => 'Orden ingresada');

      }else{
        return array('success' => 0, 'message' => 'No se puede ingresar ya que existe ese número de orden');
      }
    }
}

public function vermod(){

  global $http,$config;
  $desde=$http->query->get('btnmodificar');

  return array('success' => 1, 'message' => 'btnmodificar');
}
public function get_orden_byId(int $id){
    return $this->db->query_select("select tblordenes.*, users.name from
    tblordenes inner join users on tblordenes.operador=users.id_user where n_orden ='$id' limit 1");
}
public function modificar_la_orden(){

  global $http;

  $modorden=$http->request->get('textmodidorden');
  $modrutcliente=$http->request->get('textmodrutcliente');
  $modfechacompromiso=$http->request->get('textmodfecha');
  $modbloque=$http->request->get('textmodbloque');
  $modmotivo=$http->request->get('textmodmotivo');
  $modcomuna=$http->request->get('textmodcomuna');
  $modnodo=$http->request->get('textmodnodo');
  $modsubnodo=$http->request->get('textmodsubnodo');
  $modactividad=$http->request->get('textmodactividad');
  $modresultado=$http->request->get('textmodresultado');
  $modobservacion=$http->request->get('textmodobservacion');
  $modfecha_dia=date('Y-m-d');
  $idorden=$http->request->get('ordenid');


   if ($this->functions->e($modorden,$modfechacompromiso,$modrutcliente,$modcomuna,$modbloque,$modmotivo,$modactividad,$modresultado,$modsubnodo,$modnodo)){
      return array('success' => 0, 'message' => $modorden.$modfechacompromiso.$modrutcliente.$modcomuna.$modbloque.$modmotivo.$modactividad,$modresultado);
   }
   else{
      $this->db->query("UPDATE tblordenes set n_orden='$modorden', rut_cliente='$modrutcliente', fecha_compromiso='$modfechacompromiso', bloque='$modbloque', motivo='$modmotivo',
      comuna='$modcomuna', actividad='$modactividad', resultado='$modresultado', observacion='$modobservacion', fecha_dia='$modfecha_dia',nodo='$modnodo', subnodo='$modsubnodo'  WHERE id_orden='$idorden'");
      return array('success' => 1, 'message' => 'Datos Modificados');
      }
}

public function eliminarorden(){

  global $http;

  $clave=$http->request->get('textpass');
  $norden=$http->request->get('texteliminar');
  $clave2=$this->db->query_select("select name,pass from users where perfil='HD_SUPERVISOR'");
  $clave3=Strings::chash($clave2[0]['pass'],$clave);
  if($clave3 ===true){

    $this->db->query("delete from tblordenes where id_orden='$norden';");
    return array('success' => 1, 'message' => "Registro eliminado");
 }else{

 return array('success' => 0, 'message' =>'Ingrese su contraseña nuevamente');

 }
}

// ------------------------------------------------------------------------------------------------------
    /**
      * __construct()
    */
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
