<?php

?>
<div class="container d-flex justify-content-center">


    <div class="card mb-3" style="max-width: 800px;">
        <div class="row g-0">
            <div class="col-md-6">
                <img src="<?= $product['image'] ?? "assets/imgs/genericprod.png" ?>" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-6">
                <div class="card-body d-flex flex-column justify-content-between h-75">
                    <h5 class="card-title"><?= $product['name'] ?? "Nombre del producto" ?></h5>
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