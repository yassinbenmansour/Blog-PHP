<?php
require('./includes/sidebar.php');


$sql = "SELECT * FROM  categories";

?>

<div class="container" style="width:80%;height:100%; padding-left:12% ; margin-top:-800px;">
    <h1 class="text-primary">Categories</h1>
    <hr>

    <table class="table align-middle mb-0 bg-white" style="width:80%;">
        <thead class="bg-light">
            <tr>
                <th>Id</th>
                <th>name</th>
                <th>created_by</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $result = mysqli_query($con, $sql);
            while ($categorie = $result->fetch_assoc()) :
            ?>

                
                <tr>
                    <td><?php echo $categorie['id'] ?></td>
                    <td><?php echo $categorie['name'] ?></td>
                    <td><?php echo $categorie['added_by']?></td>
                   
                    <td>
                        <a href="editCategorie.php?id=<?php echo $categorie['id'] ?>" class="btn btn-primary">
                            <i class="fa fa-edit"></i>
                        </a>
                        <a href="deletecataegorie.php?id=<?php echo $categorie['id'] ?>" class="btn btn-danger">
                            <i class="fa fa-trash"></i>
                        </a>
                    </td>

                </tr>

            <?php
            endwhile;
            ?>
        </tbody>
    </table>
</div>