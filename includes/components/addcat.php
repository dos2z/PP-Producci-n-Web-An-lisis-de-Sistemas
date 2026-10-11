
<?php
$category = $category ?? [];

$formId = isset($category['id'])
    ? 'category' . $category['id']
    : 'newCategory';
?>

<form method="POST" action="includes/process/addCategory.php">

    <input
        type="hidden"
        name="id"
        value="<?= (int)($category['id'] ?? 0) ?>"
    >

    <div class="mb-3">
        <label for="name<?= $formId ?>" class="form-label">
            Nombre
        </label>

        <input
            type="text"
            class="form-control"
            id="name<?= $formId ?>"
            name="name"
            value="<?= $category['name'] ?? '' ?>"
            required
        >
    </div>

    <div class="mb-3">
        <label for="description<?= $formId ?>" class="form-label">
            Descripción
        </label>

        <textarea
            class="form-control"
            id="description<?= $formId ?>"
            name="description"
            rows="3"
        ><?= $category['description'] ?? '' ?></textarea>
    </div>

    <div class="mb-3">
        <label for="parent<?= $formId ?>" class="form-label">
            Categoría padre
        </label>

        <select
            class="form-select"
            id="parent<?= $formId ?>"
            name="parent_id"
        >

            <option value="">
                Ninguna (categoría principal)
            </option>

            <?php foreach ($categories as $parent){ ?>

                <?php if (
                    $parent['parent_id'] === null &&
                    $parent['id'] !== ($category['id'] ?? null)
                ){ ?>

                    <option
                        value="<?= (int)$parent['id'] ?>"
                        <?= ($category['parent_id'] ?? null) == $parent['id']
                            ? 'selected'
                            : '' ?>
                    >
                        <?= $parent['name'] ?>
                    </option>

                <?php } ?>

            <?php } ?>

        </select>
    </div>

    <button type="submit" class="btn btn-primary">
        Guardar
    </button>

</form>
