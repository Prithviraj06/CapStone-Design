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
                <div class="cola"><div id="scuLogo"><img src="assets/img/Santa_Clara_U_Seal.svg.png"/></div></div>
            <div class="colb">
                
                <div class="outer">
                
                    <div class="inner">Capstone Registration System</div>
                </div>
                </div>
            </div><br>
            
            <div class = "row"> 
            
            <table class="itemnav" border= "1px">
                
                <th><a href="index.php">Student</a></th>
                <th><a href="index_faculty.php">Faculty</a></th>
                <th><a href="index_project.php">Project</a></th>
                <th><a href="index_sponsor.php">Sponsor</a></th>
                
                
                
                
            </table>
            
            </div>
                
            
            <br>
            
            <div id="row">
                
             
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Filter</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
       <li class="nav-item dropdown">
           <select>
                              <option value="Academic Year">Academic Year</option>
                              <option value="First Name">First Name</option>
                              <option value="Last Name">Last Name</option>
                              <option value="Email">Email</option>
                            </select>

        </li>
      <li class="nav-item dropdown">
        <select>
                              <option value="Term">Term</option>
                              <option value="Current Term">Current Term</option>
                              <option value="Grad Term">Grad Term</option>
                              <option value="Admit term">Admit term</option>
                                <option value="Term GPA">Term GPA</option>
                            </select>
        
      </li>
         <li class="nav-item dropdown">
             <select>
                              <option value="Term Units">Term Units</option>
                              <option value="Completed Units">Completed Units</option>
                              </select>

        </li>
         <li class="nav-item dropdown">
              <select>
                              <option value="Active">Active</option>
                              <option value="Inactive">Inactive</option>
                              </select>
        </li>
     
    </ul>
     
     <form  method="post" enctype="multipart/form-data">
      <input type="file" name="Upload">
      <input type="submit" name="submit">
    </form>
      
<?php
error_reporting(E_ERROR | E_PARSE);

include ('ref_fun.php');

if ( !isset( $_GET['startrow'] ) or !is_numeric( $_GET['startrow'] ) ){
    $startrow = 0;
}
else{
    $startrow = (int) $_GET['startrow'];
}      

if(isset($_POST['search'])){
    
    $search_value = $_POST['search_value'];
            
    $search_query = "SELECT * FROM student WHERE student_id LIKE '%".$search_value."%' ORDER BY 1 LIMIT $startrow, 50";
    $search_result = searchTable($search_query);
            
    }
    else{
        $query = "SELECT * FROM student ORDER BY 1 LIMIT $startrow,50";
        $search_result = searchTable($query);
    }
  
      
      
?>
        
          
    <form class="form-inline my-2 my-lg-0" action="index.php" method="post">
      <input class="form-control mr-sm-2" type="text" name="search_value" placeholder="Search Student ID" aria-label="Search">  
      <button class="btn btn-outline-success my-2 my-sm-0" name="search" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
    </form>
  </div>
