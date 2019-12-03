<?php 
$page_title = 'reference funcitons';
//include ('./includes/header.html');


function connectDB()
{
    $localhost = "localhost";
    $dbun = "root";
    $dbpw = "Prna.123!";
    $dbname = "capstone";

    $connect = mysqli_connect($localhost,$dbun,$dbpw,$dbname);

    if(mysqli_connect_errno())
    {
          echo "Failed to connect to MySQL: ".mysqli_connect_errno();
    }

    return $connect;
}


function searchTable($query)
{
    $search_result = mysqli_query(connectDB(), $query);
    return $search_result;
}


function transformTerm($term)
{   
    $quarterArray = array(0 => 'Fall ', 2 => 'Winter ', 4 => 'Spring ', 6 => 'Summer ');
    
    $start_year = 1978;
    $counter = 0;
    
    $termArray = array($counter => $start_year);

    $year = substr($term, 0, 2);
    $quarter = substr($term, 2,1);
    
    for($counter; $counter <= $year; $counter++)
    {
        array_push($termArray, $start_year += 1);
        
    }
       
 
    if($quarter == 0)
    {
        $value = $quarterArray[$quarter].$termArray[$year];
    }
    elseif($quarter == 2)
    {
        $value = $quarterArray[$quarter].$termArray[$year];
    }
    elseif($quarter == 4)
    {
        $value = $quarterArray[$quarter].$termArray[$year];
    }
    elseif($quarter == 6)
    {
        $value = $quarterArray[$quarter].$termArray[$year];
    }
    else
    {
        $value = $term;
    }
    
    return $value;
}

//include ('./includes/footer.html');
?>