<table class="table table-striped table-dark ">
    <tr>
        <td>#ID</td>
        <td>Name</td>
        <td>Email</td>
        <td>salary</td>
        <td>yearsEX</td>
        <td>Action</td>
    </tr>
    <?php 
    $query = "SELECT * FROM `lawyer`";
    $admins = mysqli_query($conn, $query);
    ?>
    <?php foreach($admins as $admin):?>
        <tr>
            <td><?= $admin['id'] ?></td>
            <td><?= $admin['name'] ?></td>
            <td><?= $admin['email'] ?></td>
            <td><?= $admin['salary'] ?></td>
            <td><?= $admin['yearsEX'] ?></td>
            <td>
                <div class="dropdown">
                    <button class="btn btn-secondary" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        :
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="?detailLawyer=<?= $admin['id']?>"><i class="fa-solid fa-eye text-info"></i></a></li>
                        <li><a class="dropdown-item" href="?deleteLawyer=<?= $admin['id']?>"><i class="fa-solid fa-trash text-danger"></i></a></li>
                    </ul>
                </div>
            </td>
        </tr>
    <?php endforeach?>
</table> 
<a href="?addLawyer" class="btn btn-primary">Add New</a>