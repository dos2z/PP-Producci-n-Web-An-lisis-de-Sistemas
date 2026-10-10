<div class="container d-flex flex-wrap justify-content-center gap-5 ">
  <?php
  //$products se define en el archivo que incluye este componente.
  if (!$products) {
    echo "<h2>No hay productos para mostrar</h2>";
  } else {
    foreach ($products as $product) {
      if ($product['active']) {
  ?>
        <div class="card" style="width: 18rem;">
          <img src="<?= "assets/imgs/products/" . $product['img'] . ".png" ?? "assets/imgs/genericprod.png" ?>" class="card-img-top" alt="<?= $product['name'] ?? "Producto genérico"; ?>">
          <div class="card-body">
            <h5 class="card-title"><?= $product['name'] ?? "Producto genérico"; ?></h5>
            <p class="card-text">Opiniones: <?= $product['popularity'] ?? "0" ?>/5</p>
            <p class="card-text">Precio: $<?= $product['price'] ?? "00000" ?></p>
            <a href="includes/process/productDetail.php?id=<?= $product['id'] ?? "je" ?>" class="btn btn-bg-primary">Ver producto</a>
          </div>
        </div>
  <?php }
    }
  } ?>

</div>