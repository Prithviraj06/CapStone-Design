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
    
    echo "The name entered is ".$fname2."!!";

}
?>