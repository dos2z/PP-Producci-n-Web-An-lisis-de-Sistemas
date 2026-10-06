<?php
//$products se define en el archivo que incluye este componente.

foreach ($products as $product) {
   

?>
<div class="card" style="width: 18rem;">
  <img src="<?= $product['image'] ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?= $product['name'] ?? "Producto genérico"; ?></h5>
    <p class="card-text"><?= $product['description'] ?? "Sin descripción disponible."; ?></p>
    <p class="card-text">Precio: $<?= $product['price'] ?? "00000" ?></p>
    <a href="#" class="btn btn-primary">Ver producto</a>
  </div>
</div>
<?php } ?>