</nav>
                    
            </div>
                 <br>

        <div id="table">
			<table border="1px">
			
                
            <?php
            
			$numrows = mysqli_num_rows($search_result);
            
            if ($numrows > 0) {
                
            echo "<table border='1px'>";
            echo "<thead>";
               echo "<th>Student ID</th>";
               echo "<th>First Name</th>";
               echo "<th>Last Name</th>";
               echo "<th>Email</th>";
               echo "<th>Permanent Email</th>";
               echo "<th>Current Term</th>";
               echo "<th>Grad Term</th>";
               echo "<th>Admit Term</th>";
               echo "<th>Term GPA</th>";
               echo "<th>Cumulative GPA</th>";
               echo "<th>Term Units</th>";
               echo "<th>Completed Units</th>";
               echo "<th>Status</th>";
            echo "</thead>";
            
            if ($search_result-> num_rows > 0){
			while ($row = mysqli_fetch_array($search_result, MYSQLI_ASSOC)){
                echo "<tr>";
                echo "<td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModalCenter'>{$row['student_id']}</button>";
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
				echo "</tr>";
                
				}
                echo "</table>";
            }
            }
                
            $prev = $startrow - 50;
            
            if ($prev >= 50) {
            echo '<a href="' . $_SERVER['PHP_SELF'] . '?startrow=' . $prev . '">Previous</a>';
            }
            
            if ($numrows >= 50){
            echo '<a href="' . $_SERVER['PHP_SELF'] . '?startrow=' . ($startrow + 50) . '">Next</a>';
            }
			?>
			

        </div>
           
            </div>
        
      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Update Student</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form  method="post">
                <div class="form-row">
                  <div class="form-group col-md-6">
                  <label for="fname">First Name</label>
                  <input type="text" class="form-control" id="fname" placeholder="First Name">
                </div>
                    
                  <div class="form-group col-md-6">
                  <label for="lname">Last Name</label>
                  <input type="text" class="form-control" id="lname" placeholder="Last Name">
                  </div>
                    
                <div class="form-group col-md-6">
                  <label for="inputEmail">Email</label>
                  <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                </div>
                    
                <div class="form-group col-md-6">
                  <label for="inputPermemail">Perm Email</label>
                  <input type="text" class="form-control" id="inputPermemail" placeholder="Permanent Email">
                </div>
                    
                <div class="form-group col-md-6">
                  <label for="inputGradterm">Grad Term</label>
                  <input type="text" class="form-control" id="inputGradterm" placeholder="Grad Term">
                </div>
                    
                <div class="form-group col-md-6">
                  <label for="inputadmitterm">Admit Term</label>
                  <input type="text" class="form-control" id="inputadmitterm" placeholder="Admit Term">
                </div>
                    
                <div class="form-group col-md-6">
                  <label for="inputtermGPA">Term GPA</label>
                  <input type="text" class="form-control" id="inputtermGPA" placeholder="Term GPA">
                </div>
                
                <div class="form-group col-md-6">
                  <label for="inputcumGPA">Cumulative GPA</label>
                  <input type="text" class="form-control" id="inputcumGPA" placeholder="Cumulative GPA">
                </div>
                    
                <div class="form-group col-md-6">
                  <label for="inputprogressunits">Units in Progress</label>
                  <input type="text" class="form-control" id="inputprogressunits" placeholder="Units in Progress">
                </div>
                
                <div class="form-group col-md-6">
                  <label for="inputcumunits">Cumulative Units</label>
                  <input type="text" class="form-control" id="inputcumunits" placeholder="Cumulative Units">
                </div>
                    
                <div class="form-group col-md-6">
                  <label for="inputAdditional">Additional Comments</label>
                  <input type="text" class="form-control" id="inputAdditional" placeholder="Additional Comments">
                </div>

                <button id="submit" type="submit" onclick="Formsubmit()" class="btn btn-primary" >Save</button>
                </div>
    </form>
          
          <script>
              
          function Formsubmit(){ 
                var FName = document.getElementById("fname").value;
                var Lname = document.getElementById("lname").value;
                var Email = document.getElementById("inputEmail").value;
                var Permemail = document.getElementById("inputPermemail").value;
                var Gradterm = document.getElementById("inputGradterm").value;
                var Admitterm = document.getElementById("inputadmitterm").value;
                var TermGPA = document.getElementById("inputtermGPA").value;
                var cumGPA = document.getElementById("inputcumGPA").value;
                var progressunits = document.getElementById("inputprogressunits").value;
                var cumunits = document.getElementById("inputcumunits").value;
                var Additional = document.getElementById("inputAdditional").value;
    
            // Returns successful data submission message when the entered information is stored in database.
            var dataString = 'fname1=' + fname + '&lname1=' + lname + '&Email1=' + Email + '&Permemail=' + Permemail+ '&Gradterm1=' + Gradterm + '&Admitterm1=' + Admitterm + '&TermGPA1=' + TermGPA + '&cumGPA1=' + cumGPA + '&progressunits1=' + progressunits + '&cumunits1=' + cumunits + '&Additional=' + cumunits;
              if (inputAdditional == '' ) {
                    alert("Please Fill in some comments");
                    } else {
                    // AJAX code to submit form.
                    $.ajax({
                    type: "POST",
                    url: "form.php",
                    data: dataString,
                    cache: false,
                    success: function(html) {
                    alert(html);
                    }
                    });
                    }
                    return false;
                    }
          
          
          </script>
          
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>

    
</body>

</html>