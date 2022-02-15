<?php 
include("includes/conn.php");


include("includes/header.php");

include("includes/menubar.php");
$search = $_POST['search'];
?>




<!--main content start--> 



<section class="post-area">
    <div class="container">
        <div class="row">
            <div class=" col-lg-8 col-md-8 col-sm-10 md-mx-auto">
                <h1 class="py-2">Searching for: <?php echo $search; ?></h1>
                <?php

                $query = mysqli_query($conn,"select * from posts where title like '%".$search."%' order by id desc");

                if(mysqli_num_rows($query)>0){ 
                    while($row = mysqli_fetch_array($query)){
                ?>

                <!-- Blog Post -->
                <div class="card mb-4">
                    <img class="card-img-top p-4" src="img/<?php echo $row['image'] ; ?>" alt="Card image cap">
                    <div class="card-body">
                        <h2 class="card-title"><?php echo $row['title']; ?></h2>
                        <p class="card-text"><?php echo substr($row['description'], 0, 200); ?></p>
                        <a href="singlepost?key=<?php echo $row['id']; ?>" class="btn btn-info">Read More &rarr;</a>
                    </div>
                    <div class="card-footer text-muted">
                        Posted on <?php echo $row['createdAt']; ?> by
                        <a href="#"><?php echo $row['authorName']; ?></a>
                    </div>
                </div>                    


                <?php } }

                else{
                    echo "<h1>Couldn't Find any post on this title</h1>";
                }

                ?>










            </div>

            <!--sidebar start-->
            <div class="col-lg-4 col-sm-10 position-sticky md-mx-auto">
                <?php
                include('includes/sidebar.php');           

                ?>
            </div><!-- .Col ends here -->
        </div>
    </div>
</section>         








<!--main content end-->    














<?php

include("includes/footer.php");
?>