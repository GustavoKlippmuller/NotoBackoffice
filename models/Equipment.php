<?php

namespace Model;

class Equipment extends ActiveRecord {
    protected static $table = 'equipment';
    protected static $columnasDB = [
        'id',
        'idModel',
        'serial_number',
        'lot_number',
        'control_number',
        'lastupdate',
        'iduser'];
    
    public $id;
    public $idModel;
    public $serial_number;
    public $lot_number;
    public $control_number;
    public $lastupdate;
    public $model_name;
    public $iduser;

    public function __construct($args = []) {
        $this->id = $args['id'] ?? null;
        $this->idModel = $args['idModel'] ?? null;
        $this->serial_number = $args['serial_number'] ?? null;
        $this->lot_number = $args['lot_number'] ?? date('Ymd');
        $this->control_number = $args['control_number'] ?? null;
        $this->iduser = $args['iduser'] ?? '';
    }
    
}