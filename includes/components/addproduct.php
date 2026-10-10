 <div class="mb-3">
                        <label for="name" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descripcion</label>
                        <input type="text" class="form-control" id="description" required>
                    </div>
                    <div class="mb-3">
                        <select class="form-select" name="category" id="category">
                            <option selected value="0">Categoría</option>
                            <?php
                            foreach ($categories as $id => $category) {
                                echo "<option value='$id'>$category</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Precio</label>
                        <input type="number" class="form-control" id="price" step="0.01" required>
                    </div>
                    <div class="mb-2">
                        <label for="stock" class="form-label">Stock</label>
                        <input type="number" class="form-control" id="stock">
                    </div>
                    <div class="mb-3">
                        <label for="img" class="form-label">Imagen</label>
                        <input type="text" class="form-control" id="img">
                    </div>
                    <input class="form-check-input" type="checkbox" value="" id="checkChecked" name="best">
                    <label class="form-check-label" for="checkChecked">
                        Destacado
                    </label>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Aceptar</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            </div>
        </div>