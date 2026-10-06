<?php
$limit = 6;
$orderBy = "popularity";
$products = [1,2,3,4,5,6];
?>


<h1>Bienvenidos!!!</h1>
<section class = "container">
    <h2>Productos Destacados</h2>
    <div class="row">
        <?php
        require_once 'includes/components/productList.php';
        ?>
    </div>

</section>