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
                                        

                                        <div class="container bootdey">
<div class="row invoice row-printable">
    <div class="col-md-10">
        <!-- col-lg-12 start here -->
        <div class="panel panel-default plain" id="dash_0">
            <!-- Start .panel -->
            <div class="panel-body p30">
                <div class="row">
                    <!-- Start .row -->
                    <div class="col-lg-6">
                        <!-- col-lg-6 start here -->
                        <div class="invoice-logo"><img src="Tj1.png" class="logo"></div>
                    </div>
                    <!-- col-lg-6 end here -->
                    <div class="col-lg-6">
                        <!-- col-lg-6 start here -->
                        <div class="invoice-from">
                            <ul class="list-unstyled text-right">
                            <i class="fa fa-address-card " style="font-size:15px;color:#97266a">Address: 
                              TJ Archade Opposite Donbosco College<br>
                               Angadikadavu P O<br>
                               Iritty<br>
                               670706<br></i>
                            <i class="fa fa-phone" style="font-size:15px;color:#97266a">
                                 Phone no: 9605406866</i><br>
                             <i class="fa fa-envelope" style="font-size:15px;color:#97266a">Email: tjarchade@gmail.com</i><hr>
                                <!-- <li><i class="fa fa-address-card ">Address: 
                              TJ Archade Opposite Donbosco College</i></li>
                                <li style="font-family: 'Font Awesome 5 Free';font-weight: 900"> Angadikadavu P O</li>
                                <li style="font-family: 'Font Awesome 5 Free';font-weight: 900">Iritty</li>
                                <li style="font-family: 'Font Awesome 5 Free';font-weight: 900">670706</li> -->
                            </ul>
                        </div>
                    </div>
                    <!-- col-lg-6 end here -->
                    <div class="col-lg-12">
                        <!-- col-lg-12 start here -->
                        <div class="invoice-details mt25">
                            <div class="well">
                                
                            </div>
                        </div>
                        <div class="invoice-to mt25">
                            <ul class="list-unstyled">
                                <!-- <li><strong>Invoiced To</strong></li> -->
                                
                                <p style="font-family: 'Font Awesome 5 Free';font-weight: 900"> <?php echo $row->name;?></p>
                                <p style="font-family: 'Font Awesome 5 Free';font-weight: 900">Payment Date: <?php echo $row->paymentdate;?></p>
                                <!-- <li>New York, NY, 2014</li>
                                <li>USA</li> -->
                            </ul>
                        </div>
                        <div class="invoice-items">
                            <div class="table-responsive" style="overflow: hidden; outline: none;" tabindex="0">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="per70 text-center">Description</th>
                                            <th class="per25 text-center">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Mess Fee</td>
                                            <td class="text-center"><?php echo $row->messfee;?></td>
                                        </tr>
                                        <tr>
                                            <td>Room rent</td>
                                            <td class="text-center"><?php echo $row->roomrent;?></td>
                                        </tr>
                                        <!-- <tr>
                                            <td>Due Amount</td>
                                            <td class="text-center"><?php echo $row->dueamount ;?></td>
                                        </tr> -->
                                        
                                    </tbody>
                                    
                                    
                                   
                                    <tfoot>
                                        <tr>
                                            <th colspan="2" class="text-center">Sub Total:
                                            <?php
                                            $x=$row->messfee;
                                            $y=$row->roomrent;
                                            $s=$x+$y;
                                            echo $s;
                                     
                                    ?>
                                    </th>
                                            
                                        </tr>
                                       
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <div class="invoice-footer mt25">
                            <p class="text-right">Signature: </p>
                        </div>
                    </div>
                    <!-- col-lg-12 end here -->
                </div>
                <!-- End .row -->
            </div>
        </div>
        <!-- End .panel -->
    </div>
    <!-- col-lg-12 end here -->
</div>
</div>
                                          <?php } ?>
                                          

                                
                                        </div>
                                        
                                 
                              </div>
                                      
     
                                
                    
                    </div>

                 
                 </div>
              
               
               </div>

              <!-- Table column end -->
                              
              <button class="btn1"  onClick="printDiv()" type="button"class="btn btn-success btn-sm"><i class="fa fa-print mr5"></i>Print</button>
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