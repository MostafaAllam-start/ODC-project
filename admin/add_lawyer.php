<?php
    if(isset($_POST['addLawyer'])){
        $name = $_POST['name'];
        $age = $_POST['age'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $password = sha1($_POST['password']);
        $email = $_POST['email'];
        $salary = $_POST['salary'];
        $yearsEX = $_POST['yearsEX'];
        $image= $_FILES['image'];
        $image_name = time().$image['name'];
        $tmp_name = $_FILES['image']['tmp_name'];
        if(validImageUploaded($image)){
          move_uploaded_file($tmp_name, "../lawyer/upload/$image_name");
          //insert
          $query = "INSERT INTO `lawyer` (`name`, `email`, `age`, `address`, `password`, `phone`, `salary` ,`image`, yearsEX) VALUES ('$name', '$email', $age, '$address', '$password', '$phone', $salary, '$image_name', $yearsEX)";
          try{
            mysqli_query($conn, $query);
            session_start();
            $_SESSION["layerName"] = $name;
            $_SESSION["layerEmail"] = $email;
            //redirect
            header("location:/ODC/Lawyer/admin/admin_dashboard.php?lawyers");
          }
          catch(Exception $e){
            showMessage('An error occured while adding the lawyer.');
          }
        }
      }  
    include_once '../Lawyer/add_form.php';
?>
