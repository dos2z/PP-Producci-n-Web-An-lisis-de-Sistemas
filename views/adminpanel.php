<?php
if (!isset($_SESSION['isAdmin']) || $_SESSION['isAdmin'] != true) {
    header("Location: index.php?page=home");
    session_destroy();
}

$user = $_SESSION['user'] ?? '';
?>
<h1>Bienvenido <?= $user ?>!</h1>
<div class="btn-group" role="group" aria-label="Basic example">
    <a href="index.php?page=profile" type="button" class="btn btn-primary">Mi perfil</a>
    <a href="index.php?page=adminproducts" type="button" class="btn btn-primary">Ver Mensajes</a>
    <a href="index.php?page=adminproducts" type="button" class="btn btn-primary">Ver Productos</a>
    <a ref="index.php?page=admincategories" type="button" class="btn btn-primary">Ver categorias</a>
    <a href="index.php?page=adminusers" type="button" class="btn btn-primary">Administrar usuarios</a>
</div>