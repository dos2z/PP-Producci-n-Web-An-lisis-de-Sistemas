<?php
$limit = 6;
$orderBy = "popularity";
include_once 'includes/process/getProducts.php';
$user = $_SESSION['user'] ?? '';
?>


<h1>Bienvenido!!!</h1>
<section class = "container">
    <h2>Productos Destacados</h2>
    <div class="row">
        <?php
        require_once 'includes/components/productList.php';
        ?>
    </div>

</section>