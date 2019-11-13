<?php 
$page_title = 'reference funcitons';
include ('./includes/header.html');

function connectDB()
{
$localhost = "localhost";
$dbun = "root";
$dbpw = "Thinkblue76";
$dbname = "capstone_reg_test";

$connect = mysqli_connect($localhost,$dbun,$dbpw,$dbname);
return $connect;
}

function searchTable($query)
{
$search_result = mysqli_query(connectDB(), $query);
return $search_result;
}

include ('./includes/footer.html');
?>