<?php
    require('./includes/header.php');
?>

<div class="container ">
  <div class="row g-2">
    <div class="col-lg-8 col-md-12 col-sm-12 border mt-5 rounded shadow">
      <div class="p-3">
            <div class="row">

            <?php
                $sql = "SELECT * FROM articles";
                $output = mysqli_query($con,$sql);

                while($articles = $output->fetch_assoc()):
            ?>
                    <div class="col-4 ">
                        <img
                        src="https://cdn.pixabay.com/photo/2015/05/31/15/07/coffee-792113_1280.jpg"
                        class="img-fluid rounded"
                        alt="Hollywood Sign on The Hill"
                        />
                    </div>
                    <div class="col-8">
                        <h1 class="">Title</h1><span class="badge rounded-pill badge-success ">Categorie</span>
                        <span class="badge rounded-pill text-primary"><?php echo date('y/m/d') ?></span>
                        <p class="">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nostrum necessitatibus nobis perferendis laudantium architecto enim ut facere magni animi id, aliquid illo ipsum cumque debitis eum vel magnam dolores excepturi.</p>
                        
                    </div>


                    <?php
                endwhile;
            ?>
                        

            </div>
            

        
            
        </div>

        
    </div>
    

    <div class="col-lg-4 col-md-12 col-sm-12 mt-5">
                <ul class="list-group">
                    <li class="list-group-item bg-primary text-white">Catégories</li>
                    <li class="list-group-item">Javascript</li>
                    <li class="list-group-item">php</li>
                    <li class="list-group-item">laravel</li>
                    <li class="list-group-item">node js</li>
                    <li class="list-group-item">html</li>
                    <li class="list-group-item">css</li>
                </ul>

        <ul class="list-group mt-3">
            <li class="list-group-item bg-primary text-white">Derniers articles</li>
            <li class="list-group-item">
                <div class="row">
                    <div class="col-4">
                        <img
                            src="https://cdn.pixabay.com/photo/2015/05/31/15/07/coffee-792113_1280.jpg"
                            class="img-fluid"
                            alt="Hollywood Sign on The Hill"
                        />                    
                    </div>
                    <div class="col-8">
                        <h4>Title first article</h4>
                        <p>Lorem ipsum, dolor sit...</p>
                    </div>
                </div>
            </li>
            <li class="list-group-item">
            <div class="row">
                    <div class="col-4">
                        <img
                            src="https://cdn.pixabay.com/photo/2015/05/31/15/07/coffee-792113_1280.jpg"
                            class="img-fluid"
                            alt="Hollywood Sign on The Hill"
                        />                    
                    </div>
                    <div class="col-8">
                        <h4>Title first article</h4>
                        <p>Lorem ipsum, dolor sit...</p>
                    </div>
                </div>
            </li>
            <li class="list-group-item">
            <div class="row">
                    <div class="col-4">
                        <img
                            src="https://cdn.pixabay.com/photo/2015/05/31/15/07/coffee-792113_1280.jpg"
                            class="img-fluid"
                            alt="Hollywood Sign on The Hill"
                        />                    
                    </div>
                    <div class="col-8">
                        <h4>Title first article</h4>
                        <p>Lorem ipsum, dolor sit...</p>
                    </div>
                </div>
            </li>
        </ul>
    

    </div>


    </div>
</div>

<?php
require('./includes/footer.php');

?>