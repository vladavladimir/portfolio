<?php

if (isset($_POST['signup-submit'])){

    require '../dbconn/dbh.inc.php';

    $username=$_POST['uid'];
    $email=$_POST['mail'];
    $password=$_POST['pwd'];
    $passwordRepeat=$_POST['pwd-repeat'];

    if (empty($username) || empty($email) || empty($password) || empty($passwordRepeat)){

        header("Location: ../function/signup.php?error=emptyfields&uid=".$username."&mail=".$email);
        exit();
    }
    elseif (!filter_var($email,FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/",$username)){

        header("Location: ../function/signup.php?error=invalidmailuid");
        exit();

    }

    elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)){


        header("Location: ../function/signup.php?error=invalidmail&uid=".$username);
        exit();
    }

    elseif (!preg_match("/^[a-zA-Z0-9]*$/",$username)){

        header("Location: ../function/signup.php?error=invaliduid&mail=".$email);
        exit();
    }

    elseif ($password !== $passwordRepeat){

        header("Location: ../function/signup.php?error=passwordcheck&uid=".$username."&mail=".$email);
        exit();

    }
    else{

        $sql = "SELECT uidUsers FROM users WHERE uidUsers=?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt,$sql)){
            header("Location: ../function/signup.php?error=sqlerror");
            exit();
        }

        else{

        mysqli_stmt_bind_param($stmt,"s",$username);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $resultCheck = mysqli_stmt_num_rows($stmt);

        if ($resultCheck > 0){
            header("Location: ../function/signup.php?error=usertaken&mail=".$email);
            exit();
        }

        else{

            $sql = "INSERT INTO users (uidUsers,emailUsers,pwdUsers) VALUES (?,?,?)";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt,$sql)){

                header("Location: ../function/signup.php?error=sqlerror");
                exit();

            }
            else{

                $hashedPwd = password_hash($password,PASSWORD_DEFAULT);
                mysqli_stmt_bind_param($stmt,"sss",$username,$email,$hashedPwd);
                mysqli_stmt_execute($stmt);
                header("Location: ../function/signup.php?signup=succes");
                exit();

            }
        }

        }

    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);

    }

else{

    header("Location: ../function/signup.php");
    exit();

}