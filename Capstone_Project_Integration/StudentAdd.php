<?php
error_reporting(E_ERROR | E_PARSE);

include ('ref_fun.php');

if($_SERVER["REQUEST_METHOD"] == "POST"){
$stdid2 = $_POST['stdid'];
$fname2 = $_POST['fname'];
$lname2 = $_POST['lname'];
$email2 = $_POST['inputEmail'];
$Peremail2 = $_POST['inputPermemail'];
$current2 = $_POST['current'];
$GradTerm2 = $_POST['inputGradterm'];
$AdmitTerm2 = $_POST['inputadmitterm'];
$TermGpa2 = $_POST['inputtermGPA'];
$CumGpa2 = $_POST['inputcumGPA'];
$InProgressUnits2 = $_POST['inputprogressunits'];
$CumUnits2 = $_POST['inputcumunits'];
$status = $_POST['status'];
    
    echo "The name of the student is ".$fname2." with student ID ".$stdid2." and the last name  is ".$lname2." with email id ".$email2." and permanent email ".$Peremail2.". The Grad term of the student is ".$GradTerm2." with the admit term being ".$AdmitTerm2.". The term GPA of the student is ".$TermGpa2." and the cumulative GPA is ".$CumGpa2.". The in Progress Units of the students is ".$InProgressUnits2." and the total units completed by the student is ".$CumUnits2.". My the student is '".$status."'.";
    
    connectDB();

    if(mysqli_connect_errno())
    {
          echo "Failed to connect to MySQL: ".mysqli_connect_errno();
    }
    
    $sql = "INSERT INTO student(student_id, first_name, last_name, email, perm_email, current_term, grad_term, admit_term, term_gpa, cum_gpa, in_progress_units, cum_units, status) VALUES('$stdid2','$fname2','$lname2','$email2','$Peremail2','$current2','$GradTerm2','$AdmitTerm2','$TermGpa2','$CumGpa2','$InProgressUnits2','$CumUnits2','$status')"; //Insert Query

  
    $result = searchTable($sql);
   
  header('Location: index.php');
}
?>