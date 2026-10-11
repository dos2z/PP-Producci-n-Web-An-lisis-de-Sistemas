

    <input
        type="hidden"
        name="id"
        value="<?= $brand['id'] ?? '' ?>"
    >

    <div class="mb-3">
        <label for="brandName" class="form-label">
            Nombre de la marca
        </label>

        <input
            type="text"
            class="form-control"
            id="brandName"
            name="name"
            value="<?= htmlspecialchars($brand['name'] ?? '') ?>"
            required
        >
    </div>

    <button type="submit" class="btn btn-primary">
        Guardar
    </button>

