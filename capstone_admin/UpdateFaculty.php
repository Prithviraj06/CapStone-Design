<?php

include ('ref_fun.php');

if(isset($_POST['ediddata']))
{
    $id=$_POST['facid'];
     $fname =$_POST['fname'];
      $lname=$_POST['lname'];
    $spec=$_POST['spec'];
   
}
//update query

$query = "update faculty set first_name='$fname',last_name='$lname', specialization='$spec' where faculty_id =$id";
echo $query;
//Execute query

 $result = mysqli_query(connectDB(),$query);
   if($result)
   {
       echo'<script>alert("Data Updated Successfully..!!");</script>';
        header('location: index_faculty.php');
       
   }
    else
    {
        echo'<script>alert("Data Not Updated..!!");</script>';
    }
 

    
?>