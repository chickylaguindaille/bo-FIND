<?php

use App\Kernel;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Dotenv\Dotenv;

require dirname(__DIR__).'/vendor/autoload.php';

// Vérifier si on est en production
$env = getenv('APP_ENV');

if (!$env) {
    // Si APP_ENV n'est pas défini, on suppose qu'on est en local et on charge .env
    if (file_exists(dirname(__DIR__).'/.env')) {
        (new Dotenv())->load(dirname(__DIR__).'/.env');
    }
    $env = getenv('APP_ENV') ?: 'dev';
} else {
    // Si on est en prod, on empêche le chargement de .env
    putenv('SYMFONY_DOTENV_VARS=1');
}

$debug = (bool) (getenv('APP_DEBUG') ?: ('prod' !== $env));

if ($debug) {
    umask(0000);
    Symfony\Component\ErrorHandler\Debug::enable();
}

// Configuration des proxys et hôtes de confiance
if ($trustedProxies = getenv('TRUSTED_PROXIES')) {
    Request::setTrustedProxies(explode(',', $trustedProxies), Request::HEADER_X_FORWARDED_ALL ^ Request::HEADER_X_FORWARDED_HOST);
}

if ($trustedHosts = getenv('TRUSTED_HOSTS')) {
    Request::setTrustedHosts(explode(',', $trustedHosts));
}

// Initialisation du Kernel
$kernel = new Kernel($env, $debug);
$request = Request::createFromGlobals();

// Récupérer les routes du container Symfony
$kernel->boot(); // Initialiser le kernel avant d'accéder au container
$router = $kernel->getContainer()->get('router'); // Récupérer le service router
$routes = $router->getRouteCollection(); // Obtenir toutes les routes

// Afficher les routes avec var_dump
// exit(var_dump($env . " " . $debug));

$response = $kernel->handle($request);
$response->send();
$kernel->terminate($request, $response);
