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
    ////$docname=addslashes($_FILES['doc']['tmp_name']);
    $filename=str_replace(' ', '%20',$_FILES['doc']['name']);
    $upload_dir='project_documents';
    move_uploaded_file($_FILES['doc']['tmp_name'],$upload_dir.'/'.$filename);
    $pname=$upload_dir.'/'.$filename;
    //$doc=addslashes(file_get_contents($_FILES['doc']['tmp_name']));
    //$doc=base64_encode($doc);
    //$doc=base64_encode($doc);
   
}
//update query

$query = "update project set name='$name',description='$desc', status='$status', start_date = '$startdate',end_date= '$enddate',Documents='$pname' where project_id =$id";
echo $query;
//Execute query

 $result = mysqli_query($con,$query);
   if($result)
   {
       echo'<script>alert("Data Updated Successfully..!!");</script>';
       header('location: index_project.php');
       
       
   }
    else
    {
        echo'<script>alert("Data Not Updated..!!");</script>';
    }
 

    
?>
