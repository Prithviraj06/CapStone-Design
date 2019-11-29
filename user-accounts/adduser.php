<?php include('config.php'); ?>
<html>
    <head>
    <meta charset="utf-8">
  <title>Welcome Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <!-- Bootstrap CSS -->
    <script src="jquery.min.js"></script>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        
  <!-- Custom styles -->
        
  <link rel="stylesheet" href="assets/css/style.css">

    </head>
    <body>
        <?php include (INCLUDE_PATH . "/layouts/navbarAdmin.php") ?>
        
        <h1>Add a new User</h1>
        
            <form action="userSignup.php" method="post">
                   <div class="form-row">
                          <div class="form-group col-md-6">
                          <label for="uid">User Name</label>
                          <input type="text" class="form-control" id="uid" name="uid" placeholder="Username"  required>
                        </div>

                          <div class="form-group col-md-6">
                          <label for="mail">Email</label>
                          <input type="text" class="form-control" id="mail" name="mail" placeholder="E-mail" required>
                          </div>

                        <div class="form-group col-md-6">
                          <label for="pwd">Password</label>
                          <input type="Password" class="form-control" name="pwd" id="pwd" placeholder="Password" required>
                        </div>

                        <div class="form-group col-md-6">
                          <label for="pwd-repeat">Re-type Password</label>
                          <input type="Password" class="form-control" name="pwd-repeat" id="pwd-repeat" placeholder="Re-type Password" required>
                        </div>
                       
                       <div class="form-group col-md-6">
                          <label for="usertype">Type: User</label>
                          <input type="radio" class="form-control" value="User" name="usertype" id="usertype" required>
                        </div>
                       
                       <div class="form-group col-md-6">
                          <label for="usertype">Type: Admin</label>
                          <input type="radio" class="form-control" value="Admin" name="usertype" id="usertype" required>
                        </div>


                        <button id="submit" type="submit" name = "signup" class="btn btn-primary" >Add</button>
           
                       <?php //header("Location: welcomeadmin.php?NewUserAdded");  ?>       
                       
        <?php include(INCLUDE_PATH . "/layouts/footer.php") ?>
        <script type="text/javascript" src="assets/js/display_profile_image.js"></script>
                       
                       
                       

        