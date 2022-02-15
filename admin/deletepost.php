<?php
include('../includes/conn.php');
include('../includes/header.php');
include('include/admin-check.php');




$id = $_GET['key'];
$query = mysqli_query($conn,"select image from posts where id = '$id'");
$row = mysqli_fetch_array($query);
unlink("../img/".$row['image']);//deleting the image

$query = mysqli_query($conn,"delete from posts where id = '$id'");
if($query){
    $_SESSION['msg']= "The post is deleted";
    $_SESSION['msg-type']="alert alert-warning";
    header("location: index");
    exit();
}else{
    $_SESSION['msg']= "Removing is  Denied";
    $_SESSION['msg-type']="alert alert-danger";
    header("location: index");
    exit();
}



?>