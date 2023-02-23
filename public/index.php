<?php 

require_once __DIR__ . '/../includes/app.php';

use Controllers\APIEventos;
use Controllers\APIPonentes;
use Controllers\DashboardController;
use Controllers\AuthController;
use Controllers\PonentesController;
use Controllers\EventosController;
use Controllers\PaginasController;
use Controllers\RegistradosController;
use Controllers\RegalosController;
use Controllers\RegistroController;
use MVC\Router;

$router = new Router();


// Login
$router->get('/login', [AuthController::class, 'login']);
$router->post('/login', [AuthController::class, 'login']);
$router->post('/logout', [AuthController::class, 'logout']);

// Crear Cuenta
$router->get('/registro', [AuthController::class, 'registro']);
$router->post('/registro', [AuthController::class, 'registro']);

// Formulario de olvide mi password
$router->get('/olvide', [AuthController::class, 'olvide']);
$router->post('/olvide', [AuthController::class, 'olvide']);
 
// Colocar el nuevo password
$router->get('/reestablecer', [AuthController::class, 'reestablecer']);
$router->post('/reestablecer', [AuthController::class, 'reestablecer']);

// Confirmación de Cuenta
$router->get('/mensaje', [AuthController::class, 'mensaje']);
$router->get('/confirmar-cuenta', [AuthController::class, 'confirmar']);

// Area de adminisrtacion 
$router->get('/admin/dashboard', [DashboardController::class, 'index']);

// Ponentes
$router->get('/admin/ponentes', [PonentesController::class, 'index']);

$router->get('/admin/ponentes/crear', [PonentesController::class, 'crear']);
$router->post('/admin/ponentes/crear', [PonentesController::class, 'crear']);

$router->get('/admin/ponentes/editar', [PonentesController::class, 'editar']);
$router->post('/admin/ponentes/editar', [PonentesController::class, 'editar']);

$router->post('/admin/ponentes/eliminar', [PonentesController::class, 'eliminar']);

// Eventos
$router->get('/admin/eventos', [EventosController::class, 'index']);
$router->get('/admin/eventos/crear', [EventosController::class, 'crear']);
$router->post('/admin/eventos/crear', [EventosController::class, 'crear']);

$router->get('/admin/eventos/editar', [EventosController::class, 'editar']);
$router->post('/admin/eventos/editar', [EventosController::class, 'editar']);

$router->post('/admin/eventos/eliminar', [EventosController::class, 'eliminar']);

// Api de eventos 
$router->get('/api/eventos-horario', [APIEventos::class, 'index']);

$router->get('/api/ponentes', [APIPonentes::class, 'index']);
$router->get('/api/ponente', [APIPonentes::class, 'ponente']);

// Registros
$router->get('/admin/registrados', [RegistradosController::class, 'index']);

// Regalos
$router->get('/admin/regalos', [RegalosController::class, 'index']);

// Registro de usuarios
$router->get('/finalizar-registro', [RegistroController::class, 'crear']);
$router->post('/finalizar-registro/gratis', [RegistroController::class, 'gratis']);
$router->post('/finalizar-registro/pagar', [RegistroController::class, 'pagar']);
$router->get('/finalizar-registro/conferencias', [RegistroController::class, 'conferencias']);

// Boleto virtual 
$router->get('/boleto', [RegistroController::class, 'boleto']);

// Área publica
$router->get('/', [PaginasController::class, 'index']);
$router->get('/devwebcamp', [PaginasController::class, 'evento']);
$router->get('/paquetes', [PaginasController::class, 'paquetes']);
$router->get('/workshops-conferencias', [PaginasController::class, 'conferencias']);

$router->get('/404', [PaginasController::class, 'error']);

$router->comprobarRutas();