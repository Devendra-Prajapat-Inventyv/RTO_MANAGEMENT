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
                <!-- /# row -->
                <div id="main-content">
                    <div class="card alert">
                        <div class="card-body">
                            <form name="licence" method="post" action="#" enctype="multipart/form-data">
                            <div class="card-header m-b-20">
                                <h4><b>User Information</b></h4>
                            </div>  
                <div class="container">
                    <div class="row">
                        <div class="col-sm-2">
                        </div>
                        <div class="col-sm-4" style="border:1px solid black;padding:-10px;text-align:center;margin-left:195px;">
                        <h3><b>Driving Licence Form</b></h3>
                        </div>
                        <div class="col-sm-2">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-1">
                        </div>
                        <div class="col-sm-10" style="padding:80px; font-weight:bold;font-size:15px">
                            <div class="row">
                                <div class="col-sm-6">
                                <div class="mb-3 row">
                                        <div class="col-sm-4">
                                            <label class="label">Application No:-</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input type="text" name="applicationnumber"  placeholder="Enter Learning Licence Number"class="form-control" required>
                                        </div>
                                    </div><br>
                                    <div class="mb-3 row">
                                        <div class="col-sm-4">
                                            <label class="label">FullName:-</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input type="text" name="fullname"  placeholder="Enter Full Name"class="form-control" required>
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
                                            <label class="label">Mobile:-</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input type="text" name="mobile"  placeholder="Enter Mobile Number"class="form-control" required>
                                        </div>
                                    </div><br>
                                    <div class="mb-3 row">
                                        <div class="col-sm-4">
                                            <label class="label">Date Of Birth:-</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input type="date" name="dob"  class="form-control" required>
                                        </div>
                                    </div><br>
                                    <div class="mb-3 row">
                                        <div class="col-sm-4">
                                            <label class="label">Age:-</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input type="text" name="age"  class="form-control" required>
                                        </div>
                                    </div><br>
                                    <div class="mb-3 row">
                                        <div class="col-sm-4">
                                            <label class="label">Blood Group:-</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <select name="bloodgroup" class="form-control" required>
                                                <option value="">Select Blood Group</option>
                                                <option value="A+">A+</option>
                                                <option value="B+">B+</option>
                                            </select>
                                        </div>
                                    </div><br>
                                    <div class="mb-3 row">
                                        <div class="col-sm-4">
                                            <label class="label">Licence Type:-</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <select name="ltype" class="form-control" required>
                                                <option value="">Select Licence Type</option>
                                                <option value="LMV(4 wheeler">LMV(4 wheeler)</option>
                                                <option value="SMV(2 Wheeler)">SMV(2 wheeler)</option>
                                            </select>
                                        </div>
                                    </div><br>
                                    <div class="mb-3 row">
                                        <div class="col-sm-4">
                                            <label class="label">City:-</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <select name="city" class="form-control" required>
                                                <option value="">Select City</option>
                                                <option value="male">Navsari</option>
                                                <option value="female">Mumbai</option>
                                            </select>
                                        </div>
                                    </div><br>
                                    <div class="mb-3 row">
                                        <div class="col-sm-4">
                                            <label class="label">State:-</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <select name="state" class="form-control" required>
                                                <option value="">Select State</option>
                                                <option value="gujrat">Gujrat</option>
                                                <option value="maharashatra">Maharashatra</option>
                                            </select>
                                        </div>
                                    </div><br>
                                    
                                    <div class="mb-3 row">
                                        <div class="col-sm-4">
                                            <label class="label">Address:-</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <textarea name="address" class="form-control" required></textarea>
                                        </div>
                                    </div><br>
                                    <div class="mb-3 row">
                                        <div class="col-sm-4">
                                           
                                        </div>
                                        <div class="col-sm-8">
                                        </div>
                                    </div>
                                </div><br>
                                <div class="col-sm-4">
                                    <div class="row">
                                        <div class="col-sm-12">
                                         <div class="form-group" style="float:right">
                                            <label class="label"> Photo</label>
                                            <div style="border:1px solid black;height:150px;width:150px;background:#FSFAFF;">
                                            <img id="output" width="150" height="150" / style="display:none">
                                            </div>
                                            <input type="file" name="image"  onchange="loadFile(event)" class="form-control" 
                                            required accept="image/" / style="width:150px;" required>
                                            <script type="text/javascript">
                                                var loadFile=function(event){
                                                    var reader=new FileReader();
                                                    reader.onload=function(){
                                                        var output=document.getElementById('output');
                                                        output.src=reader.result;
                                                    };
                                                $('#output').show();
                                                  reader.readAsDataURL(event.target.files[0]);
                                                };
                                            </script>
                                        </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-12">
                                         <div class="form-group" style="float:right">
                                            <label class="label">Signature</label>
                                            <div style="border:1px solid black;height:150px;width:150px;background:#FSFAFF;">
                                            <img id="outputs" width="150" height="150" / style="display:none">
                                            </div>
                                            <input type="file" name="simage"  onchange="loadFiles(event)" class="form-control" 
                                            required accept="image/" / style="width:150px;" required>
                                            <script type="text/javascript">
                                                var loadFiles=function(event){
                                                    var reader=new FileReader();
                                                    reader.onload=function(){
                                                        var output=document.getElementById('outputs');
                                                        output.src=reader.result;
                                                    };
                                                $('#outputs').show();
                                                  reader.readAsDataURL(event.target.files[0]);
                                                };
                                            </script>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                      <div class="form-group row">
                        <div class="col-sm-4">
                        </div>
                        <div class="col-sm-4">
                            <br><br>
                            <button class="btn btn-default btn-lg m-b-10 bg-warning border-none m-r-5 sbmt-btn" type="submit" name="submit"style="margin-left:70px;">Submit</button>
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
    $applicationnumber=$_POST['applicationnumber'];
    $fullname=$_POST['fullname'];
    $fathername=$_POST['fathername'];
    $mobile=$_POST['mobile'];
    $dob=$_POST['dob'];
    $age=$_POST['age'];
    $bloodgroup=$_POST['bloodgroup'];
    $gender=$_POST['gender'];
    $state=$_POST['state'];
    $city=$_POST['city'];
    $ltype=$_POST['ltype'];
    $address=$_POST['address'];
    $pay_status="PAID";
    $status="Pending...";
    $licenceno='GJ2023'.rand(99,2).time();
    $folder="uploads/";
    //Photo
    $image=$_FILES['image']['name'];
    $file=$_FILES['image']['tmp_name'];
    $path=$folder.$image;
    $file_name_array=explode(".",$image);
    $extension=end($file_name_array);
    $new_image_name='photo_'.rand().'.'.$extension;

    //Signature
    $simage=$_FILES['simage']['name'];
    $sfile=$_FILES['simage']['tmp_name'];
    $spath=$folder.$simage;
    $file_name_array=explode(".",$simage);
    $extension=end($file_name_array);
    $snew_image_name='sign_'.rand().'.'.$extension;

    if($file!="")
    {
      move_uploaded_file($file, $folder .$new_image_name);
    }
    if($sfile!="")
    {
      move_uploaded_file($sfile, $folder .$snew_image_name);
    }
    //Insert Data In Learning Licence Table
    $sql="Insert into tbldlicence(applicationnumber,licenceno,fullname,fathername,mobile,dob,bloodgroup,image,city,state,licencetype,address,age,pay_status,status)
    values(:applicationnumber,:licenceno,:fullname,:fathername,:mobile,:dob,:bloodgroup,:image,:city,:state,:ltype,:address,:age,:pay_status,:status)";
    $stmt=$dbh->prepare($sql);
    $stmt->bindparam(':fullname',$fullname,PDO::PARAM_STR);
    $stmt->bindparam(':applicationnumber',$applicationnumber,PDO::PARAM_STR);
    $stmt->bindparam(':licenceno',$licenceno,PDO::PARAM_STR);
    $stmt->bindparam(':fathername',$fathername,PDO::PARAM_STR);
    $stmt->bindparam(':mobile',$mobile,PDO::PARAM_STR);
    $stmt->bindparam(':dob',$dob,PDO::PARAM_STR);
    $stmt->bindparam(':bloodgroup',$bloodgroup,PDO::PARAM_STR);
    $stmt->bindparam(':image',$new_image_name,PDO::PARAM_STR);
    $stmt->bindparam(':city',$city,PDO::PARAM_STR);
    $stmt->bindparam(':ltype',$ltype,PDO::PARAM_STR);
    $stmt->bindparam(':state',$state,PDO::PARAM_STR);
    $stmt->bindparam(':address',$address,PDO::PARAM_STR);
    $stmt->bindparam(':age',$age,PDO::PARAM_STR);
    $stmt->bindparam(':pay_status',$pay_status,PDO::PARAM_STR);
    $stmt->bindparam(':status',$status,PDO::PARAM_STR);
$stmt->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
    
    echo "<script>alert('You have successfully Submited with us');</script>";
    echo "<script>window.location.href ='#'</script>";
}
else{
    echo "Something Went Wrong";
}
}


?>