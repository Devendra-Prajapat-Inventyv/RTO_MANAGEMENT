<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if(isset($_POST['submit']))
  {
    $email=$_POST['email'];
$mobile=$_POST['mobile'];
$newpassword=md5($_POST['newpassword']);
  $sql ="SELECT Email FROM user WHERE Email=:email and MobileNumber=:mobile";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> bindParam(':mobile', $mobile, PDO::PARAM_STR);
$query-> execute();
$results = $query -> fetchAll(PDO::FETCH_OBJ);
if($query -> rowCount() > 0)
{
$con="update user set Password=:newpassword where Email=:email and MobileNumber=:mobile";
$chngpwd1 = $dbh->prepare($con);
$chngpwd1-> bindParam(':email', $email, PDO::PARAM_STR);
$chngpwd1-> bindParam(':mobile', $mobile, PDO::PARAM_STR);
$chngpwd1-> bindParam(':newpassword', $newpassword, PDO::PARAM_STR);
$chngpwd1->execute();
echo "<script>alert('Your Password succesfully changed');</script>";
}
else {
echo "<script>alert('Email id or Mobile no is invalid');</script>"; 
}
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    
    <title>RTO User : Forgot Password</title>
    
    <link href="../assets/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="../assets/css/lib/themify-icons.css" rel="stylesheet">
    <link href="../assets/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/lib/unix.css" rel="stylesheet">
    <link href="../assets/css/dash.css" rel="stylesheet">
    <script type="text/javascript">
function valid()
{
if(document.chngpwd.newpassword.value!= document.chngpwd.confirmpassword.value)
{
alert("New Password and Confirm Password Field do not match  !!");
document.chngpwd.confirmpassword.focus();
return false;
}
return true;
}
</script>
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
                            <a href="dashboard.php"><span><b>RTO User<b></span></a>
                        </div>
                        <div class="login-form">
                            <h4><b>Forgot Password</b></h4>
                            <form method="post" name="chngpwd" onSubmit="return valid();">
                                <div class="form-group">
                                    <label><b>Email Address</b></label>
                                    <input type="email" class="form-control" placeholder="Email Address" required="true" name="email">
                                </div>
                                <div class="form-group">
                                    <label><b>Mobile Number</b></label>
                                    <input type="text" class="form-control" placeholder="Mobile Number" required="true" name="mobile" maxlength="10" pattern="[0-9]+">
                                </div>
                                <div class="form-group">
                                    <label><b>New Password</b></label>
                                    <input type="password" name="newpassword" class="form-control" placeholder="New Password" required="true">
                                </div>
                                <div class="form-group">
                                    <label><b>Confirm Password</b></label>
                                    <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm Password" required="true">
                                </div>
                                <div class="checkbox">
                                    
                                    <label class="pull-right">
										<a href="login.php"><b>signin</b></a>
									</label>

                                </div>
                                <button type="submit" name="submit" class="btn btn-primary btn-flat m-b-30 m-t-30"><b>Reset</b></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>