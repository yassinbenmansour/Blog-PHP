<?php
require('./includes/sidebar.php');


$sql = "SELECT * FROM  admins";

?>

<div class="container" style="width:80%;height:100%; padding-left:12% ; margin-top:-800px;">
    <h1 class="text-primary">Admins</h1>
    <hr>

    <table class="table align-middle mb-0 bg-white" style="width:80%;">
        <thead class="bg-light">
            <tr>
                <th>Id</th>
                <th>name</th>
                <th>email</th>
                <th>created_by</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $result = mysqli_query($con, $sql);
            while ($admin = $result->fetch_assoc()) :
            ?>

                
                <tr>
                    <td><?php echo $admin['id'] ?></td>
                    <td><?php echo $admin['name'] ?></td>
                    <td><?php echo $admin['email'] ?></td>
                    <td><?php echo $admin['added_by']?></td>
                   
                    <td>
                        <a href="editadmin.php?id=<?php echo $categorie['id'] ?>" class="btn btn-primary">
                            <i class="fa fa-edit"></i>
                        </a>
                        <a href="deleteadmine.php?id=<?php echo $categorie['id'] ?>" class="btn btn-danger">
                            <i class="fa fa-trash"></i>
                        </a>
                    </td>

                </tr>

            <?php
            endwhile;
            ?>
        </tbody>
    </table>

    <a href="addadmin.php" class="btn btn-success">
                      add      <i class="fa fa-plus"></i>
                        </a>
</div>