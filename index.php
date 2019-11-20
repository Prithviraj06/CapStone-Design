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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

        


    </head>
    
    <body>

        <div class="container">
            <div class="row">
                <div class="cola">
                    <div id="scuLogo">
                        
                        <img src="assets/img/Santa_Clara_U_Seal.svg.png"/>
                    </div>
                
                </div>
                
                <div class="colb">
                
                <div class="outer">
                
                    <div class="inner">Capstone Registration System</div>
                </div>
                </div>
            </div><br>
            
                <nav class="navbar navbar-default">
                      <ul class="navbar-nav">
                        <li class="nav-item">
                          <a class="nav-link" href="#">Link 1</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Link 2</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Link 3</a>
                        </li>
                      </ul>
                </nav>
    <br>
            
            <div class = "row"> 

                        <nav class="nmb-1 navbar navbar-expand-lg navbar-dark default-color">
                          <div class="container-fluid">
                                <div class="navbar-header">
                                  <!--<a class="navbar-brand" href="#">Capstone Registration and Tracking System</a> -->
                                </div>
                                <ul class="nav navbar-nav">
                                  <li class="active"><a href="#">Student</a></li>
                                  <li><a href="#">Faculty</a></li>
                                  <li><a href="#">Project</a></li>
                                  <li><a href="#">Sponsor</a></li>
                            </ul>
                          </div>
                        </nav>
                <br><br>
                
        <div class="trialnav">
                
            <nav class="navbar navbar-default">
              <div class="container-fluid">
                <div class="navbar-header">
                  <a class="navbar-brand" href="#">WebSiteName</a>
                </div>
                <ul class="nav navbar-nav">
                  <li class="active"><a href="#">Home</a></li>
                  <li><a href="#">Page 1</a></li>
                  <li><a href="#">Page 2</a></li>
                  <li><a href="#">Page 3</a></li>
                </ul>
              </div>
            </nav>
        </div>
                

                        <table class="itemnav" border= "1px">

                            <th><a href="#">Student</a></th>
                            <th><a href="#">Faculty</a></th>
                            <th><a href="#">Project</a></th>
                            <th><a href="#">Sponsor</a></th>
                
                        </table>
            
            </div>
                
            
            <br>
            
            <div id="row">
                
             
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                      <!-- <a class="navbar-brand" href="#">Filter</a> -->
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>

                      <div class="collapse navbar-collapse" id="navbarSupportedContent">



                          <form action="index.php" method="POST">
                            <ul class="navbar-nav mr-auto">
                            <li class="nav-item dropdown">
                               <select name ="studfilter" id="filter" onchange="getselectedvalue()" class="filter">
                                                <option value="All"> All Students </option>
                                                <option value="enrolled"> Enrolled in Capstone </option>
                                                  <option value="eligible">Eligible for Capstone Project </option>
                                                  <option value="notEligible">Not Eligible for Capstone Project</option>
                                                </select>

                            </li>
                            <input type="submit" name="filter" value="Filter records">
                            </ul>

                        </form> 

                        <form class="form-inline my-2 my-lg-0">
                          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                          <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>

                          </form>


                            <form  method="post" enctype="multipart/form-data">
                          Upload CSV: <input type="file" name="file"> <input type="submit" name="submit" value="import">

                        </form>

                          <button type='button' class='btn btn-danger' data-toggle='modal' data-target='#exampleModalCenter1'>Add</button>
                      </div>
                    </nav>

                            <script>
                                function getselectedvalue()
                                {   
                                    var selectedvalue = document.getElementById("filter").value;
                                    console.log(selectedvalue);
                                }
                            </script>
                
            </div>
            
