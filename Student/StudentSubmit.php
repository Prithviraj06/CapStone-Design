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

$conn = mysqli_connect("localhost", "root", " ","testdb");
$query = "insert into studentrec(fname,lname, email, Peremail, GradTerm,AdmitTerm, TermGpa,CumGpa,InProgressUnits,CumUnits,Comments) values ('hi','$lname2','$email2','$Peremail2','$GradTerm2','$AdmitTerm2','$TermGpa2','$CumGpa2','$InProgressUnits2','$CumUnits2','$Comments2')"; //Insert Query

  
    
$result = mysqli_query($conn,$query);



mysqli_close($result); // Connection Closed
    header('Location: index.html');
}
?>
