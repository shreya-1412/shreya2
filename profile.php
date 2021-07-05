
<?php 
include"server.php"; 
    
    if(isset($_SESSION['user_login']))?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pofile</title>
    <style type="text/css">
        .wrapper
        {
            width: 500px;
            margin: 0 auto;
            color: black ;
            border: blue;
        }
    </style>
</head>
<body style="background-color: skyblue;">
    <div class="wrapper">
        <form action="" method="post">
            
        </form>
        <div class="wrapper">
            <?php
               $q=mysqli_query($db,"SELECT* FROM users WHERE username='$_SESSION[username]' ;");
            ?>
            <div class="header" style="
   
    color: white;
    background: #5F9EA0;
    text-align: center;
    
    border-bottom: none;
   
    padding: 10px;
    width: 300px;
    margin: 0 auto";
?>

            <h2 >MY PROFILE</h2></div>
            <?php
               $row=mysqli_fetch_assoc($q);
            ?>
            <div class= "input-group"><br><br>
            <?php
                echo"<b>";
                echo"<table>";
                   echo "<tr>";
                      echo"<td>";
                          echo "<b> Username: </b>";
                      echo"</td>";
                       echo"<td>";
                          echo $row['username'];
                      echo"</td>";
                    echo"</tr>";

                echo"<b>";
                echo"<table>";
                   echo "<tr>";
                      echo"<td>";
                          echo "<b> Name: </b>";
                      echo"</td>";
                       echo"<td>";
                          echo $row['name'];
                      echo"</td>";
                    echo"</tr>";
                    echo"</b>";

                 echo"<b>";
                 echo"<table>";
                    echo"<tr>";
                       echo"<td>";
                          echo "<b> Email: </b>";
                      echo"</td>";
                       echo"<td>";
                          echo $row['email'];
                      echo"</td>";
                    echo"</tr>";
                echo"</table>";
                echo"</b>";

                echo"<b>";
                echo"<table>";
                    echo"<tr>";
                       echo"<td>";
                          echo "<b> Mobile Number: </b>";
                      echo"</td>";
                       echo"<td>";
                          echo $row['mobilenumber'];
                      echo"</td>";
                    echo"</tr>";
                echo"</table>";
                echo"</b>";

                echo"<b>";
                echo"<table>";
                    echo"<tr>";
                       echo"<td>";
                          echo "<b> Address: </b>";
                      echo"</td>";
                       echo"<td>";
                          echo $row['address'];
                      echo"</td>";
                    echo"</tr>";
                echo"</table>";
                echo"</b>";

            ?>
        </div>
        <br><br>
        <button class="button" onclick='location.href="profile_edit_form.php"' style= "cursor: pointer;
    padding: 12px;
    font-size: 16px;
    color: white;
    background: #23585a;
    border: none;
    border-radius: 10px;"

    >Edit</button>
     <button class="button" onclick='location.href="login.php"' style= "cursor: pointer;
    padding: 12px;
    font-size: 16px;
    color: white;
    background: #23585a;
    border: none;
    border-radius: 10px;"

    >cancel</button>
        </div>
    </div>
    <button class="button" onclick='location.href="change_email.php"' style= "cursor: pointer;
    padding: 12px;
    font-size: 16px;
    color: white;
    background: #23585a;
    border: none;
    border-radius: 10px;"

    >change emailid</button>
        </div>
    </div>

</body>
</html>
?>

            