<!--Fetching student data for Update Modal---!-->
                 <br>
        <div id="table">
            
        <table id="mytable" border="1px">

            <thead>

                <th>Student ID</th>
                <th>Project ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Permanent Email</th>
                <th>Current Term</th>
                <th>Grad Term</th>
                <th>Admit Term</th>
                <th>Term GPA</th>
                <th>Cumulative GPA</th>
                <th>Term Units</th>
                <th>Completed Units</th>
                <th>Status</th>
                <th>Comments</th>
                <th>Edit</th>

            </thead>
            
                    <?php 
               
            $con = mysqli_connect("localhost","root","Prna.123!","testdb");
                      $query = "SELECT Distinct student_id, project_id ,first_name, last_name, email, perm_email, current_term, grad_term, admit_term, term_gpa, cum_gpa, in_progress_units, cum_units, status,comments FROM student";
          $result = mysqli_query($con,$query);
            
            if (mysqli_num_rows($result) > 0)
                {
			     while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                echo "<tr>";
                   echo "<td>{$row['student_id'] }</td>";
                     echo "<td>{$row['project_id'] }</td>";
					echo "<td>{$row['first_name']}</td>";
					echo "<td>{$row['last_name']}</td>";
					echo "<td>{$row['email']}</td>";
					echo "<td>{$row['perm_email']}</td>";
					echo "<td>{$row['current_term']}</td>";
					echo "<td>{$row['grad_term']}</td>";
					echo "<td>{$row['admit_term']}</td>";
					echo "<td>{$row['term_gpa']}</td>";
					echo "<td>{$row['cum_gpa']}</td>";
					echo "<td>{$row['in_progress_units']}</td>";
					echo "<td>{$row['cum_units']}</td>";
					echo "<td>{$row['status']}</td>";
                    echo "<td>{$row['Comments']}</td>";
                    echo"<td><button type='button' class='btn btn-success editbutton' data-toggle='modal' data-target='#editmodal'>Edit</button></td>";
				    echo "</tr>";
                    
				    } 
            
                echo "</table>";
               }
                       
                    ?>

      
            </table>
      
        </div>
           
    
                if(isset($_POST['filter'])){
                    $filter_value = $_POST['studfilter'];
                    if($filter_value == "eligible")
                    {
                        $con = mysqli_connect("localhost","root","Prna.123!","capstone_reg");
                        if(mysqli_connect_errno())
    {
          echo "Failed to connect to MySQL: ".mysqli_connect_errno();
    }
                        $filter_value = "cum_units >= 27 AND project_id = 0 ";
                        $filter = "SELECT * FROM student WHERE ".$filter_value;
                        $result = mysqli_query($con,$filter);
                        if (mysqli_num_rows($result) > 0)
                                    {
                                 while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                                echo "<tr>";
                                   echo "<td>{$row['student_id'] }</td>";
                                     echo "<td>{$row['project_id'] }</td>";
                                    echo "<td>{$row['first_name']}</td>";
                                    echo "<td>{$row['last_name']}</td>";
                                    echo "<td>{$row['email']}</td>";
                                    echo "<td>{$row['perm_email']}</td>";
                                    echo "<td>{$row['current_term']}</td>";
                                    echo "<td>{$row['grad_term']}</td>";
                                    echo "<td>{$row['admit_term']}</td>";
                                    echo "<td>{$row['term_gpa']}</td>";
                                    echo "<td>{$row['cum_gpa']}</td>";
                                    echo "<td>{$row['in_progress_units']}</td>";
                                    echo "<td>{$row['cum_units']}</td>";
                                    echo "<td>{$row['status']}</td>";
                                    echo "<td>{$row['comments']}</td>";
                                    echo"<td><button type='button' class='btn btn-success editbutton' data-toggle='modal' data-target='#editmodal'>Edit</button</td>";
                                     echo "</tr>";
                                    }
                       echo "</table>";
                        }
                    }
                    elseif($filter_value == "notEligible")
                    {
                        $con = mysqli_connect("localhost","root","Prna.123!","capstone_reg");
                        if(mysqli_connect_errno())
    {
          echo "Failed to connect to MySQL: ".mysqli_connect_errno();
    }
                        $filter_value = "cum_units < 27";
                        $filter = "SELECT * FROM student WHERE ".$filter_value;
                        $result = mysqli_query($con,$filter); 
                        if (mysqli_num_rows($result) > 0)
                                {
                                 while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                                echo "<tr>";
                                   echo "<td>{$row['student_id'] }</td>";
                                     echo "<td>{$row['project_id'] }</td>";
                                    echo "<td>{$row['first_name']}</td>";
                                    echo "<td>{$row['last_name']}</td>";
                                    echo "<td>{$row['email']}</td>";
                                    echo "<td>{$row['perm_email']}</td>";
                                    echo "<td>{$row['current_term']}</td>";
                                    echo "<td>{$row['grad_term']}</td>";
                                    echo "<td>{$row['admit_term']}</td>";
                                    echo "<td>{$row['term_gpa']}</td>";
                                    echo "<td>{$row['cum_gpa']}</td>";
                                    echo "<td>{$row['in_progress_units']}</td>";
                                    echo "<td>{$row['cum_units']}</td>";
                                    echo "<td>{$row['status']}</td>";
                                    echo"<td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModalCenter'>Edit</button></td>";
                                     echo "</tr>";
                                    }
                            echo "</table>";
                        }
                    }
                    elseif($filter_value == "enrolled")
                    {
                        $con = mysqli_connect("localhost","root","Prna.123!","capstone_reg");
                        if(mysqli_connect_errno())
    {
          echo "Failed to connect to MySQL: ".mysqli_connect_errno();
    }
                        $filter_value = "cum_units >= 27 AND project_id > 0";
                        $filter = "SELECT * FROM student WHERE ".$filter_value;
                        $result = mysqli_query($con,$filter);
                        if (mysqli_num_rows($result) > 0)
                                {
                                 while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                                echo "<tr>";
                                   echo "<td>{$row['student_id'] }</td>";
                                     echo "<td>{$row['project_id'] }</td>";
                                    echo "<td>{$row['first_name']}</td>";
                                    echo "<td>{$row['last_name']}</td>";
                                    echo "<td>{$row['email']}</td>";
                                    echo "<td>{$row['perm_email']}</td>";
                                    echo "<td>{$row['current_term']}</td>";
                                    echo "<td>{$row['grad_term']}</td>";
                                    echo "<td>{$row['admit_term']}</td>";
                                    echo "<td>{$row['term_gpa']}</td>";
                                    echo "<td>{$row['cum_gpa']}</td>";
                                    echo "<td>{$row['in_progress_units']}</td>";
                                    echo "<td>{$row['cum_units']}</td>";
                                    echo "<td>{$row['status']}</td>";
                                    echo"<td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModalCenter'>Edit</button></td>";
                                     echo "</tr>";
                                    }
                            echo "</table>";
                        }
                    }
                    elseif ($filter_value == "All")
                    {
                        $con = mysqli_connect("localhost","root","Prna.123!","capstone_reg");
                        if(mysqli_connect_errno())
    {
          echo "Failed to connect to MySQL: ".mysqli_connect_errno();
    }
                        $filter_value = "1";
                        $filter = "SELECT * FROM student WHERE ".$filter_value;
                        $result = mysqli_query($con,$filter);
                        if (mysqli_num_rows($result) > 0)
                                {
                                 while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                                echo "<tr>";
                                   echo "<td>{$row['student_id'] }</td>";
                                     echo "<td>{$row['project_id'] }</td>";
                                    echo "<td>{$row['first_name']}</td>";
                                    echo "<td>{$row['last_name']}</td>";
                                    echo "<td>{$row['email']}</td>";
                                    echo "<td>{$row['perm_email']}</td>";
                                    echo "<td>{$row['current_term']}</td>";
                                    echo "<td>{$row['grad_term']}</td>";
                                    echo "<td>{$row['admit_term']}</td>";
                                    echo "<td>{$row['term_gpa']}</td>";
                                    echo "<td>{$row['cum_gpa']}</td>";
                                    echo "<td>{$row['in_progress_units']}</td>";
                                    echo "<td>{$row['cum_units']}</td>";
                                    echo "<td>{$row['status']}</td>";
                                    echo"<td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModalCenter'>Edit</button></td>";
                                     echo "</tr>";
                                    }
                          echo "</table>";  
                        }
                    }
                }
    
            
        ?>

      
            </table>
      
        </div>
           
            </div>
        <script type="text/javascript" src="jquery.min.js"></script>
        <script type="text/javascript" src="ddtf.js"></script>         
                
       <script>
           
           $('#mytable').ddTableFilter();
       </script>     
              <?php
                
                $con = mysqli_connect("localhost","root","Prna.123!","capstone_reg");
        if(mysqli_connect_errno())
    {
          echo "Failed to connect to MySQL: ".mysqli_connect_errno();
    }
