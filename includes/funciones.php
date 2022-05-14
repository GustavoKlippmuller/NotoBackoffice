<?php

function debuguear($variable) : string {
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;
}

function s($html) : string { return htmlspecialchars($html); }

function isAuth() : void {
    if(!isset($_SESSION['login'])) header('Location: /');
}

function isPost() : bool { return $_SERVER['REQUEST_METHOD'] === 'POST'; }

function isGet() : bool { return $_SERVER['REQUEST_METHOD'] === 'GET'; }

function isLocalHost() : bool { return $_SERVER['SERVER_NAME'] === 'localhost'; }