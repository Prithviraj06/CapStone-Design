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
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
                <form action="index.php" method="POST">
                    <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                       <select name ="studfilter" id="filter" class="filter">
                            <option value="All"> All Students </option>
                            <option value="enrolled"> Enrolled </option>
                            <option value="eligible"> Eligible </option>
                            <option value="notEligible"> Not Eligible </option>
                            <option value="graduated"> Graduated </option>
                        </select>
                    </li>
                    
                    </ul>

                    <!--Search Box/Button-->
                    <form class="form-inline my-2 my-lg-0" action="index.php" method="POST">
                        <input class="form-control mr-sm-2" type="text" name="search_value" placeholder="Student ID or Last Name" aria-label="Search">  
                    
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
    $filter_value = $_POST['studfilter'];
    $search_value = $_POST['search_value'];
    
    if ($search_value != NULL)
    {
        $search = "(student_id LIKE '%".$search_value."%' OR last_name LIKE '%".$search_value."%')";
    }
    else
    {
        $search = "";
    }
    
    
    
    #Filter for eligible students
    if($filter_value == "eligible")
    {
        $filter = "(cum_units BETWEEN 27 and 50 AND s.project_id = 0)";
    }
    #Filter for not eligible students
    elseif($filter_value == "notEligible")
    {
        $filter = "(cum_units < 27)";
    }
    
    #Filter for enrolled students
    elseif($filter_value == "enrolled")
    {
        $filter = "(cum_units >= 27 AND s.project_id > 0)";
    }
    #Filter for graduated students
    elseif($filter_value == "graduated")
    {
        $filter = "(s.status = 'Inactive')";
    }
    #Filter all records
    elseif ($filter_value == "All")
    {
        $filter = "1";   
    }
    else
    {
        $filter = "";
    }

    
    #Filter and Search Query
    if($filter_value = "All" and $search_value != NULL)
    {
       $where_value = "WHERE ".$search;
    }
    elseif($filter_value = "eligible" and $search_value != NULL)
    {
        $where_value = "WHERE ".$filter." AND ".$search;
    }
    elseif($filter_value = "notEligible" and $search_value != NULL)
    {
        $where_value = "WHERE ".$filter." AND ".$search;
    }
    elseif($filter_value = "enrolled" and $search_value != NULL)
    {
        $where_value = "WHERE ".$filter." AND ".$search;
    }
    elseif($filter_value = "graduated" and $search_value != NULL)
    {
        $where_value = "WHERE ".$filter." AND ".$search;
    }
    else
    {
        $where_value = "WHERE ".$filter;
    }
    
    $search_query = "SELECT * FROM student s LEFT JOIN project p ON s.project_id = p.project_id ".$where_value." ORDER BY 1 LIMIT $startrow, 50";
    $search_result = searchTable($search_query);
    
}