if (isset($_POST["submit"]))
 {
  if ($_FILES['file']['name']) {
    $filename = explode(".",$_FILES['file']['name']);
    if($filename[1] == 'csv')
    {
      $handle = fopen($_FILES['file']['tmp_name'],"r");
      while ($data = fgetcsv($handle))
      { 
        // code...
        $item1= mysqli_real_escape_string($con, $data[0]);
        $item2= mysqli_real_escape_string($con, $data[1]);
        $item3= mysqli_real_escape_string($con, $data[2]);
        $item4= mysqli_real_escape_string($con, $data[3]);
        $item5= mysqli_real_escape_string($con, $data[4]);
        $item6= mysqli_real_escape_string($con, $data[5]);
        $item7= mysqli_real_escape_string($con, $data[6]);
        $item8= mysqli_real_escape_string($con, $data[7]);
        $item9= mysqli_real_escape_string($con, $data[8]);
        $item10= mysqli_real_escape_string($con, $data[9]);
        $item11= mysqli_real_escape_string($con, $data[10]);
        $item12= mysqli_real_escape_string($con, $data[11]);
        $item13= mysqli_real_escape_string($con, $data[12]);
        $item14= mysqli_real_escape_string($con, $data[13]);
          
        /* $result = mysqli_query($con, "SELECT * FROM student WHERE student_id = '$item1' ");
          
          if(mysqli_num_rows($result) > 0){
              
              $sql ="UPDATE student SET project_id = '$item2', first_name = '$item3', last_name = '$item4', email = '$item5', perm_email = '$item6', current_term = '$item7', grad_term = '$item8' , admit_term = '$item9', term_gpa = '$item10', cum_gpa = '$item11', in_progress_units = '$item12', cum_units = '$item13', status = '$item14' WHERE student_id = '$item1' ";
              
              mysqli_query($con,$sql);
          }
          else
          {
              $sql = " Insert into student(student_id, project_id, first_name, last_name, email, perm_email, current_term, grad_term, admit_term, term_gpa, cum_gpa, in_progress_units, cum_units, status) Values ('$item1', '$item2', '$item3','$item4','$item5','$item6','$item7','$item8','$item9','$item10','$item11','$item12','$item13','$item14')";
              
              mysqli_query($con,$sql);
              
          } */
          
          $sql = " Insert into student(student_id, project_id, first_name, last_name, email, perm_email, current_term, grad_term, admit_term, term_gpa, cum_gpa, in_progress_units, cum_units, status) Values ('$item1', '$item2', '$item3','$item4','$item5','$item6','$item7','$item8','$item9','$item10','$item11','$item12','$item13','$item14') ON DUPLICATE KEY UPDATE project_id = '$item2', first_name = '$item3', last_name = '$item4', email = '$item5', perm_email = '$item6', current_term = '$item7', grad_term = '$item8' , admit_term = '$item9', term_gpa = '$item10', cum_gpa = '$item11', in_progress_units = '$item12', cum_units = '$item13', status = '$item14'" ; 
       
       
       
       /*   "; */
          
          
          
         mysqli_query($con,$sql);
          
        
          }
            fclose($handle);
            }
            }
            }
?>
        
      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Add Student</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form  method="post" action="StudentSubmit.php">
                        <div class="form-row">
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
                          <label for="inputAdditional">Additional Comments</label>
                          <input type="text" class="form-control" name="inputAdditional" id="inputAdditional" placeholder="Additional Comments">
                        </div>

                        <button id="submit" type="submit" class="btn btn-primary" >Save</button>
                        </div>
            </form>



              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

              </div>
            </div>
          </div>
        </div>
 
<!-- Update Student Modal !-->
        
<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editmodal">Update Student Data</h5>
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

                <button id="ediddata" type="submit" name='ediddata' class="btn btn-primary" >Update</button>
                </div>
    </form>
          
          
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>

<!-- Update student data part--populate data in modal once click on edit button--!>
<!-- jQuery library -->

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