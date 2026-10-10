<?php
include_once 'conn/db.php';
$users = $users ?? [];

if (!$users) {
    $_GET["message"] = "No hay Usuarios cargados";
}