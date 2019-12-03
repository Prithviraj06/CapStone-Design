<?php

//include ('ref_fun.php');

$con = mysqli_connect("localhost","root","Prna.123!","capstone"); // Establishing Connection with Server..

if(isset($_POST['ediddata']))
{
    $id=$_POST['projid'];
     $name =$_POST['name'];
      $desc=$_POST['desc'];
    $status=$_POST['status'];
    $startdate=$_POST['startdate'];
    $enddate=$_POST['enddate'];
    $issue=$_POST['issues'];
    $resolution=$_POST['resolution'];
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
    if($_FILES['doc']['name']!=null){

    $query = "update project set name='$name',description='$desc', status='$status', start_date =' $startdate',end_date= '$enddate',Issues ='$issue',Issue_Resolution='$resolution',Documents='$pname' where project_id =$id";
    }
else
{
     $query = "update project set name='$name',description='$desc', status='$status', start_date = '$startdate',end_date= '$enddate',Issues ='$issue',Issue_Resolution='$resolution' where project_id =$id";
}

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
