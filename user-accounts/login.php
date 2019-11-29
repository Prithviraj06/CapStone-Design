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
    
    <body id="ifldasb2">
        <?php include(INCLUDE_PATH . "/layouts/navbar.php") ?>
        <br><br><center><img src="assets/img/Santa_Clara_U_Seal.svg.png" alt="SCU Capstone Administration System" width="200" height="200" /></center>
        <br><br>
        <h1><center><strong>Capstone Administration System Login </strong></center></h1>
        <br><br>
    <table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
            <tr>
            <form name="form1" method="post" action="login2.php">
                <td>
                <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
                <tr>
                <td width="78">Username</td>
                <td width="6">:</td>
                <td width="294"><input name="uid" type="text" id="uid" required></td>
                </tr>
                <tr>
                <td>Password</td>
                <td>:</td>
                <td><input name="pwd" type="password" id="pwd" required></td>
                </tr>
                <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td><input type="submit" name="login-submit" value="Login"></td>
                </tr>
                </table>
                </td>
            </form>
        </tr>
    </table>
        <?php include(INCLUDE_PATH . "/layouts/footer.php") ?>
<script type="text/javascript" src="assets/js/display_profile_image.js"></script>

