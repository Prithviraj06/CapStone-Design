<?php

$con = mysqli_connect("localhost","root","","capstone"); // Establishing Connection with Server..

if(isset($_POST['ediddata']))
{
    $id=$_POST['projid'];
     $name =$_POST['name'];
      $desc=$_POST['desc'];
    $status=$_POST['status'];
    $startdate=$_POST['startdate'];
    $enddate=$_POST['enddate'];
   
}
//update query

$query = "update project set name='$name',description='$lname', status='$spec', start_date = '$startdate',end_date= '$end_date' where proejct_id ='$id'";
echo $query;
//Execute query

 $result = mysqli_query($con,$query);
   if($result)
   {
       echo'<script>alert("Data Updated Successfully..!!");</script>';
        header('location: index.php');
       
   }
    else
    {
        echo'<script>alert("Data Not Updated..!!");</script>';
    }
 

    
?>
