<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if(isset($_POST['login'])) 
  {
    $empid=$_POST['empid'];
    $password=md5($_POST['password']);
    $sql ="SELECT ID,EmpID FROM tblofficer WHERE EmpID=:empid and Password=:password";
    $query=$dbh->prepare($sql);
    $query->bindParam(':empid',$empid,PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
    $query-> execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    if($query->rowCount() > 0)
{
foreach ($results as $result) {
$_SESSION['ocastid']=$result->ID;
$_SESSION['ocasteaid']=$result->EmpID;
$_SESSION['ocastcid']=$result->CourseID;
}
$_SESSION['login']=$_POST['empid'];
echo "<script type='text/javascript'> document.location ='dashboard.php'; </script>";
} else{
echo "<script>alert('Invalid Details');</script>";
}
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    
    <title>RTO : Officer Login</title>
    
    <link href="../assets/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="../assets/css/lib/themify-icons.css" rel="stylesheet">
    <link href="../assets/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/lib/unix.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
    <style>
        body {
            background-image:url('../img/banner.jpg');
        }
        .login-form {
    background: #d9e4ea;
    padding: 30px 30px 20px;
    border-radius: 25px;
    width:600px;
    margin-left:50px;
    background:#dbe4d3;
}
.login-form label a {
    color: #03a9f5;
    font-family: MontserratLight, sans-serif;
}
.login-form label{
    font-family:auto;
}
.login-form .btn {
   
    border-radius: 25px;
    background-color:#b88426;
}

</style>
</head>

<body>

    <div class="unix-login">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="../index.php"><span>RTO OFFICER</span></a>
                        </div>
                        <div class="login-form">
                            <h4>Officer Login</h4>
                            <form method="post">
                                <div class="form-group">
                                    <label>Employee ID</label>
                                    <input type="text" class="form-control" placeholder="Employee ID" required="true" name="empid">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" placeholder="Password" name="password" required="true">
                                </div>
                                <div class="checkbox">
                                    
                                    <label class="pull-right">
										<a href="forgot-password.php">Forgotten Password?</a>
									</label>

                                </div>
                                <button type="submit" name="login" class="btn btn-primary btn-flat m-b-30 m-t-30">Sign in</button>
                                <label>
                                        <a href="../index.php">Back Home!!</a>
                                    </label>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>