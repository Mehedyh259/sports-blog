<?php 
include("../includes/conn.php");


if(isset($_POST['publish'])){
    $post_id= $_POST['row_num'];
    $q=mysqli_query($conn,"update posts set publish=1 where id='$post_id'");
    if($q){
        $_SESSION['msg']= "Post Published Successfully..! ";
        $_SESSION['msg-type']="alert alert-success";

        header("location: index");
        exit();
    }
}
if(isset($_POST['unpublish'])){
    $post_id= $_POST['row_num'];
    $q=mysqli_query($conn,"update posts set publish=0 where id='$post_id'");
    if($q){
        $_SESSION['msg']= "Post Unpublished Successfully..! ";
        $_SESSION['msg-type']="alert alert-danger";
        header("location:index");
        exit();
    }
}
?>