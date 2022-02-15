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
            <form class="" style="max-width:80%" action="add-category" method="POST">
                <div class="form-group">
                    <div class="row">
                        <input name="category" style="display:inline-block; margin-left: 62px;" type="text" placeholder="Add New Category" class="col-sm-3 form-control">
                        <input type="submit" name="submit" value="Add New" class="btn btn-sm ml-2 btn-info">
                    </div>
                </div>
            </form>
            

            <table style="width:50%;"  class="table ml-5 table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">sl</th>
                        <th scope="col">Category Name</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i=0;
                    $query = mysqli_query($conn,"select distinct id,name from category");
                    while($row = mysqli_fetch_array($query)){
                    ?>
                    <tr>
                        <td><?php  echo ++$i; ?></td>
                        <td><?php  echo $row['name']; ?></td>
                        <td>
                            <?php echo '
                                <a href="delete-category?id='.$row["id"].'" class="btn btn-sm text-white btn-danger"><i class="fa fa-times"></i> remove </a>';  ?> 
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