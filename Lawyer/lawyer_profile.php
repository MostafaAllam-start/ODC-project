<?php
    include '../shared/head.php';
    include_once '../general/env.php';
    include_once '../general/function.php';
    session_start();
    // get admin info
    if(isset($_SESSION['LowyerEmail'])){
        $query = "SELECT * FROM `admin` WHERE email='$_SESSION[adminEmail]'";
        $select = mysqli_query($conn, $query);
        $admin = mysqli_fetch_assoc($select);
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
                <li class="nav-item">
                    <a class="nav-link"href="?lowyer">Lawyer</a>
                </li>
            </ul>
            <?php if (isset($_SESSION['adminName'])) : ?>
                <div class="me-3">
                    <a href="/ODC/Lawyer/admin/admin_profile.php"><img src="./upload/<?= $admin['image']?>" style="width:30px; height:30px;border-radius: 50%;"></a>
                </div>
                <div>
                    <a class="text-danger" href="?logout"><i class="fa-solid fa-right-from-bracket"></i></a>
                </div>
            <?php endif ?>
        </div>
    </div>
</nav>
<?php 
    include '../shared/footer.php';
?>