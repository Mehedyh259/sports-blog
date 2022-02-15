<?php 
include("includes/conn.php");


include("includes/header.php");

include("includes/menubar.php");
?>


<?php
if(isset($_SESSION['login-msg'])){
?>

<div class="<?php echo $_SESSION['login-type'].' alert-dismissible'; ?>" role="alert">
    <?php echo $_SESSION['login-msg']; ?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>


<?php 
    unset($_SESSION['login-msg']);
    unset($_SESSION['login-type']);
   }
?>   

<!--main content start--> 

<section class="post-area">
    <div class="container-fluid">
        <div class="row">
            <div class=" col-lg-9 col-md-9 col-sm-10 md-mx-auto">



                <div class="row">
                    <?php 
                    $query = mysqli_query($conn,"select * from posts where publish=1 order by id desc");
                    while($row = mysqli_fetch_array($query)){
                    ?>
                    <div class="col-lg-6 col-md-6">
                        <!-- Blog Post -->
                        <div class="card mb-4 mx-auto">
                            <img style="height:360px;" class="card-img-top p-4" src="img/<?php if(!empty($row['image']))echo $row['image'];else echo'no_image.jpg' ?>" alt="Card image cap">
                            <div class="card-body">
                                <h2 class="bg-info text-white p-1 card-title"><?php echo $row['title']; ?></h2>
                                <p class=" text-info"><small>Category: <?php echo $row['category']; ?> </small></p>
                                <div class="card-text"><?php echo substr($row['description'], 0, 250); ?></div>
                                <a href="singlepost?key=<?php echo $row['id']; ?>" class="btn btn-info">Read More &rarr;</a>
                            </div>
                            <div class="card-footer text-muted">
                                Posted on <?php echo $row['createdAt']; ?> by
                                <a href="#"><?php echo $row['authorName']; ?></a>
                            </div>
                        </div>


                    </div>

                    <?php } ?>

                </div>



            </div>

            <!--sidebar start-->
            <div class="col-lg-3 col-sm-10 position-sticky md-mx-auto">
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