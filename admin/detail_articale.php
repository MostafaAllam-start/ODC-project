<?php 
    $articale = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM `articale` WHERE id=$_GET[detailArticale]"));
    $adminQuery = mysqli_query($conn, "SELECT * FROM `admin` WHERE email='$articale[auther]'");
    $adminAuther = mysqli_fetch_assoc($adminQuery);
    $lawyerAuther = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM lawyer WHERE email='$articale[auther]'"));
?>
<div class="card border-primary mb-3 mx-auto col-lg-8 col-md-9">
  <div class="card-header bg-transparent border-primary text-dark">
    <div class="text-end">
      <?php 
          if(mysqli_num_rows($adminQuery) > 0){ //admin
            echo "<sup>$adminAuther[name]</sup>";
            echo "<a href='/ODC/Lawyer/admin/admin_dashboard.php?detailAdmin=$adminAuther[id]'><img src='/ODC/Lawyer/admin/upload/$adminAuther[image]' style='width:30px;height:30px; border-radius:50%;'></a>";
          }
          else{ // lawyer
            echo $lawyerAuther['name'];
          }
      ?>
    </div>
    <div class="text-start">
      Published At: <?= $articale['create_time']?> 
    </div>
  </div>
  <div class="card-body text-dark">
    <img class="card-img" src="/ODC/Lawyer/articale/upload/<?=$articale['image']?>" style="height:400px">
    <h3 class="card-title"><?= $articale['title']?></h3>
    <p class="card-text"><?= $articale['description']?></p>
  </div>
  <div class="card-footer bg-transparent border-primary">Footer</div>
</div>