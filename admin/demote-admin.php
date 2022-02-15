<?php
include('../includes/conn.php');
include('../includes/header.php');
include('include/admin-check.php');




$id = $_GET['id'];
$query = mysqli_query($conn,"update users set admin = 0 where id = '$id'");
if($query){
    $_SESSION['msg']= "Demoting to User is Successfull";
    $_SESSION['msg-type']="alert alert-warning";
    header("location: members");
    exit();
}else{
    $_SESSION['msg']= "Demoting to User is Denied";
    $_SESSION['msg-type']="alert alert-danger";
    header("location: members");
    exit();
}



?>