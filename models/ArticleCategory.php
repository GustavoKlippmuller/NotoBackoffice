<?php

namespace Model;

class ArticleCategory extends ActiveRecord {
    protected static $tabla = 'article_category';
    protected static $columnasDB = ['id','idArticle','idCategory', 'idUser'];

    public $id;
    public $idArticle;
    public $idCategory;
    public $date;
    public $idUser;

    public function __construct($args = []) {
        $this->id = $args['id'] ?? null;
        $this->idArticle = $args['idArticle'] ?? '';
        $this->idCategory = $args['idCategory'] ?? '';
        $this->date = $args['date'] ?? '';
        $this->idUser = $args['idUser'] ?? '';
    }
}