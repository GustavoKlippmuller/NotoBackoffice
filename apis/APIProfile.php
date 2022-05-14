<?php

namespace API;

use Model\Profile;

class APIProfile {
    public static function getAll() {
        echo json_encode(Profile::all());
    }

    public static function create($args = []) {
        $profile = new Profile($args);
        $resuultado = $profile->guardar();
        echo json_encode($resuultado);
    }

}