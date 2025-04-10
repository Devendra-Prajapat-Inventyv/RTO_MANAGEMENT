<div class="header">
        <div class="pull-left">
            <div class="logo"><a href="dashboard.php"><!-- <img src="assets/images/logo.png" alt="" /> --><span>RTO USER</span></a></div>
            <div class="hamburger sidebar-toggle">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </div>
        </div>

        <div class="pull-right p-r-15">
            <ul>
                <li class="header-icon dib"><i class="ti-bell"></i>
                    <div class="drop-down">
                        <div class="dropdown-content-heading">
                            <span class="text-left">Recent Notifications</span>
                        </div>
                        <div class="dropdown-content-body">
                        <?php
$uid=$_SESSION['rtouid'];
$sql="SELECT FullName,Email,MobileNumber from  user where ID=:uid";
$query = $dbh -> prepare($sql);
$query->bindParam(':uid',$uid,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
                <li class="header-icon dib"><img class="avatar-img" src="../assets/images/avatar/images (1).png" alt="" /> <span class="user-avatar"> <?php  echo $row->FullName;?> <i class="ti-angle-down f-s-10"></i></span>
                    <div class="drop-down dropdown-profile">
                        <div class="dropdown-content-heading">
                            <span class="text-left"><?php  echo $row->Email;?></span>
                            <p class="trial-day"><?php  echo $row->MobileNumber;?></p>
                        </div><?php $cnt=$cnt+1;}} ?>
                        <div class="dropdown-content-body">
                            <ul>
                                <li><a href="profile.php"><i class="ti-user"></i> <span>Profile</span></a></li>
                                <li><a href="change-password.php"><i class="ti-settings"></i> <span>Setting</span></a></li>
                                <li><a href="logout.php"><i class="ti-power-off"></i> <span>Logout</span></a></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>