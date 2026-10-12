<?php

include_once 'conn/db.php';
$prodId = $_GET['id'] ?? null;
$index = array_search($prodId, array_column($products, 'id'));
$product = $products[$index];
$ranking = 100 * ($product['popularity'] / 5);
$ranking = round($ranking, 1);


$productReviews = array_filter(
    $reviews,
    function ($review) use ($prodId) {
        return $review['product_id'] == $prodId
            && $review['approved'] === true;
    }
);

?>
<h1>Detalle</h1>

<?php if (isset($_GET['coment'])) { ?>
    <div class="alert alert-success auth-form" role="success">
        Calificación enviada
    </div>

<?php } ?>
<?php if (isset($_GET['error'])) { ?>
    <div class="alert alert-danger auth-form" role="danger">
        Ha ocurrido un problema, por favor intente nuevamente
    </div>
<?php } ?>
<div class="container d-flex justify-content-center">

    <div class="card mb-3" style="max-width: 800px;">
        <div class="row g-0">
            <div class="col-md-6">
                <img src="assets/imgs/products/<?= $product['img'] . ".png" ?? "assets/imgs/products/genericprod.png" ?>" class="img-fluid rounded-start" alt=<?= $product['name'] ?>>
            </div>
            <div class="col-md-6">
                <div class="card-body d-flex flex-column justify-content-between h-75">
                    <h5 class="card-title"><?= $product['name'] ?? "Nombre del producto" ?></h5>
                    <div class="progress" role="progressbar" aria-valuenow=<?= $ranking ?> aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar bg-warning bold" style="width: <?= $ranking ?>%"><?= $product['popularity'] ?? 0 ?></div>
                    </div>
                    <p class="card-text"><?= $product['description'] ?? "Sin descripción disponible." ?></p>
                    <p class="card-text align-self-bottom">Precio: $<?= $product['price'] ?? "00000" ?></p>
                </div>
                <div class="p-3">

                    <a href="#" class="btn btn-bg-primary">Agregar al carrito</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!--comentario Producto -->
<?php if (isset($_SESSION['user'])) { ?>

    <div class="justify-content-center m-3">
        <h2>Calificación</h2>
        <form method="post" action="includes/process/rankingProduct.php" class="auth-form">
            <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">email</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" required>
            </div>

            <label for="range3" class="form-label">Valoración</label>
            <input type="range" class="form-range" min="1" max="5" step="1" id="range3" name="popularity">

            <div class="mb-3">
                <label for="message" class="form-label">Comentario</label>
                <textarea class="form-control" id="message" rows="3" name="message" required></textarea>
            </div>
            <input type="hidden" value=<?= $prodId ?> name="id">

            <button type="submit" class="btn btn-bg-primary">Enviar</button>
        </form>
    </div>
<?php } ?>
<!--Reseñas-->
<div>
    <h2>Opiniones</h2>

    <ul class="list-group">
        <?php

        foreach ($productReviews as $review) { ?>
            <li class="list-group-item">
                <div>
                    <p>Calificación: <?= $review['ranking'] ?> ⭐</p>
                    <p><?= $review['comment'] ?></p>
                </div>
            </li>
        <?php } ?>
    </ul>

</div>