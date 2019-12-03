<?php
if (isset ($_POST['submit'])){
    require 'dbh.php';
    
    $email = $_POST['mail'];
    $password = $_POST['pwd'];
    $passwordrepeat = $_POST['pwd-repeat'];
    
    
    /*if (empty ($username) || ($email)||($password)||($passwordrepeat)||($usertype)){
        header("Location: signup.php?error=emptyfields&uid=".$username."&mail=".$email);
        exit();
    }
    
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("Location: signup.php?error=Invalidemail&uid=".$username);
        exit();
        
        
    }*/
    
    if($password !== $passwordrepeat){
        header("Location: signup.php?error=passwordcheck&uid=".$username."&mail=".$email);
        exit();
        
    }
    
    else{
        //checking if email exists in database
        $sql = "SELECT username FROM loginsystem WHERE email=?";
        //Using prepared statements as a safety precaution
        
        //initializing stmt variable
        
        $stmt = mysqli_stmt_init($con);
        
        //Checking if the specific sql statement can be prepared and if it works with the connection
        
        if(!mysqli_stmt_prepare($stmt,$sql)){ //if the connection and stmt failed
            header("Location: signup.php?error=sqlerror");
        exit();
            
        }
        
        else{
            //Now take info that user gave and run it against the sql statement 
            
            //Bind parameters from the user to the sql statement given above and specifing the datatype that is being passed to the statement
            
            //As only the email variable is being checked there is only one s in the parameter binding funtion below and we are telling it how many strings are being passed to the SQL statement 
            
            //inserting the email that the user gave into the below funtion
            
            mysqli_stmt_bind_param($stmt,"s",$email);
            
            //Now we need to execute data from the user to the SQL statement above
            mysqli_stmt_execute($stmt);
            
            //gets result from the database and stores it in the variable called stmt
            mysqli_stmt_store_result($stmt);
            
            //check how many results we have in the variable called stmt
            $resultcheck = mysqli_stmt_num_rows($stmt);
            if($resultcheck == 0){
                header("Location: signup.php?error=emailNotFound");
                exit();
            }
            else{
                //sql statement updates the row 
                $sql = "UPDATE loginsystem SET password =? where email=?";
                $stmt = mysqli_stmt_init($con);
                if(!mysqli_stmt_prepare($stmt,$sql)){
                    header("Location: signup.php?error=sqlerror");
                exit();
            }
                else{
                //hashing using B-crypt the password before inserting it in the database
                    $hashpassword = password_hash($password, PASSWORD_DEFAULT);
                    
                //inserting hashed password and email user gave into the SQL statement above
                    mysqli_stmt_bind_param($stmt,"ss",$hashpassword, $email);
                    mysqli_stmt_execute($stmt);
                    header("Location: login.php?PasswordChange=Success");
                    exit();
                    
                }
        }
            
    }
        
}
}

?>