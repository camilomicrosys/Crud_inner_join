<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('LoginController');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

//rutas del login
$routes->get('/', 'LoginController::login', ['as' => 'principal']);
$routes->post('/procesarLogin', 'LoginController::procesarLogin', ['as' => 'procesarLogin']);
$routes->get('/inicio-aplicacion', 'LoginController::inicioSesion', ['as' => 'inicioSesion']);
$routes->get('/sesion-finalizada', 'LoginController::cerrarSesion', ['as' => 'cerrarSesion']);



//rutas del sistema Administrador
//gestionar usuarios
$routes->get('/gestionar-usuarios', 'EmpleadosController::gestionarUsuarios', ['as' => 'gestionarUsuarios']);
//buscador como se ejecuta en la misma ruta le creamos para el post
$routes->post('/gestionar-usuarios', 'EmpleadosController::gestionarUsuarios', ['as' => 'gestionarUsuariosformBuscador']);
//editar usuario
$routes->get('/editar-usuario/(:any)', 'EmpleadosController::editarUsuario/$1');

//Borrar usuario
$routes->get('/Borrar-usuario/(:any)', 'EmpleadosController::borrarUsuario/$1');
//creacion de usuario
$routes->post('/crear-usuarios', 'EmpleadosController::crearUsuarios', ['as' => 'crearusuarios']);
//actualizacion de usuarios
$routes->post('/actualizar-usuarios', 'EmpleadosController::actualizarUsuarios', ['as' => 'actualizarUsuarios']);

//realizar una solicitud
$routes->get('/solicitud', 'EmpleadosController::solicitud', ['as' => 'liquidarSolicitud']);
//crear la solicitur

$routes->post('/crear-solicitud', 'EmpleadosController::liquidacionsoli', ['as' => 'liquidacionsoli']);
//podemos ver las solicitudes en general
$routes->get('/listar-solicitudes', 'EmpleadosController::listarSolicitudesTotales', ['as' => 'listarSolicitudesTotales']);

//editar una solicitud
//podemos ver las solicitudes en general
$routes->get('/editar-solicitudes/(:any)', 'EmpleadosController::editarSolicitud/$1', ['as' => 'editarSolicitud']);

//actualizarSolicitud
$routes->post('/actualizarSolicitud-solicitud', 'EmpleadosController::actualizarSolicitud', ['as' => 'actualizarSolicitud']);

//Borrar-solicitud
$routes->get('/Borrar-solicitud/(:any)', 'EmpleadosController::borrarSolicitud/$1', ['as' => 'borrarSolicitud']);







/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
