<?php
if (isset($_SESSION['user']) && isset($_SESSION['isAdmin']) && $_SESSION['isAdmin'] === true) {
    header("Location: index.php?page=adminpanel");
}
$featuredOnly = true;
$orderBy = 'popularity';
$limit = 6;

include 'includes/process/getProducts.php';
$user = $_SESSION['user'] ?? '';
?>


<h1>Bienvenido!!!</h1>
<section class="container">
    <h2>Productos Destacados</h2>
    <div class="row">
        <?php
        require_once 'includes/components/productList.php';
        ?>
    </div>

</section>