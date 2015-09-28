<?php
// require_once __DIR__ . "/../vendor/autoload.php";
//
// $app = new Silex\Application();
// $app['debug'] = true;
//
// $app->register(new Silex\Provider\DoctrineServiceProvider(), array(
//   'db.options' => array(
//     'driver' => 'pdo_mysql',
//     'dbname' => 'db_silex_test',
//     'host' => 'localhost',
//     'user' => 'root',
//     'password' => 'root',
//   ),
// ));
// $app->register(new Silex\Provider\TwigServiceProvider(),array(
//   'twig.path' => __DIR__."/../views",
// ));
// /*
// $app->get("/saile/{nombre}", function ($nombre) {
//   return new Symfony\Component\HttpFoundation\Response("hola mundo {$nombre}");
// });
// $app->get("/edad/{edad}", function ($edad) {
//   return "Hola tienes {$edad} años";
// })->convert("edad", function ($id) {
//   $nombre = $id + 100;
//   return $nombre;
// });
// $app->get("/home", "MyApp\Controller\HomeController::index");
// */
//
// $app->get("/contactos/{id}", "Sail3\Controller\ContactosController::listarContactos");
// $app->post("/contactos/" , "Sail3\Controller\ContactosController::insertarContacto");
// $app->post("/contactos/{id}", "Sail3\Controller\ContactosController::modificarContacto");
// $app->delete("/contactos/{id}", "Sail3\Controller\ContactosController::eliminarContacto");

$app = require __DIR__ . '/../app/app.php';

$app->run();
