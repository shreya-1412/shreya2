<?php

    session_start();


    
    
        $username = $_SESSION['username'];
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            
            
            $db = mysqli_connect('localhost', 'root', '', 'shreya2');
            
            //to prevent from mysqli injection
            function safe($db,$data){  
                $username = stripcslashes($data);                
                $data = htmlspecialchars($data);
                $username = mysqli_real_escape_string($db, $data);  
                return $data;  
            }

            $opassword = safe($db, $_POST['opassword']);
            $npassword = safe($db, $_POST['npassword']);
            $cpassword = safe($db, $_POST['cpassword']);

            $sql = "SELECT * from users WHERE username = '$username'";
            $result = mysqli_query($db, $sql);  
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
            $num = mysqli_num_rows($result);

            if(md5($opassword) == $row['password']){
                
                if($npassword == $cpassword){
                    
                    if($npassword == ""){
                        $matchErr = "New Password should not be empty....";
                    }
                    else{
                        $encrypted = md5($npassword);
                        $sql = "UPDATE `users` SET password = '$encrypted' WHERE username = '$username'";
                        #$sql = "UPDATE `user` SET `password` = '$npassword' WHERE `username` = '$username';";
                        $result = mysqli_query($db, $sql);
                        if($result){
                         echo "your Password updated";
                        }
                    }
                }
                else{
                    echo "Password do not match....";
                }
            }
            else{
                echo "Please enter correct password...";
            }

        }

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

        <title>Dashboard</title>
        <style>
            .error {color: red;}
    </style>
    </head>
    <body>
            <div class="container">
            <?php echo "<h1><center>Change your Password <br> For user: $username </center></h1>"; ?>
            <?php #echo "email = "?>
            <form action = "change_password.php" method = "post" class = "mt-2">
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Old Password<span class = "error">*</span></label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name = "opassword">
                   
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">New Password<span class = "error">*</span></label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name = "npassword">
                   
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name = "cpassword">
                </div>
                <button type="submit" class="btn btn-success">Update passwod</button>
            </form>
             
            <a href ="login.php">cancel</a>
        </div>

    </body>
</html>