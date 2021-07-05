<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
            $db = mysqli_connect('localhost', 'root', '', 'shreya2');
            if(isset($_POST['submit'])){
                $email = mysqli_real_escape_string($db, $_POST['email']);

                $emailsql = "SELECT * FROM `users` WHERE email='$email'";
                $query = mysqli_query($db, $emailsql);

                $emailcount = mysqli_num_rows($query);

                if($emailcount){
                    $userdata = mysqli_fetch_assoc($query);
                    $name = $userdata['name'];
                    $token = $userdata['token'];

                    $subject = "Think Reset Password";
                    $body = "Dear $name,

    This email is sent to reset your password that you have
    provided for your Think Exam login. Your Social login, in combination
    with an active Social subscription, provides you with access to
    systems management capabilities through Think Exam.

    To ensure the security of the account information associated with your
    Social login, please take a moment to click through the link below
    and verify that we have the correct email address.

    To reset your password, please visit the following URL:

    http://localhost/form/reset_password.php?token=$token

    Thank you for using Social.

    Account Information:
        Your name:         $name
        Your email address: $email";
                $senders_email = "From: shreayuu@gmail.com";
            
                    if(mail('shreya.paliwal@gingerwebs.co.in', $subject, $body, $senders_email)){
                        $_SESSION['msg'] = "Check your mail to reset your password";
                        header("location:login.php");
                    }
                    else{
                        $err = "email sending failed";
                    }
            }
            else {
                $err = "No email found";
            }
    }


    ?>
        
        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" style="border:1px solid #ccc">
            <div class="container">
                <h1>Recover Account</h1>
                <p>Please fill in this form to reset password.</p>

                <!-- error msg -->
                <p style=background-color:red;><?php 
                    if(isset($err)){
                        echo $err;
                    }
                ?>
                </p>
                <hr>

                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Enter Email" name="email" >


                <div class="clearfix">
                    <button type="submit" name="submit" class="signupbtn">Send Email</button>
                </div>
                <p>Have an account? <a href='login.php'>Login</a></p>
        </div>
        </form>

    </body>
</html>

