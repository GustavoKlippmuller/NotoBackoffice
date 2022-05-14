<?php

namespace Model;

class Articles extends ActiveRecord {
    protected static $tabla = 'articles';
    protected static $columnasDB = ['id','itemCode','description','amount', 'optimumLevel', 'ordinaryLevel', 'criticalLevel', 'idUser', 'lastUpdate'];

    public $id;
    public $itemCode;
    public $description;
    public $amount;
    public $optimumLevel;
    public $ordinaryLevel;
    public $criticalLevel;
    public $idUser;
    public $lastUpdate;

    public function __construct($args = []) {
        $this->id = $args['id'] ?? null;
        $this->itemCode = $args['itemCode'] ?? '';
        $this->description = $args['description'] ?? '';
        $this->amount = $args['amount'] ?? '';
        $this->optimumLevel = $args['optimumLevel'] ?? '';
        $this->ordinaryLevel = $args['ordinaryLevel'] ?? '';
        $this->criticalLevel = $args['criticalLevel'] ?? '';
        $this->idUser = $args['idUser'] ?? '';
        $this->lastUpdate = $args['lastUpdate'] ?? '';
    }
}