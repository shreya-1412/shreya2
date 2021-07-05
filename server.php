
<?php
 
// Starting the session, necessary
// for using session variables
session_start();
  
// Declaring and hoisting the variables
$username = "";
$name ="";
$email = "";
$mobilenumber ="";
$address ="";
$errors = array();
$_SESSION['success'] = "";
  
// DBMS connection code -> hostname,
// username, password, database name
$db = mysqli_connect('localhost', 'root', '', 'shreya2');
  
// Registration code
if (isset($_POST['reg_user'])) {
  
    // Receiving the values entered and storing
    // in the variables
    // Data sanitization is done to prevent
    // SQL injections
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $mobilenumber = mysqli_real_escape_string($db, $_POST['mobilenumber']);
    $address = mysqli_real_escape_string($db, $_POST['address']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
    $token=mysqli_real_escape_string($db,$_POST['token']);
    $status=mysqli_real_escape_string($db,$_POST['status']);
    $status = 'inactive';

    $token =bin2hex( random_bytes(15));
  
    // Ensuring that the user has not left any input field blank
    // error messages will be displayed for every blank input
    if (empty($username)) { array_push($errors, "Username is required"); }
    if (empty($name)) { array_push($errors, "name is required"); }
    if (empty($email)) { array_push($errors, "Email is required"); }
    if (empty($mobilenumber)) { array_push($errors, "Number is required"); }
    if (empty($address)) { array_push($errors, "address is required"); }
    if (empty($password_1)) { array_push($errors, "Password is required"); }

    $emailquery ="SELECT * from users WHERE email='$email'";
    $result=mysqli_query($db,$emailquery);

    $emailcount = mysqli_num_rows($result);

    if ($emailcount>0) {
        echo "email already exists";
        // code...
    }else{
  
          if ($password_1 != $password_2) {
            array_push($errors, "The two passwords do not match");
        // Checking if the passwords match
         }
        }
  
    // If the form is error free, then register the user
    if (count($errors) == 0) {
         
        // Password encryption to increase data security
        $password = md5($password_1);
         
        // Inserting data into table
        $sql = "INSERT INTO users (username, name, email, mobilenumber, address, password, token, status)
                  VALUES('$username','$name', '$email','$mobilenumber','$address','$password' , '$token', 'inactive')";
                  $result = mysqli_query($db, $sql);
                    $to_email = "$email";
                    $subject = "Account Created $username";
                    $body = "Congratulation $username, Your account has been created
                     http://localhost/form/activate.php?token=$token";
                     $headers = "From: shreayuu@gmail.com.com";
                                #echo $sql;                                    
                    if (mail($to_email, $subject, $body, $headers)) {
                        $sendmail = "Email successfully sent to $to_email...";
                        } else {
                        $sendmail = "Email sending failed...";
                                }
                            }
    else{
        $result = false;
    }
        // Storing username of the logged in user,
        // in the session variable
    $_SESSION['username'] = $username;
         
        // Welcome message
    $_SESSION['success'] = "You have logged in";
         
        // Page on which the user will be
        // redirected after logging in
    header('location: welcome.php');
    }
  
// User login
if (isset($_POST['username'])) {
     
    // Data sanitization to prevent SQL injection
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
  
    // Error message if the input field is left blank
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
  
    // Checking for the errors
    if (count($errors) == 0) {
         
        // Password matching
        $password = md5($password);
         
        $query = "SELECT * FROM `users` WHERE `username`=
                '$username' AND `password`='$password'";
        $results = mysqli_query($db, $query);
  
        // $results = 1 means that one user with the
        // entered username exists
        if (mysqli_num_rows($results) == 1) {
             
            // Storing username in session variable
            $_SESSION['username'] = $username;
             
            // Welcome message
            $_SESSION['success'] = "You have logged in!";
             
            // Page on which the user is sent
            // to after logging in
            header('location: welcome.php');
        }
        else {
             
            // If the username and password doesn't match
            array_push($errors, "Username or password incorrect");
        }
    }

}
?>