<?php
namespace Model;

class Payment extends ActiveRecord {
    protected static $table = 'payment';
    protected static $columnasDB = ['id','idSales','idPaymentMethod','amount','idUser','lastupdate'];

    public $id;
    public $idSales;
    public $idPaymentMethod;
    public $amount;
    public $idUser;
    public $lastupdate;

    public function __construct($args = []) {
        $this->id = $args['id'] ?? null;
        $this->idSales = $args['idSales'] ?? '';
        $this->idPaymentMethod = $args['idPaymentMethod'] ?? '';
        $this->amount = $args['amount'] ?? '';
        $this->idUser = $args['idUser'] ?? '';
        $this->lastupdate = $args['lastupdate'] ?? '';
    }
}