<?php

namespace Controllers;

use Model\Users;
use MVC\Router;
use Classes\Email;

class LoginController {

    public static function index(Router $router) {
        if(isLocalHost()) session_start();
        if(!isset($_SESSION['name_user'])) $_SESSION['name_user'] = '';
        if(!isset($_SESSION['idUser'])) $_SESSION['idUser'] = '';
        
        if(isPost()) {
            $auth = new Users($_POST);
            if(empty($auth->validate())) :
                $result = $auth->userExist();
                if($result) : 
                    if($auth->checkPassword($result)) $auth->authenticate();
                endif;
            endif;
        }

        $router->render('auth/login',[
            'inicio' => true,
            'alertas' => Users::getAlertas(),
            'username' => '',
            'password' => ''
        ]);
    }

    public static function logout() {
        if(isLocalHost()) session_start();
        $_SESSION = [];
        header('Location: /');
    }

    public static function olvide(Router $router) {
        if(isLocalHost()) session_start();
        if(isPost()):
            $auth = new Users($_POST);
            if(empty($auth->validarEmail())):
                $usuario = Users::where('email', $auth->email);

                if($usuario && $usuario->confirmed === "1"):
                    $usuario->crearToken();
                    $usuario->guardar();
                    $email = new Email($usuario->email, $usuario->lastname . ', ' . $usuario->firstname, $usuario->token);
                    $email->enviarInstrucciones();
                    Users::setAlerta('exito', 'Revisa tu email');
                else:
                    Users::setAlerta('error', 'El Usuario no existe o no esta confirmado');
                endif;
            endif;
        endif;
        $router->render('auth/olvide-password',[
            'alertas' => Users::getAlertas(),
            'inicio' => true,
            'email' => ''
        ]);
    }

    public static function recuperar(Router $router) {
        if(isLocalHost()) session_start();
        $error = false;
        $usuario = Users::where('token', s($_GET['token']));
        if(empty($usuario)):
            Users::setAlerta('error', 'Token No Válido');
            $error = true;
        endif;
        if(isPost()):
            $password = new Users($_POST);
            if(empty($password->validarPassword())) :
                $usuario->password = null;

                $usuario->password = $password->password;
                $usuario->hashPassword();
                $usuario->token = null;

                if($usuario->guardar()) header('Location: /');
            endif;
        endif;
        $router->render('auth/recuperar-password', [
            'alertas' => Users::getAlertas(), 
            'error' => $error,
            'inicio' => true
        ]);
    }
}