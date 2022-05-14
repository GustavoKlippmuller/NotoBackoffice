<?php

namespace Model;

class Recipe extends ActiveRecord {
    protected static $tabla = 'recipe';
    protected static $columnasDB = ['id','idModel','lastUpdate','idUser'];

    public $id;
    public $idModel;
    public $lastUpdate;
    public $idUser;

    public function __construct($args = []) {
        $this->id = $args['id'] ?? null;
        $this->idModel = $args['idModel'] ?? '';
        $this->lastUpdate = $args['lastUpdate'] ?? '';
        $this->idUser = $args['idUser'] ?? '';
    }
}