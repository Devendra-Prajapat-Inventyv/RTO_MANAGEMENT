<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
include('6');
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
  <link rel="stylesheet" type="text/css" href="../css/qstyle.css" />
  
  <style>
    #quiz h3 {
    font-size: 20px;
    margin: 0 0 1px 0;
    color: #753dbc;
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
                            <form name="licence" method="post" action="quizresult.php" enctype="multipart/form-data">
                            <div class="card-header m-b-20">
                                <h4><b>Learner Exam</b></h4>
                            </div>  
                <div class="container">
                   
                    <div id="page-wrap">
 
		<u><h1 style="font-size:28px;color:#bf4506;margin-right:20px"><b>Learning Licence Exam</b></h1></u>

		<form action="quizresult.php" method="post" id="quiz">

		
            <ol>
            
                <li>
                
                    <h3> 1.Validty of lerners license? </h3>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                        <label for="question-1-answers-A">A) till the driving license is obtained </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                        <label for="question-1-answers-B">B) 6 Months</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                        <label for="question-1-answers-C">C) 30 days</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                        <label for="question-1-answers-D">D) 1 year</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>2.Driver of a motor vehical should frive throw?</h3>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
                        <label for="question-2-answers-A">A) the right side of the road</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                        <label for="question-2-answers-B">B) the left side of the road</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
                        <label for="question-2-answers-C">C) the center of the road</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>3.Parking of vehical in front of enterance to hospital?</h3>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
                        <label for="question-3-answers-A">A) improper</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
                        <label for="question-3-answers-B">B) proper</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
                        <label for="question-3-answers-C">C) proper if no parking sign is not provided</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
                        <label for="question-3-answers-D">D) punishable</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>4.On a road designated as a one way? </h3>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
                        <label for="question-4-answers-A">A) Parking is prohibited</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                        <label for="question-4-answers-B">B) overtaking is prohibited</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
                        <label for="question-4-answers-C">C) should not drive in reverse gear</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
                        <label for="question-4-answers-D">D) do not stop the vehical</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>5.Fog lamp are used ?</h3>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
                        <label for="question-5-answers-A">A) during night</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
                        <label for="question-5-answers-B">B) when there is mist</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
                        <label for="question-5-answers-C">C) when the opposite vehical is not using dim light</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
                        <label for="question-5-answers-D">D) All Above These</label>
                    </div>
                
                </li>

                <li>
                
                <h3>6. Minnimum age for obtaining Driving license for transport vehicles? </h3>
                
                <div>
                    <input type="radio" name="question-6-answers" id="question-6-answers-A" value="A" />
                    <label for="question-5-answers-A">A) 25 years</label>
                </div>
                
                <div>
                    <input type="radio" name="question-6-answers" id="question-6-answers-B" value="B" />
                    <label for="question-5-answers-B">B) 18 years</label>
                </div>
                
                <div>
                    <input type="radio" name="question-6-answers" id="question-6-answers-C" value="C" />
                    <label for="question-5-answers-C">C) 20 years</label>
                </div>
                
                <div>
                    <input type="radio" name="question-6-answers" id="question-6-answers-D" value="D" />
                    <label for="question-5-answers-D">D) All Above These</label>
                </div>
            
            </li>

            <li>
                
                <h3> 7.Parking is probhited in the dollowing case? </h3>
                
                <div>
                    <input type="radio" name="question-7-answers" id="question-7-answers-A" value="A" />
                    <label for="question-5-answers-A">A) Road side</label>
                </div>
                
                <div>
                    <input type="radio" name="question-7-answers" id="question-7-answers-B" value="B" />
                    <label for="question-5-answers-B">B) Where parking is permitted</label>
                </div>
                
                <div>
                    <input type="radio" name="question-7-answers" id="question-7-answers-C" value="C" />
                    <label for="question-5-answers-C">C) Near traffic light</label>
                </div>
            
            </li>

            <li>
                
                <h3> 8.The hand brake is used? </h3>
                
                <div>
                    <input type="radio" name="question-8-answers" id="question-8-answers-A" value="A" />
                    <label for="question-5-answers-A">A) To reduce the speed</label>
                </div>
                
                <div>
                    <input type="radio" name="question-8-answers" id="question-8-answers-B" value="B" />
                    <label for="question-5-answers-B">B) To apply sudden brake</label>
                </div>
                
                <div>
                    <input type="radio" name="question-8-answers" id="question-8-answers-C" value="C" />
                    <label for="question-5-answers-C">C) to park a vehicle</label>
                </div>

                </li>

                <li>
                
                <h3>9.When you wehicle is being overtaken? </h3>
                
                <div>
                    <input type="radio" name="question-9-answers" id="question-9-answers-A" value="A" />
                    <label for="question-5-answers-A">A) we shall not increase  speed</label>
                </div>
                
                <div>
                    <input type="radio" name="question-9-answers" id="question-9-answers-B" value="B" />
                    <label for="question-5-answers-B">B) we can increase speed</label>
                </div>
                
                <div>
                    <input type="radio" name="question-9-answers" id="question-9-answers-C" value="C" />
                    <label for="question-5-answers-C">C) we can increase speed with due care</label>
                </div>
            
            </li>
            
            <li>
                
                <h3>10.Types of horn permitted? </h3>
                
                <div>
                    <input type="radio" name="question-10-answers" id="question-10-answers-A" value="A" />
                    <label for="question-5-answers-A">A) Air horn</label>
                </div>
                
                <div>
                    <input type="radio" name="question-10-answers" id="question-10-answers-B" value="B" />
                    <label for="question-5-answers-B">B) Multi-toned horn</label>
                </div>
                
                <div>
                    <input type="radio" name="question-10-answers" id="question-10-answers-C" value="C" />
                    <label for="question-5-answers-C">C) Electric horn</label>
                </div>

                </li>

            </ol><br>
        
            <button type="submit" name="submit" style="margin-left:150px;padding:10px;width:180px;background-color:#ff8e27"><b>Submit</b></button>
</div>
</form>
		
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
                                           
</body>

</html>
