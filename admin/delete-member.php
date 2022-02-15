<?php
include('../includes/conn.php');
include('../includes/header.php');
include('include/admin-check.php');




$id = $_GET['id'];
$query = mysqli_query($conn,"delete from users where id = '$id'");
if($query){
    $_SESSION['msg']= "The member is removed !";
    $_SESSION['msg-type']="alert alert-warning";
    header("location: members");
    exit();
}else{
    $_SESSION['msg']= "Removing is  Denied";
    $_SESSION['msg-type']="alert alert-danger";
    header("location: members");
    exit();
}



?>