<?php
include_once 'includes/process/getProducts.php';
include_once 'includes/process/getCategories.php';

//$products = [];
?>
<h1>Productos</h1>

<form method="POST" action="includes/process/getProducts.php">
    <div class="mb-3 w-25">
        <select class="form-select" name="category" id="category">
            <option selected value="0">Categoría</option>
            <?php
            foreach ($categories as $id => $category) {
                echo "<option value='$id'>$category</option>";
            }
            ?>
        </select>

    </div>
    <div class="mb-3 w-25">
        <select class="form-select" name="orderBy" id="orderBy">
            <option selected value="0">Ordenar por</option>
            <option value="1">Mayor Precio</option>
            <option value="2">Menor Precio</option>
            <option value="3">A-Z</option>
            <option value="4">Z-A</option>
            <option value="5">Popularidad</option>
        </select>

    </div>
    <button type="submit" class="btn btn-outline-primary">Filtrar </button>
</form>

<section class="container">

    <?php
    require_once 'includes/components/productList.php';
    ?>

</section>
<div class="container d-flex justify-content-center my-5">
    <nav>
        <ul class="pagination">
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>
</div>