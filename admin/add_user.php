<?php
    if(isset($_POST['addUser'])){
        $name = $_POST['name'];
        $age = $_POST['age'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $password = sha1($_POST['password']);
        $email = $_POST['email'];
        $image= $_FILES['image'];
        $image_name = time().$image['name'];
        $tmp_name = $_FILES['image']['tmp_name'];
        if(validImageUploaded($image)){
            move_uploaded_file($tmp_name, "../user/upload/$image_name");
            //insert
            $query = "INSERT INTO `user` (`name`, `email`, `age`, `address`, `password`, `phone`, `image`) VALUES ('$name', '$email', $age, '$address', '$password', '$phone', '$image_name')";
            try{
                mysqli_query($conn, $query);
                //redirect
                header("location:/ODC/Lawyer/admin/admin_dashboard.php?users");
            }
            catch(Exception $e){
                showMessage('An error occured while adding the user.');
            }
        }
    }
    include_once '../user/add_form.php';
?>
