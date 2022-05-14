<?php
namespace Model;

class Deposit extends ActiveRecord {
    protected static $table = 'deposit';
    protected static $columnasDB = ['id','idPayment','operationNumber','idUser','lastupdate'];

    public $id;
    public $idPayment;
    public $operationNumber;
    public $idUser;
    public $lastupdate;

    public function __construct($args = []) {
        $this->id = $args['id'] ?? null;
        $this->idPayment = $args['idPayment'] ?? '';
        $this->operationNumber = $args['operationNumber'] ?? '';
        $this->idUser = $args['idUser'] ?? '';
        $this->lastupdate = $args['lastupdate'] ?? '';
    }
}