<?php
include_once 'conn/db.php';

$featuredOnly = $featuredOnly ?? false;
$orderBy = $orderBy ?? null;
$limit = $limit ?? null;

/* // Filtrar productos activos
$products = array_filter($products, function ($product) {
    return $product['active'] === true;
}); */

// Filtrar destacados
if ($featuredOnly) {
    $products = array_filter($products, function ($product) {
        return $product['best'] === true;
    });
}
//orden
if ($orderBy === 'popularity') {
    uasort($products, function ($a, $b) {
        return $b['popularity'] <=> $a['popularity'];
    });
} elseif ($orderBy === 'az') {
    uasort($products, function ($a, $b) {
        return strcasecmp($a['name'], $b['name']);
    });
} elseif ($orderBy === 'za') {
    uasort($products, function ($a, $b) {
        return strcasecmp($b['name'], $a['name']);
    });
}
//Limite
if ($limit !== null) {
    $products = array_slice($products, 0, $limit, true);
}
//filtra por cat
/* if ($categoryId !== null && $categoryId !== '') {
    $products = array_filter(
        $products,
        function ($product) use ($categoryId) {
            return $product['category_id'] == $categoryId;
        }
    );
}
//filtra por marca
if ($brand !== null && $brand !== '') {
    $products = array_filter(
        $products,
        function ($product) use ($brand) {
            return $product['brand'] === $brand;
        }
    );
} */