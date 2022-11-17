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
            $query = "INSERT INTO `articale` (`title`, `description`, `auther`, `image`) VALUES ('$title', '$description', '$auther', '$image_name')";
            try{
                mysqli_query($conn, $query);
                //redirect
                header("location:/ODC/Lawyer/admin/admin_dashboard.php?articales");
            }
            catch(Exception $e){
                showMessage($e->getMessage());
            }
        }
    }
?>
<?php
    include_once '../articale/add_form.php';
?>