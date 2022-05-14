<?php
namespace Model;

class CreditCard extends ActiveRecord {
    protected static $table = 'credit_card';
    protected static $columnasDB = ['id','idPayment','feesAmount','feesValues','idUser','lastupdate'];

    public $id;
    public $idPayment;
    public $feesAmount;
    public $feesValues;
    public $lastupdate;
    public $idUser;

    public function __construct($args = []) {
        $this->id = $args['id'] ?? null;
        $this->idPayment = $args['idPayment'] ?? null;
        $this->feesAmount = $args['feesAmount'] ?? null;
        $this->feesValues = $args['feesValues'] ?? null;
        $this->lastupdate = $args['lastupdate'] ?? null;
        $this->idUser = $args['idUser'] ?? null;
    }

}