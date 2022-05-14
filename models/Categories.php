<?php

namespace Model;

class Categories extends ActiveRecord {
    protected static $tabla = 'categories';
    protected static $columnasDB = ['id','profileEN','profileSP','code'];

    public $id;
    public $description;
    public $date;
    public $idUser;

    public function __construct($args = []) {
        $this->id = $args['id'] ?? null;
        $this->description = $args['description'] ?? '';
        $this->date = $args['date'] ?? '';
        $this->idUser = $args['idUser'] ?? '';
    }
}