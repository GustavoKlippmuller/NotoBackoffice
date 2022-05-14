<?php
namespace Model;

class Transfer extends ActiveRecord {
    protected static $table = 'transfer';
    protected static $columnsDB = ['id','idPayment','transferNumber','cbu','idUser','lastupdate'];

    public $id;
    public $idPayment;
    public $transferNumber;
    public $cbu;
    public $idUser;
    public $lastupdate;

    public function __construct($args = []) {
        $this->id = $args['id'] ?? null;
        $this->idPayment = $args['idPayment'] ?? '';
        $this->transferNumber = $args['transferNumber'] ?? '';
        $this->cbu = $args['cbu'] ?? '';
        $this->idUser = $args['idUser'] ?? '';
        $this->lastupdate = $args['lastupdate'] ?? '';
    }
}