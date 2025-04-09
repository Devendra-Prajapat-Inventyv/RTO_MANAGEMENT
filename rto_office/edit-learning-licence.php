<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['ocastid']==0)) {
  header('location:logout.php');
  } else{
    if(isset($_POST['submit']))
  {
    $status=$_POST['status'];
    $validdate=$_POST['validdate'];
$eid=$_GET['editid'];
$sql="update tblllicence set status=:status,validupto=:validdate where tblllicence.id=:eid";
$query=$dbh->prepare($sql);
$query->bindParam(':status',$status,PDO::PARAM_STR);
$query->bindParam(':validdate',$validdate,PDO::PARAM_STR);
$query->bindParam(':eid',$eid,PDO::PARAM_STR);
 $query->execute();

    echo '<script>alert("User detail has been updated.")</script>';

  
 

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  
    <title>RTO : Update Learning Licence Information </title>

    <link href="../assets/css/lib/calendar2/pignose.calendar.min.css" rel="stylesheet">
    <link href="../assets/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="../assets/css/lib/themify-icons.css" rel="stylesheet">
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
                                <h1>Update Learning Licence</h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="dashboard.php">Dashboard</a></li>
                                    <li class="active">Learning Licence Information</li>
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
                            <form name="" method="post" action="" enctype="multipart/form-data">
                                <?php
                                    $eid=$_GET['editid'];
                                    $sql="SELECT tblllicence.id,tblllicence.applicationnumber,tblllicence.validupto,tblllicence.fullname,tblllicence.mobile,tblllicence.status,tblllicence.regdate from tblllicence where tblllicence.id=$eid";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>  
                            <div class="card-header m-b-20">
                                <h4>Learning Licence Information</h4>
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

                                <div class="col-md-3">
                                    <div class="basic-form">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" class="form-control border-none input-flat bg-ash"  readonly="true" name="fname" required="true" value="<?php  echo htmlentities($row->fullname);?>">
                                        </div>
                                    </div>
                                </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="basic-form">
                                        <div class="form-group">
                                            <label>Application Number</label>
                                            <input type="text" class="form-control border-none input-flat bg-ash"  readonly="true" name="fname" required="true" value="<?php  echo htmlentities($row->applicationnumber);?>">
                                        </div>
                                    </div>
                                </div>

                            </div>   
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="basic-form">
                                    <div class="form-group">
                                    <label>Licence Status</label>
                                    <select type="text" value="" name="status" required="true" class="form-control">
                                    <option value="Accepted">Pending</option>
                                       <option value="Accepted">Accepted</option>
                                       <option value="Rejected">Rejected</option>
                                    </select>
                                </div>
                                </div>  
                                <div class="row">
                                     <div class="col-md-12">
                                             <div class="basic-form">
                                                         <div class="form-group">
                                                <label>Valid Date</label>
                                            <input type="date" class="form-control border-none input-flat bg-ash" name="validdate" required="true"">
                                            </div>
                                     </div>
                            </div>
                            </div>                      
                            </div>                             
                            </div>
                            <?php $cnt=$cnt+1;}} ?>
                            <button class="btn btn-default btn-lg m-b-10 bg-warning border-none m-r-5 sbmt-btn" type="submit" name="submit">Update</button>
                            <button class="btn btn-default btn-lg m-b-10 m-l-5 sbmt-btn" type="reset">Reset</button>
                        </form>
                        </div>
                    </div>
                   
                     <?php include_once('includes/footer.php');?>
                </div>
            </div>
        </div>
    </div>
        </div>
    </div>
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
</body>

</html><?php }  ?>