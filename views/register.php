<?php

$type = '';
$message = '';

if (isset($_GET['success'])) {
    $type = 'success';
    $message = 'Registro simulado correctamente.';
}

if (isset($_GET['error'])) {
    $type = 'danger';

    if ($_GET['error'] === '1') {
        $message = 'Completá todos los campos correctamente.';
    } elseif ($_GET['error'] === '2') {
        $message = 'Las contraseñas no coinciden.';
    }
};

?>

<h1>Registrarse</h1>
<div>
    <span>Ya tenes usuario? hace clic </span><a href="index.php?page=login">aqui</a>
</div>
<div class="container my-5 p-5">

    <?php if ($message !== '') {
        include 'includes/components/alert.php';
    } ?>

    <form method="post" action="includes/process/register.php" class="auth-form">
        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="name" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Correo electrónico</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="mb-3">
            <label for="password2" class="form-label">Repita la contraseña</label>
            <input type="password" class="form-control" id="password2" name="password2" required>
        </div>

        <button type="submit" class="btn btn-primary">Registrarse</button>
    </form>
</div>