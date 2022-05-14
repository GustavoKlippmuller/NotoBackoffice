<?php

namespace Model;

class Profile extends ActiveRecord {
    protected static $tabla = 'profile';
    protected static $columnasDB = ['id','profileEN','profileSP','code'];

    public $id;
    public $profileEN;
    public $profileSP;
    public $code;

    public function __construct($args = []) {
        $this->id = $args['id'] ?? null;
        $this->profileEN = $args['profileEN'] ?? '';
        $this->profileSP = $args['profileSP'] ?? '';
        $this->code = $args['code'] ?? '';
    }
}