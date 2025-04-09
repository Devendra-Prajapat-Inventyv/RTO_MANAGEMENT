<div class="header">
        <div class="pull-left">
            <div class="logo"><a href="dashboard.php"><!-- <img src="../assets/images/logo.png" alt="" /> --><span>RTO OFFICER</span></a></div>
            <div class="hamburger sidebar-toggle">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </div>
        </div>

        <div class="pull-right p-r-15">
            <ul>
                                      <?php
                                  $tid=$_SESSION['ocastid'];
                                 $currentdate=date('Y-m-d');
$sql="SELECT user.ID,user.FullName,user.MobileNumber,user.Email,user.Gender,user.RegDate from user";
$query = $dbh -> prepare($sql);
$query->execute();
 $results=$query->fetchAll(PDO::FETCH_OBJ);

$uploadedassign=$query->rowCount();
if($query->rowCount()>0){


  ?>
                      <div class="drop-down"> 
                        <div class="dropdown-content-body">
                            <ul>
                                <?php
                                foreach($results as $row)
                                { 
                                }
                                ?>    

                                <li class="text-center">
                                    <a href="#" class="more-link">See All</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li><?php }
$tid=$_SESSION['ocastid'];
$sql="SELECT * from tblofficer where ID=:tid ";
$query = $dbh -> prepare($sql);
$query->bindParam(':tid',$tid,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
                <li class="header-icon dib"><img class="avatar-img" src="../assets/images/avatar/images (1).png" alt="" /> <span class="user-avatar"> <?php  echo $row->FirstName;?> <i class="ti-angle-down f-s-10"></i></span>
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