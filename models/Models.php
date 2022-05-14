<?php

namespace Model;

use Model\ActiveRecord;

class Models extends ActiveRecord {
    protected static $table = 'models';
    protected static $columnasDB = ['id','model_name'];

    public $id;
    public $model_name;

    public function __construct($args = []) {
        $this->id = $args['id'] ?? null;
        $this->model_name = $args['model_name'] ?? '';
    }
}