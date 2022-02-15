<?php


include("includes/conn.php");
if(isset($_SESSION['name'])){
    $_SESSION['login-msg']= " You Are Already Logged in..! ";
    $_SESSION['login-type']="alert alert-warning";
    header("location:index");
    exit();
}

$errors = array();
$cookie_name= '';
$cookie_pass = ''; 
if(isset($_POST['login'])){
    $name = $_POST['username'];
    $pass = $_POST['password'];

    if(empty($name))
        array_push($errors,"Username field is required");
    if(empty($pass))
        array_push($errors,"Password field is required");

    if(count($errors)==0){
        $q = mysqli_query($conn,"select * from users where username='$name' and password='$pass'");
        
        $count = mysqli_num_rows($q);
        if($count == 0)
            array_push($errors,"Username or Password Does not match");
        else{
            $query = mysqli_fetch_array($q);
            $_SESSION['name']=$name;
            $_SESSION['mode'] =$query['admin'];
            $_SESSION['userid'] =$query['id'];
            
            $_SESSION['login-msg']= "Logged in Successfully..! ";
            $_SESSION['login-type']="alert alert-success";

            if(!empty($_POST['remember'])){
                $cookie_name= $name;
                $cookie_pass = $pass;    
            }else{
                $cookie_name= '';
                $cookie_pass = '';  
            }

            setcookie('name', $cookie_name, time() + (86400 * 30)); //one months
            setcookie('pass', $cookie_pass, time() + (86400 * 30)); //one months

            header("location: index");
        }
    }
}

include("includes/header.php");
include("includes/menubar.php");
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
                <div id="login-box" class="col-md-12">
                    <?php
                    if(isset($_SESSION['msg'])){
                    ?>

                    <div class="<?php echo $_SESSION['type']; ?>" role="alert" >
                        
                        <?php echo $_SESSION['msg'];
                        unset($_SESSION['msg']);
                        unset($_SESSION['type']);?>
                    </div>


                    <?php 

                    }
                    ?>
                    <form id="login-form" class="form" action="" method="POST">
                        <h3 class="text-center text-info">Login</h3>

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
                            <input type="text" name="username" id="username" value="<?php if(!empty($_COOKIE['name'])) echo $_COOKIE['name']; ?>" placeholder="Enter Username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password" class="text-info">Password:</label><br>
                            <input type="password" name="password" id="password" value="<?php if(!empty($_COOKIE['pass'])){ echo $_COOKIE['pass'];}  ?>" placeholder="Enter Password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember" type="checkbox" <?php if(isset($_COOKIE['name'])) echo 'checked'; ?> ></span></label><br>
                            <input type="submit" name="login" class="btn btn-info btn-lg" value="Log In">
                        </div>
                        <div class="form-group">
                            <div id="register-link" class="text-right">
                                <a href="signup" class="text-info">Register here</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!--<script>
    $('.alert').alert();
</script>-->


<?php


include("includes/footer.php");

?>