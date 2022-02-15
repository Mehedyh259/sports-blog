<?php
$id = $_SESSION['userid'];

if(!isset($_SESSION['name'])){
    $_SESSION['login-msg']= " You Must Logged in as a Admin to access Dashboard..! ";
    $_SESSION['login-type']="alert alert-danger";
    header("location:../index");
    exit();
}
if($_SESSION['mode'] < 1){
    $_SESSION['login-msg']= " You Must Logged in as a Admin to access Dashboard..! ";
    $_SESSION['login-type']="alert alert-danger";
    header("location:../index");
    exit();
}
$q = mysqli_query($conn,"select admin from users where id = '$id'");
$row= mysqli_fetch_array($q);
if($row['admin']<1){
    $_SESSION['login-msg']= " You Must Logged in as a Admin to access Dashboard..! ";
    $_SESSION['login-type']="alert alert-danger";
    header("location:../index");
    exit();
}

?>