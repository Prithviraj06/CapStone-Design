<?php

$con = mysqli_connect("localhost","root","","capstone"); // Establishing Connection with Server..

if(isset($_POST['ediddata']))
{
    $id=$_POST['sponid'];
     $fname =$_POST['fname'];
      $lname=$_POST['lname'];
    $company=$_POST['company'];
     $phone=$_POST['phone'];
     $email=$_POST['email'];
     $title=$_POST['title'];
     $address=$_POST['address'];
   
}
//update query

$query = "update sponsor set first_name='$fname',last_name='$lname', company='$company', phone='$phone',email='$email',title='$title', address='$address'' where sponsor_id ='$id'";
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

            