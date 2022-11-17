<table class="table table-striped table-dark ">
    <tr>
        <td>#ID</td>
        <td>Name</td>
        <td>email</td>
        <td>Role</td>
        <td>Action</td>
    </tr>
    <?php 
    $query = "SELECT * FROM `admin` WHERE email!='$_SESSION[adminEmail]' AND `role`>=$_SESSION[adminRole]";
    $admins = mysqli_query($conn, $query);
    ?>
    <?php foreach($admins as $admin):?>
        <tr>
            <td><?= $admin['id'] ?></td>
            <td><?= $admin['name'] ?></td>
            <td><?= $admin['email'] ?></td>
            <td><?= $admin['role'] ?></td>
            <td>
                <div class="dropdown">
                    <button class="btn btn-secondary" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        :
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="?detailAdmin=<?= $admin['id']?>"><i class="fa-solid fa-eye text-info"></i></a></li>
                        <li><a class="dropdown-item" href="?deleteAdmin=<?= $admin['id']?>"><i class="fa-solid fa-trash text-danger"></i></a></li>
                    </ul>
                </div>
            </td>
        </tr>
    <?php endforeach?>
</table> 
<a href="?addAdmin" class="btn btn-primary">Add New</a>