<?php
    session_start();
    if (isset($_SESSION['id'])) {
      header("location: dashboard.php");
    }
    else{
        error_reporting(0);
        include("config.php");
        if(isset($_POST['submit'])){
            $username = $_POST['username'];
            $password = md5($_POST['password']);
            $sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
            $result = mysqli_query($conn,$sql);
            $row = mysqli_fetch_array($result);
            if($row > 0){ 
            $_SESSION['username'] = $_POST['username']; 
            $_SESSION['id'] = $row['id']; 
            header("location:dashboard.php"); 
            exit();
        } else{ 
            $_SESSION['errmsg'] = "username and password incorrect"; 
            header("location:login.php"); 
            exit(); 
        } 
    }
    // else{
    //     error_reporting(0);
    //     include("config.php");
    //     if(isset($_POST['submit'])){
    //         $username = $_POST['username'];
    //         $password = md5($_POST['password']);
    //         $sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
    //         $result = mysqli_query($conn,$sql);
    //         $row = mysqli_fetch_array($result);
    //         if($row > 0){ 
    //         $path ="dashboard.php";// 
    //         $_SESSION['login'] = $_POST['username']; 
    //         $_SESSION['id'] = $row['id']; 
    //         $host = $_SERVER['HTTP_HOST']; 
    //         $uri = rtrim(dirname($_SERVER['PHP_SELF']),'/\\'); 
    //         header("location:http://$host$uri/$path"); 
    //         exit();
    //     } else{ 
    //         $_SESSION['errmsg'] = "Invalid username or password"; 
    //         $path = "login.php"; 
    //         $host = $_SERVER['HTTP_HOST']; 
    //         $uri = rtrim(dirname($_SERVER['PHP_SELF']),'/\\'); 
    //         header("location:http://$host$uri/$path"); 
    //         exit(); 
    //     } 
    // }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="icon" href="../media/images/images/SLD-LOGO.png" id="fav-icon" type="image/x-icon">
        <style type="text/css">
            body {
                background: url("./uploads/bg.jpg");
                position: absolute;
                background-size: cover;
                height: 100%;
                width: 100%;
                top: 0;
            } 
            .login {
                box-shadow: 0 0 5px 0;
                background: inherit;
                background-color: #b3949412;
                border: 1px solid white;
                opacity: 1;
                color:white;
            }

            .form-login input, textarea {
			    width: 100%;
			    color: #fff;
			    outline: none;
			    padding: 5px 20px;
			    border: 1px solid #cecece;
			    background-color:white;
			}
        </style>
        <title>Login Page</title>
    </head>
    <body>
        <!-- Background -->
        <div class="container">
            <!-- Begin page -->
            <div class="row mt-3">
                <div class="login_body col-md-5 mx-auto mt-5">
                    <div class="card-body login">
                        <h3 class="text-center">
                            <a href="index.php" class="logo logo-admin"><img src="uploads/SLD-FULL-LOGO.png" height="50" alt="logo" /></a>
                        </h3>

                        <div class="p-3">
                            <h4 class="text-muted text-center">
                                <span class="fs-5 " style="color:#00ff89">
                                    <?php echo htmlentities($_SESSION['errmsg']); ?>
                                    <?php echo htmlentities($_SESSION['errmsg']="");?>
                                </span>
                            </h4>
                            <p class=" text-center text-white">Sign in to continue</p>

                            <form class="form-login" method="post">
                                <div class="form-group mb-3">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" id="username" name="username" required placeholder="Enter username" />
                                </div>

                                <div class="form-group mb-3">
                                    <label for="userpassword">Password</label>
                                    <input type="password" class="form-control" id="userpassword" required name="password" placeholder="Enter password" />
                                </div>

                                <div class="form-group">
                                    <div class="text-center">
                                        <button class="btn btn-primary w-md waves-effect waves-light" type="submit" name="submit">Log In</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

	                <div class="mt-5 text-center">
	                    <span class="text-danger">
	                        from the house of <a href="https://kexlin.com/" target="_blank"> <img src="uploads/kexlin logo.jpg" width="150" height="50" alt="" /></a>
	                    </span>
	                </div>
                </div>
            </div>
        </div>
    </body>
</html>
<?php } ?>