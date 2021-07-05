<?php
 
 session_start();
 
 if(isset($_POST['submit']))
 {
    $username=$_SESSION['username'];
    $db = mysqli_connect('localhost', 'root', '', 'shreya2');
    $name=$_POST['name'];
    $mobilenumber=$_POST['mobilenumber'];
    $address=$_POST['address'];

    $select= "SELECT * from users where username='$username'";
    $sql = mysqli_query($db,$select);
    $row = mysqli_fetch_assoc($sql);
    $res= $row['username'];
    if($res === $username)
    {
   
       $update = "UPDATE users SET name='$name', mobilenumber='$mobilenumber', address='$address' where username='$username'";
       $sql2=mysqli_query($db,$update);
       if($sql2)
       { 
           /*Successful*/
           header('location:profile.php');
       }
       else
       {
           /*sorry your profile is not update*/
           header('location:Profile_edit_form.php');
       }
    }
    else
    {
        /*sorry your id is not match*/
        header('location:Profile_edit_form.php');
    }
 }
?>


    
   <!DOCTYPE html>
<html>
<head>
    <title>
        profile
    </title>
    <link rel="stylesheet" type="text/css"
                    href="style.css">
</head>
 
<body>
    <div class="header">
        <h2>PROFILE</h2>
    </div>
      
    <form method="post" action="profile_edit_form.php">
        <div class="input-group">
            <label> name:</label>
            <input type="text" name="name">
               
        </div>
        <div class="input-group">
            <label>Mobile Number</label>
            <input type="number" name="mobilenumber">
                
        </div>

        <div class="input-group">
            <label>Enter address</label>
            <input type="text" name="address">
                
        </div>
        <div class="input-group">
            <input type="submit" name="submit">
         </div>
      </form>
         <button class="button" onclick='location.href="login.php"' style= "cursor: pointer;
    padding: 12px;
    font-size: 16px;
    color: white;
    background: #23585a;
    border: none;
    border-radius: 10px;"

    >cancel</button>