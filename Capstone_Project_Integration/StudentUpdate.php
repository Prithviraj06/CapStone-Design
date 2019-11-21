<?php
$con = mysqli_connect("localhost","root","","capstone"); // Establishing Connection with Server..
if(isset($_POST['ediddata']))
{
    $id=$_POST['stdid'];
     $fname =$_POST['fname'];
      $lname=$_POST['lname'];
    $email=$_POST['inputEmail'];
     $pemail=$_POST['inputPermemail'];
     $cterm=$_POST['current'];
      $gterm=$_POST['inputGradterm'];
       $aterm=$_POST['inputadmitterm'];
       $tgpa=$_POST['inputtermGPA'];
    $cgpa=$_POST['inputcumGPA'];
     $units=$_POST['inputprogressunits'];
      $cunits=$_POST['inputcumunits'];
       $status=$_POST['status'];
       $comm=$_POST['inputAdditional'];
           
}
//update query
$query = "update student set first_name='$fname',last_name='$lname', email='$email',perm_email='$pemail',current_term='$cterm',grad_term='$gterm',admit_term='$aterm',term_gpa='$tgpa',cum_gpa='$cgpa',in_progress_units='$units',cum_units='$cunits',status='$status',comments='$comm' where student_id ='$id'";
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
