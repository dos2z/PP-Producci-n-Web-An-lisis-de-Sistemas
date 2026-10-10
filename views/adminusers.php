<?php
include_once 'includes/process/getUsers.php';

if (!isset($_SESSION['isAdmin']) || $_SESSION['isAdmin'] != true) {
    header("Location: index.php?page=home");
    session_destroy();
}

?>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addUserModal">
    Añadir  Ususario
</button>

<form method="POST" action="includes/process/getProducts.php" class="my-3 d-flex gap-3">
    
    <div class="mb-3 w-25">
        <select class="form-select" name="orderBy" id="orderBy">
            <option selected value="0">Ordenar por</option>
            <option value="1">Más reciente</option>
            <option value="2">Más antiguo</option>
            <option value="3">A-Z</option>
            <option value="4">Z-A</option>
            <option value="5">Administrador</option>
        </select>

    </div>
    <button type="submit" class="btn btn-outline-primary">Filtrar </button>
</form>


<?php if (!$users) {
?>
    <h2>No hay Usuarios cargados</h2
        <?php } else { ?>
        <table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">email</th>
            <th scope="col">password</th>
            <th scope="col">Administrador</th>
            <th scope="col">Fecha inicio</th>
            <th scope="col">Activo</th>
            <th scope="col">Acciones</th>

        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($users as $user) {
        ?>
            <tr>
                <th scope="row"><?= $user['id'] ?></th>
                <td><?= $user['name'] ?></td>              
                <td><?= $user['email'] ?></td>
                <td><?= $user['password'] ?></td>
                <td><?= $user['admin'] ?></td>
                <td><?= $user['date'] ?></td>
                <td><?= $user['active'] ?></td>
                <td>
                    <button type=button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#editProduct<?= $user['id'] ?>">Editar</button>
                    <a href="index.php?page=reviewsproduct&id=<?= $user['id'] ?>" class="btn btn-sm btn-outline-info">Reseñas</a>
                    <a href="index.php?page=activemodify&id=<?= $user['id'] ?>" class="btn btn-sm btn-outline-warning"> <?php
                                                                                                                            if ($user['active']) {
                                                                                                                                echo "Desactivar";
                                                                                                                            } else {
                                                                                                                                echo "Activar";
                                                                                                                            }
                                                                                                                            ?></a>
                    <?php if (!$user['active']) { ?>
                        <a href="index.php?page=deleteproduct&id=<?= $user['id'] ?>" class="btn btn-sm btn-outline-danger">Eliminar</a>
                    <?php } ?>
                </td>
            </tr>
        <?php } ?>
    </tbody>
    </table>
<?php } ?>

<!-- Modal add Prod-->
<div class="modal fade" id="addUserModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addUserModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="addProductModalLabel">Añadir Usuario</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="includes/process/addUser.php">
                    <?php
                    include "includes/components/adduser.php"
                    ?>
                </form>
            </div>

        </div>
    </div>
</div>

<!-- Modal edit prod -->
<?php
foreach ($users as $user) {

?>
    <div class="modal fade" id="editProduct<?= $user['id'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editUserModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="addUserModalLabel">Editar Usuario <?= $user['name'] ?></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="includes/process/editProduct.php">
                        <input type="hidden" value=<?= $user['id'] ?> name="id">
                        <?php
                        include "includes/components/adduser.php"
                        ?>
                    </form>
                </div>

            </div>
        </div>
    </div>
<?php } ?>