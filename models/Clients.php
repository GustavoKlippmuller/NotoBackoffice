<?php

namespace Model;

class Clients extends ActiveRecord {
    protected static $table = 'clients';
    protected static $columnasDB = [
        'id',
        'lastname',
        'firstname',
        'cuil_cuit',
        'business_name',
        'street_name',
        'number',
        'edifice',
        'floor',
        'department',
        'city',
        'state',
        'zipcode',
        'phonenumber',
        'email',
        'idProfession',
        'birthday',
        'lastupdate',
        'iduser',
        'school'];

    public $id;
    public $lastname;
    public $firstname;
    public $cuil_cuit;
    public $business_name;
    public $street_name;
    public $number;
    public $edifice;
    public $floor;
    public $department;
    public $city;
    public $state;
    public $zipcode;
    public $phonenumber;
    public $email;
    public $idProfession;
    public $birthday;
    public $lastupdate;
    public $iduser;
    public $school;

    public function __construct($args = []){

        $this->id = $args['id'] ?? null;
        $this->lastname = $args['lastname'] ?? '';
        $this->firstname = $args['firstname'] ?? '';
        $this->cuil_cuit = $args['cuil_cuit'] ?? '';
        $this->business_name = $args['business_name'] ?? '';
        $this->street_name = $args['street_name'] ?? '';
        $this->number = $args['number'] ?? '';
        $this->edifice = $args['edifice'] ?? '';
        $this->floor = $args['floor'] ?? '';
        $this->department = $args['department'] ?? '';
        $this->city = $args['city'] ?? '';
        $this->state = $args['state'] ?? '';
        $this->zipcode = $args['zipcode'] ?? '';
        $this->phonenumber = $args['phonenumber'] ?? '';
        $this->email = $args['email'] ?? '';
        $this->idProfession = $args['idProfession'] ?? '';
        $this->birthday = $args['birthday'] ?? '';
        $this->iduser = $args['iduser'] ?? '';
        $this->school = $args['school'] ?? '';
    }

}