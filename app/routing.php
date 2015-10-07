<?php

// Rutas views.
$app->get("/", "Sail3\Controller\PagesController::index");
$app->get("/registrar", "Sail3\Controller\PagesController::registrar");
$app->post("/registrar", "Sail3\Controller\PagesController::registrar");
$app->get("/modificar/{id}", "Sail3\Controller\PagesController::modificar");
$app->post("/modificar/{id}", "Sail3\Controller\PagesController::modificar");



// Rutas api rest.
$app->get("/contactos/{id}", "Sail3\Controller\ContactosController::listarContactos");
$app->post("/contactos/" , "Sail3\Controller\ContactosController::insertarContacto");
$app->post("/contactos/{id}", "Sail3\Controller\ContactosController::modificarContacto");
$app->delete("/contactos/{id}", "Sail3\Controller\ContactosController::eliminarContacto");
