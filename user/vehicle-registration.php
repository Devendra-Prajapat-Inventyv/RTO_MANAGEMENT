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
.label {
    font-weight: bold;
    color:black;
    font-size:15px;
  
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
                                <h1 style='font-size:20px;'><b>Vehicle Registration</b></h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="dashboard.php">Dashboard</a></li>
                                    <li class="active">Vehicle Information</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <div id="main-content">
                    <div class="card alert">
                        <div class="card-body">
                            <form name="licence" method="post" action="#" enctype="multipart/form-data">
                            <div class="card-header m-b-20">
                                <h3><i class="fa fa-car "><b>Vehicle Information</b></i></h3>
                            </div>  
                <div class="container">
                    <div class="row">
                        <div class="col-sm-2">
                        </div>
                        <div class="col-sm-6" style="border:2px solid black;padding:-10px;text-align:center;margin-left:70px;">
                        <h3><b>Vehicle Registration Form</b></h3>
                        </div>
                        <div class="col-sm-2">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-1">
                        </div>
                        <div class="col-sm-10" style="padding:60px; font-weight:bold;font-size:15px;margin-left:300px;">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-3 row">
                                        <div class="col-sm-4">
                                            <label class="label">Owner Name:-</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input type="text" name="ownername"  placeholder="Enter Full Name"class="form-control" required>
                                        </div>
                                    </div><br>
                                    <div class="mb-3 row">
                                        <div class="col-sm-4">
                                            <label class="label">FatherName:-</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input type="text" name="fathername"  placeholder="Enter Father Name"class="form-control" required>
                                        </div>
                                    </div><br>
                                    <div class="mb-3 row">
                                        <div class="col-sm-4">
                                            <label class="label">Engine No:-</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input type="text" name="engineno"  placeholder="Enter Engine Number"class="form-control" required>
                                        </div>
                                    </div><br>
                                    <div class="mb-3 row">
                                        <div class="col-sm-4">
                                            <label class="label">Owner Serial:-</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input type="text" name="ownerserial"  placeholder="Enter Qwner serial"class="form-control" required>
                                        </div>
                                    </div><br>
                                    <div class="mb-3 row">
                                        <div class="col-sm-4">
                                            <label class="label">Model :-</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input type="text" name="model"  placeholder="Enter Model Name" class="form-control" required>
                                        </div>
                                    </div><br>
                                    <div class="mb-3 row">
                                        <div class="col-sm-4">
                                            <label class="label">Vehicle No.:-</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input type="text" name="vehicleno"  placeholder="Enter Vehicle Number"class="form-control" required>
                                        </div>
                                    </div><br>  
                                    <div class="mb-3 row">
                                        <div class="col-sm-4">
                                            <label class="label">Address:-</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <textarea name="address" placeholder="Enter Address"class="form-control" required></textarea>
                                        </div>
                                    </div><br>
                                    <div class="mb-3 row">
                                        <div class="col-sm-4">
                                            <label class="label">Vehicle Type:-</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <select name="vehicletype" class="form-control" required>
                                                <option value="">Vehicle Type Type</option>
                                                <option value="LMV (2 wheeler)">LMV Four wheeler</option>
                                                <option value="SMV (4 wheeler)">SMV Two Wheeler </option>
                                            </select>
                                        </div>
                                    </div>
                                </div><br>
                                
                      <div class="form-group row">
                        <div class="col-sm-4">
                        </div>
                        <div class="col-sm-4">
                            <br><br>
                            <button class="btn btn-default btn-lg m-b-10 bg-warning border-none m-r-5 sbmt-btn" type="submit" name="submit" style="margin-left:-120px;">Submit</button>
                            <button class="btn btn-default btn-lg m-b-10 m-l-5 sbmt-btn" type="reset">Reset</button>
                        </div>
                    </div>
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

    <script src="../assets/js/scripts.js"></script>
                                            </form>
</body>

</html><?php   ?>
<?php
include('includes/dbconnection.php');

if(isset($_POST['submit']))
{
    $ownername=$_POST['ownername'];
    $fathername=$_POST['fathername'];
    $engineno=$_POST['engineno'];
    $model=$_POST['model'];
    $owner=$_POST['ownerserial'];
    $address=$_POST['address'];
    $vehicletype=$_POST['vehicletype'];
    $vehicleno=$_POST['vehicleno'];
    $pay_status="PAID";
    $status="Pending";
    $registrationno='GJ212023'.rand(99,1).time();
    //Insert Data In Learning Licence Table
    $sql="Insert into tblvehicle (regid,ownername,fathername,engineno,model,ownerserial,address,status,vehicletype,vehicleno,pay_status)
    Values(:registrationno,:ownername,:fathername,:engineno,:model,:ownerserial,:address,:status,:vehicletype,:vehicleno,:pay_status)";
    $q=$dbh->prepare($sql);
    $q->bindparam(':registrationno',$registrationno,PDO::PARAM_STR);
    $q->bindparam(':ownername',$ownername,PDO::PARAM_STR);
    $q->bindparam(':fathername',$fathername,PDO::PARAM_STR);
    $q->bindparam(':engineno',$engineno,PDO::PARAM_STR);
    $q->bindparam(':model',$model,PDO::PARAM_STR);
    $q->bindparam(':ownerserial',$owner,PDO::PARAM_STR);
    $q->bindparam(':address',$address,PDO::PARAM_STR);
    $q->bindparam(':vehicletype',$vehicletype,PDO::PARAM_STR);
    $q->bindparam(':vehicleno',$vehicleno,PDO::PARAM_STR);
    $q->bindparam(':pay_status',$pay_status,PDO::PARAM_STR);
    $q->bindparam(':status',$status,PDO::PARAM_STR);
    $q->execute();
$lastInsertId=$dbh->lastInsertId();
if($lastInsertId)
{
   
    echo "<script>alert('You have successfully Submited with us $registrationno');</script>";
    echo "<script>window.location.href ='#'</script>";
}
else{
    echo "Something Went Wrong";
}
}

?>