else
{
    $search_query = "SELECT * FROM student s LEFT JOIN project p ON s.project_id = p.project_id ORDER BY 1 LIMIT $startrow,50";
    $search_result = searchTable($search_query);
}
?>      
            
            

            <!--Upload CSV-->
                <form  method="post" enctype="multipart/form-data">
                  Upload CSV: <input type="file" name="file">
                  <input type="submit" name="submit" value="Import">
                </form>

            <!--Add student record button-->
                <button type='button' class='btn btn-danger' data-toggle='modal' data-target='#addModal'>Add</button>
            
            <!--Export Table button-->
                <button method="post" type="button" class="btn btn-primary" name="export" data-toggle="modal"  data-target="#exportModal">Export</button>
           
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
                $download_query = "SELECT * FROM student ORDER BY 1";
                $download_result = searchTable($download_query);
                
                $allData = "";

                if ($download_result -> num_rows > 0)
                {    
                    while($row = $download_result -> fetch_assoc())
                    {
                        $allData .= $row['student_id'].','.$row['project_id'].','.$row['first_name'].','.$row['last_name'].','.$row['email'].','.$row['perm_email'].','.$row['current_term'].','.$row['grad_term'].','.$row['admit_term'].','.$row['term_gpa'].','.$row['cum_gpa'].','.$row['in_progress_units'].','.$row['cum_units'].','.$row['status']."\n";
                    }


                    $response = "data:text/csv;charset=utf-8,student_id, project_id, first_name, last_name, email, perm_email, current_term, grad_term, admit_term, term_gpa, cum_gpa, in_progress_units, cum_units, status\n";

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
        echo "<th>Student ID</th>";
        echo "<th>Project Name</th>";
        echo "<th>First Name</th>";
        echo "<th>Last Name</th>";
        echo "<th>Email</th>";
        echo "<th>Permanent Email</th>";
        echo "<th>Current Term</th>";
        echo "<th>Grad Term</th>";
        echo "<th>Admit Term</th>";
        echo "<th>Cumulative GPA</th>";
        echo "<th>Completed Units</th>";
        echo "<th>Status</th>";
        echo "<th>Comments</th>";
        echo "<th>Edit</th>";
        echo "</thead>";

        if ($search_result-> num_rows > 0)
        {
            while ($row = mysqli_fetch_array($search_result))
            {
                echo "<tr>";
                echo "<td>{$row['student_id']}</td>";
                echo "<td>{$row['name']}</td>";
                echo "<td>{$row['first_name']}</td>";
                echo "<td>{$row['last_name']}</td>";
                echo "<td>{$row['email']}</td>";
                echo "<td>{$row['perm_email']}</td>";
                echo "<td>".transformTerm($row['current_term'])."</td>";
                echo "<td>".transformTerm($row['grad_term'])."</td>";
                echo "<td>".transformTerm($row['admit_term'])."</td>";
                echo "<td>{$row['cum_gpa']}</td>";
                echo "<td>{$row['cum_units']}</td>";
                echo "<td>{$row['status']}</td>";
                echo "<td>{$row['comments']}</td>";
                echo"<td><button type='button' class='btn btn-success editbutton' data-toggle='modal' data-target='#editmodal'>Edit</button></td>";
                echo "</tr>";
            }
            echo "</table>";
        }
    }
        
    #Pagination Logic and Buttons
    $prev = $startrow - 50;

    if ($prev >= 0)
    {
    echo '<a href="' . $_SERVER['PHP_SELF'] . '?startrow=' . $prev . '">Previous</a>';
    }

    if ($numrows >= 50)
    {
    echo '<a href="' . $_SERVER['PHP_SELF'] . '?startrow=' . ($startrow + 50) . '">Next</a>';
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
                $item5= mysqli_real_escape_string(connectDB(), $data[4]);
                $item6= mysqli_real_escape_string(connectDB(), $data[5]);
                $item7= mysqli_real_escape_string(connectDB(), $data[6]);
                $item8= mysqli_real_escape_string(connectDB(), $data[7]);
                $item9= mysqli_real_escape_string(connectDB(), $data[8]);
                $item10= mysqli_real_escape_string(connectDB(), $data[9]);
                $item11= mysqli_real_escape_string(connectDB(), $data[10]);
                $item12= mysqli_real_escape_string(connectDB(), $data[11]);
                $item13= mysqli_real_escape_string(connectDB(), $data[12]);
                $item14= mysqli_real_escape_string(connectDB(), $data[13]);

                $sql = "INSERT INTO student(student_id, project_id, first_name, last_name, email, perm_email, current_term, grad_term, admit_term, term_gpa, cum_gpa, in_progress_units, cum_units, status) Values ('$item1', '$item2', '$item3','$item4','$item5','$item6','$item7','$item8','$item9','$item10','$item11','$item12','$item13','$item14') 
                ON DUPLICATE KEY UPDATE project_id = '$item2', first_name = '$item3', last_name = '$item4', email = '$item5', perm_email = '$item6', current_term = '$item7', grad_term = '$item8' , admit_term = '$item9', term_gpa = '$item10', cum_gpa = '$item11', in_progress_units = '$item12', cum_units = '$item13', status = '$item14'"; 

                searchTable($sql);     
                
            }
        fclose($handle);
        }
    }
}
?>                
         

