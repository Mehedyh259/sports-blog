<?php
include('../includes/conn.php');
include('../includes/header.php');
include('include/admin-check.php');

?>

<style>

    div#datatable_wrapper {
        padding: 25px;
    }
</style>


<div class="container-fluid">
   
    <div class="row">
        <div class="col-2 collapse show d-md-flex bg-info pt-2 pl-0 min-vh-100" id="sidebar">

            <?php
            include('include/sidebar.php');

            ?>

        </div>
        <div class="col " style="padding:20px 0">
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
            <h2 class="pl-2">All Members <a href="add-member" class="btn btn-sm btn-info"><i class="fa fa-plus" aria-hidden="true"></i> Add New</a> </h2>
            <table id="datatable" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">User Mode</th>
                        <th scope="col">User Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>
                   <?php
                    $query = mysqli_query($conn,"select * from users order by admin desc");
                    while($row = mysqli_fetch_array($query)){
                        ?>
                        <tr>
                            <th scope="row"><?php if($row['admin']==2)echo 'Super Admin';else if($row['admin']==1)echo 'Admin';else echo 'Normal User';  ?></th>
                            <td><?php echo $row['username'] ?></td>
                            <td><?php echo $row['email'] ?></td>
                            <td>
                                <?php if($row['admin']==2){
                                echo "this is super admin";   
                            }
                           else if($row['admin']==1){
                               if($_SESSION['mode']==2){
                                   echo'<a href="demote-admin?id='.$row["id"].'" class="btn btn-sm text-white btn-warning"><i class="fa fa-arrow-down" aria-hidden="true"></i> demote to normal user</a>';
                               }else{
                                   echo 'you can not modify admin !'; 
                               }   
                            } else{  echo '
                                <a href="make-admin?id='.$row["id"].'" class="btn btn-sm text-white btn-success"><i class="fa fa-check" aria-hidden="true"></i> make admin</a>
                                <a href="delete-member?id='.$row["id"].'" class="btn btn-sm text-white btn-danger"><i class="fa fa-times" aria-hidden="true"></i> remove user</a>';}  
                                ?>
                                
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