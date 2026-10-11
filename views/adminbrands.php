<?php
include_once 'conn/db.php';
?>

<section class="container my-5">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <h1>Administración de Marcas</h1>

        <button
            type="button"
            class="btn btn-primary"
            data-bs-toggle="modal"
            data-bs-target="#addBrandModal"
        >
            Agregar marca
        </button>

    </div>

    <!-- TABLA DE MARCAS -->

    <div class="table-responsive">

        <table class="table table-striped table-hover align-middle">

            <thead>
                <tr>
                    <th>ID</th>
                    <th>Marca</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>

                <?php foreach ($brands as $brand): ?>

                    <tr>
                        <td><?= $brand['id'] ?></td>

                        <td>
                            <?= htmlspecialchars($brand['name']) ?>
                        </td>

                        <td>
                            <?php if ($brand['active']){ ?>
                                <span class="badge bg-success">
                                    Activa
                                </span>
                            <?php } else{ ?>
                                <span class="badge bg-danger">
                                    Inactiva
                                </span>
                            <?php }; ?>
                        </td>

                        <td>
                            <button
                                type="button"
                                class="btn btn-warning btn-sm"
                                data-bs-toggle="modal"
                                data-bs-target="#editBrand<?= $brand['id'] ?>"
                            >
                                Editar
                            </button>

                            <button
                                type="button"
                                class="btn btn-sm <?= $brand['active'] ? 'btn-outline-danger' : 'btn-success' ?>"
                            >
                                <?= $brand['active'] ? 'Inactivar' : 'Activar' ?>
                            </button>
                        </td>
                    </tr>

                <?php endforeach; ?>

            </tbody>
        </table>

    </div>

</section>


<!-- MODAL AGREGAR MARCA -->

<div class="modal fade"
     id="addBrandModal"
     tabindex="-1"
     aria-labelledby="addBrandTitle"
     aria-hidden="true">

    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h2 class="modal-title fs-5" id="addBrandTitle">
                    Agregar marca
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
                $brand = [];
                include 'includes/components/addbrand.php';
                ?>
            </div>

        </div>
    </div>
</div>


<!-- MODALES MODIFICAR MARCA -->

<?php foreach ($brands as $brand): ?>

    <div class="modal fade"
         id="editBrand<?= $brand['id'] ?>"
         tabindex="-1"
         aria-labelledby="editBrandTitle<?= $brand['id'] ?>"
         aria-hidden="true">

        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">

                    <h2 class="modal-title fs-5"
                        id="editBrandTitle<?= $brand['id'] ?>">
                        Modificar marca
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
                    include 'includes/components/addbrand.php';
                    ?>

                </div>

            </div>
        </div>
    </div>

<?php endforeach; ?>