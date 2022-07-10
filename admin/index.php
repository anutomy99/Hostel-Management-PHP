<?php
    session_start();
    include('../includes/dbconn.php');
    if(isset($_POST['login'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $password = md5($password);
    $stmt=$mysqli->prepare("SELECT username,email,password,id FROM admin WHERE (userName=?|| email=?) and password=? ");
		$stmt->bind_param('sss',$username,$username,$password);
		$stmt->execute();
		$stmt -> bind_result($username,$username,$password,$id);
		$rs=$stmt->fetch();
		$_SESSION['id']=$id;
		$uip=$_SERVER['REMOTE_ADDR'];
		$ldate=date('d/m/Y h:i:s', time());
		if($rs){
			header("location:dashboard.php");
				} else {
					echo "<script>alert('Invalid Username/Email or password');</script>";
				}
	}
?>

<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/icon.png">
    <title>TJ Archade Hostel Management System
    </title>
    <!-- Custom CSS -->
    <link href="../dist/css/style.min.css" rel="stylesheet">
    <link href="../dist/css/style.css" rel="stylesheet">


    <script type="text/javascript">
    function valid() {
    if(document.registration.password.value!= document.registration.cpassword.value){
        alert("Password and Re-Type Password Field do not match  !!");
    document.registration.cpassword.focus();
    return false;
        }
    return true;
        }
    </script>

</head>

<body>

    <div class="limiter">
    <div class="container-login100" style="background-image: url('bg1.jpg');">

        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center position-relative"
            >
            
                <div class="Admin-login-box">
                    <div class="p-3">
                        <div class="text-center">
                        <img src="TJ1.png" class="logo">

                        </div>
                        <h2 style="color:black;  font-size:20px; font-weight:bold" class="mt-3 text-center">ADMIN LOGIN</h2>
                        
                        <form class="mt-4" method="POST">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="text-dark" for="uname">Email or Username</label>
                                        <input class="form-control" name="username" id="uname" type="text"
                                            placeholder="Email or Username" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="text-dark" for="pwd">Password</label>
                                        <input class="form-control" name="password" id="pwd" type="password"
                                            placeholder="Enter your password" required>
                                    </div>
                                </div>
                                <div class="col-lg-12 text-center">
                                    <button type="submit" name="login" class="btn-dark">LOGIN</button>
                                </div>
                                <div class="col-lg-12 text-center mt-5">
                                   <a href="../index.php" class="text-danger">Go Back</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </div>
        </div>
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <script src="../assets/libs/jquery/dist/jquery.min.js "></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/libs/popper.js/dist/umd/popper.min.js "></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.min.js "></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script>
        $(".preloader ").fadeOut();
    </script>
</body>

</html>