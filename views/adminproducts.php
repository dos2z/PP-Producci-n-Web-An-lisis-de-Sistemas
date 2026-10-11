<?php
include_once 'includes/process/getProducts.php';
include_once 'includes/process/getCategories.php';

if (!isset($_SESSION['isAdmin']) || $_SESSION['isAdmin'] != true) {
    header("Location: index.php?page=home");
    session_destroy();
}

?>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addProductModal">
    Agregar Producto
</button>

<form method="POST" action="includes/process/getProducts.php" class="my-3 d-flex gap-3">
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


<?php if (!$products) {
?>
    <h2>No hay productos disponibles</h2
        <?php } else { ?>
        <table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripción</th>
            <th scope="col">Categoría</th>
            <th scope="col">Precio</th>
            <th scope="col">Stock</th>
            <th scope="col">Valoración</th>
            <th scope="col">Destacado</th>
            <th scope="col">Activo</th>
            <th scope="col">Acciones</th>

        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($products as $product) {
            $description = mb_substr($product['description'], 0, 20) . "...";
        ?>
            <tr>
                <th scope="row"><?= $product['id'] ?></th>
                <td><?= $product['name'] ?></td>
                <td><?= $description ?></td>
                <td><?= $product['category'] ?></td>
                <td><?= $product['price'] ?></td>
                <td><?= $product['stock'] ?></td>
                <td><?= $product['popularity'] ?>⭐</td>
                <td><?= $product['best'] ?></td>
                <td><?= $product['active'] ?></td>
                <td>
                    <button type=button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#editProduct<?= $product['id'] ?>">Editar</button>
                    <a href="index.php?page=reviewsproduct&id=<?= $product['id'] ?>" class="btn btn-sm btn-outline-info">Reseñas</a>
                    <a href="index.php?page=activemodify&id=<?= $product['id'] ?>" class="btn btn-sm btn-outline-warning"> <?php
                                                                                                                            if ($product['active']) {
                                                                                                                                echo "Desactivar";
                                                                                                                            } else {
                                                                                                                                echo "Activar";
                                                                                                                            }
                                                                                                                            ?></a>
                    <?php if (!$product['active']) { ?>
                        <a href="index.php?page=deleteproduct&id=<?= $product['id'] ?>" class="btn btn-sm btn-outline-danger">Eliminar</a>
                    <?php } ?>
                </td>
            </tr>
        <?php } ?>
    </tbody>
    </table>
<?php } ?>

<!-- Modal add Prod-->
<div class="modal fade" id="addProductModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addProductModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="addProductModalLabel">Agregar producto</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="includes/process/addProduct.php">
                    <?php
                    include "includes/components/addproduct.php"
                    ?>
                </form>
            </div>

        </div>
    </div>
</div>

<!-- Modal edit prod -->
<?php
foreach ($products as $product) {

?>
    <div class="modal fade" id="editProduct<?= $product['id'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addProductModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="addProductModalLabel">Editar producto <?= $product['name'] ?></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="includes/process/editProduct.php">
                        <input type="hidden" value=<?= $product['id'] ?> name="id">
                        <?php
                        include "includes/components/addproduct.php"
                        ?>
                    </form>
                </div>

            </div>
        </div>
    </div>
<?php } ?>