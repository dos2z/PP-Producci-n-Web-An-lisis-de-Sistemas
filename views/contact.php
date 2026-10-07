<h1>Contacto</h1>
<form method="post" action="includes/process/sendMessage.php">
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


    <button type="submit" class="btn btn-primary">Enviar</button>
</form>