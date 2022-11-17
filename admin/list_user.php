<table class="table table-striped table-dark ">
    <tr>
        <td>#ID</td>
        <td>Name</td>
        <td>email</td>
        <td>Action</td>
    </tr>
    <?php 
    $query = "SELECT * FROM `user`";
    $users = mysqli_query($conn, $query);
    ?>
    <?php foreach($users as $user):?>
        <tr>
            <td><?= $user['id'] ?></td>
            <td><?= $user['name'] ?></td>
            <td><?= $user['email'] ?></td>
            <td>
                <div class="dropdown">
                    <button class="btn btn-secondary" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        :
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="?detailUser=<?= $user['id']?>"><i class="fa-solid fa-eye text-info"></i></a></li>
                        <li><a class="dropdown-item" href="?deleteUser=<?= $user['id']?>"><i class="fa-solid fa-trash text-danger"></i></a></li>
                    </ul>
                </div>
            </td>
        </tr>
    <?php endforeach?>
</table> 
<a href="?addUser" class="btn btn-primary">Add New</a>