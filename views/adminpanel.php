<?php
if (!isset($_SESSION['isAdmin']) || $_SESSION['isAdmin'] != true) {
    header("Location: index.php?page=home");
    session_destroy();
}

$user = $_SESSION['user'] ?? '';
?>
<h1 class="m-5">Bienvenido <?= $user ?>!</h1>
<div class="container h-100 w-100 d-flex justify-content-center align-items-center">
    <div class="flex-wrap justify-content-center">

        <a href="index.php?page=adminmessages" type="button" class="btn btn-primary">
            <div class="card" style="width: 18rem;">
                <img src="assets/imgs/adminmsg.png" class="card-img-top" alt="Ver Mensajes">
                <div class="card-body">
                    <h5 class="card-title">Ver Mensajes</h5>
                </div>
            </div>
        </a>
        <a href="index.php?page=adminproducts" type="button" class="btn btn-primary">
            <div class="card" style="width: 18rem;">
                <img src="assets/imgs/adminprods.png" class="card-img-top" alt="Administrar Productos">
                <div class="card-body">
                    <h5 class="card-title">Administrar Productos</h5>
                </div>
            </div>
        </a>
        <a href="index.php?page=admincat" type="button" class="btn btn-primary">
            <div class="card" style="width: 18rem;">
                <img src="assets/imgs/admincat.png" class="card-img-top" alt="Administrar Categorias">
                <div class="card-body">
                    <h5 class="card-title">Administrar Categorias</h5>
                </div>
            </div>
        </a>
        <a href="index.php?page=adminusers" type="button" class="btn btn-primary">
            <div class="card" style="width: 18rem;">
                <img src="assets/imgs/adminusers.png" class="card-img-top" alt="Administrar usuarios">
                <div class="card-body">
                    <h5 class="card-title">Administrar Usuarios</h5>
                </div>
            </div>
        </a>
    </div>
</div>