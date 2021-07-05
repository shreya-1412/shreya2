<?php

if(isset($_POST['pass'])){
$pass = $_POST['pass'];
$token=$_POST['token'];

$db = mysqli_connect('localhost', 'root', '', 'shreya2');
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$query = mysqli_query($db,"SELECT* from users where  token='$token'")
or die(mysqli_error($db)); 

if (mysqli_num_rows ($query)==1) 
{
$query3 = mysqli_query($db, "UPDATE `users` SET `password` = '$password' WHERE `token` = '$token'")
or die(mysqli_error($db)); 

echo 'Password Changed';
}
else
{
echo 'Wrong CODE';
}
}
?>

<form action="resetpass.php" method="POST">
<p>New Password:</p><input type="password" name="pass" />
<input type="submit"  name="submit" value="Signup!" />
<input type="hidden" name="token" value="<?php echo $_GET['token'];?>" />
</form>