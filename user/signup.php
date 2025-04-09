<?php 
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if(isset($_POST['submit']))
  {
    $fname=$_POST['name'];
    $mobno=$_POST['mobno'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $password=md5($_POST['password']);
    $ret="select Email,MobileNumber from user where Email=:email || MobileNumber=:mobno";
    $query= $dbh -> prepare($ret);
    $query-> bindParam(':email', $email, PDO::PARAM_STR);
    $query->bindParam(':mobno',$mobno,PDO::PARAM_INT);
    $query-> execute();
    $results = $query -> fetchAll(PDO::FETCH_OBJ);
if($query -> rowCount() == 0)
{
$sql="insert into user(FullName,MobileNumber,Email,Password,Gender)Values(:name,:mobno,:email,:password,:gender)";
$query = $dbh->prepare($sql);
$query->bindParam(':name',$fname,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':mobno',$mobno,PDO::PARAM_INT);
$query->bindParam(':gender',$gender,PDO::PARAM_STR);
$query->bindParam(':password',$password,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{

echo "<script>alert('You have successfully registered with us');</script>";
echo "<script>window.location.href ='login.php'</script>";
}
else
{

echo "<script>alert('Something went wrong.Please try again');</script>";
}
}
 else
{

echo "<script>alert('Email  or Mobile Number is already exist. Please try again');</script>";
}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    
    <title>RTO User : Signup</title>

    <!-- Styles -->
    <link href="../assets/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="../assets/css/lib/themify-icons.css" rel="stylesheet">
    <link href="../assets/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/lib/unix.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
    <style>
        body {
            background-image:url('../img/b3.jpg');
        }
        .login-form {
    background: #d9e4ea;
    padding: 20px 30px 20px;
    border-radius: 25px;
    width:700px;
    margin-left:35px;
    background:#dbe4d3;
}
.login-form label{
    font-family:auto;
}
.login-form label a {
    color: #000000;
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
                            <a href="#"><span>User Signup</span></a>
                        </div>
                        <div class="login-form">
                            <h4><b>Register to RTO</b></h4>
                            <form method="post">
                                <div class="form-group">
                                    <label>FullName</label>
                                    <input type="text" value="" name="name" placeholder="Enter Name" required="true" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Mobile Number</label>
                                    <input type="text" name="mobno" class="form-control" placeholder="Enter Mobile Number" required="true" maxlength="10" pattern="[0-9]+">
                                </div>
                                <div class="form-group">
                                    <label>Email address</label>
                                    <input type="email" class="form-control" value="" placeholder="Enter Email Address" name="email" required="true">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" value="" class="form-control" placeholder="Create Password" name="password" required="true">
                                </div>
                                <div class="form-group">
                                    <label>Gender</label>
                                    <select type="text" value="" name="gender" required="true" class="form-control">
                                        <option value="">Select Gender</option>
                                       <option value="Male">Male</option>
                                       <option value="Female">Female</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30" name="submit"><b>Register</b></button>
                               
                                <div class="register-link m-t-15 text-center">
                                    <p>Already have account ? <a href="login.php"> Sign in</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>