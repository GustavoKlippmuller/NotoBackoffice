<?php

namespace Classes;

use PHPMailer\PHPMailer\PHPMailer;

class Email {

    public $email;
    public $nombre;
    public $token;

    //private $username = '2de446ca47a6c0';
    //private $password = '3f1b5dd7d1b4f6';

    private $username = 'no-answer@kapa8technologies.com';
    private $password = 'Admin123456';   
    
    public function __construct($email, $nombre, $token) {
        $this->email = $email;
        $this->nombre = $nombre;
        $this->token = $token;
    }

    public function enviarConfirmacion() {

         $mail = $this->createEmail();
     
         $mail->setFrom('cuentas@appsalon.com');
         $mail->addAddress('cuentas@appsalon.com', 'AppSalon.com');
         $mail->Subject = 'Confirma tu Cuenta';

         // Set HTML
         $mail->isHTML(TRUE);
         $mail->CharSet = 'UTF-8';

         $contenido = '<html>';
         $contenido .= "<p><strong>Hola " . $this->email .  "</strong> Has Creado tu cuenta en App Salón, solo debes confirmarla presionando el siguiente enlace</p>";
         $contenido .= "<p>Presiona aquí: <a href='http://localhost:8000/confirmar-cuenta?token=" . $this->token . "'>Confirmar Cuenta</a>";        
         $contenido .= "<p>Si tu no solicitaste este cambio, puedes ignorar el mensaje</p>";
         $contenido .= '</html>';
         $mail->Body = $contenido;

         //Enviar el mail
         $mail->send();

    }

    public function enviarInstrucciones() {

         $mail = $this->createEmail();
   
         $mail->setFrom('no-answer@kapa8technologies.com');
         $mail->addAddress($this->email, $this->nombre);
         $mail->Subject = 'Reestablece tu password';
 
         $mail->isHTML(TRUE);
         $mail->CharSet = 'UTF-8';
 
         $contenido = '<html>';
         $contenido .= "<p><strong>Hola " . $this->nombre .  "</strong> Has solicitado reestablecer tu password, sigue el siguiente enlace para hacerlo.</p>";
         $contenido .= "<p>Presiona aquí: <a href='" . $this->endpoint() . "recuperar?token=" . $this->token . "'>Reestablecer Password</a>";        
         $contenido .= "<p>Si tu no solicitaste este cambio, puedes ignorar el mensaje</p>";
         $contenido .= '</html>';
         $mail->Body = $contenido;

         $mail->send();
    }

    private function createEmail() : PHPMailer {
        $mail = new PHPMailer();
        $mail->isSMTP();
        //$mail->Host = 'smtp.mailtrap.io';
        $mail->Host = 'smtp.hostinger.com';
        $mail->SMTPAuth = true;
        //$mail->Port = 2525;
        $mail->Port = 587;
        $mail->Username = $this->username;
        $mail->Password = $this->password;
        return $mail;
    }

    private function endpoint() : string {
        if(isLocalHost()) return 'http://localhost:8000/';
        else return 'https://www.kapa8technologies.com/';
    }
}