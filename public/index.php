<?php
require_once __DIR__ . "/../vendor/autoload.php";
use MyApp\controllers\HomeController;
$app = new Silex\Application();
$app['debug'] = true;

$app->get("/", function () {
  $variable = "hola mundo";
  dump($variable);
  return "hola mundo";
});
$app->get("/saile/{nombre}", function ($nombre) {
  return new Symfony\Component\HttpFoundation\Response("hola mundo {$nombre}");
});
$app->get("/edad/{edad}", function ($edad) {
  return "Hola tienes {$edad} años";
})->convert("edad", function ($id) {
  $nombre = $id + 100;
  return $nombre;
});
$app->get("/home", new \MyApp\Controller\HomeController());

$app->run();
