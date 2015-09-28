<?php
namespace Sail3\Controller;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Sail3\Model\MensajesModel;
use Sail3\Model\ContactoModel;
/**
 * Clase controller.
 */
class ContactosController {

  public function listarContactos(Application $app, Request $request) {
    $contactoModel = new ContactoModel($app);
    return $app->json($contactoModel->retrieveAll());
  }
  public function insertarContacto(Application $app, Request $request) {
    $contactoModel = new ContactoModel($app);

    $nombre = $request->request->get("nombre");
    $apellido = $request->request->get("apellido");
    $direccion = $request->request->get("direccion");

    $id = $contactoModel->register($nombre, $apellido, $direccion);
    return $app->json(array(
      "message" => "success!!",
      "id" => $id,
    ));
  }
  public function modificarContacto(Application $app, Request $request, $id) {
    $contactoModel = new ContactoModel($app);
    $contacto = $contactoModel->retrieveById($id);

    $nombre = ($request->request->get("nombre") != null ) ? $request->request->get("nombre") : $contacto["nombre"];
    $apellido = ($request->request->get("apellido") != null ) ? $request->request->get("apellido") : $contacto["apellido"];
    $direccion = ($request->request->get("direccion") != null ) ? $request->request->get("direccion") : $contacto["direccion"];

    $contactoModel->update($id, $nombre, $apellido, $direccion);
    $contacto = $contactoModel->retrieveById($id);
    return $app->json(array(
      "message" => "success",
      "contacto" => $contacto,
      ));
  }
  public function eliminarContacto(Application $app, Request $request, $id) {
    $contactoModel = new ContactoModel($app);
    $contacto = $contactoModel->retrieveById($id);
    $contactoModel->delete($id);
    return $app->json(array(
      "message" => "success!!",
      "contacto" => $contacto,
    ));
  }
}
