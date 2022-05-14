<?php

namespace Model;

class Sales extends ActiveRecord {
    protected static $table = 'sales';
    protected static $columnasDB = ['id','idClient','idEquipment','verified_warranty','price','date','idUser','lastupdate'];

    public $id;
    public $idClient;
    public $idEquipment;
    public $verified_warranty;
    public $price;
    public $date;
    public $idUser;
    public $lastupdate;

    public function __construct($args = []) {
        $this->id = $args['id'] ?? null;
        $this->idClient = $args['idClient'] ?? '';
        $this->idEquipment = $args['idEquipment'] ?? '';
        $this->verified_warranty = $args['verified_warranty'] ?? '';
        $this->price = $args['price'] ?? '';
        $this->date = $args['date'] ?? '';
        $this->idUser = $args['idUser'] ?? '';
        $this->lastupdate = $args['lastupdate'] ?? '';
    }
}