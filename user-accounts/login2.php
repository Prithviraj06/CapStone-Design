<?php

if(isset($_POST['login-submit'])){
    
    require 'dbh.php'; //connecting to db
    $mailuid = $_POST['uid'];
    $password = $_POST['pwd'];
    
    //Checking if the fields are empty and redirecting the user to the login page with error message
    
    if(empty($mailuid) || empty($password)){
        header("Location: login.php?error=emptyfields");
        exit();
        
    }
    else{
        //checking the database to see if the username exists or not
        $sql = "SELECT * FROM loginsystem WHERE username=? OR email=?;";
            
        //using prepared statements for security and preventing SQL injection
        
        //initialize a new statement
        $stmt = mysqli_stmt_init($con);
        
        if(!mysqli_stmt_prepare($stmt,$sql)){
            header("Location: login.php?error=sqlerror");
            exit();
            
        }
        else{
            
        //we want to grab the information that is given by the SQL statement
        //we pass in the parameters from the user which was given during login into the db
            
            mysqli_stmt_bind_param($stmt,"ss",$mailuid,$mailuid);
            
            //executing the statement that was binded to id and password
            
            mysqli_stmt_execute($stmt);
            
            //now we can get the results and store them in variables for processing
            
            $result = mysqli_stmt_get_result($stmt);
            
            //now checking if we got any result from the database
            if($row = mysqli_fetch_assoc($result)){
                
                //hashing the password user entered and matching with db hashed password
                
                $pwdcheck = password_verify($password, $row['password']);
                
                if($pwdcheck == false){
                    header("Location: login.php?error=incorrectpassword");
                    exit();
                }
                elseif($pwdcheck == true){
                    session_start();
                    $_SESSION['userId']= $row['userid'];
                    $_SESSION['username']= $row['username'];
                    
                    //checking for type of user
                    $usertype = $row['type'];
                    if($usertype == 'Admin' || $usertype == 'admin'){
                        //redirecting Admin to Admin page with all the links
                        
                        header("Location: welcomeadmin.php?welcomeAdmin");
                        exit();   
                    }
                    elseif($usertype == 'User' || $usertype == 'user'){
                        //redirecting users to page with only 2 links project and faculty
                        
                        header("Location: welcomeuser.php?WelcomeUser");
                        exit();
                    }
                    else{
                         header("Location: login.php?pleaseSignup");
                        exit();
                        
                    }
                    
                    
                    
                }
                else{
                    header("Location: login.php?error=incorrectpassword");
                    exit();
                    
                }
                
            }
            else{
                header("Location: login.php?error=nouser");
                exit();
            }
        }
        
    }
    
    
    
    
}
else{
    header("Location: login.php");
    exit();
    
}


?>