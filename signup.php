<?php


include("includes/conn.php");
if(isset($_SESSION['name'])){
    $_SESSION['login-msg']= " You Are Already Logged in..! ";
    $_SESSION['login-type']="alert alert-warning";
    header("location:index");
    exit();
}
include("includes/header.php");
include("includes/menubar.php");

$errors = array();

if(isset($_POST['signup'])){
    $name = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];
    
    if(empty($name))
        array_push($errors,"Username field is required");
    if(empty($email))
        array_push($errors,"Email field is required");
    if(empty($pass))
        array_push($errors,"Password field is required");
    if(empty($cpass))
        array_push($errors,"Confirm Password field is required");
    if(!empty($pass) and !empty($cpass)){
        if($pass != $cpass)
            array_push($errors,"Password & Confirm Password are not same");
    }
    if(count($errors)==0){
        $q = mysqli_query($conn,"select * from users where username = '$name' or email = '$email'  ");
        $count = mysqli_num_rows($q);
        if($count > 0)
            array_push($errors,"Username or Email already exist");

        if(count($errors) == 0){
            $query= mysqli_query($conn,"insert into users (username,email,password) values ('$name', '$email','$pass')");
            
            if(!$query){
                $_SESSION['msg']= "Registration is Denied..! ";
                $_SESSION['type']="alert alert-danger";
                header("location:signup");
                exit();
            }
            
            $_SESSION['msg']= "Registration is Successfull..! ";
            $_SESSION['type']="alert alert-success";

            header("location: login");
        }
    }
    

}


?>

<style>
    form#login-form {
        margin: 100px 0;
        padding: 50px;
        box-shadow: 0px 0px 2px 0px #8b8bae;
    }
</style>
<div id="login">

    <div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
                <div id="login-box" class="signup-box col-md-12">
                    <form id="login-form" class="form" action="" method="POST">
                        <h3 class="text-center text-info">Sign Up</h3>
                        
                        <?php
                        if(!empty($errors)){ ?>
                        
                        <div class="alert alert-danger" role="alert">
                            <?php

                            foreach ($errors as $value) {
                                echo "$value <br>";
                            }?>

                        </div>
                            <?php } ?>
                        
                        
                        
                        <div class="form-group">
                            <label for="username" class="text-info">Username:</label><br>
                            <input type="text" name="username" id="username" value="<?php echo isset($name)?$name:''; ?>" placeholder="Enter Username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email" class="text-info">Email:</label><br>
                            <input type="email" name="email" id="email"  value="<?php echo isset($email)?$email:''; ?>" placeholder="Enter Email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="pass" class="text-info">Password:</label><br>
                            <input type="text" name="pass" id="pass"  value="<?php echo isset($pass)?$pass:''; ?>" placeholder="Enter Password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="cpass" class="text-info">Confirm Password:</label><br>
                            <input type="text" name="cpass" id="cpass"  value="<?php echo isset($cpass)?$cpass:''; ?>" placeholder="Re-Enter Password" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="signup" class="btn btn-info btn-lg" value="Sign Up">
                        </div>
                        <div id="register-link" class="text-right">
                            <a href="login" class="text-info">Login here</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>




<?php


include("includes/footer.php");

?>