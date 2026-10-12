<?php
include_once 'conn/db.php';
$id = $_SESSION['id'];
$user = array_filter($users, function ($user) use ($id) {
    return $user['id'] == $id;
});
$user = $user[1];

?>
<div class="container">

    <h1>Perfil</h1>

    <div class="auth-form">
        <ul class="list-group">
            <li class="list-group-item">Nombre: <?= $_SESSION['user'] ?></li>
            <li class="list-group-item">email: <?= $_SESSION['email'] ?></li>

        </ul>
        <div class="m-3">
            <button type=button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#editInfo">Editar</button>

        </div>
    </div>


</div>

<div class="modal fade" id="editInfo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editInfo" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="addUserModalLabel">Editar Inormacion de <?= $_SESSION['user']  ?></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="includes/process/editUser.php">
                    <input type="hidden" value=<?= $_SESSION['id'] ?> name="id">
                    <?php
                    $edit = true;
                    include "includes/components/adduser.php"
                    ?>
                </form>
            </div>

        </div>
    </div>
</div>