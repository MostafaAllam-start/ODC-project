<table class="table table-striped table-dark ">
    <tr>
        <td>#ID</td>
        <td>Title</td>
        <td>Description</td>
        <td>Auther</td>
        <td>Create Time</td>
        <td>Action</td>
    </tr>
    <?php 
    echo"test";
    $query = "SELECT * FROM `articale`";
    $articales = mysqli_query($conn, $query);
    ?>
    <?php foreach($articales as $articale):?>
        <tr>
            <td><?= $articale['id'] ?></td>
            <td><?= $articale['title'] ?></td>
            <td><?= substr($articale['description'], 0, 50) ?></td>
            <td><?= $articale['auther'] ?></td>
            <td><?= $articale['create_time'] ?></td>
            <td>
                <div class="dropdown">
                    <button class="btn btn-secondary" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        :
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="?detailArticale=<?= $articale['id']?>"><i class="fa-solid fa-eye text-info"></i></a></li>
                        <li><a class="dropdown-item" href="?deleteArticale=<?= $articale['id']?>"><i class="fa-solid fa-trash text-danger"></i></a></li>
                    </ul>
                </div>
            </td>
        </tr>
    <?php endforeach?>
</table> 
<a href="?addArticale" class="btn btn-primary">Add New</a>