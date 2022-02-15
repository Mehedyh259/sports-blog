<section class="nav-area bg-info sticky-top">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light ">
            <a class="navbar-brand mr-50" href="index"><i>Sports</i>World</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mr-5">
                    <li class="nav-item active">
                        <a class="nav-link" href="index">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link  dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            News </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <?php
                            $q=mysqli_query($conn,"select * from category");
                            while($row=mysqli_fetch_array($q)){
                            echo '<a style="text-transform:capitalize;" class="dropdown-item" href="categorized?key='.$row['name'].'">'.$row['name'].'</a>';
                            }
                            ?>
                            
                        </div>
                    </li>
                    
                    <?php
                    if(isset($_SESSION['name'])){ ?>
                        
                    <li class="nav-item dropdown">
                        <a class="nav-link username dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-user" style="margin-right:2px;" aria-hidden="true"></i>
                            <?php echo $_SESSION['name'];  ?>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                            
                        <?php if($_SESSION['mode']>=1){
                        echo ' <a class="dropdown-item" href="admin/index">Dashboard</a>';
                    }?>
                          
                            
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="logout"><i class="fa fa-sign-out" style="margin-right:2px;" aria-hidden="true"></i>Log Out</a>
                        </div>
                    </li>
                    <?php }else{ ?>
                    <li class="nav-item">
                        <a class="nav-link" href="signup"><i style="margin-right:2px;" class="fa fa-user-plus" aria-hidden="true"></i>Sign Up</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login"><i style="margin-right:2px;" class="fa fa-sign-in" aria-hidden="true"></i>Log In</a>
                    </li>
                    <?php }
                    
                    ?>
                 
                    
                    
                    

                </ul>
                <form action="search" method="POST" class="form-inline my-2 my-lg-0">
                    <input name="search" class="form-control mr-sm-2" type="search" placeholder="Search post with title" aria-label="Search">
                    <button class="btn btn-default my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </div>
</section>