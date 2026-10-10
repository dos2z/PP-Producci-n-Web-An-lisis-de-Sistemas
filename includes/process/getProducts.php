<?php
include_once 'conn/db.php';
$products = $products ?? [];

if (!$products) {
    $_GET["message"] = "No hay productos para mostrar";
}
