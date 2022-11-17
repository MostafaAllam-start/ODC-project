<?php
    include_once '../general/env.php';
    include_once '../general/function.php';
    session_start();
    // get admin info
    if(isset($_SESSION['adminEmail'])){
        $query = "SELECT * FROM `admin` WHERE email='$_SESSION[adminEmail]'";
        $select = mysqli_query($conn, $query);
        $admin = mysqli_fetch_assoc($select);
    }else if(isset($_SESSION['lawyerEmail'])){
        $query = "SELECT * FROM `lawyer` WHERE email='$_SESSION[lawyerEmail]'";
        $select = mysqli_query($conn, $query);
        $lawyer = mysqli_fetch_assoc($select);
    }else if(isset($_SESSION['userEmail'])){
        $query = "SELECT * FROM `user` WHERE email='$_SESSION[userEmail]'";
        $select = mysqli_query($conn, $query);
        $lawyer = mysqli_fetch_assoc($select);
    }
    else{
        header("location:/ODC/Lawyer/auth/login.php");
    }
    if(isset($_GET['logout'])){
        session_unset();
        session_destroy();
        header("location:/ODC/Lawyer/auth/login.php");
    }
?> 
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="/ODC/Task/Shared/home">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
            aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <?php if (isset($_SESSION['adminName'])) : ?>
                    <?php if($_SESSION['adminRole'] == 1):?>
                        <li class="nav-item">
                            <a class="nav-link"href="/ODC/Lawyer/admin/admin_dashboard.php?admins">Admins</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"href="/ODC/Lawyer/admin/admin_dashboard.php?lawyers">Lawyers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"href="/ODC/Lawyer/admin/admin_dashboard.php?users">Users</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"href="/ODC/Lawyer/admin/admin_dashboard.php?articales">Articles</a>
                        </li>
                    <?php elseif($_SESSION['adminRole'] == 2):?>  
                        <li class="nav-item">
                            <a class="nav-link"href="/ODC/Lawyer/admin/admin_dashboard.php?admins">admins</a>
                        </li> 
                    <?php elseif($_SESSION['adminRole'] == 3):?>
                        <li class="nav-item">
                            <a class="nav-link"href="/ODC/Lawyer/admin/admin_dashboard.php?lawyers">Lawyers</a>
                        </li> 
                    <?php elseif($_SESSION['adminRole'] == 4):?> 
                        <li class="nav-item">
                            <a class="nav-link"href="/ODC/Lawyer/admin/admin_dashboard.php?users">Users</a>
                        </li> 
                    <?php elseif($_SESSION['adminRole'] == 5):?> 
                        <li class="nav-item">
                            <a class="nav-link"href="/ODC/Lawyer/admin/admin_dashboard.php?articales">Article</a>
                        </li> 
                    <?php endif ?>
                <?php endif ?>
                <?php if (isset($_SESSION['lawyerName'])) : ?>
                    
                <?php endif ?>
                <?php if (isset($_SESSION['userName'])) : ?>

                <?php endif ?>
            </ul>
            <?php if (isset($_SESSION['adminName'])) : ?>
                <div class="me-3">
                    <a href="/ODC/Lawyer/admin/admin_profile.php"><img src="/ODC/Lawyer/admin/upload/<?= $admin['image']?>" style="width:30px; height:30px;border-radius: 50%;"></a>
                </div>
            <?php elseif(isset($_SESSION['lawyerName'])) : ?>
                <div class="me-3">
                    <a href="/ODC/Lawyer/lawyer/lawyer_profile.php"><img src="/ODC/Lawyer/lawyer/upload/<?= $lawyer['image']?>" style="width:30px; height:30px;border-radius: 50%;"></a>
                </div>
            <?php elseif (isset($_SESSION['userName'])) : ?>
                <div class="me-3">
                    <a href="/ODC/Lawyer/user/user_profile.php"><img src="/ODC/Lawyer/user/upload/<?= $user['image']?>" style="width:30px; height:30px;border-radius: 50%;"></a>
                </div>
            <?php endif ?>
            <div>
                <a class="text-danger" href="?logout"><i class="fa-solid fa-right-from-bracket"></i></a>
            </div>
        </div>
    </div>
</nav>