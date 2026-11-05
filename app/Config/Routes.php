<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
// Rotas públicas do site.
$routes->get('/', 'ConteudoController::index');
$routes->get('/home', 'ConteudoController::index');
$routes->get('/contato', 'ConteudoController::contato');
$routes->get('/quemsou', 'ConteudoController::quemsou');
$routes->get('/produtos', 'ConteudoController::produtos');
$routes->get('sobre', 'Site::sobre');

// Área administrativa protegida pelo filtro de sessão do Shield.
$routes->group('admin', ['filter' => 'session'], static function ($routes) {
    $routes->get('/', 'Admin::index');
    $routes->get('usuarios', 'Admin\Usuarios::index');
    $routes->get('usuarios/novo', 'Admin\Usuarios::create');
    $routes->post('usuarios', 'Admin\Usuarios::store');
});

// Rotas padrão de autenticação do Shield (login, cadastro, logout etc.).
service('auth')->routes($routes);

// Exemplo de rota exclusiva para administradores
$routes->get('admin', 'Admin\Painel::index', [
    'filter' => ['session', 'group:admin'],
]);
