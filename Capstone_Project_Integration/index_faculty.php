<html>
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <script type = "text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js" ></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
        <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        


    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="cola"><div id="scuLogo"><img src="assets/img/Santa_Clara_U_Seal.svg.png"/></div>
                </div>
                <div class="colb">
                    <div class="outer">
                        <div class="inner">Capstone Registration System</div>
                    </div>
                </div>
            </div>
            <br>
            <div class = "row"> 
            
                <table class="itemnav" border= "1px">
                    <!-- Page Directory -->
                    <th><a href="index.php">Student</a></th>
                    <th><a href="index_faculty.php">Faculty</a></th>
                    <th><a href="index_project.php">Project</a></th>
                    <th><a href="index_sponsor.php">Sponsor</a></th>

                </table>

            </div>
<br>

<div id="row">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Filter: </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
            <!--Filter Eligible, Ineligible, Enrolled or Graduated-->
                <form action="index_faculty.php" method="POST">
                    <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                       <select name ="facfilter" id="filter" class="filter">
                            <option value="all"> All Faculty </option>
                            <option value="leading"> Capstone Leaders </option>
                            <option value="notleading"> Non Capstone </option>
                        </select>
                    </li>
                    
                    </ul>
                    
                    <!--Search Box/Button-->
                    <form class="form-inline my-2 my-lg-0" action="index_faculty.php" method="POST">
                        <input class="form-control mr-sm-2" type="text" name="search_value" placeholder="Faculty ID or Last Name" aria-label="Search">  
                    
                        <button class="btn btn-outline-success my-2 my-sm-0" name="search" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                    
                </form> 
            
<!--SET PAGES/SEARCH/FILTER QUERY-->
<?php
error_reporting(E_ERROR | E_PARSE);

include ('ref_fun.php');

#Set row starting row count for pagination
if (!isset( $_GET['startrow']) or !is_numeric($_GET['startrow']))
{
    $startrow = 0;
}
else
{
    $startrow = (int) $_GET['startrow'];
}      

            
#Filter and Search 
if(isset($_POST['search']))
{
    $filter_value = $_POST['facfilter'];
    $search_value = $_POST['search_value'];
    
    if ($search_value != NULL)
    {
        $search = "(f.faculty_id LIKE '%".$search_value."%' OR f.last_name LIKE '%".$search_value."%')";
    }
    else
    {
        $search = "";
    }
    
    
    
    #Filter for faculty leading a project
    if($filter_value == "leading")
    {
        $filter = "(p.faculty_id > 0)";
        #"(select distinct(faculty_id) from project where faculty_id = faculty.faculty_id)";
    }
    #Filter for faculty leading not a project
    elseif($filter_value == "notleading")
    {
        $filter = "(p.name IS NULL)";
    }
    #Filter all records
    elseif ($filter_value == "all")
    {
        $filter = "f.faculty_id != 0";   
    }
    else
    {
        $filter = "";
    }
    
    
    
    
    #Filter and Search Query
    if($filter_value = "all" and $search_value != NULL)
    {
       $where_value = "WHERE ".$search;
    }
    elseif($filter_value = "leading" and $search_value != NULL)
    {
        $where_value = "WHERE ".$filter." AND ".$search;
    }
    elseif($filter_value = "notleading" and $search_value != NULL)
    {
        $where_value = "WHERE ".$filter." AND ".$search;
    }
    else
    {
        $where_value = "WHERE ".$filter;
    }
    #Add project Name ----------------------------------------------------------
    $search_query = "SELECT * FROM faculty f
                    LEFT JOIN project p ON f.faculty_id = p.faculty_id
                    ".$where_value." ORDER BY 1 LIMIT $startrow, 20";
    $search_result = searchTable($search_query);
    
}

else
{
    $query = "SELECT * FROM faculty f LEFT JOIN project p ON f.faculty_id = p.faculty_id WHERE f.faculty_id != 0 ORDER BY 1 LIMIT $startrow,20";
    $search_result = searchTable($query);
} 

    
?>      
            
            

            <!--Upload CSV-->
                <form  method="post" enctype="multipart/form-data">
                  Upload CSV: <input type="file" name="file">
                  <input type="submit" name="submit" value="Import">
                </form>

            <!--Add student record button-->
                <button type='button' class='btn btn-danger' data-toggle='modal' data-target='#exampleModalCenter1'>Add</button>
            
            <!--Export Table button-->
            <button method="post" type="button" class="btn btn-primary" name="export" data-toggle="modal"  data-target="#exportModal">Export</button>
            
            <!--Export to CSV--> 
            <!--Export to CSV Modal--> 
            <div class="modal fade" id="exportModal" tabindex="-1" role="dialog" aria-labelledby="exportModal" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Export to CSV</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
            <?php
                $download_query = "SELECT * FROM faculty ORDER BY 1";
                $download_result = searchTable($download_query);
                
                $allData = "";

                if ($download_result -> num_rows > 0)
                {    
                    while($row = $download_result -> fetch_assoc())
                    {
                        $allData .= $row['faculty_id'].','.$row['first_name'].','.$row['last_name'].','.$row['specialization']."\n";
                    }


                    $response = "data:text/csv;charset=utf-8, faculty_id, first_name, last_name, specialization\n";

                    $response .= $allData;
                    
                    $fileName = "Capstone_Export.csv";
                    
                            echo '<a href="'.$response.'" download = "'.$fileName.'"><button>Download</button> </a>';        
                }    
            ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                    </div>
                </div>
        </div>
    </nav> 
