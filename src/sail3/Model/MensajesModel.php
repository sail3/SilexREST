<?php
namespace Sail3\Model;

use Silex\Application;
/**
 * Clase modelo para la tabla.
 */
class MensajesModel {

  public function retrieveAll(Application $app) {
    return $app['db']->query("select * from contacto");
  }
}
