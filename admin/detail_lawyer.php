<?php
    $query = "SELECT * FROM `lawyer` WHERE `lawyer`.id=$_GET[detailLawyer]"; 
    try{
        $lawyer = mysqli_fetch_assoc(mysqli_query($conn, $query));
    }catch(Exception $e){
        showMessage("An error occured while getting the Lawyer.");
    }
    if(isset($_POST['updateLawyer'])){
        $name = $_POST['name'];
        $age = $_POST['age'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $salary = $_POST['salary'];
        $yearsEX = $_POST['yearsEX'];
        $query = "UPDATE `lawyer` SET `name` = '$name', age=$age, `address`='$address', phone='$phone', email='$email', `salary`=$salary, yearsEX=$yearsEX WHERE id=$lawyer[id]";
        try{
            mysqli_query($conn, $query);
            //redirect
            header("location:/ODC/Lawyer/admin/admin_dashboard.php?lawyers");
        }catch(Exception $e){
            showMessage("An error occured while updating Lawyer.");
        }
    }

?>

<div class="text-center">
    <img src="/ODC/Lawyer/admin/upload/<?= $admin['image']?>" alt="admin_image"
        class="col-lg-4 col-md-5 col-sm-10 col-xs-10 mx-auto" style="border-radius:50%;">
</div>
<div class="mb-5">
    <form method="post">
        <!-- <input type="hidden" name="id" value="<?= $lawyer['id']?>"> -->
        <div class="mb-3">
            <label for="inputName" class="form-label" >Name</label>
            <input type="text" class="form-control" id="inputName" name="name" value="<?= $lawyer['name'] ?>">
        </div>
        <div class="mb-3">
            <label for="inputEmail" class="form-label">Email</label>
            <input type="email" class="form-control" id="inputEmail" name="email"  value="<?= $lawyer['email'] ?>">
        </div>
        <div class="mb-3">
            <label for="inputAge" class="form-label">Age</label>
            <input type="number" class="form-control" id="inputAge" name="age"  value="<?= $lawyer['age'] ?>">
        </div>
        <div class="mb-3">
            <label for="inputAddress" class="form-label">Address</label>
            <input type="text" class="form-control" id="inputAddress" name="address"  value="<?= $lawyer['address'] ?>">
        </div>
        <div class="mb-3">
            <label for="inputPhone" class="form-label">Phone</label>
            <input type="text" class="form-control" id="inputPhone" name="phone"  value="<?= $lawyer['phone'] ?>">
        </div>
        <div class="mb-3">
            <label for="inputSalary" class="form-label">Salary</label>
            <input type="text" class="form-control" id="inputSalary" name="salary"  value="<?= $lawyer['salary'] ?>">
        </div>
        <div class="mb-3">
            <label for="inputYearsEX" class="form-label">Years of Experience</label>
            <input type="number" class="form-control" id="inputYearsEX" name="yearsEX"  value="<?= $lawyer['yearsEX'] ?>">
        </div>
        <button type="submit" class="btn btn-primary" name="updateLawyer" value="updateLawyer">update</button>
    </form>
</div>