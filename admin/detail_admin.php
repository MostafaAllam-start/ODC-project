<?php
    $query = "SELECT `admin`.id, `admin`.`name`, `admin`.`address`, `admin`.age,`admin`.phone, `admin`.`password`, `admin`.`image`, `admin`.email, `admin`.`role`, `role`.`description` AS roleDescription FROM `admin` JOIN `role` ON `admin`.`role`=`role`.id WHERE `admin`.id=$_GET[detailAdmin]";
    try{
        $admin = mysqli_fetch_assoc(mysqli_query($conn, $query));
    }catch(Exception $e){
        showMessage("An error occured while getting the admin.");
    }
    $query = "SELECT * FROM `role` WHERE id!=$admin[role] AND id>=$_SESSION[adminRole]";
    try{
        $roles = mysqli_query($conn, $query);
    }catch(Exception $e){
        showMessage("An error occured while getting roles.");
    }
    if(isset($_POST['updateAdmin'])){
        $name = $_POST['name'];
        $age = $_POST['age'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $role = $_POST['role'];
        $query = "UPDATE `admin` SET `name` = '$name', age=$age, `address`='$address', phone='$phone', email='$email', `role`=$role WHERE id=$admin[id]";
        try{
            mysqli_query($conn, $query);
            //redirect
            header("location:/ODC/Lawyer/admin/admin_dashboard.php?admins");
        }catch(Exception $e){
            showMessage("An error occured while updating admin.");
        }
    }

?>

<div class="text-center">
    <img src="/ODC/Lawyer/admin/upload/<?= $admin['image']?>" alt="admin_image"
        class="col-lg-3 col-md-5 col-sm-10 col-xs-10 mx-auto" style="border-radius:50%;">
</div>
<div class="mb-5">
    <form method="post">
        <!-- <input type="hidden" name="id" value="<?= $admin['id']?>"> -->
        <div class="mb-3">
            <label for="inputName" class="form-label" >Name</label>
            <input type="text" class="form-control" id="inputName" name="name" value="<?= $admin['name'] ?>">
        </div>
        <div class="mb-3">
            <label for="inputEmail" class="form-label">Email</label>
            <input type="email" class="form-control" id="inputEmail" name="email"  value="<?= $admin['email'] ?>">
        </div>
        <div class="mb-3">
            <label for="inputAge" class="form-label">Age</label>
            <input type="number" class="form-control" id="inputAge" name="age"  value="<?= $admin['age'] ?>">
        </div>
        <div class="mb-3">
            <label for="inputAddress" class="form-label">Address</label>
            <input type="text" class="form-control" id="inputAddress" name="address"  value="<?= $admin['address'] ?>">
        </div>
        <div class="mb-3">
            <label for="inputPhone" class="form-label">Phone</label>
            <input type="text" class="form-control" id="inputPhone" name="phone"  value="<?= $admin['phone'] ?>">
        </div>
        <div class="mb-3">
            <label for="inputRole" class="form-label">role</label>
            <select class="form-control" id="inputRole" name="role">
                <option value="<?= $admin['role']?>"><?= $admin['roleDescription']?></option>
                <?php foreach($roles as $role): ?>
                    <option value="<?= $role['id']?>"><?= $role['description']?></option>
                <?php endforeach?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary" name="updateAdmin" value="updateAdmin">update</button>
    </form>
</div>