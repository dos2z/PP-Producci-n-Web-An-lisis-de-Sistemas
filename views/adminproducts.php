<?php
include_once 'includes/process/getProducts.php';
session_start();
if (!isset($_SESSION['isAdmin']) || $_SESSION['isAdmin'] != true) {
    header("Location: index.php?page=home");
    session_destroy();
    exit();
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
            <option value="1">Cuidado Personal</option>
            <option value="2">Medicamentos</option>
            <option value="3">Maquillaje</option>
            <option value="4">Higiene</option>
            <option value="5">Nutrición</option>
            <option value="6">Otros</option>
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
                <td>
                    <a href="index.php?page=editproduct&id=<?= $product['id'] ?>" class="btn btn-sm btn-outline-primary">Editar</a>
                    <a href="index.php?page=deleteproduct&id=<?= $product['id'] ?>" class="btn btn-sm btn-outline-danger">Eliminar</a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
    </table>
<?php } ?>

<!-- Modal -->
<div class="modal fade" id="addProductModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addProductModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="addProductModalLabel">Agregar producto</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="includes/process/addProduct.php">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descripcion</label>
                        <input type="text" class="form-control" id="description" required>
                    </div>
                    <div class="mb-3">
                        <select class="form-select" name="category" id="category" required>
                            <option selected value="0">Categoría</option>
                            <option value="1">Cuidado Personal</option>
                            <option value="2">Medicamentos</option>
                            <option value="3">Maquillaje</option>
                            <option value="4">Higiene</option>
                            <option value="5">Nutrición</option>
                            <option value="6">Otros</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Precio</label>
                        <input type="number" class="form-control" id="price" step="0.01" required>
                    </div>
                    <div class="mb-2">
                        <label for="stock" class="form-label">Stock</label>
                        <input type="number" class="form-control" id="stock">
                    </div>
                     <div class="mb-3">
                        <label for="img" class="form-label">Imagen</label>
                        <input type="text" class="form-control" id="img">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Agregar producto</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            </div>
        </div>
        </form>
    </div>

</div>
</div>
</div>