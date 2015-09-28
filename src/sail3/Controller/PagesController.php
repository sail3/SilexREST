<?php
namespace Sail3\Controller;

use Silex\Application;
use Sail3\Model\ContactoModel;
/**
 * Clase controlador para las vistas.
 */
class PagesController {

  public function index(Application $app) {
    $contactoModel = new ContactoModel($app);
    $contactos = $contactoModel->retrieveAll();
    return $app['twig']->render('home.twig',array(
      "contactos" => $contactos,
    ));
  }
}
