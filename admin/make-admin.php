<?php
include('../includes/conn.php');
include('../includes/header.php');
include('include/admin-check.php');




$id = $_GET['id'];
$query = mysqli_query($conn,"update users set admin = 1 where id = '$id'");
if($query){
    $_SESSION['msg']= "Promoting to Admin is Successfull";
    $_SESSION['msg-type']="alert alert-success";
    header("location: members");
    exit();
}else{
    $_SESSION['msg']= "Promoting to Admin is Denied";
    $_SESSION['msg-type']="alert alert-danger";
    header("location: members");
    exit();
}



?>