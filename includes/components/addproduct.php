 <div class="mb-3">
     <label for="name" class="form-label">Nombre</label>
     <input type="text" class="form-control" id="name" name="name" required value="<?= $edit ? $product['name'] : "" ?>">
 </div>
 <div class="mb-3">
     <label for="description" class="form-label">Descripcion</label>
     <input type="text" class="form-control" id="description" name="description" required value="<?= $edit ? $product['description'] : "" ?>">
 </div>
 <div class="mb-3">
     <select class="form-select" name="category" id="category" value="<?= $edit ? $product['category'] : "" ?>">
         <option selected value="0">Categoría</option>
         <?php
            //se define $categories en el elemento que contiene a este
            foreach ($categories as $id => $category) {
                echo "<option value='$id'>$category</option>";
            }
            ?>
     </select>
 </div>
 <div class="mb-3">
     <label for="brand" class="form-label">Marca</label>
     <input
         type="text"
         class="form-control"
         id="brand"
         name="brand"
         required
         value="<?= $edit ? $product['brand'] : "" ?>">
 </div>

 <div class="mb-3">
     <label for="model" class="form-label">Modelo</label>
     <input
         type="text"
         class="form-control"
         id="model"
         name="model"
         value="<?= $edit ? $product['model']??"" : "" ?>">

 </div>
 <div class="mb-3">
     <label for="price" class="form-label">Precio</label>
     <input type="number" class="form-control" id="price" name="price" step="0.01" required value="<?= $edit ? $product['price'] : "" ?>">
 </div>
 <div class="mb-2">
     <label for="stock" class="form-label">Stock</label>
     <input type="number" class="form-control" id="stock" name="stock" value="<?= $edit ? $product['stock'] : "" ?>">
 </div>
 <div class="mb-3">
     <label for="img" class="form-label">Imagen</label>
     <input type="text" class="form-control" id="img" name="img">
 </div>
 <input class="form-check-input" type="checkbox" value="" id="checkChecked" name="best" value="<?= $edit ? $product['best'] : false ?>">
 <label class="form-check-label" for="checkChecked">
     Destacado
 </label>
 <div class="modal-footer">
     <button type="submit" class="btn btn-primary">Aceptar</button>
     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
 </div>
 </div>