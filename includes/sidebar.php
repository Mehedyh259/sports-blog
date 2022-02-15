<style>
    .sidebar.widget{
        width: 100%;
    }
</style>
   <div class="sidebar widget position-fixed">
    <h3 class="text-info">Recent Post</h3>
    <ul>
        <?php
        $query= mysqli_query($conn,"select * from posts where publish=1 order by id desc limit 4");
        while($row = mysqli_fetch_array($query)){
        ?>
        <li>
            <div class="sidebar-thumb">
                <img class="animated rollIn" src="img/<?php if(!empty($row['image']))echo $row['image'];else echo'no_image.jpg' ?>" alt="" />
            </div><!-- .Sidebar-thumb -->
            <div class="sidebar-content">
                <h5 class="animated bounceInRight"><a href="singlepost?key=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a></h5>
            </div><!-- .Sidebar-thumb -->
            <div class="sidebar-meta">
                <span class="time" ><i class="fa fa-clock-o"></i> <?php echo $row['createdAt']; ?></span>

            </div><!-- .Sidebar-meta ends here -->
        </li><!-- .Li ends here -->           


        <?php }

        ?>


        
    </ul><!-- .Ul ends here -->
</div><!-- .Widget ends here -->