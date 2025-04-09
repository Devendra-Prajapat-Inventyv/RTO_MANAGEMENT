<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  
    <title>RTO : Licence </title>
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
                                <h1 style='font-size:20px;'><b>Licence</b></h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="dashboard.php">Dashboard</a></li>
                                    <li class="active">User Information</li>
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
                        <div class="col-sm-10" style="border:2px solid black;padding:5px;text-align:center">
                    <?php 
                    $sql="select * from tblllicence";
                    echo "$applicationnumber";
                    $stmt=$dbh->prepare($sql);
                    $stmt->execute();
                    $rows=$stmt->fetchAll();
                    foreach($rows as $row)
                    {
                    }
                    ?>
                    <div class="row">
                        <div class="col-2">
                            <img src="../images/learning.png" class="img-fluid" style="height:70px"> 
                        </div>
                       <div class="col">
                        <div class="main-heading" style="margin-right:200px"><b>RTO GUJRAT</b></div>
                        <p class="sub-heading" style="margin-right:200px">Ministry Of Road (Govt.of India)</p>
                        <div class="address">Hed.Office: Manohar Nagar Prasad Road, New Delhi-110593  
                            Register Office: Subhas Nagar Ahemdabad Gujrat 325665
                         </div>
                         <p class="email" style="margin-right:200px;color:red">Email: rtogujratinfo@gmail.com , Website: www.rtogujrat.com</p>
                      </div>
                        <div class="col-sm-12">
                             <hr class="hrcls">
                        </div>
                     </div>

                    <div class="row">
                     <div class="col-sm-2">
                     </div>
                          <div class="col-sm-8" style="text-align: center; padding-bottom: 5px;">
                              <h3><b><u>Learning Licence</u></b></h3><hr>
                        </div>
                        <div class="col-sm-2">
                        </div>
                    </div>
                    <div class="row">
    <div class="col-6">
        <div class="form-group row">
   <div class="col-4">

      <label class="lable">Registration No</label>
    </div>
     <div class="col-8">
     <h4> <?php echo $row['applicationnumber']; ?>
    </div>
    </div>

      <div class="form-group row">
   <div class="col-4">

      <label class="lable">Full Name</label>
    </div>
     <div class="col-8">
     <h4> <?php echo $row['fullname']; ?> 
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
      <label class="lable">Mobile No</label>
    </div>
     <div class="col-8">
     <h4>  <?php echo $row['mobile']; ?> 
    </div>
    </div>

<div class="form-group row">
   <div class="col-4">
      <label class="lable">Date Of Birth</label>
    </div>
     <div class="col-8" required>
     <h4><?php echo $row['dob']; ?> 
    </div>
    </div>
    <div class="form-group row">
   <div class="col-4">
      <label class="lable">Licence Type</label>
    </div>
     <div class="col-8" required>
     <h4><?php echo $row['licencetype']; ?> 
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
    

    </div>
    <div class="col-6">
  <div class="row">
    <div class="col-12">
    <div class="form-group" style="float: right;">
         <label class="lable"> Photo </label>
   <div style="width: 150px; ">
      <img src="uploads/<?php echo $row['image']; ?> "  width="150" height="150">
      <img src="../images/sign.jpg" class="img-fluid" style="height:100px"><br>
      
  </div>

  </div>
  </div>
  </div>  

    </div>

</div> 
  <div class="row">
    <div class="col-6">
     <div class="form-group row">
   <div class="col-4">
      <label class="lable">Fees</label>
    </div>
     <div class="col-8">
    <h4><?php echo $row['fees']; ?> INR</h4>  
    </div>
    </div>
    </div>
    <div class="col-6">
     <div class="form-group row">
   <div class="col-4">
      <label class="lable">Valid Upto</label>
    </div>
     <div class="col-8">
     <h4> <?php echo strtoupper($row['validupto']); ?> 
    </div>
    </div>
    </div>
  </div>

  <!-- Row 4 end --> 
<?php  ?> 
</div>
 
<div class="col-2">
  </div>

</div>
<br>
<center><button type="button" class="btn btn-warning" id="printbtn" onclick="window.print()">Download</button></center>
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