</div>
<br>

<div id="table">
    <table border="1px">
			
    <!--Display data in Table-->         
    <?php
    
    #Get number of rows from query
    $numrows = mysqli_num_rows($search_result);
    
    #Display Query in Table
    if ($numrows > 0) 
    {
        echo "<table border='1px'>";
        echo "<thead>";
        echo "<th>Faculty ID</th>";
        echo "<th>Project Name</th>";
        echo "<th>First Name</th>";
        echo "<th>Last Name</th>";
        echo "<th>Specialization</th>";
        echo "</thead>";

        if ($search_result-> num_rows > 0)
        {
            while ($row = mysqli_fetch_array($search_result, MYSQLI_ASSOC))
            {
                echo "<tr>";
                echo "<td>{$row['faculty_id']}</td>";
                echo "<td>{$row['name']}</td>";
                echo "<td>{$row['first_name']}</td>";
                echo "<td>{$row['last_name']}</td>";
                echo "<td>{$row['specialization']}</td>";
                echo "</tr>";
            }
            echo "</table>";
        }
    }
        
    #Pagination Logic and Buttons
    $prev = $startrow - 20;

    if ($prev >= 0)
    {
    echo '<a href="' . $_SERVER['PHP_SELF'] . '?startrow=' . $prev . '">Previous</a>';
    }

    if ($numrows >= 20)
    {
    echo '<a href="' . $_SERVER['PHP_SELF'] . '?startrow=' . ($startrow + 20) . '">Next</a>';
    }
        
    ?>
			
</div>
			
</div>      

<!-- Script to Filter Table Columns -->      
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript" src="ddtf.js"></script>         

<script>
    $('#table').ddTableFilter();
</script>     

<!--Upload CSV File to Database-->
<?php 
            
if (isset($_POST["submit"]))
{
    if ($_FILES['file']['name']) 
    {
        $filename = explode(".",$_FILES['file']['name']);
        if($filename[1] == 'csv')
        {
            $handle = fopen($_FILES['file']['tmp_name'],"r");
            while ($data = fgetcsv($handle))
            { 
                $item1= mysqli_real_escape_string(connectDB(), $data[0]);
                $item2= mysqli_real_escape_string(connectDB(), $data[1]);
                $item3= mysqli_real_escape_string(connectDB(), $data[2]);
                $item4= mysqli_real_escape_string(connectDB(), $data[3]);

                $sql = "INSERT INTO faculty(faculty_id, first_name, last_name, specialization) Values ('$item1', '$item2', '$item3','$item4') 
                ON DUPLICATE KEY UPDATE first_name_id = '$item2', last_name = '$item3', specialization = '$item4'"; 

                searchTable($sql);     
                
            }
        fclose($handle);
        }
    }
}
?>                
         
            
        
<!-- modal for adding new student -->
<div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Add a new Faculty Member</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form  method="post" action="FacultyAdd.php">
                    <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="facid">Faculty ID</label>
                      <input type="text" class="form-control" id="facid" name="facid" placeholder="Faculty ID">
                      </div>

                      <div class="form-group col-md-6">
                      <label for="fname">First Name</label>
                      <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name">
                    </div>

                      <div class="form-group col-md-6">
                      <label for="lname">Last Name</label>
                      <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name">
                      </div>

                    <div class="form-group col-md-6">
                      <label for="spec">Specialization</label>
                      <input type="text" class="form-control" name="spec" id="spec" placeholder="Specialization">
                    </div>
                    </div>
                <button id="submit" type="submit" class="btn btn-primary" >Add</button>
        </form>

          </div>
          <div class="modal-footer">
            
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

          </div>
        </div>
      </div>
</div>         
      </div>
      </div>
    </div>
  </div>
</div>

    
</body>

</html>