<?php
    $query = "SELECT * FROM `user`";
    try{
        $user = mysqli_fetch_assoc(mysqli_query($conn, $query));
    }catch(Exception $e){
        showMessage("An error occured while getting the admin.");
    }
    if(isset($_POST['updateUser'])){
        $name = $_POST['name'];
        $age = $_POST['age'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $query = "UPDATE `user` SET `name` = '$name', age=$age, `address`='$address', phone='$phone', email='$email' WHERE id=$user[id]";
        try{
            mysqli_query($conn, $query);
            //redirect
            header("location:/ODC/Lawyer/admin/admin_dashboard.php?users");
        }catch(Exception $e){
            showMessage("An error occured while updating user.");
        }
    }

?>

<div class="text-center">
    <img src="/ODC/Lawyer/user/upload/<?= $user['image']?>" alt="user_image"
        class="col-lg-3 col-md-5 col-sm-10 col-xs-10 mx-auto" style="border-radius:50%;">
</div>
<div class="mb-5">
    <form method="post">
        <!-- <input type="hidden" name="id" value="<?= $user['id']?>"> -->
        <div class="mb-3">
            <label for="inputName" class="form-label" >Name</label>
            <input type="text" class="form-control" id="inputName" name="name" value="<?= $user['name'] ?>">
        </div>
        <div class="mb-3">
            <label for="inputEmail" class="form-label">Email</label>
            <input type="email" class="form-control" id="inputEmail" name="email"  value="<?= $user['email'] ?>">
        </div>
        <div class="mb-3">
            <label for="inputAge" class="form-label">Age</label>
            <input type="number" class="form-control" id="inputAge" name="age"  value="<?= $user['age'] ?>">
        </div>
        <div class="mb-3">
            <label for="inputAddress" class="form-label">Address</label>
            <input type="text" class="form-control" id="inputAddress" name="address"  value="<?= $user['address'] ?>">
        </div>
        <div class="mb-3">
            <label for="inputPhone" class="form-label">Phone</label>
            <input type="text" class="form-control" id="inputPhone" name="phone"  value="<?= $user['phone'] ?>">
        </div>
        <button type="submit" class="btn btn-primary" name="updateUser" value="updateUser">update</button>
    </form>
</div>