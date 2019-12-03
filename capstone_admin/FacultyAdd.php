<?php
error_reporting(E_ERROR | E_PARSE);

include ('ref_fun.php');

if($_SERVER["REQUEST_METHOD"] == "POST"){
$facid = $_POST['facid'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$spec = $_POST['spec'];
    
    echo "The faculty ID is ".$facid." and their name is ".$fname." ".$lname." They specialize in ".$spec.".";
    
    $sql = "INSERT INTO faculty(faculty_id, first_name, last_name, specialization) VALUES('$facid','$fname','$lname','$spec')"; //Insert Query

    connectDB();

    if(mysqli_connect_errno())
    {
          echo "Failed to connect to MySQL: ".mysqli_connect_errno();
    }
  
    $result = searchTable($sql);
   
  header('Location: index_faculty.php');
}
?>