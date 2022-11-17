<?php
  include_once '../general/env.php';
  include_once '../shared/head.php';
  include_once '../general/function.php';

  if(isset($_POST['login'])){
    $password = sha1($_POST['password']);
    $email = $_POST['email'];

    //get the admin from the db if exists
    $queryAdmin = "SELECT * FROM `admin` WHERE email='$email' AND `password`='$password'";
    $selectAdmin = mysqli_query($conn, $queryAdmin);
    $admin = mysqli_fetch_assoc($selectAdmin);
    $countAdmin = mysqli_num_rows($selectAdmin);

    //get lawyer form the db if exists
    $queryLawyer = "SELECT * FROM `lawyer` WHERE email='$email' AND `password`='$password'";
    $selectLawyer = mysqli_query($conn, $queryLawyer);
    $lawyer = mysqli_fetch_assoc($selectLawyer);
    $countLawyer = mysqli_num_rows($selectLawyer);
  
    //get user form the db if exists
    $queryUser = "SELECT * FROM `lawyer` WHERE email='$email' AND `password`='$password'";
    $selectUser = mysqli_query($conn, $queryUser);
    $user = mysqli_fetch_assoc($selectUser);
    $countUser = mysqli_num_rows($selectUser);
    
    if($countAdmin > 0){
      session_start();
      $_SESSION["adminName"] = $admin["name"];
      $_SESSION["adminEmail"] = $admin['email'];
      $_SESSION["adminRole"] = $admin['role'];
      //redirect
      header("location:/ODC/Lawyer/admin/admin_dashboard.php");
    }
    else if($countLawyer > 0){
      session_start();
      $_SESSION["lawyerName"] = $lawyer["name"];
      $_SESSION["lawyerEmail"] = $lawyer['email'];
      //redirect
      header("location:/ODC/Lawyer/shared/home.php");
    }else if($countUser > 0){
      session_start();
      $_SESSION["userName"] = $user["name"];
      $_SESSION["userEmail"] = $user['email'];
      //redirect
      header("location:/ODC/Lawyer/shared/home.php");
    }
    else{
        showMessage("Wrong Credentials.");
    }
  }
?> 
<div class='container mt-3 bg-dark p-3'>
  <form method="post" enctype="multipart/form-data">
    <div class="mb-3">
      <label for="inputEmail" class="form-label">Email</label>
      <input type="email" class="form-control" id="inputEmail" name="email">
    </div>
    <div class="mb-3">
      <label for="inputPassword" class="form-label">Password</label>
      <input type="password" class="form-control" id="inputPassword" name="password">
    </div>
    <button type="submit" class="btn btn-primary" name="login" value="login">login</button>
  </form>
</div>
<?php 
  include '../shared/footer.php';
?>