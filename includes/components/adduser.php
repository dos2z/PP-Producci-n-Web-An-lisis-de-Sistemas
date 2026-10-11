 <div class="mb-3">
     <label for="name" class="form-label">Nombre</label>
     <input type="text" class="form-control" id="name" name="name" required value="<?= $edit ? $user['name'] : "" ?>">
 </div>
 <div class="mb-3">
     <label for="email" class="form-label">Email</label>
     <input type="email" class="form-control" id="email" name="email" required value="<?= $edit ? $user['email'] : "" ?>">
 </div>
 <div class="mb-3">
     <label for="profile" class="form-label">Tipo de perfil</label>
     <select class="form-select" name="profile" id="profile">

         <option value="0">Usuario</option>
         <option value="1">Administrador</option>
     </select>
 </div>
 <div class="mb-3">
     <label for="description" class="form-label">Password</label>
     <input type="password" class="form-control" id="password" name="password" required>
 </div>




 <div class="modal-footer">
     <button type="submit" class="btn btn-primary">Aceptar</button>
     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
 </div>
 </div>