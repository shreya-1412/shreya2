<?php






if($_SERVER["REQUEST_METHOD"] == "POST"){      
$db = mysqli_connect('localhost', 'root', '', 'shreya2');
        
    
       $email = ($_POST['email']);
    
    
     // Check whether this username exists
    $existSql = "SELECT * FROM `users` WHERE email = '$email'";
    $result = mysqli_query($db, $existSql);
    $numExistRows = mysqli_num_rows($result);

    // Check Whether email already exists;
    $existSql1 = "SELECT * FROM `users` WHERE email = '$email'";
    $result1 = mysqli_query($db, $existSql1);
    $numExistRows1 = mysqli_num_rows($result1);
    $row = mysqli_fetch_array($result1, MYSQLI_ASSOC);


    if($numExistRows ){
        
    
                $userdata=mysqli_fetch_array($result);
                $name =$userdata['name'];   
                $token=$userdata['token'];
                    
                
        
                            #$sql = "INSERT INTO `users` ( `email`, `dt`) VALUES ( ', '$email', current_timestamp())";
                            #echo $sql;
                            
                            $to_email = "$email";
                            $subject = "Password Reset $name";
                            $body = "Congratulation $name, Reset Your Password
                            http://localhost/form/reset_password.php?token=$token";
                            $headers = "From: shreayuu@gmail.com";
                            #echo $sql;                                    
                            if (mail($to_email, $subject, $body, $headers)) {
                              echo "Email successfully sent to $to_email...";
                            } else {
                                echo "Email sending failed...";
                            }
                        }
                    }
                
            else{
                echo "No Email found";
            }
            
        


?>  

        
<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">


<style>
        .error {color: #FF0000;}
</style>

<script>  
        function validation()  
        {  
        
            var ps=document.f1.password.value;  
            var em=document.f1.exampleInputEmail1.value;  
            if(id.length=="" && ps.length=="" && em.length == "") {  
                alert("User Name, Email and Password fields are empty");  
                return false;  
            }  
            else  
            {  
                
                if(em.length == ""){
                    alert("Email field is empty");
                    return false;
                }   
                if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                }
                  
                                    
        }  
    </script>
    


<form action = "forgot1.php" method = "post" class = "mt-2" name = 'f1' onsubmit = "return validation()">
<center> <strong style = " font-size :30px">Recover Your Account</strong></center>
    <label for="exampleInputEmail1" class="form-label">Email address<span class = "error">*</span></label>
    <input type="text" class="form-control" name = "email">
    <button name="submit">submit</button>
  </form>  <!--  if Email is invalid-->
   