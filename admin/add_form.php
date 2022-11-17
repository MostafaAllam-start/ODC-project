<div class='container mt-3 bg-dark p-3'>
  <form method="post" enctype="multipart/form-data">
    <div class="mb-3">
      <label for="inputName" class="form-label">Name</label>
      <input type="text" class="form-control" id="inputName" name="name">
    </div>
    <div class="mb-3">
      <label for="inputEmail" class="form-label">Email</label>
      <input type="email" class="form-control" id="inputEmail" name="email">
    </div>
    <div class="mb-3">
      <label for="inputAge" class="form-label">Age</label>
      <input type="number" class="form-control" id="inputAge" name="age">
    </div>
    <div class="mb-3">
      <label for="inputAddress" class="form-label">Address</label>
      <input type="text" class="form-control" id="inputAddress" name="address">
    </div>
    <div class="mb-3">
      <label for="inputPhone" class="form-label">Phone</label>
      <input type="text" class="form-control" id="inputPhone" name="phone">
    </div>
    <div class="mb-3">
      <label for="inputPassword" class="form-label">Password</label>
      <input type="password" class="form-control" id="inputPassword" name="password">
    </div>
    <div class="mb-3">
      <label for="inputImage" class="form-label">Image</label>
      <input type="file" class="form-control" id="inputImage" name="image">
    </div>
    <div class="mb-3">
      <label for="inputRole" class="form-label">role</label>
      <select class="form-control" id="inputRole" name="role">
        <?php foreach($roles as $role): ?>
          <option value="<?= $role['id']?>"><?= $role['description']?></option>
        <?php endforeach?>
      </select>
    </div>
    <button type="submit" class="btn btn-primary" name="addAdmin" value="addAdmin">Submit</button>
  </form>
</div>