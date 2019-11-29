<?php
if (isset ($_POST['signup'])){
    require 'dbh.php';
    
    $username = $_POST['uid'];
    $email = $_POST['mail'];
    $password = $_POST['pwd'];
    $passwordrepeat = $_POST['pwd-repeat'];
    $usertype = $_POST['usertype'];
    
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
        $sql = "SELECT username FROM loginsystem WHERE username=?";
        $stmt = mysqli_stmt_init($con);
        if(!mysqli_stmt_prepare($stmt,$sql)){
            header("Location: signup.php?error=sqlerror");
        exit();
            
        }
        
        else{
            mysqli_stmt_bind_param($stmt,"s",$username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultcheck = mysqli_stmt_num_rows($stmt);
            if($resultcheck > 0){
                header("Location: signup.php?error=usernametaken");
                exit();
            }
            else{
                $sql = "INSERT INTO loginsystem(username,email,password,type) VALUES (?,?,?,?)";
                $stmt = mysqli_stmt_init($con);
                if(!mysqli_stmt_prepare($stmt,$sql)){
                    header("Location: signup.php?error=sqlerror");
                exit();
            }
                else{
                    
                    $hashpassword = password_hash($password, PASSWORD_DEFAULT);
                    
                    mysqli_stmt_bind_param($stmt,"ssss",$username,$email,$hashpassword,$usertype);
                    mysqli_stmt_execute($stmt);
                    header("Location: signup.php?signup=Success");
                    exit();
                    
                }
        }
            
    }
    
    
}
}

?>