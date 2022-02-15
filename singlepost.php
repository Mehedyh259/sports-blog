<?php 
include("includes/conn.php");


include("includes/header.php");

include("includes/menubar.php");
?>





<section class="single-post post-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 mx-md-auto ">
                
                
            <?php
                $id = $_GET['key'];
                $query = mysqli_query($conn,"select * from posts where id='$id'");
                
                $row= mysqli_fetch_assoc($query);
                
                
                ?>

                <!-- Title -->
                <h1 class="mt-4"><?php echo $row['title'];  ?></h1>

                <!-- Author -->
                <p class="lead">
                    by
                    <a href="#"><?php echo $row['authorName'];  ?></a>
                    
                </p>
                <p class=" text-info"><small>Category: <?php echo $row['category']; ?> </small></p>
                <hr>

                <!-- Date/Time -->
                <p>Posted on <?php echo $row['createdAt'];  ?></p>

                <hr>

                <!-- Preview Image -->
                <img class="post-img rounded" src="img/<?php if(!empty($row['image']))echo $row['image'];else echo'no_image.jpg' ?>" alt="">

                <hr>

                <!-- Post Content -->
                <p>
                    <?php echo $row['description'];  ?>
                </p>

                
                </div>

            
            <div class="col-lg-4">
                <?php
                include('includes/sidebar.php');           

                ?>
            </div>
        </div>
    </div>
</section>








<?php

include("includes/footer.php");
?>