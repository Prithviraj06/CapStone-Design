<?php
if(isset($_POST['filter'])){
    $filter_value = $_POST['studfilter'];
    
    if($filter_value == "eligible")
    
    {
        $filter_value = "cum_units >= 27 AND project_id == 0 ";
        $con = mysqli_connect("localhost","root","Prna.123!","testdb");
        $filter = "SELECT * FROM student WHERE ".$filter_value;
        $result = mysqli_query($con,$filter_value);
        
        
    }
    
    elseif($filter_value == "notEligible")
    
    {
     $filter_value = "cum_units < 27";
        $con = mysqli_connect("localhost","root","Prna.123!","testdb");
        $filter = "SELECT * FROM student WHERE ".$filter_value;
        $result = mysqli_query($con,$filter_value);   
    }
    
    elseif($filter_value == "enrolled")
    {
        $filter_value = "cum_units >= 27 AND project_id > 0";
        $con = mysqli_connect("localhost","root","Prna.123!","testdb");
        $filter = "SELECT * FROM student WHERE ".$filter_value;
        $result = mysqli_query($con,$filter_value);
        
    }
    
    elseif ($filter_value == "All")
    {
        $filter_value = "1";
        $con = mysqli_connect("localhost","root","Prna.123!","testdb");
        $filter = "SELECT * FROM student WHERE ".$filter_value;
        $result = mysqli_query($con,$filter_value);
           
    }


}








?>