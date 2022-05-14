<?php

namespace Model;

class Costs extends ActiveRecord {
    protected static $tabla = 'costs';
    protected static $columnasDB = ['id','idArticle','valueAR', 'valueUS', 'dollarExchange', 'lastUpdate', 'idUser', 'validityUntil'];

    public $id;
    public $idArticle;
    public $valueAR;
    public $valueUS;
    public $dollarExchange;
    public $lastUpdate;
    public $idUser;
    public $validityUntil;

    public function __construct($args = []) {
        $this->id = $args['id'] ?? null;
        $this->idArticle = $args['idArticle'] ?? '';
        $this->valueAR = $args['valueAR'] ?? '';
        $this->valueUS = $args['valueUS'] ?? '';
        $this->dollarExchange = $args['dollarExchange'] ?? '';
        $this->lastUpdate = $args['lastUpdate'] ?? '';
        $this->idUser = $args['idUser'] ?? '';
        $this->validityUntil = $args['validityUntil'] ?? '';
    }
}