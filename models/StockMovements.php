<?php
namespace Model;

class StockMovements extends ActiveRecord {
    protected static $table = 'stock_movements';
    protected static $columnsDB = ['id','idArticle','amount','date','idUser'];

    public $id;
    public $idArticle;
    public $amount;
    public $date;
    public $idUser;

    public function __construct($args = []) {
        $this->id = $args['id'] ?? null;
        $this->idArticle = $args['idArticle'] ?? '';
        $this->amount = $args['amount'] ?? '';
        $this->date = $args['date'] ?? '';
        $this->idUser = $args['idUser'] ?? '';
    }
}