<?php
include ('ref_fun.php');

//$con = mysqli_connect("localhost","root","","capstone"); // Establishing Connection with Server..
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
    $visa=$_POST['visa'];
       $interview=$_POST['interview'];
       $comm=$_POST['inputAdditional'];
    $filename=str_replace(' ', '%20',$_FILES['doc']['name']);
    $upload_dir='resume_documents';
    move_uploaded_file($_FILES['doc']['tmp_name'],$upload_dir.'/'.$filename);
    $pname=$upload_dir.'/'.$filename;
   
           
}
//update query
 if($_FILES['doc']['name']!=null){
     $query = "update student set first_name='$fname',last_name='$lname', email='$email',perm_email='$pemail',current_term='$cterm',grad_term='$gterm',admit_term='$aterm',term_gpa='$tgpa',cum_gpa='$cgpa',in_progress_units='$units',cum_units='$cunits',status='$status',Visa_Status='$visa', InterviewDate='$interview', comments='$comm', Resume ='$pname' where student_id =$id";
 }
else
{
    $query = "update student set first_name='$fname',last_name='$lname', email='$email',perm_email='$pemail',current_term='$cterm',grad_term='$gterm',admit_term='$aterm',term_gpa='$tgpa',cum_gpa='$cgpa',in_progress_units='$units',cum_units='$cunits',status='$status',Visa_Status='$visa', InterviewDate='$interview', comments='$comm' where student_id =$id";
}
echo $query;
//Execute query
 $result = mysqli_query(connectDB(),$query);
   if($result)
   {
       echo'<script>alert("Data Updated Successfully..!!");</script>';
        header('location: index_student.php');
       
   }
    else
    {
        echo'<script>alert("Data Not Updated..!!");</script>';
    }
 
    
?>
