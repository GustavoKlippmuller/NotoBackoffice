<?php

namespace Model;

class Profile extends ActiveRecord {
    protected static $tabla = 'recipe_detail';
    protected static $columnasDB = ['id','idRecipe','idArticle','amount', 'date', 'idUser', 'discharged'];

    public $id;
    public $idRecipe;
    public $idArticle;
    public $amount;
    public $date;
    public $idUser;
    public $discharged;

    public function __construct($args = []) {
        $this->id = $args['id'] ?? null;
        $this->idRecipe = $args['idRecipe'] ?? '';
        $this->idArticle = $args['idArticle'] ?? '';
        $this->amount = $args['amount'] ?? '';
        $this->date = $args['date'] ?? '';
        $this->idUser = $args['idUser'] ?? '';
        $this->discharged = $args['discharged'] ?? '';
    }
}