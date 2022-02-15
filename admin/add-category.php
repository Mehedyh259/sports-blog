<?php
include('../includes/conn.php');
include('../includes/header.php');
include('include/admin-check.php');

if(isset($_POST['submit'])){
    $name = $_POST['category'];
    $q = mysqli_query($conn,"insert into category (name) values('$name')");
        if($q){
            $_SESSION['msg']= "Adding the Category is Successfull";
            $_SESSION['msg-type']="alert alert-success";
            header("location: category");
            exit();
        }else{
            $_SESSION['msg']= "Adding is  Denied";
            $_SESSION['msg-type']="alert alert-danger";
            header("location: catogry");
            exit();
        }
        header("location: category");
    }

?>