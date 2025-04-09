<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  
    <title>RTO : Vehicle Certificate </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" 
    rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link href="../assets/css/lib/calendar2/pignose.calendar.min.css" rel="stylesheet">
    <link href="../assets/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="../assets/css/lib/themify-icons.css" rel="stylesheet">
    <link href="../assets/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="../assets/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/lib/unix.css" rel="stylesheet">
    <link href="../assets/css/dash.css" rel="stylesheet">
    <style>
.form-control {
    height: 42px;
    border-radius: 0;
    box-shadow: none;
    border-color: #340808;
    font-family: MontserratLight, sans-serif;
}
.lable {
    font-weight: bold;
    color:black;
    font-size:17px;
    display:inline-block;
    margin-left: ;
  
}

.printbtn {
        display: none !important;
    }
    .main-heading
    {
      font-size:30px !important;
    }

    </style>
</head>

<body>

<?php include_once('includes/sidebar.php');?>
   
    <?php include_once('includes/header.php');?>

    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1 style='font-size:20px;'><b>Vehicle Certificate</b></h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="dashboard.php">Dashboard</a></li>
                                    <li class="active">Vehicle Certificate</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->     <div class="card alert">
                        <div class="card-body">
                            <form name="licence" method="post" action="#" enctype="multipart/form-data">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-1">
                        </div>
                        <div class="col-sm-10" style="border:2px solid black;padding:10px;text-align:center">
                    <?php 
                    $sql="select * from tblvehicle ";
                    $stmt=$dbh->prepare($sql);
                    $stmt->execute();
                    $rows=$stmt->fetchAll();
                    foreach($rows as $row)
                    {
                    }
                    ?>
                    <div class="row">
                        <div class="col-2">
                            <img src="../images/car.jpeg" class="img-fluid" style="height:100px">
                        </div>
                       <div class="col">
                        <div class="main-heading" style="margin-right:200px"><b>RTO GUJRAT</b></div>
                        <p class="sub-heading" style="margin-right:200px">Ministry Of Road (Govt.of India)</p>
                        
                             <p class="email" style="margin-right:200px;color:red">Email: rtogujratinfo@gmail.com , Website: www.rtogujrat.com</p>
                      </div>
                        
                     </div>

                    <div class="row">
                     <div class="col-sm-2">
                     </div>
                          <div class="col-sm-8" style="text-align: center; padding-bottom:0px;">
                              <h3><b><u>Registration Certificate</u></b></h3><hr>
                        </div>
                        <div class="col-sm-2">
                        </div>
                    </div>
                    <div class="row">
    <div class="col-6">
        <div class="form-group row">
   <div class="col-4">

      <label class="lable">Registration  No</label>
    </div>
     <div class="col-8">
     <h4> <?php echo $row['regid']; ?>
    </div>
    </div>

      <div class="form-group row">
   <div class="col-4">

      <label class="lable">Owner Name</label>
    </div>
     <div class="col-8">
     <h4> <?php echo $row['ownername']; ?> 
    </div>
    </div>
    <div class="form-group row">
   <div class="col-4">

      <label class="lable">Father Name</label>
    </div>
     <div class="col-8">
     <h4> <?php echo $row['fathername']; ?> 
    </div>
    </div>
  
    <div class="form-group row">
   <div class="col-4">
      <label class="lable">Engine No</label>
    </div>
     <div class="col-8">
     <h4>  <?php echo $row['engineno']; ?> 
    </div>
    </div>

<div class="form-group row">
   <div class="col-4">
      <label class="lable">Model</label>
    </div>
     <div class="col-8" required>
     <h4><?php echo $row['model']; ?> 
    </div>
    </div>
    <div class="form-group row">
   <div class="col-4">
      <label class="lable">Owner Serial</label>
    </div>
     <div class="col-8" required>
     <h4><?php echo $row['ownerserial']; ?> 
    </div>
    </div>
    <div class="form-group row">
   <div class="col-4">
      <label class="lable">Status</label>
    </div>
     <div class="col-8" required>
     <h4><?php echo $row['status']; ?> 
    </div>
    </div>
    
    <br>
    </div>
    <div class="col-5">
  <div class="row">
    <div class="col-12">
    <div class="form-group" style="float: right;">
         <label class="lable"> </label>
   <div style="width: 150px; ">
      <img src="../images/sign.jpg"  width="150" height="200"><br><br>
  </div>
    </div>
    <div class="col-6">
     <div class="form-group row">
   <div class="col-4">
      <label class="lable">Date Of issue</label>
    </div>
     <div class="col-8">
     <h4> <?php echo $row['RegDate']; ?> 
    </div>
    <div class="col-4">
      <label class="lable">Validity</label>
    </div>
     <div class="col-8">
     <h4> <?php echo $row['validupto']; ?> 
    </div><br>
   <br><br><br><br><br><br><br><br><br><br><br>

  <!-- Row 4 end --> 
<?php  ?> 
</div>
 
<div class="col-2">
  </div>

</div>
<br>
<center><button type="button" style="margin-right:100%"class="btn btn-warning" id="printbtn" onclick="window.print()">Download</button></center>
<br>
                        
                </div></div>
               </div>
                </div>
        </div>
    </div>
    <?php include_once('includes/footer.php');?>
    <!-- jquery vendor -->
    <script src="../assets/js/lib/jquery.min.js"></script>
    <script src="../assets/js/lib/jquery.nanoscroller.min.js"></script>
    <!-- nano scroller -->
    <script src="../assets/js/lib/menubar/sidebar.js"></script>
    <script src="../assets/js/lib/preloader/pace.min.js"></script>
    <!-- sidebar -->
    <script src="../assets/js/lib/bootstrap.min.js"></script>
    <!-- bootstrap -->


    <script src="../assets/js/lib/calendar-2/moment.latest.min.js"></script>
    <!-- scripit init-->
    <script src="../assets/js/lib/calendar-2/semantic.ui.min.js"></script>
    <!-- scripit init-->
    <script src="../assets/js/lib/calendar-2/prism.min.js"></script>
    <!-- scripit init-->
    <script src="../assets/js/lib/calendar-2/pignose.calendar.min.js"></script>
    <!-- scripit init-->
    <script src="../assets/js/lib/calendar-2/pignose.init.js"></script>
    <!-- scripit init-->

    <script src="../assets/js/scripts.js"></script> </form>
</body>

</html><?php   ?>