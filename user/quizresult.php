
<?php
include('includes/dbconnection.php');
     
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
            $answer6 = $_POST['question-6-answers'];
            $answer7 = $_POST['question-7-answers'];
            $answer8 = $_POST['question-8-answers'];
            $answer9 = $_POST['question-9-answers'];
            $answer10 = $_POST['question-10-answers'];
           
            $totalCorrect = 0;
            
            if ($answer1 == "B") { $totalCorrect++; }
            if ($answer2 == "B") { $totalCorrect++; }
            if ($answer3 == "A") { $totalCorrect++; }
            if ($answer4 == "C") { $totalCorrect++; }
            if ($answer5 == "B") { $totalCorrect++;}
            if ($answer6 == "C") { $totalCorrect++; }
            if ($answer7 == "C") { $totalCorrect++; }
            if ($answer8 == "C") { $totalCorrect++; }
            if ($answer9 == "A") { $totalCorrect++; }
            if ($answer10 == "C") { $totalCorrect++; }
             
            if(isset($_POST['submit']))
            {
                $totalCorrect;
                $sql="Insert into tblllicence(correctans) Values('$totalCorrect')";
                $stmt=$dbh->prepare($sql);
                $stmt->execute();
                $lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
    
    echo "<script>alert('You have successfully Submited');</script>";
    echo "<script>window.location.href ='dashboard.php'</script>";
}
else{
    echo "Something Went Wrong";
}
            }
        ?>