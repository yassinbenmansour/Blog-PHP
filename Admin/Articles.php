<?php
require('./includes/sidebar.php');


$sqlarticle = "SELECT * FROM articles";

?>

<div class="container" style="width:80%;height:100%; padding-left:12% ; margin-top:-900px;">
    <h1 class="text-primary">Articles</h1>
    <hr>

    <table class="table align-middle mb-0 bg-white" style="width:80%;">
  <thead class="bg-light">
    <tr>
      <th>Id</th>
      <th>Titre</th>
      <th>Description</th>
      <th>image</th>
      <th>author</th>
      <th>Ajoute</th>
      <th>Voir</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
        $result = mysqli_query($con,$sqlarticle);
        while($articles = $result->fetch_assoc()):
    ?>

    <tr>
        <td><?php echo $articles['id'] ?></td>
        <td><?php echo $articles['title'] ?></td>
        <td><?php echo substr($articles['body'],0,50)."..." ?></td>
        <td><?php echo $articles['image'] ?></td>
        <td><?php echo $articles['author'] ?></td>
        <td><?php echo $articles['created'] ?></td>
        <td>
            <a href="../viewPost.php?id=<?php echo $articles['id'] ?>" class="btn btn-success">
                <i class="fa fa-eYE"></i>
            </a>
        </td>
        <td>
            <a href="editarticle.php?id=<?php echo $articles['id'] ?>" class="btn btn-primary">
                <i class="fa fa-edit"></i>
            </a>
            <a href="deletearticle.php?id=<?php echo $articles['id'] ?>" class="btn btn-danger">
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