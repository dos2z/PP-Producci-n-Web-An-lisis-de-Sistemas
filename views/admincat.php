<?php

include_once 'conn/db.php';

// Obtener la categoría padre 
$parentId = isset($_GET['parent'])
    ? (int) $_GET['parent']
    : null;


$parentCategory = null;

// Buscar la categoría padre
if ($parentId !== null) {

    foreach ($categories as $item) {

        if ((int)$item['id'] === $parentId && $item['parent_id'] === null) {
            $parentCategory = $item;

            break;
        }
    }

    // Si el ID no corresponde a una categoría principal
    if ($parentCategory === null) {
        $parentId = null;
    }
}

// Seleccionar categorías para mostrar
$visibleCategories = array_filter(
    $categories,
    function ($category) use ($parentId) {
        return $category['parent_id'] === $parentId;
    }
);

?>

<section class="container my-5">

    <div class="d-flex flex-wrap justify-content-between
                align-items-center gap-3 mb-4">

        <div>
            <h1>Administración de Categorías</h1>
            <?php
            if (isset($_GET['success'])) {
                $type = 'success';
                $message = 'Categoria agregada.';

                include 'includes/components/alert.php';
            }
            if ($parentCategory !== null): ?>

                <p class="text-muted">
                    Subcategorías de
                    <?= $parentCategory['name'] ?>
                </p>

                <a
                    href="index.php?page=admincat"
                    class="btn btn-outline-secondary btn-sm">
                    Volver a categorías
                </a>

            <?php endif; ?>
        </div>

        <button
            type="button"
            class="btn btn-primary"
            data-bs-toggle="modal"
            data-bs-target="#addCategoryModal">
            Agregar categoría
        </button>

    </div>

    <!-- TABLA -->

    <div class="table-responsive">

        <table class="table table-striped table-hover align-middle">

            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>

                <?php foreach ($visibleCategories as $item) { ?>

                    <tr>

                        <td><?= (int)$item['id'] ?></td>

                        <td>
                            <?= $item['name'] ?>
                        </td>

                        <td>
                            <?= $item['description'] ?? '' ?>
                        </td>

                        <td>
                            <span class="badge <?= $item['active']
                                                    ? 'bg-success'
                                                    : 'bg-danger' ?>">

                                <?= $item['active']
                                    ? 'Activa'
                                    : 'Inactiva' ?>

                            </span>
                        </td>

                        <td>
                            <div class="d-flex flex-wrap gap-2">

                                <button
                                    type="button"
                                    class="btn btn-warning btn-sm"
                                    data-bs-toggle="modal"
                                    data-bs-target="#editCategory<?= (int)$item['id'] ?>">
                                    Modificar
                                </button>

                                <button
                                    type="button"
                                    class="btn btn-sm <?= $item['active']
                                                            ? 'btn-danger'
                                                            : 'btn-success' ?>">
                                    <?= $item['active']
                                        ? 'Inactivar'
                                        : 'Activar' ?>
                                </button>

                                <?php if ($item['parent_id'] === null): ?>

                                    <a
                                        href="index.php?page=admincat&parent=<?= (int)$item['id'] ?>"
                                        class="btn btn-info btn-sm">
                                        Ver subcategorías
                                    </a>

                                <?php endif; ?>

                            </div>
                        </td>

                    </tr>

                <?php } ?>

                <?php if (empty($visibleCategories)) { ?>

                    <tr>
                        <td colspan="5" class="text-center py-4">
                            No hay categorías para mostrar.
                        </td>
                    </tr>

                <?php } ?>

            </tbody>
        </table>

    </div>

</section>


<!-- MODAL AGREGAR CATEGORÍA -->

<div class="modal fade"
    id="addCategoryModal"
    tabindex="-1"
    aria-labelledby="addCategoryTitle"
    aria-hidden="true">

    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h2 class="modal-title fs-5" id="addCategoryTitle">
                    Agregar categoría
                </h2>

                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Cerrar">
                </button>
            </div>

            <div class="modal-body">

                <?php
                $category = [
                    'parent_id' => $parentId
                ];

                include 'includes/components/addcat.php';
                ?>

            </div>

        </div>
    </div>
</div>

<!-- MODALES EDITAR CATEGORÍA -->

<?php foreach ($visibleCategories as $item) { ?>

    <div class="modal fade"
        id="editCategory<?= (int)$item['id'] ?>"
        tabindex="-1"
        aria-labelledby="editCategoryTitle<?= (int)$item['id'] ?>"
        aria-hidden="true">

        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">

                    <h2
                        class="modal-title fs-5"
                        id="editCategoryTitle<?= (int)$item['id'] ?>">
                        Modificar categoría
                    </h2>

                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Cerrar">
                    </button>

                </div>

                <div class="modal-body">

                    <?php
                    $category = $item;
                    include 'includes/components/addcat.php';
                    ?>

                </div>

            </div>
        </div>
    </div>

<?php } ?>