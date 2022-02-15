<?php
include('../includes/conn.php');
include('../includes/header.php');
include('include/admin-check.php');




$id = $_GET['id'];
$query = mysqli_query($conn,"delete from category where id = '$id'");
if($query){
    $_SESSION['msg']= "The category is deleted !";
    $_SESSION['msg-type']="alert alert-warning";
    header("location: category");
    exit();
}else{
    $_SESSION['msg']= "Removing is  Denied";
    $_SESSION['msg-type']="alert alert-danger";
    header("location: catogry");
    exit();
}



?>