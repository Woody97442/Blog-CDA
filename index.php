<?php
// Démarrage de la session
session_start();

require('models/db.php');

// Si la page n'est pas définie
if (!isset($_GET["page"])) {
    // On affiche la page d'accueil
    require('templates/homePage.php');
    return;
}

$requestPage = $_GET['page'];
$routes = require('routes.php');

if (array_key_exists($requestPage, $routes)) {
    $controllerName = $routes[$requestPage];
    require_once('controllers/' . $controllerName . '.php');
} else {
    // Gérer les pages non trouvées (404)
    require('templates/error404.php');
}
