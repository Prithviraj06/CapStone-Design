<?php

$con = mysqli_connect("localhost","root","","capstone"); // Establishing Connection with Server..

if(isset($_POST['ediddata']))
{
    $id=$_POST['facid'];
     $fname =$_POST['fname'];
      $lname=$_POST['lname'];
    $spec=$_POST['spec'];
   
}
//update query

$query = "update faculty set first_name='$fname',last_name='$lname', spec='$spec' where faculty_id ='$id'";
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