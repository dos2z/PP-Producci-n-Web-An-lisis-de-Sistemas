<?php
include_once 'conn/db.php';

if (!isset($_SESSION['isAdmin']) || $_SESSION['isAdmin'] != true) {
    header("Location: index.php?page=home");
    session_destroy();
}

?>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addcatModal">
    Añadir Categoría
</button>

<form method="POST" action="includes/process/getProducts.php" class="my-3 d-flex gap-3">

    <div class="mb-3 w-25">
        <select class="form-select" name="orderBy" id="orderBy">
            <option selected value="0">Ordenar por</option>
            <option value="1">Más reciente</option>
            <option value="2">Más antiguo</option>
            <option value="3">A-Z</option>
            <option value="4">Z-A</option>
        </select>

    </div>
    <button type="submit" class="btn btn-outline-primary">Filtrar </button>
</form>


<?php if (!$categories) {
?>
    <h2>No hay categorias cargadas</h2
        <?php } else { ?>
        <table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">descripción</th>
            <th scope="col">Activo</th>
            <th scope="col">Acciones</th>

        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($categories as $cat) {
        ?>
            <tr>
                <th scope="row"><?= $cat['id'] ?></th>
                <td><?= $cat['name'] ?></td>
                <td><?= $cat['description'] ?></td>
                <td><?= $cat['active'] ?></td>
                <td>
                    <button type=button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#editProduct<?= $cat['id'] ?>">Editar</button>

                    <a href="index.php?page=activemodify&id=<?= $cat['id'] ?>" class="btn btn-sm btn-outline-warning"> <?php
                                                                                                                        if ($cat['active']) {
                                                                                                                            echo "Desactivar";
                                                                                                                        } else {
                                                                                                                            echo "Activar";
                                                                                                                        }
                                                                                                                        ?></a>
                    <?php if (!$cat['active']) { ?>
                        <a href="index.php?page=deleteproduct&id=<?= $cat['id'] ?>" class="btn btn-sm btn-outline-danger">Eliminar</a>
                    <?php } ?>
                </td>
            </tr>
        <?php } ?>
    </tbody>
    </table>
<?php } ?>

<!-- Modal add cat-->
<div class="modal fade" id="addcatModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addcatModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="addProductModalLabel">Añadir Categoría</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="includes/process/addCat.php">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descripción</label>
                        <input type="text" class="form-control" id="description" name="description" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Aceptar</button>
                </form>
            </div>

        </div>
    </div>
</div>

<!-- Modal edit cat -->
<?php
foreach ($categories as $cat) {

?>
    <div class="modal fade" id="editProduct<?= $cat['id'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editcatModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="addcatModalLabel">Editar categoría <?= $cat['name'] ?></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="includes/process/editCat.php">
                        <div class="mb-3">
                            <label for="name" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Descripción</label>
                            <input type="text" class="form-control" id="description" name="description" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Aceptar</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
<?php } ?>