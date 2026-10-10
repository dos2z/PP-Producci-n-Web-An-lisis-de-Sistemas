<h1>Contacto</h1>
<?php if (isset($_GET['success'])) { ?>
    <div class="alert alert-success w-50" role="success">
        Mensaje enviado coorectamente, Nos contactaremos con usted a la brevedad
    </div>

<?php } ?>
<?php if (isset($_GET['error'])) { ?>
    <div class="alert alert-danger w-50" role="danger">
        Ha ocurrido un problema, por favor intente nuevamente
    </div>

<?php } ?>

<div class="container my-5 p-5">

    <form method="post" action="includes/process/contact.php" class="w-50">
        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Teléfono</label>
            <input type="tel" class="form-control" id="phone" name="phone" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">email</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" required>
        </div>
        <select class="form-select" aria-label="Default select example">
            <option selected>Area</option>
            <option value="1">Ventas</option>
            <option value="2">Recursos Humanos</option>
            <option value="3">Administración</option>
        </select>
        <div class="mb-3">
            <label for="message" class="form-label">Mensaje</label>
            <textarea class="form-control" id="message" rows="3" name="message" required></textarea>
        </div>


        <button type="submit" class="btn btn-bg-primary">Enviar</button>
    </form>
</div>