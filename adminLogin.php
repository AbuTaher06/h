<?php
session_start();
include("include/connect.php");
if(isset($_POST["login"])){
    $username = $_POST["uname"];
    $password = $_POST["pass"];
    $error=array();
    if(empty($username)){
        $error["admin"] = "Enter Username";
}
else if(empty($password)){
    $error["admin"] = "Enter password";
}
if(count($error)==0){
    $sql = "select *from admin where username='$username' and password='$password' ";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)==1){
        echo "<script>alert('You have login as Admin')</script>";
        $_SESSION['admin']=$username;
        header('location:admin/index.php');
        exit();
    }
    else{
        echo "<script>alert('Invalid Username and Password')</script>";
    }
}
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Admin Login  Page</title>
    </head>
    <body style="background-image: url([images/hospital.jpeg); background-repeat:no-repeat; background-size:cover;">
        <?php
        include("include/header.php");
        ?>

        <div style="margin-top: 30px;"></div>
        <div class="container">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6 jumbotron shadow">
                        <img src="images/admin.jpeg" class="col-md-2" height="70px" width="500px">

                        <form method="post" class="my-2">
                            <div>
                                <?php
                                if(isset($error["admin"])){
                                    $sh=$error['admin'];
                                    $show="<h4  class='alert alert-danger'>$sh</h4>";
                                   // echo $show;
                                }
                                else{
                                    $show="";
                                }
                              echo $show;
                                ?>
                            </div>
                            <div class="form-group">
                            <label>Username</label>
                            <input type="text"  name="uname" class="form-control" autocomplete="off" placeholder="Enter Username">
                            </div>
                            
                            <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="pass" class="form-control" placeholder="Enter Password">
                            </div>

                            <input type="submit" name="login" class="btn btn-success" value="login">
                        </form>
                    </div>
                    <div></div>
                </div>
            </div>
        </div>
    </body>
</html>