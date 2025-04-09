<?php
include('includes/dbconnection.php');
session_start();
  ?>
<!DOCTYPE html>
<html lang="en">

<head>
   
    <title>Vehicle Registration Certificate </title>

    <!-- Styles -->
    <link href="../assets/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="../assets/css/lib/themify-icons.css" rel="stylesheet">
    <link href="../assets/css/lib/datatable/dataTables.bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/lib/datatable/buttons.bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="../assets/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/lib/unix.css" rel="stylesheet">
    <link href="../assets/css/dash.css" rel="stylesheet">
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
                                <h1>Dashboard</h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="dashboard.php">Dashboard</a></li>
                                    <li class="active">Search</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <div id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card alert">
                                <div class="card-body">
                            <form name="" method="post" enctype="multipart/form-data">
                            <div class="card-header m-b-20">
                                <h4>Check Vehicle Registration Certificate</h4>
                                <div class="card-header-right-icon">
                                    <ul>
                                        <li class="card-close" data-dismiss="alert"><i class="ti-close"></i></li>
                                        <li class="card-option drop-menu"><i class="ti-settings" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="link"></i>
                                            <ul class="card-option-dropdown dropdown-menu">
                                                <li><a href="#"><i class="ti-loop"></i> Update data</a></li>
                                                <li><a href="#"><i class="ti-menu-alt"></i> Detail log</a></li>
                                                <li><a href="#"><i class="ti-pulse"></i> Statistics</a></li>
                                                <li><a href="#"><i class="ti-power-off"></i> Clear ist</a></li>
                                            </ul>
                                        </li>
                                        <li class="doc-link"><a href="#"><i class="ti-link"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="basic-form">
                                        <div class="form-group">
                                            <label>Search Certificate By Registration  Number </label>
                                            <input class="form-control border-none input-flat bg-ash" name="regid" type="text" required="true">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-default btn-lg m-b-10 bg-warning border-none m-r-5 sbmt-btn" type="submit" name="search">Submit</button>
                          
                        </form>
                        </div>
                                <div class="card-header">
                                   
                                    <div class="card-header-right-icon">
                                        <ul>
                                            <li class="card-close" data-dismiss="alert"><i class="ti-close"></i></li>
                                            <li class="doc-link"><a href="#"><i class="ti-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                  <?php 
 if(isset($_POST['search'])) 
  {
    
    $regid=$_POST['regid'];
    $sql ="SELECT regid FROM tblvehicle WHERE regid=:regid";
    $query=$dbh->prepare($sql);
    $query->bindParam(':regid',$regid,PDO::PARAM_STR);
    $query-> execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    if($query->rowCount() > 0)
{
foreach ($results as $result);
echo "<script type='text/javascript'> document.location ='rc.php'; </script>";
} else{
echo "<script>alert('Registration Id Does Not Exists');</script>";
}
}

?>

                        </div>
                    </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->
                    </div>
                    <!-- /# row -->
                   <?php include_once('includes/footer.php');?>
                </div>
            </div>
        </div>
    </div>
   
    <!-- jquery vendor -->
    <script src="../assets/js/lib/bootstrap.min.js"></script>
    <!-- bootstrap -->
    <script src="../assets/js/lib/jquery.min.js"></script>
    <script src="../assets/js/lib/jquery.nanoscroller.min.js"></script>
    <!-- nano scroller -->
    <script src="../assets/js/lib/menubar/sidebar.js"></script>
    <script src="../assets/js/lib/preloader/pace.min.js"></script>
    <!-- sidebar -->
    <script src="../assets/js/lib/data-table/datatables.min.js"></script>
    <script src="../assets/js/lib/data-table/datatables-init.js"></script>
    <script src="../assets/js/scripts.js"></script>
    <!-- scripit init-->
<?php   ?>
</body>

</html>