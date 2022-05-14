<?php
namespace Model;

use Model\Profile;

class Users extends ActiveRecord {
    protected static $tabla = 'users';
    protected static $columnasDB = [
        'id',
        'firstname',
        'lastname',
        'username',
        'email',
        'password',
        'lastChangePass',
        'lastUpdate',
        //'dischargeDate',
        'idProfile',
        'confirmed',
        'token'];

    public $id;
    public $firstname;
    public $lastname;
    public $username;
    public $email;
    public $password;
    public $lastChangePass;
    public $lastUpdate;
    //public $dischargeDate;
    public $idProfile;
    public $code;
    public $profileSP;
    public $confirmed;
    public $token;

    public function __construct($args = []){
        $this->id = $args['id'] ?? null;
        $this->firstname = $args['firstname'] ?? '';
        $this->lastname = $args['lastname'] ?? '';
        $this->username = $args['username'] ?? '';
        $this->email = $args['email'] ?? '';
        $this->password = $args['password'] ?? '';
        $this->lastChangePass = $args['lastChangePass'] ?? '';
        $this->lastUpdate = $args['lastUpdate'] ?? '';
        //$this->dischargeDate = $args['dischargeDate'] ?? null;
        $this->idProfile = $args['idProfile'] ?? null;
        $this->confirmed = $args['confirmed'] ?? null;
        $this->token = $args['token'] ?? null;
    }

    public function validate() : array {
        if(!$this->username) self::$alertas['error'][] = 'El username es obligatorio';
        if(!$this->password) self::$alertas['error'][] = 'El password es obligatorio';
        return self::$alertas;
    }

    public function validarEmail() {
        if(!$this->email) self::$alertas['error'][] = 'El email es Obligatorio';
        return self::$alertas;
    }

    public function userExist() {
        $query = "SELECT id, firstname, lastname, username, email, password, lastChangePass, lastUpdate, dischargeDate, idProfile, confirmed, token ";
        $query .= "FROM users WHERE username = '". $this->username . "' LIMIT 1;";
        $result = self::$db->query($query);
        if(!$result->num_rows):
            self::$alertas['error'][] = 'El usuario no Existe';
            return;
        endif;
        return $result;
    }

    public function checkPassword($result) {
        $user = $result->fetch_object();
        $authenticated = password_verify($this->password, $user->password);
        if(!$authenticated):
            self::$alertas['error'][] = 'El Password es Incorrecto';
        else:
            $profile = Profile::find($user->idProfile);
            $this->code = $profile->code;
            $this->profileSP = $profile->profileSP;
            $this->firstname = $user->firstname;
            $this->lastname = $user->lastname;
            $this->id = $user->id;
        endif;
        return $authenticated;
    }

    public function authenticate() {
        if(isLocalHost()) session_start();
        $_SESSION['username'] = $this->username;
        $_SESSION['login'] = true;
        $_SESSION['profileCode'] = $this->code;
        $_SESSION['profileDesc'] = $this->profileSP;
        $_SESSION['name_user'] = $this->lastname . ', ' . $this->firstname;
        $_SESSION['idUser'] = $this->id;
        header('Location: /menu');
    }

    public static function findByUsername($username) {
        $query = "SELECT id FROM " . static::$tabla . " WHERE username='${username}'";
        $result = self::consultarSQL($query);
        return array_shift($result);
    }

    public function hashPassword() { $this->password = password_hash($this->password, PASSWORD_BCRYPT); }

    public function crearToken() { $this->token = uniqid(); }

    public function validarPassword() {
        if(!$this->password) self::$alertas['error'][] = 'El Password es obligatorio';
        if(strlen($this->password) < 6) self::$alertas['error'][] = 'El Password debe tener al menos 6 caracteres';
        return self::$alertas;
    }

}