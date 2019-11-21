<?php
error_reporting(E_ERROR | E_PARSE);

include ('ref_fun.php');

if($_SERVER["REQUEST_METHOD"] == "POST"){
$projid = $_POST['projid'];
$facid = $_POST['facid'];
$name = $_POST['name'];
$desc = $_POST['desc'];
$status = $_POST['status'];
$startdate = $_POST['startdate'];
$enddate = $_POST['enddate'];
    
    echo "The name of the project ID is ".$projid." with faculty ID ".$facid." and the project name  is ".$name." with  description ".$desc.". The project began in ".$startdate." and will end in ".$enddate." The project status is '".$status."'.";
    
    connectDB();

    if(mysqli_connect_errno())
    {
          echo "Failed to connect to MySQL: ".mysqli_connect_errno();
    }
    
    $sql = "INSERT INTO project(project_id, faculty_id, name, description, status, start_date, end_date) VALUES('$projid','$facid','$name','$desc','$status','$startdate','$enddate')"; //Insert Query

  
    $result = searchTable($sql);
   
  header('Location: index_project.php');
}
?>
