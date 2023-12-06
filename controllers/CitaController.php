<?php

namespace Controllers;

use MVC\Router;

class CitaController {
    public static function index( Router $router ) {

        if(!isset($_SESSION['nombre'])) {
            session_start();
        }

        // Verficamos que el usuario este autenticado
        isAuth();
        
        $router->render('cita/index', [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }
}