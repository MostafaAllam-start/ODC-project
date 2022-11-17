<?php 
    if(isset($_POST['addArticale'])){
        $title = $_POST['title'];
        $description = $_POST['description'];
        $auther = $_POST['auther'];
        $image = $_FILES['image'];
        $image_name = time().$image['name'];
        $tmp_name = $_FILES['image']['tmp_name'];
        if(validImageUploaded($image)){
            move_uploaded_file($tmp_name, "../articale/upload/$image_name");
            //insert
            $query = "INSERT INTO `articale` (`title`, `description`, `auther`, `image_name`) VALUES ('$title', '$description', '$auther', '$image_name')";
            try{
                mysqli_query($conn, $query);
                //redirect
                header("location:/ODC/Lawyer/general/home.php");
            }
            catch(Exception $e){
                showMessage('An error occured while adding the articale.');
            }
        }
    }
?>