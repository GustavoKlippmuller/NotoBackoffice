<?php

namespace Controllers;

use MVC\Router;

class MenuController {
    public static function menu(Router $router) {
        if(isLocalHost()) session_start();
        isAuth();
        echo 'Desde Menu';
    }
}