<?php
include_once 'conn/db.php';
?>

<section class="container my-5">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <h1>Administración de Perfiles</h1>

        <button
            type="button"
            class="btn btn-primary"
            data-bs-toggle="modal"
            data-bs-target="#addProfileModal"
        >
            Agregar perfil
        </button>

    </div>

    <div class="table-responsive">

        <table class="table table-striped table-hover align-middle">

            <thead>
                <tr>
                    <th>ID</th>
                    <th>Perfil</th>
                    <th>Permisos</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>

                <?php foreach ($profiles as $profile): ?>

                    <tr>
                        <td><?= $profile['id'] ?></td>

                        <td>
                            <?= htmlspecialchars($profile['name']) ?>
                        </td>

                        <td>
                            <?php if (empty($profile['permissions'])): ?>

                                Sin acceso administrativo

                            <?php else: ?>

                                <?= count($profile['permissions']) ?>
                                secciones

                            <?php endif; ?>
                        </td>

                        <td>
                            <span class="badge <?= $profile['active']
                                ? 'bg-success'
                                : 'bg-danger' ?>">

                                <?= $profile['active']
                                    ? 'Activo'
                                    : 'Inactivo' ?>

                            </span>
                        </td>

                        <td>
                            <button
                                type="button"
                                class="btn btn-warning btn-sm"
                                data-bs-toggle="modal"
                                data-bs-target="#editProfile<?= $profile['id'] ?>"
                            >
                                Modificar
                            </button>

                            <button
                                type="button"
                                class="btn btn-sm <?= $profile['active']
                                    ? 'btn-danger'
                                    : 'btn-success' ?>"
                            >
                                <?= $profile['active']
                                    ? 'Inactivar'
                                    : 'Activar' ?>
                            </button>
                        </td>
                    </tr>

                <?php endforeach; ?>

            </tbody>
        </table>

    </div>

</section>


<!-- MODAL AGREGAR PERFIL -->

<div class="modal fade"
     id="addProfileModal"
     tabindex="-1"
     aria-labelledby="addProfileTitle"
     aria-hidden="true">

    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">

                <h2 class="modal-title fs-5" id="addProfileTitle">
                    Agregar perfil
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
                $profile = [];
                include 'includes/components/addprofile.php';
                ?>
            </div>

        </div>
    </div>
</div>


<!-- MODALES EDITAR PERFIL -->

<?php foreach ($profiles as $profile){ ?>

    <div class="modal fade"
         id="editProfile<?= $profile['id'] ?>"
         tabindex="-1"
         aria-labelledby="editProfileTitle<?= $profile['id'] ?>"
         aria-hidden="true">

        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">

                    <h2 class="modal-title fs-5"
                        id="editProfileTitle<?= $profile['id'] ?>">
                        Modificar perfil
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
                    include 'includes/components/addprofile.php';
                    ?>
                </div>

            </div>
        </div>
    </div>

<?php }?>