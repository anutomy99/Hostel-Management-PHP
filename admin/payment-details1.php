<?php
    session_start();
    include('../includes/dbconn.php');
    include('../includes/check-login.php');
    check_login();
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


    
    <script>
        function printDiv() {
            var divContents = document.getElementById("print").innerHTML;
            var a = window.open('', '', 'height=800, width=800');
            a.document.write('<html>');
            a.document.write('<body > <h1>Student Details</h1><br>');
            a.document.write(divContents);
            a.document.write('</body></html>');
            a.document.close();
            a.print();
        }
    </script>

</head>

<body>
    <Style>
    .btn1{
    align-items: center;
    width:10%;
    background-color:#22ca80;
    color: white;
    margin-left:35% ;
    border: none;
    height:38px
}
.btn2{
    align-items: center;
    width:10%;
    background-color:#d31c1c;
    color: white;
    margin-right:35% ;
    border: none;
    height:38px
}
    </Style>
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
            <div class="page-breadcrumb">
                <div class="row">
                    
                    
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center">
                            <!-- <nav aria-label="breadcrumb">
                                
                            </nav> -->
                        </div>
                    </div>
                    
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">

                <!--Table Column -->
                
                <div class="card">
                 
                 <div class="card-body">
                 
                    <div class="row">
                    
                    <div class="table-responsive">
                    
                           <div id="print">
                         
                           <div class="Print-contact">
                           <img src="Tj1.png" class="logo"><br><br>
                           <i class="fa fa-address-card " style="font-size:15px;color:#97266a">Address: 
                              TJ Archade Opposite Donbosco College<br>
                               Angadikadavu P O<br>
                               Iritty<br>
                               670706<br></i>
                            <i class="fa fa-phone" style="font-size:15px;color:#97266a">
                                 Phone no: 9605406866</i><br>
                             <i class="fa fa-envelope" style="font-size:15px;color:#97266a">Email: tjarchade@gmail.com</i><hr>

                             </div>
                          
                                      <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Payment Details</h4>

                                       <hr>
                                       <?php	
                                      
                                        $id=$_GET['id'];
                                        $ret="SELECT * from payment where id=?";
                                        $stmt= $mysqli->prepare($ret) ;
                                        $stmt->bind_param('i',$id);
                                        $stmt->execute() ;//ok
                                        $res=$stmt->get_result();
                                        //$cnt=1;
                                        while($row=$res->fetch_object())
                                         {
                                              ?>
                                        

                                          
                                          <b>Nameb :</b> <?php echo $row->name;?><br><br>
                                              
                                         
                                          <b>Mess Fee :</b>  <?php echo $row->messfee;?><br><br>

                                          <b>Room Rent :</b> <?php echo $row->roomrent;?><br><br>
                                          <b>Due Amount :</b><?php echo $row->dueamount ;?><br><br>
                                          
                                          <b>Payment Date :</b><?php echo $row->paymentdate;?><br>


                                          <!-- <td><b>Starting Date :</b></td>
                                          <td><?php echo $row->stayf;?></td> -->
                                          
                                          </tr>
                                          <!-- <td><b>Selected Course :</b></td>
                                          <td><?php echo $row->course;?></td> -->
                                          </tr>


                                          <!-- <tr>
                                          <td><b>Emergency Contact No. :</b></td>
                                          <td><?php echo $row->egycontactno;?></td>
                                          <td><b>Guardian Name :</b></td>
                                          <td><?php echo $row->guardianName;?></td>
                                          <td><b>Guardian Relation :</b></td>
                                          <td><?php echo $row->guardianRelation;?></td>
                                          </tr>

                                          <tr>
                                          <td><b>Guardian Contact No. :</b></td>
                                          <td colspan="6"><?php echo $row->guardianContactno;?></td>
                                          </tr>

                                          <tr>
                                          <td><b>Current Address:</b></td>
                                          <td colspan="2">
                                          <?php echo $row->corresAddress;?><br />
                                          <?php echo $row->corresCIty;?>, <?php echo $row->corresPincode;?><br />
                                          <?php echo $row->corresState;?>


                                          </td>
                                          <td><b>Permanent Address:</b></td>
                                          <td colspan="2">
                                          <?php echo $row->pmntAddress;?><br />
                                          <?php echo $row->pmntCity;?>, <?php echo $row->pmntPincode;?><br />	

                                          </td>
                                          </tr>

                                          <tr> -->

                                          

                                          <!-- <td><b>Seater :</b></td>
                                          <td><?php echo $row->seater;?></td> -->

                                          <!-- <b>Duration:</b><?php echo $dr=$row->duration;?> Year <br>
                                          <b>Fees Per Month :</b><?php echo $fpm=$row->fpm;?><br>
                                          <b>Staying from:</b><?php echo $row->stayf;?><br><br>
                                           -->
                            <!-- <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Parent Details</h4> -->

                            <hr>
                                    
                            <!-- <b>Parent Name:</b> <?php echo $row->pname;?><br>
                            <b>Parent Contact Number:</b> <?php echo $row->pcontact;?><br>
                            <b>Parent Address:</b> <?php echo $row->paddress;?><br>
 -->

                                          <!-- <td><b>Food Status:</b></td>
                                          <td>
                                          <?php if($row->foodstatus==0){
                                          echo "Not Required";
                                          } else {
                                          echo "Required";
                                          }
                                          ;?> </td> -->

                                          

                                          

                                          </tr>

                                          <!-- <tr>
                                          <td colspan="6"><b>Total Fees (<?php echo ($dr).' months'?>) : 
                                          <?php if($row->foodstatus==1){ 
                                          $fd=211; 
                                          echo '$'.(($fd+$fpm)*$dr);
                                          } else {
                                          echo '$'.$dr*$fpm;
                                          }
                                          ?></b></td>
                                          </tr> --> 
                                         
                                       



                                          <?php } ?>
                                          

                                
                                        </div>
                                        
                                 
                              </div>
                                      
     
                                
                    
                    </div>

                 
                 </div>
              
               
               </div>

              <!-- Table column end -->
                              

              <input class="btn1" type="button" value="Print" onClick="printDiv()">
              <a href="view-students-acc.php"><input class="btn2" type="button" value="Back"></a>


            </div>
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

</body>

</html>