<?php
namespace Model;

class PaymentMethods extends ActiveRecord {
    protected static $table = 'payment_methods';
    protected static $columnasDB = ['id','name','enabled','idUser','lastupdate'];

    public $id;
    public $name;
    public $enabled;
    public $idUser;
    public $lastupdate;

    public function __construct($args = []) {
        $this->id = $args['id'] ?? null;
        $this->name = $args['name'] ?? '';
        $this->enabled = $args['enabled'] ?? '';
        $this->idUser = $args['idUser'] ?? '';
        $this->lastupdate = $args['lastupdate'] ?? '';
    }
}