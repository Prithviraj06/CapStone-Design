<?php include('config.php'); ?>
<?php //require "header.php"; ?>
<?php //include(INCLUDE_PATH . '/logic/userSignup.php'); ?>

<html>
    <head>
    <meta charset="utf-8">
  <title>UserAccounts - Sign up</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
  <!-- Custom styles -->
  <link rel="stylesheet" href="assets/css/style.css">

    </head>
    <body>
        <?php include(INCLUDE_PATH . "/layouts/navbar.php") ?>
        <div id="signup">
                                <h1>Sign Up</h1>
        
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


                        <button id="submit" type="submit" name = "signup" class="btn btn-primary" >Signup</button>
                        </div>
            
                <p>Aready have an account? <a href="login.php">Sign in</a></p>
               <!-- <select name="usertype">
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                </select> -->

                

                


            </form>
    </div>
    <?php include(INCLUDE_PATH . "/layouts/footer.php") ?>
<script type="text/javascript" src="assets/js/display_profile_image.js"></script>

