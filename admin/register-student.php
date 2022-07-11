<?php
    session_start();
    include('../includes/dbconn.php');
    if(isset($_POST['submit']))
    {
    $regno=$_POST['regno'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $course=$_POST['course'];

    $contactno=$_POST['contact'];
    $emailid=$_POST['email'];
    $password=$_POST['password'];
    $password = md5($password);
    $roomno=$_POST['room'];
    $feespm=$_POST['fpm'];
    $stayfrom=$_POST['stayf'];
    $duration=$_POST['duration'];
    $pname=$_POST['pname'];
    $pcontact=$_POST['pcontact'];
    $paddress=$_POST['paddress'];
    $query="INSERT into userregistration(regNo,firstName,lastName,course,contactNo,email,password,room,fpm,stayf,duration,pname,pcontact,paddress) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
    $query1="UPDATE rooms set occupiedbed=occupiedbed+1 where room_no=$roomno";
    // $query2="SELECT count(regNo) as counte from userregistration where regNo=$regno";
    $stmt=$mysqli->prepare($query);
    $stmt1=$mysqli->prepare($query1);
    // $stmt2=$mysqli->prepare($query2);
    $rc=$stmt->bind_param('ssssissiisssis',$regno,$fname,$lname,$course,$contactno,$emailid,$password,$roomno,$feespm,$stayfrom,$duration,$pname,$pcontact,$paddress);
    // $stmt2->execute();
    // $res=$stmt2->get_result();
    // $count=0;
    // while($row=$res->fetch_object())
    // {
    //    $count=$row->counte;
    // }
       
    //    if($count==1)
    //       echo"<script>alert('RegisterNumber Already Exit');</script>";
    //    else
    //    {
    $stmt->execute();
    $stmt1->execute();
    //    }
       echo"<script>alert('Successfully Registered');</script>";

     }


    // $sql="SELECT email FROM userregistration where email=?";
    // $stmt = $mysqli->prepare($sql);
    // $stmt->bind_param('i',$emailid);
    // $stmt->execute();
    // $stmt->store_result(); 
    // $row_cnt=$stmt->num_rows;;
    // if($row_cnt>0){
    //     echo"<script>alert('Email already exist!');</script>";
    // } else {
    //     $query="INSERT into userregistration(regNo,firstName,lastName,contactNo,email,password,room,fpm,stayf,duration) values(?,?,?,?,?,?,?,?,?,?)";
    //     $stmt = $mysqli->prepare($query);
    //     $rc=$stmt->bind_param('sssissiiss',$regno,$fname,$lname,$contactno,$emailid,$password,$roomno,$feespm,$stayfrom,$duration);
    //     $stmt->execute();
    //         echo"<script>alert('Student has been Registered!');</script>";
    



?>


<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/icon.png">
    <title>Hostel Management System</title>
    <!-- Custom CSS -->
    <link href="../assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <link href="../assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../dist/css/style.min.css" rel="stylesheet">
    <link href="../dist/css/style.minn.css" rel="stylesheet">

    <link href="../dist/css/style.css" rel="stylesheet">

    <script type="text/javascript">
    function valid(){
        if(document.registration.password.value!= document.registration.cpassword.value)
    {
        alert("Password and Confirm Password does not match");
        document.registration.cpassword.focus();
        return false;
    }
        return true;
    }
    </script>
    
</head>

<body>
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
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <?php include 'includes/navigation.php'?>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar" data-sidebarbg="skin6">
                <?php include 'includes/sidebar.php'?>
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">

                <form method="POST" name="registration" onSubmit="return valid();">
                <div class="mx-1 py-3 px-3 mx-ns-4 bg-gradient-maroon">
               </div>
                     <div class="row justify-content-center" style="margin-top:-2em;">
	                     <div class="col-lg-11 col-md-11 col-sm-12 col-xs-12">
		                    <div class="card rounded-0 shadow">
			                    <div class="card-body">
				                   <div class="container-fzluid">
                <!-- <form method="POST" name="registration" onSubmit="return valid();"> -->

					<!-- <form action="" id="student-form"> -->
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<div class="form-group">
			                        <img src="TJ1.png">							
									</div>
								</div>
							</div>
							
						
						<fieldset class="border-bottom">
							<u><legend>Student Details</legend></u>
							<div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
									<div class="form-group">
										<label for="Register number" class="control-label">Register Number</label>
                                        <input type="text" name="regno" id="regno" class="form-control" required>

									</div>
								</div>
								
								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
									<div class="form-group">
										<label for="firstname" class="control-label">First Name</label>
                                        <input type="text" name="fname" id="fname" required class="form-control">

                                    </div>
								</div>
								
								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
									<div class="form-group">
										<label for="lastname" class="control-label">Last Name</label>
                                        <input type="text" name="lname" id="lname" required class="form-control">

									</div>
								</div>
							</div>

                            
							
							<div class="row">
								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
									<div class="form-group">
										<label for="course" class="control-label">Course</label>
										<select class="custom-select mr-sm-2" name="course" id="course" onChange="getSeater(this.value);" onBlur="checkAvailability()" required id="inlineFormCustomSelect">
                                            <option selected>Select...</option>
                                            <?php $query ="SELECT * FROM courses";
                                            $stmt2 = $mysqli->prepare($query);
                                            $stmt2->execute();
                                            $res=$stmt2->get_result();
                                            while($row=$res->fetch_object())
                                            {
                                            ?>
                                            <option value="<?php echo $row->course_sn;?>"> <?php echo $row->course_sn;?></option>
                                            <?php } ?>
                                        </select>
                                        <span id="room-availability-status" style="font-size:12px;"></span>
									</div>
								</div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
									<div class="form-group">
										<label for="contact" class="control-label">Course Duration</label>
                                        <select class="custom-select mr-sm-2" id="duration" name="duration">
                                            <option selected>Choose...</option>
                                            <option value="3">3 Year</option>
                                            <option value="2">2 Year</option>
                                            
                                        </select>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
									<div class="form-group">
										<label for="contact" class="control-label">Contact #</label>
                                        <input type="number" name="contact" id="contact" class="form-control">

									</div>
								</div>
								
							</div>

                               
                            <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
									<div class="form-group">
										<label for="email" class="control-label">Email</label>
                                        <input type="email" name="email" id="email"  onBlur="checkAvailability()" required="required" class="form-control">
                                            <span id="user-availability-status" style="font-size:12px;"></span>
									</div>
								</div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
									<div class="form-group">
										<label for="Register number" class="control-label">Room Number</label>
                                        <select class="custom-select mr-sm-2" name="room" id="room" onChange="getSeater(this.value);" onBlur="checkAvailability()" required id="inlineFormCustomSelect">
                                            <option selected>Select...</option>
                                            <?php $query ="SELECT * FROM rooms where occupiedbed!=seater";
                                            $stmt2 = $mysqli->prepare($query);
                                            $stmt2->execute();
                                            $res=$stmt2->get_result();
                                            while($row=$res->fetch_object())
                                            {
                                            ?>
                                            <option value="<?php echo $row->room_no;?>"> <?php echo $row->room_no;?></option>
                                            <?php } ?>
                                        </select>
									</div>
								</div>
								
								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
									<div class="form-group">
										<label for="firstname" class="control-label">Staying from</label>
                                        <input type="date" name="stayf" id="stayf" class="form-control" required>

									</div>
								</div>
                            </div>
                            <div class="row">

								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
									<div class="form-group">
										<label for="lastname" class="control-label">Total Fee Per Month</label>
                                        <input type="text" name="fpm" id="fpm"  class="form-control">

									</div>
								</div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
									<div class="form-group">
										<label for="lastname" class="control-label">Password </label>
                                        <input type="password" name="password" id="password"  required="required" class="form-control">

									</div>
								</div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
									<div class="form-group">
										<label for="lastname" class="control-label">Confirm Password</label>
                                        <input type="password" name="cpassword" id="cpassword" required="required" class="form-control">

									</div>
								</div>
							</div>
                           
						</fieldset>
						<fieldset class="border-bottom">
							<u><legend>Parent Details</legend></u>
							<div class="row">
								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
									<div class="form-group">
										<label for="emergency_name" class="control-label">Name</label>
                                        <input type="text" name="pname" id="pname" required class="form-control">

									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
									<div class="form-group">
										<label for="emergency_contact" class="control-label">Contact #</label>
                                        <input type="text" name="pcontact" id="Pcontact"  required class="form-control">

									</div>
								</div>
							
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="form-group">
										<label for="emergency_address" class="control-label">Address</label>
										<textarea rows="3" name="paddress" id="paddress" class="form-control form-control-sm rounded-0" required><?= isset($emergency_address) ? $emergency_address : '' ?></textarea>
									</div>
								</div>
							</div>
						</fieldset>
						
					</form>
				</div>
			</div>	
			<div class="card-footer py-1 text-center">
            <button type="submit" name="submit" class="btn btn-success">Register</button>
            <button type="reset" class="btn btn-danger">Reset</button>
			</div>
		</div>	
	</div>	
</div>	
</form>


            
            
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <!-- <?php include '../includes/footer.php' ?> -->
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <!-- apps -->
    <script src="../dist/js/app-style-switcher.js"></script>
    <script src="../dist/js/feather.min.js"></script>
    <script src="../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <script src="../assets/extra-libs/c3/d3.min.js"></script>
    <script src="../assets/extra-libs/c3/c3.min.js"></script>
    <script src="../assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="../assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="../dist/js/pages/dashboards/dashboard1.min.js"></script>

    <!-- customs -->
    <script>
    function checkAvailability() {

        $("#loaderIcon").show();
        jQuery.ajax({
        url: "check-availability.php",
        data:'emailid='+$("#email").val(),
        type: "POST",
        success:function(data){
            $("#user-availability-status").html(data);
            $("#loaderIcon").hide();
            },
                error:function ()
            {
                event.preventDefault();
                alert('error');
            }
        });
    }
    </script>
</body>

</html>