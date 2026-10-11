<?php
include_once 'conn/db.php';
$prodId = $_GET['id'] ?? null;
$index = array_search($prodId, array_column($products, 'id'));
$product = $products[$index];
$ranking = 100 * ($product['popularity'] / 5);
$ranking = round($ranking, 1);
?>

<h1>Reviews de producto <?= $product['name'] ?></h1>

<div class="progress" role="progressbar" aria-valuenow=<?= $ranking ?> aria-valuemin="0" aria-valuemax="100">
    <div class="progress-bar bg-warning bold" style="width: <?= $ranking ?>%"><?= $product['popularity'] ?? 0 ?></div>
</div>