<?php

$products = [
    [
        'id' => 1,
        'name' => 'Producto 1',
        'description' => 'Descripción del producto 1',
        'category' => 'Categoría 1',
        'price' => 10.99,
        'stock' => 5
    ],
    [
        'id' => 2,
        'name' => 'Producto 2',
        'description' => 'Descripción del producto 2',
        'category' => 'Categoría 2',
        'price' => 19.99,
        'stock' => 3
    ],
    [
        'id' => 3,
        'name' => 'Producto 3',
        'description' => 'Descripción del producto 3',
        'category' => 'Categoría 1',
        'price' => 5.99,
        'stock' => 10
    ]
];


echo "<pre>";
print_r($_POST);
echo "</pre>";