<?php
include('../includes/conn.php');
include('../includes/header.php');
include('include/admin-check.php');
$id = $_GET['key'];
$title = '';
$category='';
$description = '';
$query='';
$publish=0;

if(isset($_POST['submit'])){
    $title=$_POST['title'];
    $category = $_POST['category'];
    $description = $_POST['editor1'];
    if(!empty($_POST['checkbox'])){
        $publish=1;
    }
    if(empty($_FILES['image']['name'])){
        $query = mysqli_query($conn,"update posts set title='$title',category='$category',description = '$description',
        publish='$publish' where id='$id'");
        
    }else{
        $image_name = time().'_'.$_FILES['image']['name'];
        $destination = '../img/'.$image_name;
        move_uploaded_file($_FILES['image']['tmp_name'],$destination);
        
        $query = mysqli_query($conn,"update posts set title='$title',category='$category',description='$description',image='$image_name',publish='$publish' where id='$id'");
        
    }

    if($query){
        $_SESSION['msg']= "Post Updated Successfully..! ";
        $_SESSION['msg-type']="alert alert-success";

        header("location: index");
    }

    
    
}








?>
<script src="//cdn.ckeditor.com/4.4.7/full/ckeditor.js"></script>

<div class="container-fluid">
    <div class="row">
        <div class="col-2 collapse show d-md-flex bg-info pt-2 pl-0 min-vh-100" id="sidebar">

            <?php
            include('include/sidebar.php');

            ?>

        </div>
        <div class="col pt-2">

            <h1>Update Post</h1>

            <form action="" method="POST" enctype="multipart/form-data">
                <?php
                $query = mysqli_query($conn,"select * from posts where id = '$id' ");
                $row = mysqli_fetch_array($query);
                ?>

                <div class="form-group">
                    <label for="title">Title <span class="require">*</span></label>
                    <input required type="text" class="form-control" value="<?php  echo $row['title']; ?>" name="title" />
                </div>
                <div class="form-group">
                    <label for="category">Category <span class="require">*</span></label>
                    <select name="category" class=" form-control">
                        <option value="<?php  echo $row['category']; ?>"><?php  echo $row['category']; ?></option>
                        <option value="cricket">cricket</option>
                        <option value="football">football</option>
                        <option value="hockey">hockey</option>
                        <option value="shooting">shooting</option>
                    </select>
                </div>
                <div class="from-group">
                    <label for="image">Image *</label>
                    <input  type="file" class="form-control" name="image" id="image">
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea  name="editor1" required id="textarea" rows="15" class=" form-control" >
                        <?php  echo $row['description']; ?>
                    </textarea>
                </div>
                <div class="form-group">
                    <input type="checkbox" <?php if($row['publish']==1) echo 'checked'; ?> class="checkbox" name="checkbox" /> Publish
                </div>
          

                <div class="form-group">
                    <button class="btn btn-info" type="submit" name="submit">Update</button>
                </div>

            </form>

        </div>
    </div>
</div>

<script>

    CKEDITOR.replace('editor1');
</script>



<?php
include("../includes/footer.php");
?>