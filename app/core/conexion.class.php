<?php /**/

class Conexion extends UtilsSql
{

  public function __construct() {

    parent::__construct('mysql:dbname='.NOMBRE_BASE_DATOS.';host='.HOST_BASE_DATOS,USUARIO_BASE_DATOS,CLAVE_BASE_DATOS);

    try {

      parent::setAttribute(parent::ATTR_ERRMODE, parent::ERRMODE_EXCEPTION);

      parent::setAttribute(parent::ATTR_DEFAULT_FETCH_MODE, parent::FETCH_ASSOC);

      parent::exec("SET CHARACTER SET utf8");

    } catch (PDOException $e) {
        echo 'Error BD: ' . $e->getMessage();
      }
    }
}