<!--Edit student modal !-->
<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editmodal">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form  method="post" action="update_student.php">
            
                <div class="form-row">
               <div class="form-group col-md-6">
                  <label for="stdid">Student ID</label>
                  <input type="text" class="form-control" id="stdid" name="stdid" placeholder="Student ID">
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
                  <label for="inputEmail">Email</label>
                  <input type="email" class="form-control" name="inputEmail" id="inputEmail" placeholder="Email">
                </div>
                    
                <div class="form-group col-md-6">
                  <label for="inputPermemail">Perm Email</label>
                  <input type="text" class="form-control" name="inputPermemail" id="inputPermemail" placeholder="Permanent Email">
                </div>
                    
                <div class="form-group col-md-6">
                  <label for="inputGradterm">Current Term</label>
                  <input type="text" class="form-control" name="current" id="current" placeholder="Current Term">
                </div>
                    
                <div class="form-group col-md-6">
                  <label for="inputGradterm">Grad Term</label>
                  <input type="text" class="form-control" name="inputGradterm" id="inputGradterm" placeholder="Grad Term">
                </div>
                    
                <div class="form-group col-md-6">
                  <label for="inputadmitterm">Admit Term</label>
                  <input type="text" class="form-control" name="inputadmitterm" id="inputadmitterm" placeholder="Admit Term">
                </div>
                    
                <div class="form-group col-md-6">
                  <label for="inputtermGPA">Term GPA</label>
                  <input type="text" class="form-control" name="inputtermGPA" id="inputtermGPA" placeholder="Term GPA">
                </div>
                
                <div class="form-group col-md-6">
                  <label for="inputcumGPA">Cumulative GPA</label>
                  <input type="text" class="form-control" name="inputcumGPA" id="inputcumGPA" placeholder="Cumulative GPA">
                </div>
                    
                <div class="form-group col-md-6">
                  <label for="inputprogressunits">Units in Progress</label>
                  <input type="text" class="form-control" name="inputprogressunits" id="inputprogressunits" placeholder="Units in Progress">
                </div>
                
                <div class="form-group col-md-6">
                  <label for="inputcumunits">Cumulative Units</label>
                  <input type="text" class="form-control" name="inputcumunits" id="inputcumunits" placeholder="Cumulative Units">
                </div>
                    
                <div class="form-group col-md-6">
                  <label for="status">Status</label>
                  <input type="text" class="form-control" name="status" id="status" placeholder="Status">
                </div>
                    
                <div class="form-group col-md-6">
                  <label for="inputAdditional">Additional Comments</label>
                  <input type="text" class="form-control" name="inputAdditional" id="inputAdditional" placeholder="Additional Comments">
                </div>

                <button id="ediddata" type="submit" name="ediddata" class="btn btn-primary" >Update</button>
                </div>
    </form>
          
          
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>
        
<!-- modal for adding new student -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Add a new Student</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form  method="post" action="StudentAdd.php">
                    <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="stdid">Student ID</label>
                      <input type="text" class="form-control" id="stdid" name="stdid" placeholder="Student ID">
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
                      <label for="inputEmail">Email</label>
                      <input type="email" class="form-control" name="inputEmail" id="inputEmail" placeholder="Email">
                    </div>

                    <div class="form-group col-md-6">
                      <label for="inputPermemail">Perm Email</label>
                      <input type="text" class="form-control" name="inputPermemail" id="inputPermemail" placeholder="Permanent Email">
                    </div>

                    <div class="form-group col-md-6">
                      <label for="inputGradterm">Current Term</label>
                      <input type="text" class="form-control" name="current" id="current" placeholder="Current Term">
                    </div>

                    <div class="form-group col-md-6">
                      <label for="inputGradterm">Grad Term</label>
                      <input type="text" class="form-control" name="inputGradterm" id="inputGradterm" placeholder="Grad Term">
                    </div>

                    <div class="form-group col-md-6">
                      <label for="inputadmitterm">Admit Term</label>
                      <input type="text" class="form-control" name="inputadmitterm" id="inputadmitterm" placeholder="Admit Term">
                    </div>

                    <div class="form-group col-md-6">
                      <label for="inputtermGPA">Term GPA</label>
                      <input type="text" class="form-control" name="inputtermGPA" id="inputtermGPA" placeholder="Term GPA">
                    </div>

                    <div class="form-group col-md-6">
                      <label for="inputcumGPA">Cumulative GPA</label>
                      <input type="text" class="form-control" name="inputcumGPA" id="inputcumGPA" placeholder="Cumulative GPA">
                    </div>

                    <div class="form-group col-md-6">
                      <label for="inputprogressunits">Units in Progress</label>
                      <input type="text" class="form-control" name="inputprogressunits" id="inputprogressunits" placeholder="Units in Progress">
                    </div>

                    <div class="form-group col-md-6">
                      <label for="inputcumunits">Cumulative Units</label>
                      <input type="text" class="form-control" name="inputcumunits" id="inputcumunits" placeholder="Cumulative Units">
                    </div>

                    <div class="form-group col-md-6">
                      <label for="status">Status</label>
                      <input type="text" class="form-control" name="status" id="status" placeholder="Status">
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script>
    $(document).ready(function(){
        $('.editbutton').on('click',function(){
            
            $('#editmodal').modal('show');
            $tr=$(this).closest('tr');
            
            var data=$tr.children("td").map(function() {
                return $(this).text();
            }).get();
            console.log(data);
            $('#stdid').val(data[0]);
            $('#fname').val(data[1]);
            $('#lname').val(data[2]);
            $('#inputEmail').val(data[3]);
            $('#inputPermemail').val(data[4]);
            $('#current').val(data[5]);
            $('#inputGradterm').val(data[6]);
            $('#inputadmitterm').val(data[7]);
            $('#inputtermGPA').val(data[8]);
            $('#inputcumGPA').val(data[9]);
            $('#inputprogressunits').val(data[10]);
            $('#inputcumunits').val(data[11]);
            $('#status').val(data[12]);
            $('#inputAdditional').val(data[13]);
           
            
            
            
        });
    });
</script> 
    
</body>

</html>