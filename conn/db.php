<?php

$products = [
    [
        'id' => 1,
        'active' => true,
        'best' => false,
        'name' => 'Paracetamol 500 mg',
        'description' => 'Analgésico y antifebril. Caja de 20 comprimidos.',
        'category' => 'Medicamentos',
        'brand' => 'Tafirol',
        'popularity' => 5,
        'price' => 4500.00,
        'stock' => 35,
        'img' => 'paracetamol'
    ],
    [
        'id' => 2,
        'active' => true,
        'best' => false,
        'name' => 'Shampoo Reparador',
        'description' => 'Shampoo para cabello seco y dañado. Envase de 400 ml.',
        'category' => 'Cuidado Personal',
        'brand' => 'Pantene',
        'popularity' => 4,
        'price' => 7800.00,
        'stock' => 20,
        'img' => 'shampoosuave400'
    ],
    [
        'id' => 3,
        'active' => true,
        'best' => false,
        'name' => 'Labial Natural hidratante',
        'description' => 'Labial de larga duración, color natural, HIDRATANTE.',
        'category' => 'Maquillaje',
        'brand' => 'Maybelline',
        'popularity' => 3,
        'price' => 9500.00,
        'stock' => 15,
        'img' => 'labialhidratante'
    ],
    [
        'id' => 4,
        'active' => true,
        'best' => false,
        'name' => 'Alcohol en Gel 250ml',
        'description' => 'Gel sanitizante para manos con 70% de alcohol. 250 ml.',
        'category' => 'Higiene',
        'brand' => 'Algabo',
        'popularity' => 5,
        'price' => 3200.00,
        'stock' => 50,
        'img' => 'alcoholgel250'
    ],
    [
        'id' => 5,
        'active' => false,
        'best' => false,
        'name' => 'Multivitamínico',
        'description' => 'Suplemento con vitaminas y minerales. 30 cápsulas.',
        'category' => 'Nutrición',
        'brand' => 'Centrum',
        'popularity' => 4,
        'price' => 12500.00,
        'stock' => 25,
        'img' => 'multivitaminico'
    ],
    [
        'id' => 6,
        'active' => true,
        'best' => false,
        'name' => 'Protector Solar FPS 50',
        'description' => 'Protector solar facial y corporal resistente al agua. 200 ml.',
        'category' => 'Cuidado Personal',
        'brand' => 'Dermaglós',
        'popularity' => 5,
        'price' => 18900.00,
        'stock' => 18,
        'img' => 'protectorsolarspf50'
    ],
    [
        'id' => 7,
        'active' => true,
        'best' => true,
        'name' => 'Ibuprofeno 400 mg',
        'description' => 'Antiinflamatorio y analgésico. Caja de 10 comprimidos.',
        'category' => 'Medicamentos',
        'brand' => 'Actron',
        'popularity' => 4,
        'price' => 5200.00,
        'stock' => 40,
        'img' => 'ibuprofeno400'
    ],
    [
        'id' => 8,
        'active' => true,
        'best' => false,
        'name' => 'Pasta Dental',
        'description' => 'Pasta dental con flúor para protección anticaries. 90 g.',
        'category' => 'Higiene',
        'brand' => 'Colgate',
        'popularity' => 3,
        'price' => 4100.00,
        'stock' => 30,
        'img' => 'pastadental'
    ],
    [
        'id' => 9,
        'active' => true,
        'best' => false,
        'name' => 'Termómetro Digital',
        'description' => 'Termómetro electrónico de lectura rápida con pantalla LCD.',
        'category' => 'Otros',
        'brand' => 'Omron',
        'popularity' => 2,
        'price' => 11500.00,
        'stock' => 12,
        'img' => 'termometro'
    ],
    [
        'id' => 10,
        'active' => true,
        'best' => false,
        'name' => 'Proteína en Polvo',
        'description' => 'Suplemento proteico sabor vainilla. Envase de 500 g.',
        'category' => 'Nutrición',
        'brand' => 'ENA',
        'popularity' => 3,
        'price' => 28900.00,
        'stock' => 10,
        'img' => 'proteinavainilla900'
    ],
    [
        'id' => 11,
        'active' => true,
        'best' => false,
        'name' => 'Jarabe para la Tos',
        'description' => 'Jarabe para el alivio de la tos seca. Frasco de 120 ml.',
        'category' => 'Medicamentos',
        'brand' => 'Bisolvón',
        'popularity' => 4,
        'price' => 8900.00,
        'stock' => 25,
        'img' => 'jarabetoz'
    ],
    [
        'id' => 12,
        'active' => true,
        'best' => false,
        'name' => 'Crema Hidratante',
        'description' => 'Crema hidratante corporal para piel seca y sensible. Envase de 250 ml.',
        'category' => 'Cuidado Personal',
        'brand' => 'Nivea',
        'popularity' => 4,
        'price' => 8500.00,
        'stock' => 25,
        'img' => 'cremahidratante'
    ]
];

$categories = [
    1 => 'Cuidado Personal',
    2 => 'Medicamentos',
    3 => 'Maquillaje',
    4 => 'Higiene',
    5 => 'Nutrición',
    6 => 'Otros'
];

$users = [
    [
        'id' => 1,
        'name' => 'Pedro admin',
        'email' => 'pedroadmin@ejemplo.com',
        'password' => '123456',
        'admin' => true,
        'active' => true,
        'date' => "08/05/26"
    ],
    [
        'id' => 2,
        'name' => 'Juan ',
        'email' => 'juan@ejemplo.com',
        'password' => '123456',
        'admin' => false,
        'active' => true,
        'date' => "10/10/26"

    ]
];
