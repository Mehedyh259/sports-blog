<?php
include('../includes/conn.php');
include('../includes/header.php');
include('include/admin-check.php');



?>
<style>

    div#datatable_wrapper {
        padding: 25px;
    }
    .tooltip-inner {
        background: #14114a; 
        color: #fff;
    }
    .tooltip.top .tooltip-arrow {
        border-top-color: #14114a;
    }
    
</style>



<div class="container-fluid">
    <div class="row">
        <div class="col-2 collapse show d-md-flex bg-info pt-2 pl-0 min-vh-100" id="sidebar">

            <?php
            include('include/sidebar.php');

            ?>

        </div>
        <div class="col pt-2">
            <?php
            if(isset($_SESSION['msg'])){
            ?>

            <div class="<?php echo $_SESSION['msg-type'].' alert-dismissible'; ?>" role="alert">
                <?php echo $_SESSION['msg']; ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


            <?php 
                unset($_SESSION['msg']);
                unset($_SESSION['msg-type']);
            }
            ?>
            <h2 class="center">My Posts <a href="add-post" class="btn btn-sm btn-info"><i class="fa fa-plus"></i> Add Post</a></h2>
            <table id="datatable" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">SL</th>
                        <th scope="col">Post Title</th>
                        <th scope="col">Post Date</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    
                    
                    
                    
                    $id = $_SESSION['userid'];
                    $query = mysqli_query($conn,"select * from posts where authorId = '$id' order by id desc");
                    $i=0;
                    while($row = mysqli_fetch_array($query)){
                    ?>
                    <tr>
                        <th scope="row"><?php  echo ++$i; ?></th>
                        <td><?php echo $row['title']; ?></td>
                        <td><?php echo $row['createdAt']; ?></td>
                        <td><?php if($row['publish']==1)echo 'Published';else echo 'Not Published'; ?></td>
                        <td>
                           
                            <a href="../singlepost?key=<?php echo $row['id']; ?>"><button type="button" data-toggle="tooltip" data-placement="top" title="view" class="btn  btn-sm btn-primary"><i class="fa fa-eye"></i></button></a>
                            <a href="updatepost?key=<?php echo $row['id']; ?>"><button type="button" data-toggle="tooltip" data-placement="top" title="edit" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></button></a>
                            <a href="deletepost?key=<?php echo $row['id']; ?>"><button type="button" data-toggle="tooltip" data-placement="top" title="delete" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button></a>
                            <form style="display:inline-block;" action="publishing" method="post">
                                <input name="row_num" type="hidden" value="<?php echo $row['id']; ?>">
                                <?php
                            if($row['publish']==0){
                                echo '<button name="publish" class="btn btn-sm btn-success">publish</button>';
                            }else{
                                echo '<button name="unpublish" class="btn text-white btn-sm btn-warning">unpublish</button>';
                            }
                            ?>
                            </form>
                        </td>
                    </tr>
                    <?php
                    }

                    ?>




                </tbody>
            </table>



        </div>
    </div>
</div>

<?php
include('../includes/footer.php');
?>