<?php
if (!isset($_SESSION['isAdmin']) || $_SESSION['isAdmin'] != true) {
    header("Location: index.php?page=home");
    session_destroy();
}

$user = $_SESSION['user'] ?? '';
?>
<h1 class="m-5">Bienvenido <?= $user ?>!</h1>

<div class="d-flex gap-3 flex-wrap justify-content-center background-secondary py-5 rounded">

    <a href="index.php?page=adminmessages">
        <div class="card" style="width: 18rem;">
            <img src="assets/imgs/adminmsg.png" class="card-img-top" alt="Ver Mensajes">
            <div class="card-body">
                <h5 class="card-title">Ver Mensajes</h5>
            </div>
        </div>
    </a>
    <a href="index.php?page=adminproducts">
        <div class="card" style="width: 18rem;">
            <img src="assets/imgs/adminprods.png" class="card-img-top" alt="Administrar Productos">
            <div class="card-body">
                <h5 class="card-title">Administrar Productos</h5>
            </div>
        </div>
    </a>
    <a href="index.php?page=admincat">
        <div class="card" style="width: 18rem;">
            <img src="assets/imgs/admincat.png" class="card-img-top" alt="Administrar Categorias">
            <div class="card-body">
                <h5 class="card-title">Administrar Categorias</h5>
            </div>
        </div>
    </a>
    <a href="index.php?page=adminusers">
        <div class="card" style="width: 18rem;">
            <img src="assets/imgs/adminusers.png" class="card-img-top" alt="Administrar usuarios">
            <div class="card-body">
                <h5 class="card-title">Administrar Usuarios</h5>
            </div>
        </div>
    </a>
    <a href="index.php?page=adminbrands">
        <div class="card" style="width: 18rem;">
            <img src="assets/imgs/adminbrands.png" class="card-img-top" alt="Administrar Marcas">
            <div class="card-body">
                <h5 class="card-title">Administrar Marcas</h5>
            </div>
        </div>
    </a>
    <a href="index.php?page=adminprofiles">
        <div class="card" style="width: 18rem;">
            <img src="assets/imgs/adminusers.png" class="card-img-top" alt="Administrar Perfiles">
            <div class="card-body">
                <h5 class="card-title">Administrar Perfiles</h5>
            </div>
        </div>
    </a>
</div>