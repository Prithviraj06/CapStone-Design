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
        
        
        <?php
        if(isset($_SESSION['username'])){?>
            <H2>Welcome <?=$_SESSION['username']?></H2> 
        
      <?php } ?>
        
        <?php
        function isLoggedIn()
            {
            if (isset($_SESSION['username'])) {
                return true;
            }else{
                return false;
            }
            }
        
        if (!isLoggedIn()) {
                $_SESSION['msg'] = "You must log in first";
                echo $_SESSION['msg'];
                header('location: login.php');
                        }       
        
        
        
        
        ?>
        
        
        <?php include (INCLUDE_PATH . "/layouts/footer.php") ?>
        <script type="text/javascript" src="assets/js/display_profile_image.js"></script>