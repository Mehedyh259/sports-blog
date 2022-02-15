<?php
include('../includes/conn.php');
include('../includes/header.php');
include('include/admin-check.php');
$title = '';
$category='';
$author='';
$authorId = '';
$description = '';
$time = '';
$publish=0;
$image_name='';

if(isset($_POST['submit'])){
    $title=$_POST['title'];
    $category = $_POST['category'];
    $authorName=$_SESSION['name'];
    $authorId = $_SESSION['userid'];
    $time = date("Y-m-d h:i a");
    $description = $_POST['editor1'];
    if(!empty($_POST['checkbox'])){
        $publish=1;
    }
    if(!empty($_FILES['image']['name'])){
        $image_name = time().'_'.$_FILES['image']['name'];
        $destination = '../img/'.$image_name;
        move_uploaded_file($_FILES['image']['tmp_name'],$destination);
    }
    


    $query = mysqli_query($conn,"insert into posts (title,category,image,description,authorName,authorId,createdAt,publish)
    values ('$title','$category','$image_name','$description','$authorName','$authorId','$time','$publish')");

    if($query){
        $_SESSION['msg']= "Post Created Successfully..! ";
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
            
            <h1>Create post</h1>

            <form action="" method="POST" enctype="multipart/form-data">
                
                <div class="form-group">
                    <label for="title">Title <span class="require">*</span></label>
                    <input required type="text" class="form-control" name="title" />
                </div>
                <div class="form-group">
                    <label for="category">Category <span class="require">*</span></label>
                    <select name="category" class=" form-control">
                       <?php
                        $q=mysqli_query($conn,"select * from category");
                        while($row=mysqli_fetch_array($q)){
                            echo '<option value="'.$row['name'].'">'.$row['name'].'</option>' ;
                        }
                        ?>
                    </select>
                </div>
                <div class="from-group">
                    <label for="image">Image *</label>
                    <input  type="file" class="form-control" name="image" id="image">
                </div>

                <div class="form-group">
                    <label for="description">Description *</label>
                    <textarea name="editor1" required id="textarea" rows="15" class=" form-control" ></textarea>
                </div>
                <div class="form-group">
                    <input type="checkbox" class="checkbox" name="checkbox" /> Publish
                </div>
    
               
                <div class="form-group">
                    <button class="btn btn-info" type="submit" name="submit">Create Post</button>
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