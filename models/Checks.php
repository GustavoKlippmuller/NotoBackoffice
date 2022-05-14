<?php

namespace Model;

class Checks extends ActiveRecord {
    protected static $tabla = 'checks';
    protected static $columnasDB = ['id','idPayment','accreditation_date','number', 'bank', 'idUser', 'lastUpdate'];

    public $id;
    public $idPayment;
    public $accreditation_date;
    public $number;
    public $bank;
    public $idUser;
    public $lastUpdate;

    public function __construct($args = []) {
        $this->id = $args['id'] ?? null;
        $this->idPayment = $args['idPayment'] ?? '';
        $this->accreditation_date = $args['accreditation_date'] ?? '';
        $this->number = $args['number'] ?? '';
        $this->bank = $args['bank'] ?? '';
        $this->idUser = $args['idUser'] ?? '';
        $this->lastUpdate = $args['lastUpdate'] ?? '';
    }
}