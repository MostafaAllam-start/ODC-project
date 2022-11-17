<?php
    include_once '../shared/head.php';
    include_once '../general/env.php';
    include_once '../general/function.php';
    include_once '../shared/nav.php';
    if(!isset($_SESSION['adminRole']))
        header("location:/ODC/Lawyer/auth/login.php");
?> 
 <div class="container bg-dark text-light p-3 mt-4">
    <?php 
        // Admins
        if(isset($_GET['admins']) && ($_SESSION['adminRole'] == 1 || $_SESSION['adminRole'] == 2))
            include_once './list_admin.php';

        // adding an admin
        if(isset($_GET['addAdmin']))
            include_once './add_admin.php';

        // detail and update admin if needed
        if(isset($_GET['detailAdmin']))
            include_once './detail_admin.php';

        // delete admin with lower or equal previlages
        if(isset($_GET['deleteAdmin'])){
            $query = "DELETE FROM `admin` WHERE id=$_GET[deleteAdmin]";
            try{
                $select = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM `admin` WHERE id=$_GET[deleteAdmin]"));
                unlink("./upload/$select[image]");
                mysqli_query($conn, $query);
                // redirect
                header("location:/ODC/Lawyer/admin/admin_dashboard.php?admins");
            }catch(Exception $e){
                showMessage("An error accur while deletion the admin.");
            }
        }


        // Lawyers
        if(isset($_GET['lawyers']) && ($_SESSION['adminRole'] == 1 || $_SESSION['adminRole'] == 3))
            include_once './list_lawyer.php';
        
        // add lawyer
        if(isset($_GET['addLawyer']))
            include_once './add_lawyer.php';

        // detail and update lawyer if needed
        if(isset($_GET['detailLawyer']))
            include_once './detail_lawyer.php';
            
        // delete lawyer
        if(isset($_GET['deleteLawyer'])){
            $query = "DELETE FROM `lawyer` WHERE id=$_GET[deleteLawyer]";
            try{
                $select = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM lawyer WHERE id=$_GET[deleteLawyer]"));
                unlink("../lawyer/upload/$select[image]");
                mysqli_query($conn, $query);
            }catch(Exception $e){
                showMessage("An error accur while deletion the lawyer.");
            }
        }


        // User
        if(isset($_GET['users']) && ($_SESSION['adminRole'] == 1 || $_SESSION['adminRole'] == 4))
            include_once './list_user.php';
        
        // add user
        if(isset($_GET['addUser']))
            include_once './add_user.php';

        // detail and update user if needed
        if(isset($_GET['detailUser']))
            include_once './detail_user.php';
            
        // delete user
        if(isset($_GET['deleteUser'])){
            $query = "DELETE FROM `user` WHERE id=$_GET[deleteUser]";
            try{
                $select = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM `user` WHERE id=$_GET[deleteUser]"));
                unlink("../user/upload/$select[image]");
                mysqli_query($conn, $query);
            }catch(Exception $e){
                showMessage("An error accur while deletion the user.");
            }
        }


        // Article
        if(isset($_GET['articales']) && ($_SESSION['adminRole'] == 1 || $_SESSION['adminRole'] == 5))
            include_once './list_articale.php';
        
        // add articale
        if(isset($_GET['addArticale']))
            include_once './add_articale.php';

        // detail and update articale if needed
        if(isset($_GET['detailArticale']))
            include_once './detail_articale.php';
            
        // delete articale
        if(isset($_GET['deleteArticale'])){
            $query = "DELETE FROM `articale` WHERE id=$_GET[deleteArticale]";
            try{
                $select = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM `articale` WHERE id=$_GET[deleteArticale]"));
                unlink("../Articale/upload/$select[image]");
                mysqli_query($conn, $query);
            }catch(Exception $e){
                showMessage("An error accur while deletion the articale.");
            }
        }
    ?>
</div>
<?php 
    include '../shared/footer.php';
?>
