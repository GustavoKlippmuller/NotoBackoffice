<?php
if(isLocalHost()) $db = mysqli_connect('localhost', 'root', '', 'noto_backoffice');
else $db = mysqli_connect('localhost', 'u199399288_notoAdmin', 'notoGroup2022', 'u199399288_noto_group');


if (!$db) {
    echo "Error: No se pudo conectar a MySQL.";
    echo "errno de depuración: " . mysqli_connect_errno();
    echo "error de depuración: " . mysqli_connect_error();
    exit;
}
