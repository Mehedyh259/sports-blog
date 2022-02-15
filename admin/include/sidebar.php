

<style>
    .nav-link[data-toggle].collapsed:after {
        content: " ▾";
        color: #fff;
    }
    .nav-link[data-toggle]:not(.collapsed):after {
        content: " ▴";
        color: #fff;
    } 
    .admin-sidebar {
        width: 100%;
        min-height: 92vh;
    }
    #sidebar .nav-link:hover{
        background: #127989!important;
        transition: .4s ease-in-out;
    }
    .admin-sidebar .nav-link {
        padding: 12px 16px;
    }


</style>
<ul class="nav admin-sidebar flex-column flex-nowrap overflow-hidden">
    <li class="nav-item text-center">
        <a class="nav-link bg-info text-white" href="index"><i class="fa fa-home"></i> <span class="d-none d-sm-inline">Dashboard (<?php echo $_SESSION['name'].')';
            if($_SESSION['mode']==2)
                echo '<br><span class="badge p-1 badge-success">super admin</span>';
            ?></span></a>
        
    </li>
    <li class="nav-item">
        <a class="nav-link bg-secondary text-white" href="../"> <span class="d-none d-sm-inline">Visit Site</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed text-info" href="#submenu2" data-toggle="collapse" data-target="#submenu2"><i class="text-white fa fa-clipboard"></i> <span class="d-none text-white d-sm-inline">Manage Posts </span></a>
        <div class="collapse" id="submenu2" aria-expanded="false">
            <ul class="flex-column pl-2 nav">
               <?php if($_SESSION['mode']==2){
    echo '<li class="nav-item"><a class="nav-link py-0 text-white " href="all-posts"><i class="fa text-white fa-clipboard mr-1"></i><span>All Posts</span></a></li>';
} ?>
                <li class="nav-item"><a class="nav-link py-0 text-white " href="index"><i class="fa text-white fa-cogs mr-1"></i><span>Manage My Posts</span></a></li>
                <li class="nav-item"><a class="nav-link py-0 text-white" href="add-post"><i class="fa text-white  fa-plus-square mr-1"></i><span>Add New Post</span></a></li>
            </ul>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed text-white" href="#submenu1" data-toggle="collapse" data-target="#submenu1"><i class="fa fa-users"></i> <span class="d-none d-sm-inline">Members</span></a>
        <div class="collapse" id="submenu1" aria-expanded="false">
            <ul class="flex-column pl-2 nav">
                <li class="nav-item"><a class="text-white nav-link py-0" href="members"><i class="fa fa-cogs mr-1"></i><span>Manage Members</span></a></li>
                <li class="nav-item"><a class="text-white nav-link py-0" href="add-member"><i class="fa fa-user-plus mr-1"></i><span>Add New Member</span></a></li>
            </ul>
        </div>
    </li>

    <li class="nav-item"><a class="nav-link text-white" href="category"><i class="fa fa-list-alt"></i> <span class="d-none d-sm-inline">Manage Post Categories</span></a></li>

    <li class="nav-item"><a class="nav-link text-white" href="../logout"><i class="fa fa-sign-out"></i> <span class="d-none d-sm-inline">Log Out</span></a></li>

</ul>