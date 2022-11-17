<?php
    # get all roles
    $roles = mysqli_query($conn, "SELECT * FROM `role` WHERE id >= $_SESSION[adminRole]");
    if(isset($_POST['addAdmin'])){
        $name = $_POST['name'];
        $age = $_POST['age'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $password = sha1($_POST['password']);
        $email = $_POST['email'];
        $role = $_POST['role'];
        $image= $_FILES['image'];
        $image_name = time().$image['name'];
        $tmp_name = $_FILES['image']['tmp_name'];
        if(validImageUploaded($image)){
            move_uploaded_file($tmp_name, "./upload/$image_name");
            //insert
            $query = "INSERT INTO `admin` (`name`, `email`, `age`, `address`, `password`, `phone`, `role` ,`image`) VALUES ('$name', '$email', $age, '$address', '$password', '$phone', $role, '$image_name')";
            try{
                mysqli_query($conn, $query);
                //redirect
                header("location:/ODC/Lawyer/admin/admin_dashboard.php?admins");
            }
            catch(Exception $e){
                showMessage('An error occured while adding the admin.');
            }
        }
    }
    include_once './add_form.php';
?>