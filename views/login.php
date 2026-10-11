<?php
if (isset($_GET['error'])) {
    $error = $_GET['error'];
}
?>

<h1>Ingresar</h1>
<div>
    <span>Para registrarse haga clic </span><a href="index.php?page=register">aqui</a>
</div>
<div class="container my-5 p-5">

    <?php if (isset($error)) {
        $type = 'danger';
        $message = 'Ha ocurrido un error, usuario o contraseña incorrecta';
        include 'includes/components/alert.php';
    } ?>

    <form method="post" action="includes/process/login.php" class="w-50">
        <div class="mb-3">
            <label for="email" class="form-label">Correo electrónico</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>

        <button type="submit" class="btn btn-primary">Ingresar</button>
    </form>
</div>