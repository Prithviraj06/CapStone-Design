<?php
// Fetching Values From URL
$fname2 = $_POST["fname1"];
$lname2 = $_POST['lname1'];
$email2 = $_POST['inputEmail1'];
$Peremail2 = $_POST['inputPermemail1'];
$GradTerm2 = $_POST['inputGradterm1'];
$AdmitTerm2 = $_POST['inputadmitterm1'];
$TermGpa2 = $_POST['inputtermGPA1'];
$CumGpa2 = $_POST['inputcumGPA1'];
$InProgressUnits2 = $_POST['inputprogressunits1'];
$CumUnits2 = $_POST['inputcumunits1'];
$Comments2 = $_POST['inputAdditional1'];

$conn = mysqli_connect("localhost", "root", " ","testdb"); // Establishing Connection with Server..
if (isset($_POST['fname'])) {
$query = "insert into studentrec(fname,lname, email, Peremail, GradTerm,AdmitTerm, TermGpa,CumGpa,InProgressUnits,CumUnits,Comments) values ('$fname2','$lname2','$email2','$Peremail2','$GradTerm2','$AdmitTerm2','$TermGpa2','$CumGpa2','$InProgressUnits2','$CumUnits2','$Comments2')"; //Insert Query
echo "Data Submitted succesfully for".$fname.".";

        
$result = mysqli_query($conn,$query);
    
    mysql_close($result); // Connection Closed
    
     header('Location: index.html');
}

?>
