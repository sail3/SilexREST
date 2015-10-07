<?php

require_once __DIR__ . "/../vendor/autoload.php";

$app = new Silex\Application();
$app['debug'] = true;
$app->register(new Silex\Provider\FormServiceProvider());
$app->register(new Silex\Provider\TranslationServiceProvider(), array(
    'translator.messages' => array(),
));
$app->register(new Silex\Provider\DoctrineServiceProvider(), array(
  'db.options' => array(
    'driver' => 'pdo_mysql',
    'dbname' => 'db_silex_test',
    'host' => 'localhost',
    'user' => 'root',
    'password' => 'root',
  ),
));
$app->register(new Silex\Provider\TwigServiceProvider(),array(
  'twig.path' => __DIR__."/../src/sail3/views",
));

include __DIR__ . "/routing.php";

return $app;
