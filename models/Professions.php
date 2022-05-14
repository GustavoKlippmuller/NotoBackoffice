<?php

namespace Model;

class Professions extends ActiveRecord {
    protected static $table = 'professions';
    protected static $columnasDB = ['id','professionSP','professionEN'];

    public $id;
    public $professionSP;
    public $professionEN;

    public function __construct($args = []){
        $this->id = $args['id'] ?? null;
        $this->professionSP = $args['professionSP'] ?? '';
        $this->professionEN = $args['professionEN'] ?? '';
    }
}