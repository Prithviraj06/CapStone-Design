<?php
error_reporting(E_ERROR | E_PARSE);

include ('ref_fun.php');

if($_SERVER["REQUEST_METHOD"] == "POST"){
$sponid = $_POST['sponid'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$company = $_POST['company'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$title = $_POST['title'];
$address = $_POST['address'];
    
    connectDB();

    if(mysqli_connect_errno())
    {
          echo "Failed to connect to MySQL: ".mysqli_connect_errno();
    }
 
    $sql = "INSERT INTO sponsor(sponsor_id, first_name, last_name, company, phone, email, title, address) VALUES('$sponid','$fname','$lname','$company','$phone','$email','$title','$address')"; //Insert Query

  
    $result = searchTable($sql);
   
  header('Location: index_sponsor.php');
}
?>