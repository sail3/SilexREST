<?php
namespace Sail3\Controller;

use Silex\Application;
use Sail3\Model\ContactoModel;
use Sail3\Entity\Contacto;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\HttpKernelInterface;
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
  public function registrar(Application $app, Request $request) {
    $contacto = new Contacto();
    $form = $app["form.factory"]->createBuilder("form", $contacto)
              ->add("nombre", "text", array(
                "block_name" => "nombre",
              ))
              ->add("apellido")
              ->add("direccion")
              ->getForm();

    $form->handleRequest($request);
    if ($form->isValid()) {
      $contactoModel = new ContactoModel($app);
      $formValues = $request->request->get("form");
      $idContacto = $contactoModel->register($formValues['nombre'], $formValues['apellido'], $formValues['direccion']);
      $subRequest = Request::create("/", "GET");
      return $app->handle($subRequest, HttpKernelInterface::SUB_REQUEST);
    }


    return $app['twig']->render("form.twig", array(
      "form" => $form->createView()
    ));
  }
  public function modificar(Application $app, Request $request, $id)
  {
    $contactoModel = new ContactoModel($app);
    $contactoData = $contactoModel->retrieveById($id);

    $contacto = new Contacto();
    $contacto->setNombre($contactoData['nombre']);
    $contacto->setApellido($contactoData['apellido']);
    $contacto->setDireccion($contactoData['direccion']);

    $form = $app["form.factory"]->createBuilder("form", $contacto, array(
      "action" => "/modificar/{$id}",
    ))
              ->add("nombre")
              ->add("apellido")
              ->add("direccion")
              ->getForm();
    $form->handleRequest($request);
    if ($form->isValid()) {
      $formValues = $request->request->get("form");
      $contactoModel->update($id, $formValues['nombre'], $formValues['apellido'], $formValues['direccion']);
      $app->redirect("/", 303);
      $subRequest = Request::create("/", "GET");
      return $app->handle($subRequest, HttpKernelInterface::SUB_REQUEST);
    }
    return $app['twig']->render("form.twig", array(
      "form" => $form->createView()
    ));
  }
}
