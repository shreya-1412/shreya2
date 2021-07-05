<?php

    session_start();
    
    $token = $_GET['token'];

    $db = mysqli_connect('localhost', 'root', '', 'registration');
    
    
    $sql = "SELECT* from `users` WHERE  token= '$token' and status = 'active'";
    $result1 = mysqli_query($db, $sql);
    $num = mysqli_num_rows($result1);

    if($num == 1 ){
        $_SESSION['msg'] = 'your account is already activated';
        header("location: login.php");
    }    
    else{

            $sql = "UPDATE `users` set `status` = 'active' where `token` = '$token'";
            $result2 = mysqli_query($db, $sql);
            $row = mysqli_fetch_assoc($result2);
            $email = $row['email'];


            if($result2){
                $_SESSION['msg'] = 'account created successfully ';
                header("location: login.php");
            }
            else{
                $_SESSION['start'] = true;
                $_SESSION['msg'] = 'account not created ';
                header("location: login.php");
            }
    }