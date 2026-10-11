<?php
include_once 'conn/db.php';
$prodId = $_GET['id'] ?? null;
$index = array_search($prodId, array_column($products, 'id'));
$product = $products[$index];
$ranking = 100 * ($product['popularity'] / 5);
$ranking = round($ranking, 1);
if (!$prodId) {
    $productReviews = $reviews;
} else {
    $productReviews = array_filter($reviews, function ($review) use ($prodId) {
        return $review['product_id'] == $prodId;
    });
};
?>
<a href="index.php?page=adminproducts" type="button" class="btn btn-primary">◄ Volver a Productos</a>
<h1>Reviews de producto <?= $product['name'] ?></h1>
<form>
    <div class="mb-3 w-25">
        <select class="form-select" name="orderBy" id="orderBy">
            <option selected value="0">Ordenar por</option>
            <option value="1">Producto</option>
            <option value="2">Fecha</option>
            <option value="5">Valor</option>
            <option value="3">A-Z</option>
            <option value="4">Z-A</option>
        </select>

    </div>
    <button type="submit" class="btn btn-outline-primary">Ordenar</button>
</form>

<div class="progress my-5" role="progressbar" aria-valuenow=<?= $ranking ?> aria-valuemin="0" aria-valuemax="100">
    <div class="progress-bar bg-warning bold" style="width: <?= $ranking ?>%"><?= $product['popularity'] ?? 0 ?></div>
</div>
<div class="container">
    <ul class="list-group">
        <?php

        foreach ($productReviews as $review) { ?>
            <li class="list-group-item">
                <div class="d-f ">
                    <div>
                        <span>Calificación: <?= $review['ranking'] ?> ⭐</span>
                        <span class="badge <?= $review['approved'] ? "text-bg-success" : "text-bg-danger" ?>"> <?= $review['approved'] ? "Aprobada" : "Pendiente" ?></span>
                        <span>Fecha: <?= $review['date'] ?? "Sin fecha" ?></span>
                    </div>
                    <p><?= $review['name'] ?></p>
                    <p><?= $review['email'] ?></p>
                    <p><?= $review['comment'] ?></p>
                    <div>
                        <?php if (!$review['approved']) { ?><a href="index.php?page=aprovereview&id=<?= $review['id'] ?>" class="btn btn-sm btn-outline-success">Aprobar</a><?php } ?>
                        <button type=button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#answerreview<?= $review['id'] ?>">Responder</button>
                        <a href="index.php?page=deletereview&id=<?= $review['id'] ?>" class="btn btn-sm btn-outline-danger">Eliminar</a>

                    </div>

                </div>
            </li>
        <?php } ?>
    </ul>
</div>

<?php
//Formularios para responder por reviews
foreach ($productReviews as $review) {
?>
    <div class="modal fade" id="answerreview<?= $review['id'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="answerreview" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="addProductModalLabel">Responder a <?= $review['name'] ?></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div>
                        <?= $review['comment'] ?>
                    </div>

                    <form method="POST" action="includes/process/answerreview.php">
                        <input type="hidden" value=<?= $review['id'] ?> name="id">
                        <div class="mb-3 m-3">
                            <label for="review" class="form-label">Respuesta</label>
                            <textarea class="form-control" id="review" rows="3" name="review" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-bg-primary">Enviar</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
<?php } ?>