<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if(isset($_POST['login'])) 
  {
    
    $email=$_POST['email'];
    $password=md5($_POST['password']);
    $sql ="SELECT Email,Password,ID,Cid FROM user WHERE ( Email=:email) and Password=:password";
    $query=$dbh->prepare($sql);
    $query->bindParam(':email',$email,PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
    $query-> execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    if($query->rowCount() > 0)
{
foreach ($results as $result) {
$_SESSION['rtouid']=$result->ID;
$_SESSION['rtoucid']=$result->Cid;
}
$_SESSION['login']=$_POST['email'];

echo "<script type='text/javascript'> document.location ='dashboard.php'; </script>";
} else{
echo "<script>alert('Invalid Details');</script>";
}
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    
    <title>RTO User : Login</title>
    
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
                            <a href="../index.php"><span>RTO USER</span></a>
                        </div>
                        <div class="login-form">
                            <h4><b>User Login</b></h4>
                            <form method="post">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control" placeholder="Email-Id" required="true" name="email">
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
                                <button type="submit" name="login" class="btn btn-primary btn-flat m-b-30 m-t-30"><b>Sign in</b></button>

                                <div class="register-link m-t-15 text-center">
                                    <p>Create an account ? <a href="signup.php"> Sign up</a></p>
                                </div>
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