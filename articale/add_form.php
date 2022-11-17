<div class='container mt-3 bg-dark p-3'>
  <form method="post" enctype="multipart/form-data">
    <div class="mb-3">
      <label for="inputTitle" class="form-label">Title</label>
      <input type="text" class="form-control" id="inputTitle" name="title">
    </div>
    <div class="mb-3">
        <label for="inputDescription" class="form-label">Description</label>
        <textarea type="text" class="form-control" id="inputDescription" name="description"></textarea>
    </div>
    <?php if(isset($_SESSION['adminEmail'])):?>
        <?php 
            $query = "SELECT email FROM `admin` WHERE email!='$_SESSION[adminEmail]' AND `role`!=1";
            if($_SESSION['adminRole'] == 1)
            $query = "SELECT email FROM `admin` WHERE email!='$_SESSION[adminEmail]'";
            $adminEmails = mysqli_query($conn, $query);
            $lawyerEmails = mysqli_query($conn, "SELECT email FROM `lawyer`");
        ?>
        <div class="mb-3">
            <label for="inputAuther" class="form-label">Auther</label>
            <select class="form-control" id="inputAuther" name="auther">
                <option value="<?= $_SESSION['adminEmail']?>"><?= $_SESSION['adminEmail'] ?></option>
                <?php foreach($adminEmails as $adminEmail):?>
                    <option value="<?= $adminEmail['email']?>"><?= $adminEmail['email'] ?></option>
                <?php endforeach ?>
                <?php foreach($lawyerEmails as $lawyerEmail):?>
                    <option value="<?= $lawyerEmail['email']?>"><?= $lawyerEmail['email'] ?></option>
                <?php endforeach ?>
            </select>
        </div>
    <?php elseif(isset($_SESSION['lawyerEmail'])):?>
        <div class="mb-3">
            <label for="inputAuther" class="form-label">Auther</label>
            <input type="hidden" class="form-control" id="inputAuther" name="auther" value="<?= $_SESSION['lawyerEmail'] ?>">
        </div>
    <?php endif?>
    <div class="mb-3">
      <label for="inputImage" class="form-label">Image</label>
      <input type="file" class="form-control" id="inputImage" name="image">
    </div>
    <button type="submit" class="btn btn-primary" name="addArticale" value="addArticale">Submit</button>
  </form>
</div>