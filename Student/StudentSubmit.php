<?php
if($_SERVER["REQUEST_METHOD"] == "POST")     {
$fname2 = $_POST['fname'];
$lname2 = $_POST['lname'];
$email2 = $_POST['inputEmail'];
$Peremail2 = $_POST['inputPermemail'];
$GradTerm2 = $_POST['inputGradterm'];
$AdmitTerm2 = $_POST['inputadmitterm'];
$TermGpa2 = $_POST['inputtermGPA'];
$CumGpa2 = $_POST['inputcumGPA'];
$InProgressUnits2 = $_POST['inputprogressunits'];
$CumUnits2 = $_POST['inputcumunits'];
$Comments2 = $_POST['inputAdditional'];
    
    echo "The name of the student is ".$fname2." and the last name  is ".$lname2." with email id ".$email2." and permanent email ".$Peremail2.". The Grad term of the student is ".$GradTerm2." with the admit term being ".$AdmitTerm2.". The term GPA of the student is ".$TermGpa2." and the cumulative GPA is ".$CumGpa2.". The in Progress Units of the students is ".$InProgressUnits2." and the total units completed by the student is ".$CumUnits2.". My additional comments for the student is '".$Comments2."'.";
    
    $con = mysqli_connect("localhost", "root", "Prna.123!","testdb");

    if(mysqli_connect_errno())
    {
          echo "Failed to connect to MySQL: ".mysqli_connect_errno();
    }
    
    $sql = "INSERT INTO studentrec(fname,lname, email, Peremail, GradTerm,AdmitTerm, TermGpa,CumGpa,InProgressUnits,CumUnits,Comments) VALUES('$fname2','$lname2','$email2','$Peremail2','$GradTerm2','$AdmitTerm2','$TermGpa2','$CumGpa2','$InProgressUnits2','$CumUnits2','$Comments2')"; //Insert Query

  
    $result = mysqli_query($con,$sql);
   
  header('Location: index.html');
}
?>
