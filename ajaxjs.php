<?php
// Fetching Values From URL
$fname2 = $_POST['fname1'];
$lname2 = $_POST['lname1'];
$email2 = $_POST['email1'];
$Peremail2 = $_POST['Peremail1'];
$GradTerm2 = $_POST['GradTerm1'];
$AdmitTerm2 = $_POST['AdmitTerm1'];
$TermGpa2 = $_POST['TermGpa1'];
$CumGpa2 = $_POST['CumGpa1'];
$InProgressUnits2 = $_POST['InProgressUnits1'];
$CumUnits2 = $_POST['CumUnits1'];
$AdmitTerm2 = $_POST['AdmitTerm1'];
$Comments2 = $_POST['Comments1'];

$connection = mysql_connect("localhost", "root", "Prna.123"); // Establishing Connection with Server..
$db = mysql_select_db("testdb", $connection); // Selecting Database
if (isset($_POST['fname1'])) {
$query = mysql_query("insert into test3(fname,lname, email, Peremail, GradTerm,AdmitTerm, TermGpa,CumGpa,InProgressUnits,CumUnits,AdmitTerm,Comments) values ('$fname2','lname2','email2','Peremail2','GradTerm2','AdmitTerm2','TermGpa2','CumGpa2','InProgressUnits2','CumUnits2','AdmitTerm2','Comments2')"); //Insert Query
echo "Form Submitted succesfully";
}
mysql_close($connection); // Connection Closed
?>



