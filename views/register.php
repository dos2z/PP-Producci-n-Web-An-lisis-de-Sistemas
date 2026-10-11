<?php
if (isset($_GET['error'])) {
    $error = $_GET['error'];
}
?>

<h1>Registrarse</h1>
<div>
    <span>Ya tenes usuario? hace clic </span><a href="index.php?page=login">aqui</a>
</div>
<div class="container my-5 p-5">

    <?php if (isset($error)) {
        $type = 'danger';
        $message = 'Ha ocurrido un error, usuario o contraseña incorrecta';
        include 'includes/components/alert.php';
    } ?>

    <form method="post" action="includes/process/register.php" class="w-50">
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

        <button type="submit" class="btn btn-bg-primary">Ingresar</button>
    </form>
</div>