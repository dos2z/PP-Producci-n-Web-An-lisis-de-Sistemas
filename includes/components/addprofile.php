<?php
$permissions = [
    'products' => 'Productos',
    'categories' => 'Categorías',
    'brands' => 'Marcas',
    'reviews' => 'Comentarios',
    'users' => 'Usuarios',
    'profiles' => 'Perfiles'
];

$selectedPermissions = $profile['permissions'] ?? [];
$formId = isset($profile['id'])
    ? 'edit' . $profile['id']
    : 'add';
?>

<form method="POST" action="includes/process/profile.php">

    <input
        type="hidden"
        name="id"
        value="<?= $profile['id'] ?? '' ?>"
    >

    <div class="mb-3">
        <label
            for="name<?= $formId ?>"
            class="form-label"
        >
            Nombre del perfil
        </label>

        <input
            type="text"
            class="form-control"
            id="name<?= $formId ?>"
            name="name"
            value="<?= htmlspecialchars($profile['name'] ?? '') ?>"
            required
        >
    </div>

    <div class="mb-3">
        <p class="fw-bold">Permisos de acceso</p>

        <?php foreach ($permissions as $key => $label){ ?>

            <div class="form-check">
                <input
                    class="form-check-input"
                    type="checkbox"
                    name="permissions[]"
                    value="<?= $key ?>"
                    id="<?= $formId . $key ?>"
                    <?= in_array($key, $selectedPermissions, true)
                        ? 'checked'
                        : '' ?>
                >

                <label
                    class="form-check-label"
                    for="<?= $formId . $key ?>"
                >
                    <?= $label ?>
                </label>
            </div>

        <?php } ?>
    </div>

    <button type="submit" class="btn btn-primary">
        Guardar
    </button>

</form>